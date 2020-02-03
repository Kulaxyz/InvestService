<?php

namespace App\Http\Controllers;

use App\Charts\MonthStatistic;
use App\Deposit;
use App\Payment;
use App\User;
use App\Withdrawal;
use Backpack\Settings\app\Models\Setting;
use Carbon\Carbon;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_;
use \ConsoleTVs\Charts\Facades\Charts;

class AdminController extends Controller
{
    public function dashboard()
    {
        $payments = Payment::where('status', 1)->get();
        $withdrawals = Withdrawal::all();
        $withdrawn = 0;
        $unwithdrawn = 0;
        $registered = User::count();
        $depostits = Deposit::all();
        $invested = 0;

        foreach ($payments as $payment) {
            $invested += $payment->amount;
        }
        foreach ($withdrawals as $withdrawal) {
            if ($withdrawal->status) {
                $withdrawn += $withdrawal->amount;
            } else {
                $unwithdrawn += $withdrawal->amount;
            }
        }

        $types = [1 => new Object_(), 3 => new Object_(), 6 => new Object_()];

        foreach ($types as $type) {
            $type->amount = 0;
            $type->active = 0;
            $type->count = 0;
        }
        $deposited = 0;
        foreach ($depostits as $deposit) {
            if ($deposit->status != 2) {//REJECTED
                $deposited += $deposit->amount;
            }
            $i = $deposit->months();

            $types[$i]->amount += $deposit->amount;
            $types[$i]->count++;
            if ($deposit->status == 1) {
                $types[$i]->active += $deposit->amount;
            }
        }

        $chart = new MonthStatistic;
        $moneyChart = new MonthStatistic;
        $typesChart = new MonthStatistic;
        $typesAmountChart = new MonthStatistic;
        $chart->labels = ['Январь', 'Февраль', 'Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь', 'Декабрь'];
        $moneyChart->labels = ['Январь', 'Февраль', 'Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь', 'Декабрь'];
        $typesChart->labels = ['Январь', 'Февраль', 'Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь', 'Декабрь'];
        $typesAmountChart->labels = ['Январь', 'Февраль', 'Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь', 'Декабрь'];

        $usersData = [];
        $depositData = [];
        $depositAmountData = [];
        $paymentsData = [];
        $paymentsAmountData = [];
        $withdrawalsData = [];
        $withdrawalsAmountData = [];
        $type1QtysData = [];
        $type3QtysData = [];
        $type6QtysData = [];
        $type1AmountsData = [];
        $type3AmountsData = [];
        $type6AmountsData = [];

        $month = Carbon::now();
        $start = $month->startOfYear();
        for ($i=1; $i<=12; $i++) {
            $end = $start->copy()->endOfMonth();

            $deps = Deposit::whereBetween('created_at', [$start, $end])->where('status', '!=', 2);
            $pays = Payment::whereBetween('created_at', [$start, $end])->where('status', 1);
            $withs = Withdrawal::whereBetween('created_at', [$start, $end])->where('status', 1);
            array_push($usersData, User::whereBetween('created_at', [$start, $end])->count());
            array_push($depositData, $deps->count());
            array_push($paymentsData, $pays->count());
            array_push($withdrawalsData, $withs->count());

            $totalDeps = 0;
            $typesQty = [1 => 0, 3 => 0, 6 => 0];
            $typesAmount = [1 => 0, 3 => 0, 6 => 0];
            foreach ($deps->get() as $dep)
            {
                $totalDeps += $dep->start_amount;
                $typesQty[$dep->months()]++;
                $typesAmount[$dep->months()] += $dep->start_amount;
            }
            array_push($depositAmountData, $totalDeps);
            array_push($type1QtysData, $typesQty[1]);
            array_push($type3QtysData, $typesQty[3]);
            array_push($type6QtysData, $typesQty[6]);
            array_push($type1AmountsData, $typesAmount[1]);
            array_push($type3AmountsData, $typesAmount[3]);
            array_push($type6AmountsData, $typesAmount[6]);

            $totalPays = 0;
            foreach ($pays->get() as $pay) {
                $totalPays += $pay->amount;
            }
            array_push($paymentsAmountData, $totalPays);

            $totalWiths = 0;
            foreach ($withs->get() as $with)
            {
                $totalWiths += $with->amount;
            }
            array_push($withdrawalsAmountData, $totalWiths);






            $start = $start->addDays(32)->startOfMonth();
        }

        $moneyChart->dataset(trans_choice('custom.deposit',2), 'line', $depositAmountData)->color('#ffc107')->fill(false);
        $moneyChart->dataset(trans_choice('custom.payment',2),'line',$paymentsAmountData)->color('#467fd0')->fill(false);
        $moneyChart->dataset(trans_choice('custom.withdrawal',2),'line',$withdrawalsAmountData)->color('#cd201f')->fill(false);
        $moneyChart->options(['responsive' => false]);
        $moneyChart->height(500);
        $moneyChart->width(1100);

        $typesAmountChart->dataset(1 . trans_choice('custom.months',1), 'line', $type1AmountsData)->color('#ffc107')->fill(false);
        $typesAmountChart->dataset(3 . trans_choice('custom.months',4), 'line', $type3AmountsData)->color('#467fd0')->fill(false);
        $typesAmountChart->dataset(6 . trans_choice('custom.months',6), 'line', $type6AmountsData)->color('#cd201f')->fill(false);
        $typesAmountChart->options(['responsive' => false]);
        $typesAmountChart->height(500);
        $typesAmountChart->width(500);

        $typesChart->dataset(1 . trans_choice('custom.months',1), 'line', $type1QtysData)->color('#ffc107')->fill(false);
        $typesChart->dataset(3 . trans_choice('custom.months',4), 'line', $type3QtysData)->color('#467fd0')->fill(false);
        $typesChart->dataset(6 . trans_choice('custom.months',6), 'line', $type6QtysData)->color('#cd201f')->fill(false);
        $typesChart->options(['responsive' => false]);
        $typesChart->height(500);
        $typesChart->width(500);

        $chart->dataset(trans_choice('custom.deposit',2),'line',$depositData)->color('#ffc107')->fill(false);
        $chart->dataset(trans('custom.registered'),'line',$usersData)->color('#63c2de')->fill(false);
        $chart->dataset(trans_choice('custom.payment',2),'line',$paymentsData)->color('#467fd0')->fill(false);
        $chart->dataset(trans_choice('custom.withdrawal',2),'line',$withdrawalsData)->color('#cd201f')->fill(false);
        $chart->options(['responsive' => false]);
        $chart->height(500);
        $chart->width(1100);

        return view('vendor.backpack.base.dashboard', compact('invested', 'withdrawn', 'chart',
                                                            'unwithdrawn', 'registered', 'types', 'deposited',
                                                            'moneyChart', 'typesAmountChart', 'typesChart'));
    }
}
