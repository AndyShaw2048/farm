<?php

namespace App\Http\Controllers\Cart;

use App\Goods;
use App\ShoppingCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\Exception;

class CartController extends Controller
{
    public function index()
    {
        Cart::restore(Auth::id());
        Cart::store(Auth::id());
//        Cart::destroy();
//        dd(Cart::content());
        return view('home.cart');
    }


    /**
     * 增加购物车
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add(Request $request)
    {
        $goods = Goods::find($request->goods_id);

        if(!(ShoppingCart::where('identifier',Auth::id())->get()->isEmpty()))
        {
            Cart::restore(Auth::id());
            foreach(Cart::content() as $item)
            {
                if($item->id == $request->goods_id)
                {
                    Cart::update($item->rowId,[
                        'qty' => $item->qty + $request->amount,
                        'price' =>  $goods->price
                    ]);
                    Cart::store(Auth::id());
                    return response()->json(array([
                                                      'code' => '200'
                                                  ]));
                }
            }
        }
        Cart::add($goods->id, $goods->name, $request->amount, $goods->price)
            ->associate('App\Goods');
        Cart::store(Auth::id());
        return response()->json(array([
                                          'code' => '200'
                                      ]));
    }

    public function del(Request $request)
    {
        try
        {
            Cart::restore(Auth::id());
            if(is_array($request->rowId))
            {
                foreach($request->rowId as $rowId)
                {
                    Cart::remove($rowId);
                }
            }
            else
                Cart::remove($request->rowId);
            Cart::store(Auth::id());
        }catch(\Exception $e)
        {
            return response()->json(array([
                                              'code' => '201',
                                              'msg' => $e->getMessage()
                                          ]));
        }
        return response()->json(array([
                                          'code' => '200'
                                      ]));
    }
}
