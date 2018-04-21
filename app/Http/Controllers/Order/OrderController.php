<?php

namespace App\Http\Controllers\Order;

use App\Order;
use App\OrderRating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id',Auth::id())
                         ->orderBy('created_at','desc')->get();
        return view('order.index',['orders'=>$orders]);
    }

    //取消订单
    public function cancel($id)
    {
        $order = Order::where('user_id',Auth::id())
                        ->where('order_id',$id)
                        ->get();
        if(!$order->first())
        {
            return redirect()->back()->withErrors('订单号无效');
        }
        Order::where('user_id',Auth::id())
             ->where('order_id',$id)
             ->update(['status'=>6]);
        return redirect()->back()->withErrors('取消成功');
    }

    //确认收货
    public function receive($id)
    {
        $order = Order::where('user_id',Auth::id())
                      ->where('order_id',$id)
                      ->get();
        if(!$order->first())
        {
            return redirect()->back()->withErrors('订单号无效');
        }
        Order::where('user_id',Auth::id())
             ->where('order_id',$id)
             ->update([
                          'status' => 5,
                          'end_time' => date('Y-m-d H:i:s',time())
                      ]);
        return redirect()->back()->withErrors('收货成功');
    }

    //评价页面
    public function ratingIndex($id)
    {
        $order = Order::where('order_id',$id)
                      ->where('user_id',Auth::id())
                      ->first();
        if(!$order) return redirect()->back()->withErrors('订单号无效');

        $rating = new OrderRating();
        $rating->order_id = $id;
        $rating->user_id = Auth::id();

        return view('order.rating',['order'=>$order]);
    }

    //保存评价
    public function ratingStore(Request $request)
    {
        $rating = new OrderRating();
        $rating->order_id = $request->order_id;
        $rating->user_id = Auth::id();
        $rating->goods_grade = $request->goods_grade;
        $rating->goods_content = $request->goods_content;
        $rating->goods_pics = $request->goods_pics;
        $rating->shop_grade = $request->shop_grade;
        $rating->shop_content = $request->shop_content;
        $rating->shop_pics = $request->shop_pics;
        $rating->save();
        return redirect()->back()->withErrors(['success'=>'保存成功']);
    }
}
