<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $table = 'farms';

    public static function GetNameByID($id)
    {
        return Farm::findOrFail($id)->name;
    }
}