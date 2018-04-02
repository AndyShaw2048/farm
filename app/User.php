<?php

namespace App;

use Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
      'password','remember_token'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    //更新当前用户的IP和登录时间
    public static function updateIP($id){
        User::where('id',$id)
            ->update([
                      'last_time'=>date('Y-m-d H:i:s',time()),
                      'last_ip'=>Request::getClientIp()
                   ]);
    }

    //取出上次登录数据
    public static function getIP($id)
    {
        $user = User::findOrFail($id);
        return $last = ['time'=>$user->last_time,'ip'=>$user->last_ip];
    }
}
