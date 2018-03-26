<?php

namespace App\Http\Controllers\Goods;

use App\Category;
use App\Goods;
use App\GoodsCategory;
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

    public function category($id = null)
    {
//        $category = Category::find(3);
//        foreach($category->goods as $value)
//            dump($value) ;

        //获取所有种类ID和名称
        $cate = Category::all();
        $cate_array = null;
        foreach($cate as $key => $item)
        {
            $cate_array[$key]['item_id'] = $item->id;
            $cate_array[$key]['item_name'] = $item->name;
        }
        //获取种类下的商品信息
        $goods_array = null;
        foreach ($cate_array as $key => $item) {
            $goods_array[$item['item_id']] = Category::find($item['item_id']);
        }

        return view('goods.category',['cate_array' => $cate_array,'goods_array' => $goods_array]);
    }
}
