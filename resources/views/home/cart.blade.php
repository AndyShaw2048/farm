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
                    <strong class="am-text-primary am-text-lg">购物车</strong> /
                    <small>ShoppingCart</small>
                </div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table am-table-bd am-table-striped admin-content-table">
                        <thead>
                        <tr>
                            <th style="color: red">
                                <span>全部商品&nbsp;&nbsp;&nbsp;</span>
                                <span>2</span>
                            </th>

                            <th style="padding-left: 50px;">

                                <label for="doc-select-1" style="text-decoration: none;font-weight:initial;">
                                    <small>配送至:</small>
                                </label>
                                <select style="text-decoration: none;font-weight:initial;font-size: 0.8em;" id="doc-select-1">
                                    <option value="option1">四川省&nbsp南充市&nbsp顺庆区&nbsp华凤 街道</option>
                                    <option value="option2">四川省&nbsp南充市&nbsp顺庆区&nbsp华凤 街道</option>
                                    <option value="option3">四川省&nbsp南充市&nbsp顺庆区&nbsp华凤 街道</option>
                                </select>
                                <span class="am-form-caret"></span>

                            </th>
                        </tr>
                        <tr>
                            <th style="width: 120px;">
                                <input type="checkbox" name="" id="">全选
                            </th>
                            <th>商品</th>
                            <th>单价</th>
                            <th>数量</th>
                            <th>小计</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="6" style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">农牧云牧场</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td style="line-height:40px;">
                                <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="img/猕猴桃.jpg" alt="">
                                <span>农牧云水果基地</span>
                                <br>
                                <span>猕猴桃</span>
                                <br>
                                <span>500g/份</span>
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <input style="width: 50px;" type="number" minlength="0" value="1">
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <span style="cursor:pointer;color: red">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td style="line-height:40px;">
                                <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="img/玉米.jpg" alt="">
                                <span>农牧云蔬菜基地</span>
                                <br>
                                <span>玉米</span>
                                <br>
                                <span>500g/份</span>
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <input style="width: 50px;" type="number" minlength="0" value="1">
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <span style="cursor:pointer;color: red">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">西南大牧场</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td style="line-height:40px;">
                                <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="img/多汁石榴.jpg" alt="">
                                <span>西南大牧场水果基地</span>
                                <br>
                                <span>多汁石榴</span>
                                <br>
                                <span>500g/份</span>
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <input style="width: 50px;" type="number" minlength="0" value="1">
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <span style="cursor:pointer;color: red">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td style="line-height:40px;">
                                <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="img/番茄.jpg" alt="">
                                <span>西南大牧场蔬菜基地</span>
                                <br>
                                <span>番茄</span>
                                <br>
                                <span>500g/份</span>
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <input style="width: 50px;" type="number" minlength="0" value="1">
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <span style="cursor:pointer;color: red">删除</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table am-table-bd am-table-striped admin-content-table">

                        <tr>
                            <td>
                                <input type="checkbox">全选
                            </td>
                            <td>
                                <span>删除选中商品</span>
                            </td>
                            <td>
                                    <span>已选择
                                        <span style="color: red">4</span> 件商品</span>
                            </td>
                            <td>总价
                                <span style="color: red;font-size: 1.4em">￥100</span>
                            </td>
                            <td>
                                <button type="button" class="am-btn am-btn-danger">结算</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <footer class=" admin-content-footer ">
                <hr>
                <p class="am-padding-left ">© 2018 搭建.</p>
            </footer>
        </div>
    </div>

    <div class="addLocation " style="display: none;width: 200px;height: 200px;color: red;position: absolute ">
        1
    </div>

    <a href="# " class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu " data-am-offcanvas="{target:
                                        '#admin-offcanvas'} "></a>


    <script src="{{url('assets/js/jquery.js')}}"></script>
    <script src="{{url('assets/js/amazeui.min.js')}}"></script>
    <script src="{{url('assets/js/app.js')}}"></script>
    </div>
</body>
</html>