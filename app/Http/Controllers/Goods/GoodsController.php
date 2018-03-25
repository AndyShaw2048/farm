<?php

namespace App\Http\Controllers\Goods;

use App\Goods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function index()
    {
        $goods = Goods::all();
        return view('goods.index',['goods'=>$goods]);
    }

    public function detail($id)
    {
        $goods = Goods::where('id',$id)->first();
        return view('goods.detail',['goods'=>$goods]);
    }
}
