<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';
    
    public function category()
    {
        return $this->belongsToMany('App\Category','goods_category','goods_id','category_id');
    }
}
