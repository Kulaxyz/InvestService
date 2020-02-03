<?php

namespace App;

use Backpack\Settings\app\Models\Setting;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;


class Deposit extends Model
{
    use CrudTrait;

    protected $fillable = ['user_id', 'amount', 'start_amount','profit' ,'earned_amount', 'capitalization', 'status', 'starts_at','finish_at'];
    protected $hidden = ['user_id'];
    protected $dates = ['starts_at', 'finish_at'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userInfo()
    {
        return "<a href='/admin/user/".$this->user->id."/show'>".$this->user->name."</a>";
    }

    public function months()
    {
        if ($this->profit == Setting::get('deposit_3')) {
            return 3;
        } elseif ($this->profit == Setting::get('deposit_6')) {
            return 6;
        } else {
            return 1;
        }
    }
}
