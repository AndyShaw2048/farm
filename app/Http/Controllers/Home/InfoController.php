<?php

namespace App\Http\Controllers\Home;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InfoController extends Controller
{
    //显示个人信息
    public function index()
    {
        $user = User::where('id',Auth::id())->first();
        return view('home.info',['user'=>$user]);
    }

    //保存个人信息
    public function updateInfo(Request $request)
    {
        //验证
        $rules = [
            'nickname' => 'required|min:4|max:20',
            'email' => 'required|email',
            'telephone' => 'regex:/^1[34578][0-9]{9}$/'
        ];
        $messages = [
          'nickname.required' => '请填写昵称',
          'nickname.min' => '昵称长度为4-20位',
          'nickname.max' => '昵称长度为4-20位',
          'email.required' => '请填写邮箱',
          'email.email' => '邮箱格式错误',
          'telephone.regex' => '请输入正确的电话号码'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
            return redirect()->back()->withErrors($validator);

        //验证通过，更新数据
        User::where('id',Auth::id())
              ->update([
                  'nickname' => $request->nickname,
                  'email' => $request->email,
//                  'address' => $request->address,
                       ]);
        return redirect()->back()->withErrors(['success'=>'修改成功']);
    }

    public function updateAvatar(Request $request)
    {
        //判断是否上传头像
        if(!is_null($request->avatar) && $request->file('avatar')->isFile() )
        {
            $path = $request->file('avatar')->storeAs('users/avatars',Auth::id(),'avatars');
            User::where('id',Auth::id())
                ->update([
                    'avatar' => $path
                         ]);
            return redirect()->back()->withErrors(['success'=>'修改成功']);
        }
        return redirect()->back()->withErrors(['fail'=>'修改失败']);
    }
}
