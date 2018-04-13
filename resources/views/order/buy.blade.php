{{--<p>商品名称：{{$goods->name}}</p>--}}
{{--<p>商品描述：{{$goods->description}}</p>--}}
{{--<p>商品logo：{{$goods->logo}}</p>--}}
{{--<p>商品实物图：{{$goods->pics}}</p>--}}
{{--<p>商品类型：{{$goods->goods_type}}</p>--}}
{{--<p>商品单价：{{$goods->price}}</p>--}}
{{--<p>商品库存：{{$goods->stocks}}</p>--}}
{{--<p>商品销量：{{$goods->sales}}</p>--}}


{{--@if($errors->any())--}}
    {{--@foreach($errors->all() as $error)--}}
        {{--<div>{{$error}}</div>--}}
    {{--@endforeach--}}
{{--@endif--}}
{{--<form action="self" method="post">--}}
    {{--@csrf--}}
    {{--<input type="text" name="goods_id" value="{{$goods->id}}" hidden>--}}
    {{--<p>购买数量：<input type="text" name="num"></p>--}}
    {{--<p>真实姓名：<input type="text" name="name"></p>--}}
    {{--<p>固定电话：<input type="text" name="phone"></p>--}}
    {{--<p>移动电话：<input type="text" name="mobile"></p>--}}
    {{--<p>省份：<input type="text" name="province"></p>--}}
    {{--<p>城市：<input type="text" name="city"></p>--}}
    {{--<p>区县：<input type="text" name="district"></p>--}}
    {{--<p>地址：<input type="text" name="address"></p>--}}
    {{--<p>邮编：<input type="text" name="zip"></p>--}}
    {{--<button type="submit">Sub</button>--}}
{{--</form>--}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100%;
            overflow: auto;
        }

        .nav {
            width: 1200px;
            margin: 0 auto;
        }

        .nav table {
            width: 100%;
        }

        .body-head {
            background: rgb(28, 105, 28);
        }

        .main-nav {
            width: 900px;
            margin: 0 auto;

        }

        .info {
            background: rgb(34, 132, 150);
        }

        .inf-table {
            width: 900px;
            margin: 0 auto;
            height: 100px;
        }

        .inf-table th {
            width: 33.33%;
            text-align: center;
            color: white;
            font-size: 2em;
        }

        .logo {
            width: 20vm;
        }

        .logo img {
            height: 100px;
        }

        .title {
            font-size: 1.6em;
            font-family: 华文楷体;
        }

        .shopCart {
            padding-left: 50px;
        }

        .shopCart-span {
            font-size: 0.8em;
            font-weight: lighter;
        }

        .detail {
            width: 1200px;
            margin: 30px auto 0;

        }

        .foot {
            width: 100%;
            height: 200px;
            background: black;
            color: white;
            text-align: center;
            font-size: 14px;
            font-weight: normal;
            margin-top: -6px;
        }


        .am-list li {
            height: 47px;
            line-height: 47px;
        }

        .foot p {
            margin: 0;
            padding: 0;
        }

        .foot p:first-child {
            padding-top: 50px;
        }

        .foot p:last-child {
            padding-top: 20px;
        }
    </style>
</head>

<body>
<div class="nav">
    <table>
        <tr>
            <th class="logo">
                <img src="{{url('img/农牧云1.png')}}" alt="">
                <span class="title">农牧云</span>
            </th>

            <th class="farm">
                <span>四川优质牧场</span>
            </th>
            <th>
                <div class="am-input-group am-input-group-danger">

                    <input type="text" class="am-form-field">
                        <span class="am-input-group-btn">
                            <button class="am-btn am-btn-danger" type="button">
                                <span class="am-icon-search">搜索本牧场</span>
                            </button>
                        </span>
                </div>
            </th>
            <th class="shopCart">
                <button class="am-btn am-btn-default" type="button">
                    <span class="am-icon-shopping-bag"></span>
                    <a href="{{url('/home/account/cart')}}">
                        <span class="shopCart-span">我的购物车
                            <span style="color: red;">5</span>
                        </span>
                    </a>
                </button>
            </th>
        </tr>
    </table>
</div>
<div class="am-g body-head">
    <div class="am-u-lg-12 info">
        <table class="inf-table">
            <tr>
                <th>
                    这里需要东西
                </th>
                <th>
                    这里需要东西
                </th>
                <th>
                    这里需要东西
                </th>
            </tr>
        </table>
    </div>
    <div class="main-nav">
        <ul class="am-nav am-nav-pills am-nav-justify">
            <li class="am-active">
                <a href="#">首页</a>
            </li>
            <li>
                <a href="#">所有商品</a>
            </li>
            <li>
                <a href="#">荔枝</a>
            </li>
            <li>
                <a href="#">苹果</a>
            </li>

            <li>
                <a href="#">猕猴桃</a>
            </li>

            <li>
                <a href="#">芒果</a>
            </li>

            <li>
                <a href="#">石榴</a>
            </li>
        </ul>
    </div>

</div>
<div class="detail am-g">
    <div class="am-u-sm-12">
        <div class="am-u-sm-5">
            <img style="width: 100%;border: 1px solid;" src="{{url('uploads/'.$goods->logo)}}" alt="">
        </div>
        <div class="am-u-sm-5">
            <ul class="am-list" style="height:100%">
                <li>
                        <span style="font-size:1.3em;font-weight: bolder;">
                            <span style="color: red;font-size: 1.4em;">疯狂订购</span> {{$goods->name}}
                        </span>
                </li>
                <li>
                    <span>价格</span>
                    <span style="text-decoration: line-through;margin-left: 40px;">￥49.90/期</span>
                </li>

                <li>
                        <span>促销价
                            <span style="font-size: 30px;color: red;margin-left: 20px;" id="price">￥{{$goods->price}}/期</span>
                        </span>
                </li>
                <li>
                    <span>总共期数:</span>
                    <span style="margin-left: 10px;color: red;font-size: 1.2em;">3期</span>
                </li>
                <li>
                        <span>
                            月销量
                            <span style="color: red;margin-left: 30px;">2000</span>
                        </span>
                    <!-- <span>
                        累计评价
                        <span style="color: red;margin-left: 30px;">880</span>
                    </span> -->
                </li>
                <li>
                        <span>来源
                            <strong style="margin-left: 45px;">农牧场水果基地</strong>
                        </span>
                </li>
                <li>
                        <span id="count">购买数量
                            <input style="height: 40px;margin-left: 15px;" id="count-input" type="number" value="1" min="1" max="99">
                        </span>
                </li>
                <li>
                        <span>
                            <strong>总价:
                                <span id="total-price" style="margin-left: 40px;color: red;font-size: 1.5em;">25</span>
                            </strong>
                        </span>
                </li>
                <li>
                    <button style="margin-left: 80px;" id="add-cart" type="button" class="am-btn am-btn-danger">加入购物车</button>
                    <button style="margin-left: 30px;" id="add-cart" type="button" class="am-btn am-btn-danger">立即购买</button>
                </li>
            </ul>
        </div>
        <div style="margin-top:20px;">
            <ul class="am-avg-sm-4 am-thumbnails">
                <li>
                    <img class="am-thumbnail" src="{{url('img/荔枝.jpg')}}" />
                </li><li>
                    <img class="am-thumbnail" src="{{url('img/荔枝.jpg')}}" />
                </li><li>
                    <img class="am-thumbnail" src="{{url('img/荔枝.jpg')}}" />
                </li><li>
                    <img class="am-thumbnail" src="{{url('img/荔枝.jpg')}}" />
                </li>
            </ul>
        </div>
    </div>

</div>
<div class="foot">
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="">管理登录</a>
    </p>
</div>

<script src="{{url('assets/js/jquery.js')}} "></script>
<script src="{{url('assets/js/amazeui.min.js')}} "></script>
<script src="{{url('assets/js/app.js')}} "></script>
<script>
    var price = $("#price").text();
    $("#add-cart").click(function () {
        alert("成功加入购物车");
        $("#count-input").val(1);
        $("#total-price").html(price);
    });
</script>
</body>

</html>