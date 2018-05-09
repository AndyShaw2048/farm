<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CloudTravelController extends Controller
{
    public function index()
    {
        return view('travel.index');
    }
}
