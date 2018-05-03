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

        $good = AdoptionGood::where('id',$id)->first();
        $order = new AdoptionOrder();
        $order->name = $good->name;
        $order->farm = $good->farm;
        $order->order_id = $order_id;
        $order->user_id = Auth::id();
        $order->total_stage = $good->total_stage;
        $order->adopt_num = $request->adopt_num;
        $order->current_stage = 1;
        $order->save();
        return redirect('/home');
    }
}














