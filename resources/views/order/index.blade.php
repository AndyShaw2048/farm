{{--@foreach($errors->all() as $error)--}}
{{--<p>{{$error}}</p>--}}
{{--@endforeach--}}
{{--@if($orders->first())--}}
{{--@foreach($orders as $order)--}}
    {{-------------------}}
    {{--<div>订单编号：{{$order->order_id}}--}}
        {{--|订单状态：{{$order->status}}--}}
        {{--@if(!($order->status > 4))--}}
        {{--|<a href="/home/order/cancel/{{$order->order_id}}">取消订单</a>--}}
        {{--@endif--}}
        {{--@if($order->status < 5 && $order->status > 1)--}}
        {{--|<a href="/home/order/receive/{{$order->order_id}}">确认收货</a>--}}
        {{--@endif--}}
        {{--@if($order->status == 5)--}}
            {{--|<a href="/home/order/rating/{{$order->order_id}}">发表评价</a>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--@endforeach--}}
{{--@else--}}
{{--暂时没有订单--}}
{{--@endif--}}

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
                <strong class="am-text-primary am-text-lg">我的订单</strong> /
                <small>MyOrder</small>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                    <tr>
                        <th style="color: red">
                            <span>全部订单&nbsp;&nbsp;&nbsp;</span>
                        </th>
                        <th>
                                    <span>
                                        <small>待付款</small>
                                    </span>
                        </th>
                        <th>
                                    <span>
                                        <small>待收货</small>
                                    </span>
                        </th>
                        <th>
                                    <span style="cursor: pointer;">
                                        <small>订单回收站</small>
                                    </span>
                        </th>
                        <th>
                            <input style="font-size: 0.9em;font-weight: lighter" type="search" placeholder="商品名称/订单号/牧场名称">
                            <button style="height: 27px;line-height: 10px;font-size: 0.9em;" type="button" class="am-btn am-btn-primary">搜索</button>
                        </th>
                    </tr>
                    </thead>
                </table>
                <table class="am-table am-table-bd am-table-striped admin-content-table" style="margin-bottom:15px;">
                    <thead>
                    <tr>
                        <th style="width: 200px;">
                            <select style="text-decoration: none;font-weight:initial;font-size: 0.8em;" id="doc-select-1">
                                <option value="option1">近三个月订单</option>
                                <option value="option2">今年内订单</option>
                                <option value="option3">2017年订单</option>
                            </select>
                        </th>
                        <th colspan="2">订单详情</th>
                        <th>收货人</th>
                        <th>金额</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="margin-bottom: 10px;border: 1px solid grey">
                        <td colspan="7">
                            <span>2018-3-31 11:15:56</span>
                            <span style="margin: 0 40px 0 40px;">订单号</span>
                            <span style="font-weight: bold">54161235133</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img style="width: 100px;height: 100px;" src="{{url('img/多汁石榴.jpg')}}" alt="">
                        </td>
                        <td>
                                    <span style="font-size: 0.8em;font-weight: bold">农牧云水果基地&nbsp;&nbsp;多汁石榴&nbsp;&nbsp;
                                        <br>500g/份
                                        <br>新鲜采集水果
                                    </span>
                        </td>
                        <td>
                            <span>x1</span>
                        </td>
                        <td>
                            <span style="font-size: 0.8em;">张三</span>
                            <i class="am-icon-user"></i>
                        </td>
                        <td>
                                    <span style="color: rgb(180, 180, 180);font-size: 0.8em;border-bottom: 1px solid  rgb(180, 180, 180);padding-bottom: 5px;">
                                        总额￥25.00
                                    </span>
                            <br>
                            <span style="font-size: 0.8em;color: rgb(180, 180, 180);margin-left:10px; ">在线支付</span>
                        </td>
                        <td>
                            <span style="color: rgb(180, 180, 180)">已完成</span>
                            <br>
                                    <span>
                                        <i class="am-icon-sellsy"></i>
                                        <span style="color: red;font-size: 0.7em;">+110经验</span>
                                    </span>
                            <br>
                                    <span style="font-size: 0.8em;">
                                        订单详情
                                    </span>
                        </td>
                        <td>
                            <button type="button" class="am-btn am-btn-default">再次购买</button>
                            <br>
                            <p style="color: red;margin: 2px 0 0 15px;cursor: pointer;">删除订单 </p>
                        </td>
                    </tr>


                    </tbody>
                </table>
                <table class="am-table am-table-bd am-table-striped admin-content-table" style="margin-bottom:15px;">

                    <tbody>
                    <tr style="margin-bottom: 10px;border: 1px solid grey">
                        <td colspan="7">
                            <span>2018-3-31 11:15:56</span>
                            <span style="margin: 0 40px 0 40px;">订单号</span>
                            <span style="font-weight: bold">54161235133</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img style="width: 100px;height: 100px;" src="{{url('img/多汁石榴.jpg')}}" alt="">
                        </td>
                        <td>
                                    <span style="font-size: 0.8em;font-weight: bold">农牧云水果基地&nbsp;&nbsp;多汁石榴&nbsp;&nbsp;
                                        <br>500g/份
                                        <br>新鲜采集水果
                                    </span>
                        </td>
                        <td>
                            <span>x1</span>
                        </td>
                        <td>
                            <span style="font-size: 0.8em;">张三</span>
                            <i class="am-icon-user"></i>
                        </td>
                        <td>
                                    <span style="color: rgb(180, 180, 180);font-size: 0.8em;border-bottom: 1px solid  rgb(180, 180, 180);padding-bottom: 5px;">
                                        总额￥25.00
                                    </span>
                            <br>
                            <span style="font-size: 0.8em;color: rgb(180, 180, 180);margin-left:10px; ">在线支付</span>
                        </td>
                        <td>
                            <span style="color: rgb(180, 180, 180)">已完成</span>
                            <br>
                                    <span>
                                        <i class="am-icon-sellsy"></i>
                                        <span style="color: red;font-size: 0.7em;">+110经验</span>
                                    </span>
                            <br>
                                    <span style="font-size: 0.8em;">
                                        订单详情
                                    </span>
                        </td>
                        <td>
                            <button type="button" class="am-btn am-btn-default">再次购买</button>
                            <br>
                            <p style="color: red;margin: 2px 0 0 15px;cursor: pointer;">删除订单 </p>
                        </td>
                    </tr>


                    </tbody>
                </table>
                <table class="am-table am-table-bd am-table-striped admin-content-table" style="margin-bottom:15px;">

                    <tbody>
                    <tr style="margin-bottom: 10px;border: 1px solid grey">
                        <td colspan="7">
                            <span>2018-3-31 11:15:56</span>
                            <span style="margin: 0 40px 0 40px;">订单号</span>
                            <span style="font-weight: bold">54161235133</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img style="width: 100px;height: 100px;" src="{{url('img/多汁石榴.jpg')}}" alt="">
                        </td>
                        <td>
                                    <span style="font-size: 0.8em;font-weight: bold">农牧云水果基地&nbsp;&nbsp;多汁石榴&nbsp;&nbsp;
                                        <br>500g/份
                                        <br>新鲜采集水果
                                    </span>
                        </td>
                        <td>
                            <span>x1</span>
                        </td>
                        <td>
                            <span style="font-size: 0.8em;">张三</span>
                            <i class="am-icon-user"></i>
                        </td>
                        <td>
                                    <span style="color: rgb(180, 180, 180);font-size: 0.8em;border-bottom: 1px solid  rgb(180, 180, 180);padding-bottom: 5px;">
                                        总额￥25.00
                                    </span>
                            <br>
                            <span style="font-size: 0.8em;color: rgb(180, 180, 180);margin-left:10px; ">在线支付</span>
                        </td>
                        <td>
                            <span style="color: rgb(180, 180, 180)">已完成</span>
                            <br>
                                    <span>
                                        <i class="am-icon-sellsy"></i>
                                        <span style="color: red;font-size: 0.7em;">+110经验</span>
                                    </span>
                            <br>
                                    <span style="font-size: 0.8em;">
                                        订单详情
                                    </span>
                        </td>
                        <td>
                            <button type="button" class="am-btn am-btn-default">再次购买</button>
                            <br>
                            <p style="color: red;margin: 2px 0 0 15px;cursor: pointer;">删除订单 </p>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <footer class=" admin-content-footer ">
            <hr>
            <p class="am-padding-left ">© 2018 搭建.</p>
        </footer>
    </div>
</div>

<a href="# " class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu " data-am-offcanvas="{target:
                                    '#admin-offcanvas'} "></a>


<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/amazeui.min.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>
</div>
</body>

</html>