<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderGoods extends Model
{
    protected $table = 'order_goods';

    public function Order()
    {
        return $this->belongsTo(Order::class,'order_id','order_id');
    }
    public function OrderName()
    {
        return $this->hasOne('App\Order','order_id','order_id');
    }
}
