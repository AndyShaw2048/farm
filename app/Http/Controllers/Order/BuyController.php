<?php

namespace App\Http\Controllers\Order;

use App\Goods;
use App\Order;
use App\OrderGoods;
use App\OrderShipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function index($id = null)
    {
        if(!$id) return redirect('/goods');

        $goods = Goods::where('id',$id)->first();
        return view('order.buy',['goods'=>$goods]);
    }

    public function store(Request $request)
    {
        if(!Auth::check())
            return redirect('/login');

        $goods = Goods::find($request->goods_id);
        $goods->stocks = $goods->stocks - $request->num;
        $goods->save();

        $order_id = date('Ymds') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        //订单基本信息
        $order = new Order();
        $order->order_id = $order_id;
        $order->user_id = Auth::id();
        $order->status = 1;
        $order->save();
        //订单详情
        $detail = new OrderGoods();
        $detail->goods_id = $request->goods_id;
        $detail->order_id = $order_id;
        $detail->num = $request->num;
        $detail->title = $goods->name;
        $detail->price = $goods->price;
        $detail->total_fee = $request->num * $goods->price;
        $detail->save();
        //订单物流详情
//        $shipping = new OrderShipping();
//        $shipping->order_id = $order_id;
//        $shipping->receiver_name = $request->name;
//        $shipping->receiver_phone = $request->phone;
//        $shipping->receiver_mobile = $request->mobile;
//        $shipping->receiver_province= $request->province;
//        $shipping->receiver_city = $request->city;
//        $shipping->receiver_district = $request->district;
//        $shipping->receiver_address = $request->address;
//        $shipping->receiver_zip = $request->zip;
//        $shipping->save();

        return redirect('/home/order')->withErrors(['success'=>'交易成功']);
    }
}
