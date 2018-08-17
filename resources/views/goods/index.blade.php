<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />


    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{url('css/cloudShop.css')}}" />
    <link rel="stylesheet" href="{{url('v2/css/nav_foot.css')}}">
    <link rel="stylesheet" href="css/pignose.layerslider.css">

    <script src="{{url('assets/js/jquery.js')}} " type="text/javascript " charset="utf-8 "></script>
    <script src="{{url('js/jquery.easing.min.js')}}"></script>

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
                        <img class="title" src="{{url('v2/img/标题.png')}}" alt="">
                    </div>
                    <div class="logo-img">
                        <img src="{{url('v2/img/农牧云3.png')}}" alt="">
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
                        认购中心
                        <br>
                        <span>Subscription&nbsp;Farm</span>
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

            </tr>
        </table>
    </div>
</div>
<!-- banner -->
<div class="banner-grid">
    <div id="visual">
        <div class="slide-visual">
            <!-- Slide Image Area (1000 x 424) -->
            <ul class="slide-group">
                <li>
                    <img class="img-responsive" style="width: 1000px;height: 591px;" src="img/images/pic1.jpg" alt="Dummy Image" />
                </li>
                <li>
                    <img class="img-responsive" style="width: 1000px;height: 591px;" src="img/images/pic2.jpg" alt="Dummy Image" />
                </li>
                <li>
                    <img class="img-responsive" style="width: 1000px;height: 591px;" src="img/images/pic3.jpg" alt="Dummy Image" />
                </li>
            </ul>

            <!-- Slide Description Image Area (316 x 328) -->
            <div class="script-wrap">
                <ul class="script-group">
                    <li>
                        <div class="inner-script">
                            <img class="img-responsive" style="width: 276px;height: 286px;" src="img/images/pic1-1.jpg" alt="Dummy Image" />
                        </div>
                    </li>
                    <li>
                        <div class="inner-script">
                            <img class="img-responsive" style="width: 276px;height: 286px;" src="img/images/pic2-2.jpg" alt="Dummy Image" />
                        </div>
                    </li>
                    <li>
                        <div class="inner-script">
                            <img class="img-responsive" style="width: 276px;height: 286px;" src="img/images/pic3-3.jpg" alt="Dummy Image" />
                        </div>
                    </li>
                </ul>
                <div class="slide-controller">
                    <a href="#" class="btn-prev">
                        <img src="img/cloudshopBanner/btn_prev.png" alt="Prev Slide" />
                    </a>
                    <a href="#" class="btn-play">
                        <img src="img/cloudshopBanner/btn_play.png" alt="Start Slide" />
                    </a>
                    <a href="#" class="btn-pause">
                        <img src="img/cloudshopBanner/btn_pause.png" alt="Pause Slide" />
                    </a>
                    <a href="#" class="btn-next">
                        <img src="img/cloudshopBanner/btn_next.png" alt="Next Slide" />
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script type="text/javascript" src="js/pignose.layerslider.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function () {
            $('#visual').pignoseLayerSlider({
                play: '.btn-play',
                pause: '.btn-pause',
                next: '.btn-next',
                prev: '.btn-prev'
            });
        });
        //]]>
    </script>


</div>
<!-- //banner -->

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


            </table>
            <ul class="hot-goods-img" id="hot-goods-1">
                @foreach($goods as $good)
                    @if($good->goods_type == 1)
                    <li>
                        <div class="goods-li">
                            <div class="goods-imgs">
                                <a href="/goods/detail/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
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


            </table>
            <ul class="hot-goods-img" id="hot-meat-1">
                @foreach($goods as $good)
                    @if($good->goods_type == 2)
                        <li>
                            <div class="goods-li">
                                <div class="goods-imgs">
                                    <a href="/goods/detail/{{$good->id}}"><img src="/uploads/{{$good->logo}}" alt=" "></a>
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

<div class="foot">
    <p>©2018 -南充市云谷驴图互联网科技有限公司-版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="/admin">网站管理</a>
    </p>
</div>

<script type="text/javascript ">
    $(window).bind("scroll", function () {
        var top = $(this).scrollTop();
        if (top >= 1) {
            $(".nav").css({
                "background": "white",
                "opacity": "1",
                "transition": "background-color 1s"
            });
            $(".head").css("position", "fixed");
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
            $(".head").css("position", "unset");
            $(".nav-table a").css("color", "black");
            $(".company a").css("color", "black");
            $(".am-input-group").css("opacity", "1")
            $(".title").attr("src", "img/标题-黑.png")
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