<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('css/cloudShop.css')}}" />
    <script src="{{url('assets/js/jquery.js')}} " type="text/javascript " charset="utf-8 "></script>
    <script src="{{url('assets/js/amazeui.js')}} "></script>
    <title>农牧云|云上集市</title>
</head>

<body>
<div class="am-g head">
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
                    <a href="/home"> 个人中心
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
<div class="am-g">
    <div class="am-u-lg-12" style="padding: 0;">
        <div class="am-g">
            <div class="am-g dropdown-nav" style="position: absolute;top: 11vw;left: 16vw;">
                <div class="dropdown">
                    <ul class="buy-list">
                        <li id="left-0">
                            <a href="">
                                全部商品
                            </a>
                        </li>
                        <li class="left-list" id="left-1">
                            <a href="">新鲜水果类
                                <i class="am-icon-angle-right"></i>
                            </a>
                        </li>
                        <li class="left-list" id="left-2">
                            <a href="">新鲜蔬菜类
                                <i class="am-icon-angle-right"></i>
                            </a>
                        </li>
                        <li class="left-list" id="left-3">
                            <a href="">精品肉类
                                <i class="am-icon-angle-right"></i>
                            </a>
                        </li>
                        <li class="left-list" id="left-4">
                            <a href="">各种蛋类
                                <i class="am-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="right-side right-side-carousel">
                    <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
                        <ul class="am-slides">
                            <li>
                                <img src="img/shop-carousel2.jpg" />
                            </li>
                            <li>
                                <img src="img/shop-carousel3.jpg" />
                            </li>
                            <li>
                                <img src="img/shop-carousel4.jpg" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right-side" id="right-side-0">
                    <div>
                        <h1>农牧云云上集市</h1>
                        <h2>提供多种多样的绿色新鲜健康食品
                            <br> 您的健康我们来护航</h2>
                    </div>
                </div>
                <div class="right-side" id="right-side-1">
                    <div class="foods-head">
                        <h1>多汁类水果
                                <span>
                                    更多>>
                                </span>
                        </h1>

                    </div>
                    <div class="food-name">
                        @foreach($goods as $good)
                            @if($good->goods_type == 1)
                            <a href="/goods/buy/{{$good->id}}">{{$good->name}}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="right-side" id="right-side-2">
                    <div class="foods-head">
                        <h1>新鲜蔬菜
                                <span>
                                    更多>>
                                </span>
                        </h1>

                    </div>
                    <div class="food-name">
                        @foreach($goods as $good)
                            @if($good->goods_type == 4)
                                <a href="/goods/buy/{{$good->id}}">{{$good->name}}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="right-side" id="right-side-3">
                    <div class="foods-head">
                        <h1>精品肉类
                                <span>
                                    更多>>
                                </span>
                        </h1>

                    </div>
                    <div class="food-name">
                        @foreach($goods as $good)
                            @if($good->goods_type == 3)
                                <a href="/goods/buy/{{$good->id}}">{{$good->name}}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="right-side" id="right-side-4">
                    <div class="foods-head">
                        <h1>蛋类
                                <span>
                                    更多>>
                                </span>
                        </h1>

                    </div>
                    <div class="food-name">
                        @foreach($goods as $good)
                            @if($good->goods_type == 5)
                                <a href="/goods/buy/{{$good->id}}">{{$good->name}}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <img id="big-img" style="width: 100%" src="img/集市3.png" alt=" ">
        </div>

    </div>
</div>

<div class="body">
    <div class="am-g commodity-list">
        <div style="clear:both"></div>
        <div class="hot-goods" id="hot-goods">
            <table cellspacing="0">
                <tr class="cloud-shop">

                </tr>
                <tr class="hot-title">
                    <td colspan="4 ">
                        <img src="img/瓜果蔬菜.png" alt="">
                        <div style="height: 10px"></div>
                    </td>
                </tr>
                <tr class="kinds">
                    <td id="kinds1" class="hot-goods-class">
                        <p>
                            <i class="fa fa-bars " aria-hidden="true "></i>
                        </p>
                        <p>全部商品</p>
                    </td>
                    <td id="kinds2">
                        <p>
                            <i class="fa fa-coffee " aria-hidden="true "></i>
                        </p>
                        <p>瓜果类</p>
                    </td>
                    <td id="kinds3">
                        <p>
                            <i class="fa fa-graduation-cap " aria-hidden="true "></i>
                        </p>
                        <p>蔬菜类</p>
                    </td>
                    <td id="kinds4">
                        <p>
                            <i class="fa fa-mobile " aria-hidden="true "></i>
                        </p>
                        <p>其他类</p>
                    </td>
                </tr>

            </table>
            <ul class="hot-goods-img" id="hot-goods-1">
                @foreach($goods as $good)
                    @if($good->goods_type == 1 || $good->goods_type == 4)
                    <li>
                        <div class="goods-li">
                            <div class="goods-imgs">
                                <a href="/goods/buy/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
                            </div>
                            <span class="goods-price">￥{{$good->price}}</span>
                            <span class="sales-volume">月销量: {{$good->stocks}}</span>
                            <br>
                            <p class="goods-desc">
                                <a href="/goods/buy/{{$good->id}}">{{$good->description}}</a>
                            </p>
                                <span class="goods-origin">{{$good->thisFarm->name}}</span>
                            <br>
                        </div>
                    </li>
                    @endif
                @endforeach
            </ul>
            <ul class="hot-goods-img" id="hot-goods-2">
                @foreach($goods as $good)
                    @if($good->goods_type == 1)
                        <li>
                            <div class="goods-li">
                                <div class="goods-imgs">
                                    <a href="/goods/buy/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
                                </div>
                                <span class="goods-price">￥{{$good->price}}</span>
                                <span class="sales-volume">月销量: {{$good->stocks}}</span>
                                <br>
                                <p class="goods-desc">
                                    <a href="/goods/buy/{{$good->id}}">{{$good->description}}</a>
                                </p>
                                <span class="goods-origin">{{$good->thisFarm->name}}</span>
                                <br>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
            <ul class="hot-goods-img" id="hot-goods-3">
                @foreach($goods as $good)
                    @if($good->goods_type == 4)
                        <li>
                            <div class="goods-li">
                                <div class="goods-imgs">
                                    <a href="/goods/buy/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
                                </div>
                                <span class="goods-price">￥{{$good->price}}</span>
                                <span class="sales-volume">月销量: {{$good->stocks}}</span>
                                <br>
                                <p class="goods-desc">
                                    <a href="/goods/buy/{{$good->id}}">{{$good->description}}</a>
                                </p>
                                <span class="goods-origin">{{$good->thisFarm->name}}</span>
                                <br>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
            <ul class="hot-goods-img" id="hot-goods-4">
                @foreach($goods as $good)
                    @if($good->goods_type == 1)
                        <li>
                            <div class="goods-li">
                                <div class="goods-imgs">
                                    <a href="/goods/buy/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
                                </div>
                                <span class="goods-price">￥{{$good->price}}</span>
                                <span class="sales-volume">月销量: {{$good->stocks}}</span>
                                <br>
                                <p class="goods-desc">
                                    <a href="/goods/buy/{{$good->id}}">{{$good->description}}</a>
                                </p>
                                <span class="goods-origin">{{$good->thisFarm->name}}</span>
                                <br>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div style="clear:both"></div>
        <div class="hot-goods" id="hot-goods">
            <table cellspacing="0 ">
                <tr class="hot-title meat" id="meat">
                    <td colspan="4 ">
                        <div style="height:50px;"></div>
                        <img src="img/农牧产品.png" alt="">
                        <div style="height:10px;"></div>
                    </td>
                </tr>
                <tr class="kinds">
                    <td id="meat1" class="hot-goods-class">
                        <p>
                            <i class="fa fa-bars " aria-hidden="true"></i>
                        </p>
                        <p>所有商品</p>
                    </td>
                    <td id="meat2">
                        <p>
                            <i class="fa fa-coffee" aria-hidden="true"></i>
                        </p>
                        <p>家禽类</p>
                    </td>
                    <td id="meat3">
                        <p>
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </p>
                        <p>禽蛋类</p>
                    </td>
                    <td id="meat4">
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </p>
                        <p>鲜肉类</p>
                    </td>
                </tr>

            </table>
            <ul class="hot-goods-img" id="hot-meat-1">
                @foreach($goods as $good)
                    @if($good->goods_type == 2 || $good->goods_type == 3 || $good->goods_type == 5 )
                        <li>
                            <div class="goods-li">
                                <div class="goods-imgs">
                                    <a href="/goods/buy/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
                                </div>
                                <span class="goods-price">￥{{$good->price}}</span>
                                <span class="sales-volume">月销量: {{$good->stocks}}</span>
                                <br>
                                <p class="goods-desc">
                                    <a href="/goods/buy/{{$good->id}}">{{$good->description}}</a>
                                </p>
                                <span class="goods-origin">{{$good->thisFarm->name}}</span>
                                <br>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
            <ul class="hot-goods-img" id="hot-meat-2">
                @foreach($goods as $good)
                    @if($good->goods_type == 2)
                        <li>
                            <div class="goods-li">
                                <div class="goods-imgs">
                                    <a href="/goods/buy/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
                                </div>
                                <span class="goods-price">￥{{$good->price}}</span>
                                <span class="sales-volume">月销量: {{$good->stocks}}</span>
                                <br>
                                <p class="goods-desc">
                                    <a href="/goods/buy/{{$good->id}}">{{$good->description}}</a>
                                </p>
                                <span class="goods-origin">{{$good->thisFarm->name}}</span>
                                <br>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
            <ul class="hot-goods-img" id="hot-meat-3">
                @foreach($goods as $good)
                    @if($good->goods_type == 5)
                        <li>
                            <div class="goods-li">
                                <div class="goods-imgs">
                                    <a href="/goods/buy/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
                                </div>
                                <span class="goods-price">￥{{$good->price}}</span>
                                <span class="sales-volume">月销量: {{$good->stocks}}</span>
                                <br>
                                <p class="goods-desc">
                                    <a href="/goods/buy/{{$good->id}}">{{$good->description}}</a>
                                </p>
                                <span class="goods-origin">{{$good->thisFarm->name}}</span>
                                <br>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
            <ul class="hot-goods-img" id="hot-meat-4">
                @foreach($goods as $good)
                    @if($good->goods_type == 3)
                        <li>
                            <div class="goods-li">
                                <div class="goods-imgs">
                                    <a href="/goods/buy/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
                                </div>
                                <span class="goods-price">￥{{$good->price}}</span>
                                <span class="sales-volume">月销量: {{$good->stocks}}</span>
                                <br>
                                <p class="goods-desc">
                                    <a href="/goods/buy/{{$good->id}}">{{$good->description}}</a>
                                </p>
                                <span class="goods-origin">{{$good->thisFarm->name}}</span>
                                <br>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="am-popup" id="my-popup" style="height:533.5px;">
    <div class="am-popup-inner">
        <div class="am-popup-hd">
            <h4 class="am-popup-title">商品详细信息</h4>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd">
            <div class="am-g">
                <div class="am-u-sm-5">
                    <img src="img/荔枝.jpg" alt=" ">
                </div>
                <div style="margin-left:35px;width:305px; " class="am-u-sm-5 ">
                    <ul class="am-list " style="text-align:center;height:100% ">
                        <li style="height:51.6px;line-height:50px; ">
                            <span style="font-size:1.3em;font-weight: bolder; ">多汁荔枝</span>
                                <span style="margin-left:5px;color:red ">
                                    <small>
                                        <span id="price">25</span>￥/份(500g)
                                    </small>

                                </span>
                        </li>
                        <li style="height:51.6px;line-height:50px;">
                                <span>
                                    <strong>来源:</strong> 农牧场水果基地</span>
                        </li>

                        <li style="height:51.6px;line-height:50px; ">
                                <span id="count">购买数量:
                                    <input id="count-input" type="number" value="1" min="0" max="99">
                                </span>
                        </li>
                        <li style="height:51.6px;line-height:50px; ">
                                <span>
                                    <strong>总价:
                                        <span id="total-price">11</span>
                                    </strong>
                                </span>
                        </li>
                        <li style="height:54.6px;line-height:50px; ">
                            <button id="add-cart" type="button" class="am-btn am-btn-danger">加入购物车</button>
                        </li>
                    </ul>
                </div>


            </div>
            <div style="margin-top:20px; ">
                <ul class="am-avg-sm-3 am-thumbnails">
                    <li>
                        <img class="am-thumbnail" style="width:192px;height:110px; " src="img/荔枝.jpg" />
                    </li>
                    <li>
                        <img class="am-thumbnail" style="width:192px;height:110px; " src="img/荔枝.jpg" />
                    </li>
                    <li>
                        <img class="am-thumbnail" style="width:192px;height:110px; " src="img/荔枝.jpg" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div style="clear:both"></div>

<div class="foot" style="margin-top: 20px">
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href=" ">管理登录</a>
    </p>
</div>

<script type="text/javascript ">
    $(window).bind("scroll", function() {
        var top = $(this).scrollTop();
        if (top >= 1) {
            $(".nav").css({
                "background": "white",
                "opacity": "1",
                "transition": "background-color 1s"
            });
            $(".nav-table a").css("color", "black");
            $(".company a").css("color", "black");
            $(".logo span").css("color", "black");
            $(".am-input-group").css("opacity", "1")
            $(".title").attr("src", "img/标题-黑.png")
        }
        if (top == 0) {
            $(".nav").css({
                "background": "none",
                "opacity": "1",
            });
            $(".nav-table a").css("color", "white");
            $(".company a").css("color", "white");
            $(".logo span").css("color", "white");
            $(".am-input-group").css("opacity", "0.5")
            $(".title").attr("src", "img/标题.png")
        }
    });
    $("#big-img").mouseover(() => {
        $(".right-side").css("display", "none");
    $(".right-side-carousel").css("display", "block");
    });
    var price = $("#price").text();
    $("#add-cart").click(function() {
        alert("成功加入购物车");
        $("#count-input").val(1);
        $("#total-price").html(price);
    });
    var count = $(".buy-list li").length;
    $(() => {
        $(".buy-list li").mouseover((resp) => {

        $(".right-side-carousel").css("display", "none");
    let temptId = $(resp.currentTarget).attr("id");
    let newId = temptId.split("-");
    for (let i = 0; i < count; i++) {
        $("#right-side-" + i).css("display", "none");
    }
    $("#right-side-" + newId[1]).css("display", "block");
    });
    $("#total-price").html(price)
    $("#count-input").click(function() {
        let totalPrice = this.value * price
        $("#total-price").html(totalPrice)
    });

    $("#kinds1").click(function() {
        for (var i = 0; i < 4; i++) {
            $("#kinds" + (i + 1)).removeClass();
            $("#hot-goods-" + (i + 1)).css("display", "none");
        }
        $("#kinds1").addClass("hot-goods-class");
        $("#hot-goods-1").css("display", "block");
    });
    $("#kinds2").click(function() {
        for (var i = 0; i < 4; i++) {
            $("#kinds" + (i + 1)).removeClass();
            $("#hot-goods-" + (i + 1)).css("display", "none");
        }
        $("#kinds2").addClass("hot-goods-class");
        $("#hot-goods-2").css("display", "block");
    });
    $("#kinds3").click(function() {
        for (var i = 0; i < 4; i++) {
            $("#kinds" + (i + 1)).removeClass();
            $("#hot-goods-" + (i + 1)).css("display", "none");
        }
        $("#kinds3").addClass("hot-goods-class");
        $("#hot-goods-3").css("display", "block");
    });
    $("#kinds4").click(function() {
        for (var i = 0; i < 4; i++) {
            $("#kinds" + (i + 1)).removeClass();
            $("#hot-goods-" + (i + 1)).css("display", "none");
        }
        $("#kinds4").addClass("hot-goods-class");
        $("#hot-goods-4").css("display", "block");
    });
    $("#meat1").click(function() {
        for (var i = 0; i < 4; i++) {
            $("#meat" + (i + 1)).removeClass();
            $("#hot-meat-" + (i + 1)).css("display", "none");
        }
        $("#meat1").addClass("hot-goods-class");
        $("#hot-meat-1").css("display", "block");
    });
    $("#meat2").click(function() {
        for (var i = 0; i < 4; i++) {
            $("#meat" + (i + 1)).removeClass();
            $("#hot-meat-" + (i + 1)).css("display", "none");
        }
        $("#meat2").addClass("hot-goods-class");
        $("#hot-meat-2").css("display", "block");
    });
    $("#meat3").click(function() {
        for (var i = 0; i < 4; i++) {
            $("#meat" + (i + 1)).removeClass();
            $("#hot-meat-" + (i + 1)).css("display", "none");
        }
        $("#meat3").addClass("hot-goods-class");
        $("#hot-meat-3").css("display", "block");
    });
    $("#meat4").click(function() {
        for (var i = 0; i < 4; i++) {
            $("#meat" + (i + 1)).removeClass();
            $("#hot-meat-" + (i + 1)).css("display", "none");
        }
        $("#meat4").addClass("hot-goods-class");
        $("#hot-meat-4").css("display", "block");

    });
    $(".am-popup-title").css('color', "red")
    });
</script>
</body>

</html>