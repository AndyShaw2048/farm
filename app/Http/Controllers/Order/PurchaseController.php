<?php

namespace App\Http\Controllers\Order;

use App\Adoption\AdoptionOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function index($option = null)
    {
        $adoptions = null;
        if($option == null )
        {
            $adoptions = AdoptionOrder::where('user_id',Auth::id())
                                      ->where('delete',0)
                                      ->orderBy('created_at','desc')
                                      ->get();
        }
        elseif($option == 'waittingforpay')
        {
            $adoptions = AdoptionOrder::where('user_id',Auth::id())
                                      ->where('delete',0)
                                      ->where('status',1)
                                      ->orderBy('created_at','desc')
                                      ->get();
        }
        elseif($option == 'waittingforreceive')
        {
            $adoptions = AdoptionOrder::where('user_id',Auth::id())
                                      ->where('delete',0)
                                      ->where('status',3)
                                      ->orderBy('created_at','desc')
                                      ->get();
        }
        elseif($option == 'recycle')
        {
            $adoptions = AdoptionOrder::where('user_id',Auth::id())
                                      ->where('delete',1)
                                      ->orderBy('created_at','desc')
                                      ->get();
        }
        else
        {
            return abort('404');
        }
        return view('purchase.index',['adoptions'=>$adoptions]);
    }
}
