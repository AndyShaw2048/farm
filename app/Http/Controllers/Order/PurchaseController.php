<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('purchase.index');
    }
}
