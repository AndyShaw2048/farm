<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

class CartController extends Controller
{
    public function index()
    {
        try
        {
            Cart::instance('user')->store('user');
            dd(Cart::instance('user')->content());
        }
        catch(\Exception $e)
        {
            dd($e);
        }
    }

    public function add()
    {
        Cart::instance('user')->remove('8cbf215baa3b757e910e5305ab981172');
    }
}
