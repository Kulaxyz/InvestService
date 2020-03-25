<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\User;
use App\Withdrawal;
use Backpack\Settings\app\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        // TODO: add deposit logic

        return view('index');
    }

    public function depositList()
    {
        $deposits = auth()->user()->deposits->reverse();
        $deposited = 0;
        $active = 0;
        foreach ($deposits as $deposit)
        {
            if ($deposit->status != 2) {//REJECTED
                $deposited += $deposit->start_amount;
                if ($deposit->status == 1) {
                    $active += $deposit->start_amount;
                }
            }
            if ($this->refillableDeposit($deposit)) {
                $deposit->refillable = true;
            } else {
                $deposit = $this->addRefillableTime($deposit);
            }
        }
        $withdrawn = 0;
        foreach (auth()->user()->withdrawals as $withdrawal) {
            if ($withdrawal->status == 1)
            {
                $withdrawn += $withdrawal->amount;
            }
        }

        return view('depositList', compact('deposited', 'active', 'withdrawn', 'deposits'));
    }

    public function payment()
    {
        return view('payment');
    }

    public function withdrawal()
    {
        return view('withdrawal');
    }

    public function withdrawalHistory()
    {
        return view('withdrawalHistory', ['withdrawals' => auth()->user()->withdrawals->reverse()]);
    }

    public function referrals()
    {
        $refs = User::where('referred_by', auth()->id())->get();
        $i=0;
        foreach ($refs as $ref) {
            $i++;
            $total = 0;
            foreach ($ref->deposits as $deposit) {
                if ($deposit->status != 0 && $deposit->status != 2) {
                    $total += $deposit->start_amount;
                    $ref->deposited = $total;
                }
            }
        }

        return view('referrals', ['refs' => $refs, 'affs' => $i]);
    }

    public function deposit(Request $request)
    {
        $user = auth()->user();
        $amount = $request->post('amount');
        if ($amount > $user->balance) {
            return response(trans('custom.not_enough'), 400);
        }

        $user->balance -= $amount;
        $user->save();

        $deposit = new Deposit;
        $deposit->amount = $amount;
        $deposit->start_amount = $amount;
        $deposit->profit = Setting::get('deposit_' . $request->post('type'));

        if ($deposit->amount >= 20000) {
            $deposit->profit += 2;
        } elseif($deposit->amount >= 10000) {
            $deposit->profit += 1.5;
        } elseif($deposit->amount >= 5000) {
            $deposit->profit += 1;
        } elseif($deposit->amount >= 2000) {
            $deposit->profit += 0.5;
        }

        $deposit->capitalization = null != $request->post('capitalization');
        $deposit->user_id = $user->id;
        $deposit->user()->associate($user);

        $deposit->save();
        if ($user->referred_by && (count($user->deposits) == 1)) {
            $bonus = $amount * (Setting::get('ref_bonus') / 100);
            $ref = User::findOrFail($user->referred_by);
            $ref->ref_bonus += $bonus;
            $ref->balance += $bonus;
            $ref->save();
        }
        return response([
            'info' => trans('custom.smth_created', ['amount' => $amount, 'entity' => trans_choice('deposit',1)]),
            'list' => trans('custom.list_view', ['entity' => trans_choice('deposit',1)])
        ], 200);
    }

    public function withdrawalMake(Request $request)
    {
//        dd($request->all());
        if (!$request->ajax()) {
            exit('Hacking attempt!');
        }
        $user = auth()->user();
        $amount = $request->post('amount');
        if ($amount > $user->balance) {
            return response(trans('custom.not_enough'), 400);
        }
        switch ($request->post('type')) {
            case 1:
                $method ='Visa/MasterCard';
                break;
            case 2:
                $method = 'YandexMoney';
                break;
            case 3:
                $method = 'Qiwi';
                break;
        }
        $withdrawal = new Withdrawal;
        $withdrawal->amount = $amount;
        $withdrawal->status = 0; //WAITING
        $withdrawal->payment_details = $request->post('card_number');
        $withdrawal->payment_method = $method;
        $withdrawal->user()->associate($user);
        $withdrawal->save();

        $user->balance -= $withdrawal->amount;
        $user->save();

        return response([
            'info' => trans('custom.smth_created', ['amount' => $amount, 'entity' => trans_choice('withdrawal',1)]),
            'list' => trans('custom.list_view', ['entity' => trans_choice('withdrawal',1)])
        ], 200);
    }

    public function refill(Request $request)
    {
        if (!$request->ajax()) {
            exit('Hacking attempt!');
        }
        $user = auth()->user();
        $amount = $request->post('amount');

        if ($amount > $user->balance) {
            return response(trans('custom.not_enough'), 400);
        }

        if ($request->post('deposit_num') == null) {
            return response(trans('custom.error'), 400);
        }

        $deposit = Deposit::findOrFail($request->post('deposit_num'));

        if (!$this->refillableDeposit($deposit)) {
            return response(trans('custom.unrefillable'), 400);
        }

        $deposit->start_amount += $amount;
        $deposit->amount += $amount;
        $deposit->save();

        $user->balance -= $amount;
        $user->save();

        return response([
            'info' => trans('custom.success_refill', ['amount' => $amount]),
            'list' => trans('custom.list_view', ['entity' => trans_choice('deposit',1)])
        ], 200);

    }

    private function refillableDeposit($deposit) : bool
    {
        return $deposit->status == 1 &&
               $deposit->starts_at->diffInDays(Carbon::now()) != 0 &&
               $deposit->starts_at->diffInDays(Carbon::now()->subDay()) % 31 == 0;
    }

    private function addRefillableTime($deposit) : Deposit
    {
        if ($deposit->status == 1 &&
            $deposit->finish_at->startOfDay()->diffInDays(Carbon::now()->startOfDay()) > 29
        ) {
            $date = $deposit->starts_at->addDays(32);
            while ($date->lt(Carbon::now())) {
                $date->addDays(31);
            }
            $deposit->refill_time = $date->diffForHumans();
        } else {
                $deposit->refill_time = trans('custom.unavailable');
        }

        return $deposit;
    }
}
