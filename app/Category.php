<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function goods()
    {
        return $this->belongsToMany('App\Goods','goods_category','category_id','goods_id');
    }
}
