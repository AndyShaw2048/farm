<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{url('css/order.css')}}">
    <link rel="stylesheet" href="{{url('css/message.css')}}">
    <meta name="_token" content="{{ csrf_token() }}">
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
            <img style="width: 90%;" src="/uploads/{{$goods->logo}}" alt="">
        </div>
        <div class="am-u-sm-6">
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
                    <span style="margin-left: 10px;color: red;font-size: 1.2em;">3期</span>
                </li>
                <li>
                        <span>
                            月销量
                            <span style="color: red;margin-left: 30px;">{{$goods->stocks}}</span>
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
                            <input style="height: 40px;margin-left: 15px;" id="amount" type="number" value="1" min="1" max="99">
                        </span>
                </li>
                <li>
                    <form action="/goods/buy/{{$goods->id}}" method="post">
                        @csrf
                        <button style="margin-left: 80px;" id="add-cart" type="button" class="am-btn am-btn-danger">加入购物车</button>
                        <input id="goods_id" name="goods_id" value="{{$goods->id}}" hidden>
                        <input name="num" value="100" hidden>
                        <button style="margin-left: 30px;" id="add-cart" type="submit" class="am-btn am-btn-danger">立即购买</button>
                    </form>
                </li>
            </ul>
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
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="">管理登录</a>
    </p>
</div>

<script src="{{url('assets/js/jquery.js ')}}"></script>
<script src="{{url('assets/js/amazeui.min.js ')}}"></script>
<script src="{{url('assets/js/app.js')}} "></script>
<script src="{{url('js/message.min.js')}}"></script>
<script>
    var price = $("#price").text();
    $("#add-cart").click(function() {
        var goods_id = $('#goods_id').val();
        var amount = $('#amount').val();
        $.ajax({
            type: 'POST',
            url: '/home/cart/add',
            data: {goods_id:goods_id,amount:amount},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data){
                if (data[0].code == 200){

                    $.message({
                        message:'添加成功',
                        time:'1000',
                        type:'success'
                    });
                }
                else{
                    $.message({
                        message: '添加失败',
                        type: 'error'
                    });

                }
            },
            error: function(xhr, type){
                alert('Ajax error!')
            }
        });
    });
</script>
</body>

</html>