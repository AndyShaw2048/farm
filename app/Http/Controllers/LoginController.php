<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        if (Auth::attempt(['telephone' => $request->telephone, 'password' => $request->password])) {
            $user_id = Auth::user()->id;
            // 认证通过...
            $last = User::getIP($user_id);
            session(['last_time' => $last['time'],'last_ip' => $last['ip']]);//设置上次登录时间与IP到Session
            User::updateIP($user_id);
            return redirect()->intended('/home');
        }
            // 认证失败
        return redirect()->back()->withInput()->withErrors(['e' => '用户名或密码错误']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
