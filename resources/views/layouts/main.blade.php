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
    <meta name="_token" content="{{ csrf_token() }}">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{url('css/nav.css')}}">
    <link rel="stylesheet" href="{{url('css/message.css')}}">
    @yield('script-top')
</head>

<body>
<div class="am-g head">
    <div class="nav">
        <table class="nav-table">
            <tr>
                <td class="logo">
                    <div class="logo-title">
                        <img class="title" src="{{url('img/标题-黑.png')}}" alt="">
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
                    <a href="/home">
                        个人中心
                        <br>
                        <span>Personal&nbsp;Center</span>
                    </a>

                </td>
                <td class="company">
                    <a href="#">
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

<div class="am-cf admin-main" style="padding-top: 2px">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li>
                    <a href="/home">
                        <span class="am-icon-home"></span> 个人主页</a>
                </li>
                <li>
                    <a href="/home/account/info">
                        <span class="am-icon-male"></span>&nbsp;&nbsp;个人资料</a>
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
                        <span class="am-icon-table"></span> 我的认购</a>
                </li>
                <li>
                    <a href="#">
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
<script src="{{url('js/jquery.nicescroll.js')}}"></script>
<script src="{{url('js/message.min.js')}}"></script>
<script>
    $('#admin-offcanvas').niceScroll({
        cursorcolor: "#ccc",//#CC0071 光标颜色
        cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
        touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
        cursorwidth: "0px", //像素光标的宽度
        cursorborder: "0", // 游标边框css定义
        cursorborderradius: "0px",//以像素为光标边界半径
        autohidemode: true //是否隐藏滚动条
    });
</script>
@yield('script-bottom')
</body>
</html>