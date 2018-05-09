<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('orders', OrderController::class);
    $router->resource('goods', GoodsController::class);
    $router->resource('category', CategoryController::class);
    $router->resource('member', UserController::class);
    $router->resource('farms', FarmController::class);
    $router->resource('adoptiongoods', AdoptionGoodController::class);
    $router->resource('adoptionorders', AdoptionOrderController::class);
    $router->resource('adoptiondetails', AdoptionDetailController::class);

    $router->get('adoptiondetails/upload/{order_id}','AdoptionDetailController@upload')->where('id','[0-9]+');
    $router->post('adoptiondetails/upload/detail','AdoptionDetailController@uploadDetail');
    $router->post('adoptiondetails/uploadfile/img','AdoptionDetailController@uploadimg');
    $router->post('adoptiondetails/uploadfile/vdo','AdoptionDetailController@uploadvdo');
    $router->post('goods/shelf', 'PostController@onShelf');

});
