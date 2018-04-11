<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function OrderGoods(){
        return $this->hasOne(OrderGoods::class,'order_id','order_id');
    }

    public function UserAddress()
    {
        return $this->hasOne(UserAddress::class,'id','shipping_id');
    }
}
