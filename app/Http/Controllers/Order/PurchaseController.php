<?php

namespace App\Http\Controllers\Order;

use App\Adoption\AdoptionOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function index()
    {
        $a_orders = AdoptionOrder::where('user_id',Auth::id())->get();
        return view('purchase.index',['a_orders'=>$a_orders]);
    }
}
