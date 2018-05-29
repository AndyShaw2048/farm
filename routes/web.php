<?php
Route::get('/', function () {
    return view('index');
});
Route::get('/cloudfarm',function(){
    $goods = \App\Adoption\AdoptionGood::orderBy('created_at','asc')->limit(6)->get();
   return view('cloudfarm',['goods'=>$goods]);
});
Route::get('/aboutus',function(){
    return view('aboutus');
});


//游客访问
Route::middleware(['guest'])->group(function(){
    Route::get('/register','RegisterController@index')->name('register');
    Route::post('/register','RegisterController@store');

    Route::get('/login','LoginController@index')->name('login');
    Route::post('/login','LoginController@auth');
});

//登录后访问
Route::middleware(['auth'])->group(function(){
    Route::get('/logout','LoginController@logout');

    //个人中心
    Route::prefix('home')->group(function(){
        Route::get('/','Home\HomeController@index')->name('home');
        //修改密码
        Route::get('/account/password',function(){return view('home.password');});
        Route::post('/account/password','Home\HomeController@editPassword');
        //个人资料
        Route::get('/account/info','Home\InfoController@index');
        Route::post('/account/info','Home\InfoController@updateInfo');
        Route::post('/account/avatar','Home\InfoController@updateAvatar');

        //购物车
        Route::get('/account/cart','Cart\CartController@index');
        Route::post('/cart/add','Cart\CartController@add');

        //订购管理
        Route::get('/purchase/{option?}','Order\PurchaseController@index');


        //订单查看与管理
        Route::get('/order','Order\OrderController@index');
        Route::get('/order/cancel/{id}','Order\OrderController@cancel')->where('id','[0-9]+');
        Route::get('/order/receive/{id}','Order\OrderController@receive')->where('id','[0-9]+');
        Route::get('/order/rating/{id}','Order\OrderController@ratingIndex')->where('id','[0-9]+');
        Route::post('/order/rating','Order\OrderController@ratingStore')->where('id','[0-9]+');
    });

    //认购相关路由
    Route::prefix('adoption')->group(function(){
        Route::get('/grow/{order_id}','Adoption\AdoptionController@growDetail')->where('order_id','[0-9]+');
        Route::post('/order/del','Adoption\AdoptionController@delOrder');
        Route::post('/order/comment','Adoption\AdoptionController@comment');
    });


});

//商品购买
Route::get('/goods/buy/{id?}','Order\BuyController@index');
Route::post('/goods/buy/{id?}','Order\BuyController@store');

//商品信息
Route::prefix('goods')->group(function(){
    Route::get('/','Goods\GoodsController@index');
    Route::get('/detail/{id}','Goods\GoodsController@detail')->where('id','[0-9]+');

    Route::get('/category','Goods\GoodsController@category');
});

//认购信息
Route::prefix('adoption')->group(function(){
    Route::get('/','Adoption\AdoptionController@index');
    Route::get('/buy/{id}','Adoption\AdoptionController@detail');
    Route::post('/buy/{id}','Adoption\AdoptionController@store');
});

//云游天下模块
Route::prefix('cloudtravel')->group(function(){
   Route::get('/','CloudTravelController@index');
});

Route::get('test','TestController@upload');
Route::get('alipay','TestController@alipay');
Route::get('cart','CartController@index');
Route::get('cart/add','CartController@add');