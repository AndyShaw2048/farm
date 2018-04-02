<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ApiDataController extends Controller
{

    //获取种类目录
    public function getCategory()
    {
        $obj = Category::all();
        $array = null;
        foreach($obj as $key => $item)
        {
            $array[$key]['id'] = $item->id;
            $array[$key]['text'] = $item->name;
        }
        return $array;
    }
}
