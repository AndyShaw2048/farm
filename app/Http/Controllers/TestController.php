<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//require_once('vendor/autoload.php'); // 只针对使用 composer 安装
// require_once '/path/to/php-sdk/vendor/autoload.php'; // 针对压缩包安装

use Upyun\Upyun;
use Upyun\Config;


class TestController extends Controller
{
    public function upload()
    {
        $serviceConfig = new Config('farmadmin', 'farmadmin', 'farmadmin');
        $client = new Upyun($serviceConfig);
        $client->write('/save/path', 'Hello World');
    }
}
