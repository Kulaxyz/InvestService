<?php

namespace App;

use App\Traits\HasPayColumns;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;


class Payment extends Model
{
    use CrudTrait;
    use HasPayColumns;

    protected $table = 'payments';
    protected $fillable = ['user_id', 'amount', 'payment_method', 'payment_details', 'currency', 'status'];

    protected $hidden = ['user_id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userInfo()
    {
        return "<a href='/admin/user/".$this->user->id."/show'>".$this->user->name."</a>";
    }
}
