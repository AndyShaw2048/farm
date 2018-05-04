<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>农牧云-注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    </style>
</head>

<body>


@include('layouts.nav')
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
                    <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                        <div class="form-wrap" style="margin-top: -60px">
                            <div class="tab">
                                <ul class="tab-menu">
                                    <li class="active gtco-first">
                                        <a href="/register">注册</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-content-inner active" data-content="signup">
                                        @if($errors->any())
                                            <div class="error">{{$errors->first()}}</div>
                                        @endif
                                        <form action="/register" method="post">
                                            @csrf
                                            <div class="row form-group">
                                                <label for="username">电话号码</label>
                                                <input name="telephone" type="text" class="form-control" value="{{old('telephone')}}">
                                            </div>
                                            <div class="row form-group">

                                                <label for="password">密码</label>
                                                <input name="password" type="password" class="form-control">
                                            </div>
                                            <div class="row form-group">
                                                <label for="password">确认密码</label>
                                                <input name="password_confirmation" type="password" class="form-control">
                                            </div>
                                            <div class="row form-group">
                                                <label>验证码</label>
                                                <input name="code" type="text" class="form-control" width=50>
                                                <span>获取验证码</span>
                                            </div>
                                            <div class="row form-group" style="text-align: center">
                                                <input type="submit" class="btn btn-primary" value="注册">
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

</body>

</html>