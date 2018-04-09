<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderShipping extends Model
{
    protected $table = 'order_shipping';

    public function Order()
    {
        return $this->belongsTo(Order::class,'order_id','order_id');
    }
}
