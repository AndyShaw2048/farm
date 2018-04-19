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

    $router->post('goods/shelf', 'PostController@onShelf');

});
