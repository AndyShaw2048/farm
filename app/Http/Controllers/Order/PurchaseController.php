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
        $adoptions = AdoptionOrder::where('user_id',Auth::id())->get();
        return view('purchase.index',['adoptions'=>$adoptions]);
    }
}
