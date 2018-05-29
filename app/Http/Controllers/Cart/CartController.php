<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Mockery\CountValidator\Exception;

class CartController extends Controller
{
    public function index()
    {
        return view('home.cart');
    }
    
    public function add(Request $request)
    {
        return response()->json(array([
            'code' => '200'
                                      ]));
    }
}
