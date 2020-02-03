<?php

namespace App;

use Backpack\Settings\app\Models\Setting;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use CrudTrait; // <----- this

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'ref_link', 'referred_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'referred_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function openedRef() : bool
    {
        $count = 0;
        foreach ($this->deposits as $deposit) {
            if ($deposit->amount >= Setting::get('ref_min_once')) {
                return true;
            }
            $count += $deposit->amount;
        }
        if ($count >= Setting::get('ref_min')) {
            return true;
        }
        return false;
    }

    public function depositsInfo()
    {
        $info = '';
        $total = 0;
        $active = 0;
        $totalAmount = 0;
        $activeAmount = 0;
        foreach ($this->deposits as $deposit)
        {
            $color = '';
            switch ($deposit->status)
            {
                case 0:
                    $color = 'yellow';
                    break;
                case 1:
                    $color = 'green';
                    break;
                case 2:
                    $color = 'red';
                    break;
                case 3:
                    $color = 'grey';
                    break;
            }
            $start = Carbon::parse($deposit->starts_at);
            $end = Carbon::parse($deposit->finish_at);
            $months = $end->diffInDays($start) / 31;
            $info .= "<a style='color:".$color."' href='/admin/deposit/".$deposit->id."/show'>"
                .$deposit->amount."$ (".$months. trans_choice('custom.months', $months).")</a>, ";
            $total++;
            $totalAmount += $deposit->start_amount;
            if ($deposit->status == 1) {
               $active++;
               $activeAmount += $deposit->start_amount;
            }
        }
        $info = rtrim($info, ', ');
        if ($total > 0) {
            $info .= '<br>'.trans('custom.total').': '.$total.' '.trans_choice('custom.deposit', $total). ' ($'.$totalAmount.')';
        }
        if ($active > 0) {
            $info .= '<br>'.trans('custom.active').': '.$active.' '.trans_choice('custom.deposit', $active). ' ($'.$activeAmount.')';
        }
        return $info;
    }

    public function paymentsInfo()
    {
        return $this->commonInfo($this->payments, 'payment');
    }

    public function withdrawalsInfo()
    {
        return $this->commonInfo($this->withdrawals, 'withdrawal');
    }

    public function commonInfo($entity, $name)
    {
        $info = '';
        $total = 0;
        foreach ($entity as $payment)
        {
            $color = $payment->status ? 'green' : 'red';
            $info .= "<a style='color:".$color."' href='/admin/".$name."/".$payment->id."/show'>".$payment->amount."$</a>, ";
            $total += $payment->amount;
        }
        $info = rtrim($info, ', ');
        if ($total > 0)
        {
            $info .= '<br>'.trans('custom.total').': $'.$total;
        }
        return $info;
    }
}
