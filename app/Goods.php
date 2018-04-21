<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';

    public function category()
    {

    }

    public function thisFarm()
    {
        return $this->hasOne('App\Farm','id','farm');
    }

    public function setPicsAttribute($pics)
    {
        if (is_array($pics)) {
            $this->attributes['pics'] = json_encode($pics);
        }
    }

    public function getPicsAttribute($pics)
    {
        return json_decode($pics, true);
    }
}
