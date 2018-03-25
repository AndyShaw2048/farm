<?php

namespace App\Http\Controllers\Home;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return Auth::user();
    }
    
    //修改密码
    public function editPassword(Request $request)
    {
        //验证信息
        $rules = [
            'oldPwd' => 'required',
            'newPwd' => 'bail|required|confirmed|min:6|max:20|alpha_num',
        ];
        $messages = [
            'oldPwd.required' => '原密码禁止为空',
            'newPwd.required' => '新密码禁止为空',
            'newPwd.confirmed' => '两次输入密码不匹配',
            'newPwd.min' => '新密码最少为6位',
            'newPwd.max' => '新密码最多为20位',
            'newPwd.alpha_num' => '密码只能为大写字母、小写字母、数字',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
            return redirect()->back()->withErrors($validator);

        //修改密码
        $oldPwd = User::where('id',Auth::user()->id)
                  ->select('password')
                  ->first()
                  ->password;
        if(!Hash::check($request->oldPwd,$oldPwd))
            return redirect()->back()->withErrors('原密码不正确');
        User::where('id',Auth::user()->id)
              ->update(['password'=>bcrypt($request->newPwd)]);
        return redirect()->back()->withErrors(['success' => '修改成功']);
    }
}
