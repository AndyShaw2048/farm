<?php

namespace App\Admin\Controllers;

use App\Goods;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //批量操作商品上架
    public function onShelf(Request $request)
    {
        foreach (Goods::find($request->ids) as $post)
        {
            $post->status = $request->action;
            $post->save();
        }
        return json_encode(['error'=>0]);
    }
}
