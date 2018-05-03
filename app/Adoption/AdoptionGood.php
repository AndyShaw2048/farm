<?php

namespace App\Adoption;

use Illuminate\Database\Eloquent\Model;

class AdoptionGood extends Model
{
    protected $table = 'adoption_goods';

    public function thisFarm()
    {
        return $this->hasOne('App\Farm','id','farm');
    }
}
