<?php

namespace App\Http\Controllers\Adoption;

use App\Adoption\AdoptionGood;
use App\Adoption\AdoptionOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdoptionController extends Controller
{
    public function index()
    {
        
    }
    //商品详情
    public function detail($id = null)
    {
        if(!$id) return redirect('/cloudfarm');
        $goods = AdoptionGood::where('id',$id)->firstOrFail();
        return view('adoption.detail',['goods' => $goods]);
    }

    public function store($id,Request $request)
    {
        if(!Auth::check()) return redirect('/login');
        $order_id = date('Ymds') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $t = date("Y-m-d",time());

        $good = AdoptionGood::where('id',$id)->first();
        $order = new AdoptionOrder();
        $order->name = $good->name;
        $order->farm_id = $good->farm;
        $order->good_id = $id;
        $order->order_id = $order_id;
        $order->user_id = Auth::id();
        $order->total_stage = $good->total_stage;
        $order->price_per_stage = $good->price;
        $order->days_per_stage = $good->days_per_stage;
        $order->adopt_num = $request->adopt_num;
        $order->current_stage = 1;
        $order->status = 1;
        $order->delete = 0;
        $order->estimate_end_time = date("Y-m-d",strtotime("{$t} +".$good->total_stage*$good->days_per_stage." day"));
        $order->save();
        return redirect('/home/purchase');
    }
    
    public function growDetail($order_id)
    {
        $adoption = AdoptionOrder::where('order_id',$order_id)
                       ->where('user_id',Auth::id())->first();
        if(is_null($adoption)) return abort(404);
        $diff = floor((strtotime($adoption->estimate_end_time) - strtotime('now')) / 86400);
        return view('adoption.grow',['adoption'=>$adoption,'diff'=>$diff]);
    }

    //Ajax删除订单
    public function delOrder(Request $request)
    {
        $order = AdoptionOrder::where('order_id',$request->order_id)
                                ->where('user_id',Auth::id())
                                ->get();

        if($order->isEmpty())
        {
            return response()->json(array(['code' => 100, 'msg' => '失败']));
        }
        AdoptionOrder::where('order_id',$request->order_id)
                       ->update(['delete' => 1]);
        return response()->json(array(['code' => 200, 'msg' => '成功']));

    }
}














