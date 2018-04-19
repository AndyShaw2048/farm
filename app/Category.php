<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function goods()
    {

    }
    
    public static function GetNameByID($id)
    {
        return Category::findOrFail($id)->name;
    }
}
