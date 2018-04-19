<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>农牧云——登陆</title>
    <link rel="stylesheet" href="{{url('layui/css/layui.css')}}">
    <link rel="stylesheet" href="{{url('css/login.css')}}" />
    <link rel="stylesheet" href="{{url('css/footer.css')}}"/>
</head>

<body>
<header>
    <div class="position">
        <ul class="posit">
            <li>您当前的位置：</li>
            <li>省</li>
            <li>市</li>
            <li>县</li>
        </ul>
        <ul class="load">
            <li><a href="/login">登陆/注册</a></li>
        </ul>
    </div>
    <div>
        <div class="logo"></div>
        <div class='tabs'>
            <div class='moving_bg'></div><span class='tab_item'><a href="/">首页</a></span><span class='tab_item'><a href="/about">关于我们</a></span><span class='tab_item'><a href="/home">用户中心</a></span><span class='tab_item'><a href="/goods">云上集市</a></span><span class='tab_item'><a href="/cloudfarm">云上农场</a></span>
        </div>
    </div>
</header>
<main>
    <div class="container clear">
        <div class="login">
            <div class="login_title">
                <span class="border_left"></span><span class="dl">登录</span><span class="border_right"></span>
            </div>
            <!--表单-->
            @if($errors->any())
                @foreach($errors->get('e') as $error)
                    <div>{{$error}}</div>
                @endforeach
            @endif

            @if($errors->any())
                @foreach($errors->get('telephone') as $error)
                    <div>{{$error}}</div>
                @endforeach
            @endif
            <form action="/login" method="post">
                @csrf
                <span class="mine"></span>
                <input type="text" class="uname input" name="telephone" placeholder="请输入您的用户名" /><br/>
                <span class="pwdp"></span>
                @if($errors->any())
                    @foreach($errors->get('password') as $error)
                        <div>{{$error}}</div>
                    @endforeach
                @endif
                <input type="password" class="pwd input" name="password" placeholder="请输入您的密码" /><br/>
                <span class="vali"></span>
                <!--                    <input type="text" class="verification input" placeholder="请输入验证码" />-->
                <select class="choice input">
                    <option value="0">我是用户</option>
                    <option value="1">我是商家</option>
                </select>
                <input type="submit" value="登录" class="btn" />
            </form>
            <a href="/register" class="free">免费注册></a>
            <a href="#" class="forget">忘记密码?</a>
        </div>
    </div>
</main>
<footer>
    <div id="foot-box">
        <div>
            <img src="{{url('img/rg.png')}}">
            <p>认购</p>
        </div>
        <div>
            <img src="{{url('img/green.png')}}">
            <p>绿色</p>
        </div>
        <div>
            <img src="{{url('img/gx.png')}}">
            <p>共享</p>
        </div>
        <div>
            <img src="{{url('img/fp.png')}}">
            <p>扶贫</p>
        </div>
        <p style="clear:both;"></p>
    </div>
    <div id="foot-other">
        <div class="logo">
        </div>
        <!-- 2、中 ：买家帮助，卖家帮助 ...-->
        <div class="foot-list">
            <!-- 列表1 -->
            <ul type="none">
                <li>
                    <h3>买家帮助</h3>
                </li>
                <li>
                    <a href="#">新手指南</a>
                </li>
                <li>
                    <a href="#">服务保障</a>
                </li>
                <li>
                    <a href="#">常见问题</a>
                </li>
            </ul>
            <!-- 列表2 -->
            <ul type="none" class="mid">
                <li>
                    <h3>商家帮助</h3>
                </li>
                <li>
                    <a href="#">商家入驻</a>
                </li>
                <li>
                    <a href="#">商家后台</a>
                </li>
            </ul>
            <!-- 列表3 -->
            <ul type="none">
                <li>
                    <h3>关于我们</h3>
                </li>
                <li>
                    <a href="#">关于农牧云</a>
                </li>
                <li>
                    <a href="#">联系我们</a>
                </li>
                <li>
                    <img src="{{url('img/wechat.png')}}">
                    <img src="{{url('img/sinablog.png')}}">
                </li>
            </ul>
        </div>
        <!-- 3、右 ：客户端 & 二维码-->
        <div class="client">
            <!-- 1、二维码 ：右浮动 -->
            <div class="qrCode">
                <img src="{{url('img/erweima.png')}}">
            </div>
            <!-- 2、农牧云客户端 ：右浮动-->
            <div class="service">
                <p>农牧云客户端</p>
                <img src="{{url('img/ios.png')}}">
                <img src="{{url('img/android.png')}}">
            </div>
        </div>

        <!-- 增加空块级元素 -->
        <p style="clear:both;"></p>
    </div>
</footer>
</body>
<script src="{{url('js/jquery.js')}}" type="text/javascript"></script>
<script src="{{url('layui/layui.js')}}"></script>
<script src="{{url('js/index.js')}}" type="text/javascript"></script>


</html>
