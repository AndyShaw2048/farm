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
        $goods = Goods::where('status',1)
                        ->get();
        return view('goods.index',['goods'=>$goods]);
    }

    public function detail($id)
    {
        $goods = Goods::where('id',$id)->first();
        return view('v2.buydetail',['goods'=>$goods]);
    }

    public function category($id = null)
    {
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
//        foreach ($cate_array as $key => $item) {
//            $goods_array[$item['item_id']] = Category::find($item['item_id']);
//        }
        foreach ($cate_array as $key => $item) {
            $goods_array[$item['item_id']] = Goods::where('goods_type',$item['item_id'])
                                                    ->where('status',1)->get();
        }

//        dd($goods_array);
        return view('goods.category',['cate_array' => $cate_array,'goods_array' => $goods_array]);
    }
}
