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
    <link rel="stylesheet" href="{{url('css/order.css')}}">
    <title>Document</title>

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
                        <span>Home&nbsp;Page</span>
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
                    <a href="/cloudtravel">云游天下
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
                        <button class="am-btn am-btn-default" type="button">
                            <span class="am-icon-shopping-bag"></span>
                                <span class="shopCart-span">我的购物车
                                    <span style="color: red;">5</span>
                                </span>
                        </button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="detail am-g">
    <div class="am-u-sm-12">
        <div class="am-u-sm-6">
            <img style="width: 90%;border: 1px solid;" src="/uploads/{{$goods->pic}}" alt="">
        </div>
        <div class="am-u-sm-6">
            <form action="/adoption/buy/{{$goods->id}}" method="post">
                @csrf
            <ul class="am-list" style="height:100%">
                <li>
                        <span style="font-size:1.3em;font-weight: bolder;">
                             {{$goods->description}}
                        </span>
                </li>
                <li>
                    <span>价格</span>
                    <span style="text-decoration: line-through;margin-left: 40px;">￥{{$goods->price+20}}/期</span>
                </li>

                <li>
                        <span>促销价
                            <span style="font-size: 30px;color: red;margin-left: 20px;" id="price">￥{{$goods->price}}/期</span>
                        </span>
                </li>
                <li>
                    <span>总共期数:</span>
                    <span style="margin-left: 10px;color: red;font-size: 1.2em;">{{$goods->total_stage}} 期</span>
                </li>
                <li>
                        <span>
                            月销量
                            <span style="color: red;margin-left: 30px;">563</span>
                        </span>
                    <!-- <span>
                        累计评价
                        <span style="color: red;margin-left: 30px;">880</span>
                    </span> -->
                </li>
                <li>
                        <span>来源
                            <strong style="margin-left: 45px;">{{$goods->thisFarm->name}}</strong>
                        </span>
                </li>
                <li>
                        <span id="count">购买数量
                            <input style="height: 40px;margin-left: 15px;" id="count-input" type="number" value="1" min="1" max="99" name="adopt_num">
                        </span>
                </li>
                <li>

                        <button style="margin-left: 80px;" id="add-cart" type="button" class="am-btn am-btn-danger">加入购物车</button>
                        <input name="goods_id" value="{{$goods->id}}" hidden>
                        <input name="num" value="100" hidden>
                        <button style="margin-left: 30px;" id="add-cart" type="submit" class="am-btn am-btn-danger">立即购买</button>

                </li>
            </ul>
            </form>
        </div>
    </div>
</div>
<div class="am-g desc">
    <div class="am-g">
        <ul class="goods-nav">
            <li>商品详细</li>
            <li>农场介绍</li>
        </ul>
    </div>
    <div class="am-g goods-info">
        <div class="desc-img">
            <div class="am-g">
                <img src="{{url('img/desc1 (2).jpg')}}" alt="">

            </div>
            <p class="desc-p"><span>草原牛</span>至今一直保持着自由放牧的饲养方式。研究表明，在自由放牧条件下的牛因其摄食的牧草而使其肌肉的抗氧化能力高于舍饲的牛羊。在自由放牧条件下，动物可以从牧草中摄入较多的维生素类（A、C、E等）、多不饱和脂肪酸以及具有抗氧化能力的矿物质等。放牧的牛羊能够自由活动，适宜的运动量能增加肌肉中抗氧化酶的活力，使得自由基的产生和清除达到平衡。</p>

        </div>
    </div>
    <div class="am-g goods-detail-li" style="margin-left: 20px;margin-top: 20px;">
        <div class="goods-detail">
            <div class="detail-left am-u-lg-5">
                <img src="{{url('img/牛1.jpg')}}" alt="">
                <h1>养殖特点</h1>
                <p>草原黄牛，主要以放牧为主，主食为草料，因此，相对饲养场的牛，生长周期要长，肉质也更好。</p>
            </div>
            <div class="detail-right am-u-lg-5">
                <h1>功效作用</h1>
                <p>草原黄牛以产肉性能高，胴体瘦肉多而出名，肉的营养价值极高：肉牛蛋白质含量高达8%-9.5%，而且人食用后的消化率高达90%以上。牛肉脂肪能提供大量的热能。牛肉的矿物质含量是猪肉的2倍以上。</p>
                <img src="{{url('img/牛肉 (2).jpg')}}" alt="">
                <img src="{{url('img/牛肉.jpg')}}" alt="">
            </div>
        </div>
    </div>

</div>
<div class="foot">
    <p>©2018 -南充市云谷驴图互联网科技有限公司-版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="/admin">网站管理</a>
    </p>
</div>

<script src="{{url('assets/js/jquery.js ')}}"></script>
<script src="{{url('assets/js/amazeui.min.js ')}}"></script>
<script src="{{url('assets/js/app.js')}} "></script>
<script>
    var price = $("#price").text();
    $("#add-cart").click(function() {
        alert("成功加入购物车");
//        $("#count-input").val(1);
//        $("#total-price").html(price);
    });
</script>
</body>

</html>