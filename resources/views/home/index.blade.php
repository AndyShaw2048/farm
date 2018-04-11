<!doctype html>
<html class="no-js fixed-layout">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
</head>

<body>

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <img style="margin-left:100px;height:50px;cursor: pointer;" src="img/农牧云.png" alt="">
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

<div class="am-cf admin-main">
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
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">个人主页</strong> /
                    <small>PersonalCenter</small>
                </div>
            </div>

            <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
                <li>
                    <img class="am-img-thumbnail am-circle" style="height:98px;float:left;margin-left:45px;" src="{{url($user->avatar)}}" alt="">
                    <a href="#" class="am-text-secondary">
                        <span class="am-icon-btn am-icon-user"></span>
                        <br/>欢迎，{{$user->nickname}}
                        <br/>
                        <strong style="color:red">svip {{$user->grade}}</strong>
                    </a>
                </li>
                <li>
                    <a href="#" class="am-text-warning">
                        <span class="am-icon-btn am-icon-plane"></span>
                        <br/>运输中订单
                        <br/>10</a>
                </li>
                <li>
                    <a href="#" class="am-text-warning">
                        <span class="am-icon-btn am-icon-briefcase"></span>
                        <br/>订购订单
                        <br/>10</a>
                </li>
                <li>
                    <a href="#" class="am-text-danger">
                        <span class="am-icon-btn am-icon-recycle"></span>
                        <br/>完成订单
                        <br/>82</a>
                </li>

            </ul>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table am-table-bd am-table-striped admin-content-table">
                        <thead>
                        <tr>
                            <a href="">详细订单</a>
                        </tr>
                        <tr>
                            <th>订单号</th>
                            <th>农场</th>
                            <th>种类</th>
                            <th>成交订单数</th>
                            <th>管理</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($orders->isEmpty())
                            <tr>
                                <td>
                                    暂无订单消息
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        @else
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->order_id}}</td>
                            <td>农牧云水果基地</td>
                            <td>
                                <a href="#">水果</a>
                            </td>
                            <td>
                                <span class="am-badge am-badge-success">20</span>
                            </td>
                            <td>
                                <div class="am-dropdown" data-am-dropdown>
                                    <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle>
                                        <span class="am-icon-cog"></span>
                                        <span class="am-icon-caret-down"></span>
                                    </button>
                                    <ul class="am-dropdown-content">
                                        <li>
                                            <a href="#">隐藏</a>
                                        </li>
                                        <li>
                                            <a href="#">删除</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="am-g">
                <div class="am-u-md-12">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">我的收获地址&nbsp;&nbsp;&nbsp;
                            <small>
                                <a href="">新增收货地址</a>
                            </small>
                            <span class="am-icon-chevron-down am-fr"></span>
                        </div>
                        <div class="am-panel-bd am-collapse am-in" id="collapse-panel-1">
                            <div class="am-scrollable-horizontal">
                                <table class="am-table am-table-bordered am-table-striped am-text-nowrap">
                                    <tr>
                                        <th>收货人</th>
                                        <th>所在地区</th>
                                        <th>详细地址</th>
                                        <th>邮编</th>
                                        <th>电话/手机</th>
                                        <th>操作</th>
                                    </tr>
                                    @foreach($addresses as $address)
                                        <tr>
                                            <td>{{$address->receiver_name}}</td>
                                            <td>{{$address->receiver_province.' '.$address->receiver_city.' '.$address->receiver_district}}</td>
                                            <td>{{$address->receiver_address}}</td>
                                            <td>{{$address->receiver_zip}}</td>
                                            <td>{{$address->receiver_phone.' / '.$address->receiver_mobile}}</td>
                                            <td>
                                                <a href="">修改</a>
                                                <a href="">删除</a>
                                            </td>
                                            <td>
                                            @if($address->default)
                                                <span style="color: red">默认地址</span>
                                            @else
                                                <a>设为默认地址</a>
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-md-12">
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">订购商品&nbsp;&nbsp;&nbsp;
                        <small>
                            <a href="">详细>></a>
                        </small>
                        <span class="am-icon-chevron-down am-fr"></span>
                    </div>
                    <div class="am-panel-bd am-collapse am-in" id="collapse-panel-2">
                        <div class="am-g">
                            <div class="am-u-md-6">
                                <table class="am-table am-table-bordered am-table-striped am-text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>订购水果类&nbsp;
                                            <!-- <small>
                                                <a href="">更多>></a>
                                            </small> -->
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td rowspan="6" style="width: 278px;">
                                            <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
                                                <ul class="am-slides">
                                                    <li>
                                                        <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" />
                                                    </li>
                                                    <li>
                                                        <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" />
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            名称:
                                        </td>
                                        <td>
                                            <span>清甜雪梨</span>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>来源</span>
                                        </td>
                                        <td>农牧云水果基地</td>
                                        <ul style="list-style-type: none;text-align:center;">


                                            <li></li>
                                        </ul>
                                    </tr>
                                    <tr>
                                        <td>
                                            成长期数:
                                        </td>
                                        <td>
                                            <span>第二期成长</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            还需支付期数:
                                        </td>
                                        <td>
                                            <span>1（共三期）</span>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>

                            <div class="am-u-md-6">
                                <table class="am-table am-table-bordered am-table-striped am-text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>订购牧产品&nbsp;
                                            <!-- <small>
                                                <a href="">更多>></a>
                                            </small> -->
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td rowspan="6" style="width: 278px;">
                                            <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
                                                <ul class="am-slides">
                                                    <li>
                                                        <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" />
                                                    </li>
                                                    <li>
                                                        <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" />
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            名称:
                                        </td>
                                        <td>
                                            <span>清甜雪梨</span>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>来源</span>
                                        </td>
                                        <td>农牧云水果基地</td>
                                        <ul style="list-style-type: none;text-align:center;">


                                            <li></li>
                                        </ul>
                                    </tr>
                                    <tr>
                                        <td>
                                            成长期数:
                                        </td>
                                        <td>
                                            <span>第一期成长</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            还需支付期数:
                                        </td>
                                        <td>
                                            <span>2（共三期）</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2018 搭建.</p>
        </footer>
    </div>
</div>

<div class="addLocation" style="display: none;width: 200px;height: 200px;color: red;position: absolute">
    1
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>


<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/amazeui.min.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>
</body>

</html>