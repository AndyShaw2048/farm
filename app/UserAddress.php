<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'users_address';

    public function Order()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }
}
