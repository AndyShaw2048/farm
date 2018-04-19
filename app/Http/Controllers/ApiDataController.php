<?php

namespace App\Http\Controllers;

use App\Category;
use App\Farm;
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

    //获取农牧场目录
    public function getFarm()
    {
        $obj = Farm::all();
        $array = null;
        foreach($obj as $key => $item)
        {
            $array[$key]['id'] = $item->id;
            $array[$key]['text'] = $item->name;
        }
        return $array;
    }
}
