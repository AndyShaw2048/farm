<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterValidate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $rules = [
            'telephone' => 'bail|required|digits:11|unique:users',
            'password' => 'bail|required|min:6|max:20|alpha_num|confirmed',
        ];
        $msg = [
            'telephone.required' => '电话号码禁止为空',
            'telephone.digits' => '电话号码为11位纯数字',
            'telephone.unique' => '该电话号码已存在',
            'password.required' => '密码禁止为空',
            'password.min' => '密码最小长度为6位',
            'password.man' => '密码最大长度为20位',
            'password.alpha_num' => '密码只能为大写字母、小写字母、数字',
            'password.confirmed' => '两次输入密码不符合',
        ];
        $validator = Validator::make($request->all(),$rules,$msg);
        if ($validator->fails())
            return Response::json(array(['code' => 100,
                                      'msg' => $validator->getMessageBag()->toArray()
                                  ]));

        $user = new User();
        $user->nickname = '新用户'.substr($request->telephone,7,4);
        $user->telephone = $request->telephone;
        $user->password = bcrypt($request->password);
        $user->grade = 1;
        $user->pid = 1;
        $user->avatar = 'users/avatars/default.jpg';
        $user->save();
        return response()->json(array([
                                          'code' => 200,
                                          'msg' => '注册成功',
                                      ]));
    }
}
