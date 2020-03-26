<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use CrudTrait;

    protected $fillable = ['name', 'email', 'phone', 'text'];
}
