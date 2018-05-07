<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {

//        $rules = [
//            'telephone' => 'bail|required|digits:11',
//            'password' => 'bail|required|min:6|max:20|alpha_num',
//        ];
//        $msg = [
//            'telephone.required' => '电话号码禁止为空',
//            'telephone.digits' => '电话号码为11位纯数字',
//            'password.required' => '密码禁止为空',
//            'password.min' => '密码最小长度为6位',
//            'password.man' => '密码最大长度为20位',
//            'password.alpha_num' => '密码只能为大写字母、小写字母、数字',
//        ];
//        $validator = Validator::make($request->all(),$rules,$msg);
//        if ($validator->fails())
//            return Response::json(array(['code' => 100,
//                                         'msg' => $validator->getMessageBag()->toArray()
//                                        ]));

        if (Auth::attempt(['telephone' => $request->telephone, 'password' => $request->password])) {
            $user_id = Auth::user()->id;
            // 认证通过...
            $last = User::getIP($user_id);
            session(['last_time' => $last['time'],'last_ip' => $last['ip']]);//设置上次登录时间与IP到Session
            User::updateIP($user_id);
            return response()->json(array([
                                              'code' => 200,
                                              'msg' => '登录成功',
                                          ]));
        }
            // 认证失败
        return response()->json(array([
                                          'code' => 100,
                                          'msg' => '用户名或密码错误',
                                      ]));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
