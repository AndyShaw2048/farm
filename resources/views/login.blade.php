<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>农牧云-登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/login-animate.css">
    <link rel="stylesheet" href="css/login-bootstrap.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="stylesheet" href="assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <link rel="stylesheet" href="css/nav.css">

    <style>
        .head a {
            color: white
        }

        body {
            overflow: scroll;
        }

        .nav-table {
            width: 100%;
            height: 120px;
        }

        .head {
            position: fixed;
            height: 100px;
            z-index: 9999;
        }

        .nav {
            height: 100px;
            background: none;
        }

        .nav-table td {
            font-family: 微软雅黑;
            cursor: pointer;
            text-align: center;
        }

        .nav-table td:hover {
            color: black(53, 144, 218);
        }

        .logo {
            width: 30%;
        }

        .logo span {
            font-size: 2em;
            font-family: 华文楷体;
            color: rgb(240, 240, 240);
        }

        .logo-img {
            float: right;
        }

        .logo-img img {
            height: 120px;
            /* padding-left: 260px; */
            margin-top: 5px;
        }

        .logo-title {
            padding-top: 25px;
            float: right;
        }

        .title {
            height: 80px;
        }

        .serch {
            width: 20%；
        }

        .am-input-group {
            width: 70%;
        }

        .nav-table a {
            color: white;
        }
    </style>
</head>

<body style="overflow:hidden">
<div class="am-g head" style="background: none;color: white;">
    <div class="nav">
        <table class="nav-table">
            <tr>
                <td class="logo">
                    <div class="logo-title">
                        <img class="title" src="{{url('img/标题.png')}}" alt="">
                    </div>
                    <div class="logo-img">
                        <img src="{{url('img/农牧云3.png')}}" alt="">
                    </div>
                </td>
                <td>
                    <a href="/">首页
                        <br>
                        <span>Home&nbsp; Page</span>
                    </a>
                </td>
                <td>
                    <a href="/goods">
                        云上集市
                        <br>
                        <span>Cloud&nbsp;Shop</span>
                    </a>
                </td>
                <td>
                    <a href="/cloudfarm">
                        云上农场
                        <br>
                        <span>Cloud&nbsp;Farm</span>
                    </a>
                </td>
                <td>
                    <a href="/cloudtravel">
                        云游天下
                        <br>
                        <span>Travel&nbsp;world</span>
                    </a>
                </td>
                <td>
                    <a href="/home"> 个人中心
                        <br>
                        <span>Personal&nbsp;Center</span>
                    </a>

                </td>
                <td class="company">
                    <a href="/aboutus">
                        关于我们
                        <br>
                        <span>About&nbsp;Us</span>
                    </a>
                </td>
                <td class="serch">
                    <div class="am-input-group">
                        <input type="text" class="am-form-field" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                            <span class="am-input-group-btn">
                                <button class="am-btn am-btn-default" type="button" style="border-bottom-right-radius: 15px;border-top-right-radius: 15px;">
                                    <span class="am-icon-search"></span>
                                </button>
                            </span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(img/1.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span class="intro-text-small">Welcome to 农牧云
                                <br>
                                <br>
                            </span>
                        <h1>绿色 共享 扶贫
                            <br> </h1>
                    </div>
                    <div class="col-md-4 col-md-push-1 animate-box">
                        <div class="form-wrap" style="margin-top: -60px">
                            <div class="tab">
                                <div class="tab-menu">
                                    <li class="active gtco-second">
                                        <a href="#" data-tab="login">登录</a>
                                    </li>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-content-inner active" data-content="login">
                                        <div class="error" id="error" hidden></div>
                                        <form action="/login" method="post">
                                            @csrf
                                            <div class="row form-group">
                                                    <label for="username">账号</label>
                                                    <input name="telephone" type="text" class="form-control" id="telephone">
                                            </div>
                                            <div class="row form-group">
                                                    <label for="password">密码</label>
                                                    <input name="password" type="password" class="form-control" id="password">
                                            </div>

                                            <div class="row form-group" style="text-align: center">
                                                    <a onclick="send()" style="color: white" class="btn btn-primary">登录</a>
                                                    <a href="/register" class="btn btn-default">注册</a>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</header>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

<script>
    function send()
    {
        var tel = $('#telephone').val();
        var pwd = $('#password').val();
        $.ajax({
            type: 'POST',
            url: '/login',
            data: {telephone:tel,password:pwd},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data){
                if (data[0].code == 100)
                {
                    $('#error').hide();
                    $('#error').show('slow');
                    $('#error').html(data[0].msg);
                    return;
                }
                if (data[0].code == 200){
                    window.setTimeout("window.location='/home'");
                }
               else{
                    $('#error').hide();
                    $('#error').show('slow');
                    if (data[0].msg.telephone){
                        $('#error').html(data[0].msg.telephone);
                    }
                    else{
                        $('#error').html(data[0].msg.password);
                    }

                }
            },
            error: function(xhr, type){
                alert('Ajax error!')
            }
        });
    }
</script>
</body>

</html>