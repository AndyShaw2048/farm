<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterValidate;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(RegisterValidate $request)
    {
        $user = new User();
        $user->nickname = '新用户';
        $user->telephone = $request->telephone;
        $user->password = bcrypt($request->password);
        $user->grade = 12;
        $user->pid = 12;
        $user->save();
        return redirect('/');
    }
}
