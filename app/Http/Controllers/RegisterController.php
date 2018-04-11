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
        $user->grade = 1;
        $user->pid = 1;
        $user->avatar = 'users/avatars/default.jpg';
        $user->save();
        return redirect('/');
    }
}
