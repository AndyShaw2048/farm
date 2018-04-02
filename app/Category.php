<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function goods()
    {

    }
    
    public static function GetNameByID($id)
    {
        return Category::findOrFail($id)->name;
    }
}
