<?php

namespace App\Adoption;

use Illuminate\Database\Eloquent\Model;

class AdoptionOrder extends Model
{
    protected $table = 'adoption_orders';

    public function AdoptionGood()
    {
        return $this->hasOne(AdoptionGood::class,'id','good_id');
    }

    public function Good()
    {
        return $this->hasOne('App\Adoption\AdoptionGood','id','good_id');
    }

    public function Farm()
    {
        return $this->hasOne('App\Farm','id','farm_id');
    }
}
