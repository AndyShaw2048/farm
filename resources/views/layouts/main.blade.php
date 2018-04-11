<!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>农牧云 - @yield('title')</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
    @yield('script-top')
</head>

<body>

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <img style="margin-left:100px;height:50px;cursor: pointer;" src="{{url('img/农牧云.png')}}" alt="">
            <span style="margin-left:80px;cursor: pointer;">
                <small>
                    <a href="">首页</a>
                </small>
            </span>
            <span style="margin-left:80px;cursor: pointer;">
                <small>云上集市</small>
            </span>
            <span style="margin-left:80px;cursor: pointer;">
                <small>云上农场</small>
            </span>
        <strong style="margin-left:80px;cursor: pointer;">个人中心</strong>
            <span style="margin-left:80px;cursor: pointer;">
                <small>关于我们</small>
            </span>
    </div>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li>
                <a href="javascript:;">
                    <span class="am-icon-envelope-o"></span> 消息
                    <span class="am-badge am-badge-warning">5</span>
                </a>
            </li>
        </ul>
    </div>
</header>

<!-- sidebar start -->
<div class="am-cf admin-main">
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li>
                    <a href="/home">
                        <span class="am-icon-home"></span> 个人主页</a>
                </li>
                <li>
                    <a href="/home/account/info">
                        <span class="am-icon-male"></span> 个人资料</a>
                </li>
                <li>
                    <a href="/home/account/cart">
                        <span class="am-icon-puzzle-piece"></span> 我的购物车</a>
                </li>
                <li>
                    <a href="/home/order" class="am-cf">
                        <span class="am-icon-check"></span> 我的订单
                        <!-- <span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span> -->
                    </a>

                </li>
                <li>
                    <a href="/home/purchase">
                        <span class="am-icon-table"></span> 我的订购</a>
                </li>
                <li>
                    <a href="/home/account/message">
                        <span class="am-icon-bullhorn"></span> 我的消息</a>
                </li>
                <li>
                    <a href="/logout">
                        <span class="am-icon-sign-out"></span> 注销</a>
                </li>
            </ul>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p>
                        <span class="am-icon-bookmark"></span> 公告</p>
                    <p>四川农大牧场4月5日-5月5日特大优惠活动。</p>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</div>
<!-- sidebar end -->



<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>
<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/amazeui.min.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>
@yield('script-bottom')
</body>
</html>