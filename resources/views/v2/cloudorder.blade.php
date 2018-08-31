<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>农牧云|认购中心</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('v2/css/chart.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('layui/css/layui.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/amazeui.css')}}">
    <link rel="stylesheet" href="{{url('v2/css/nav_foot.css')}}">
    <link rel="stylesheet" href="{{url('v2/css/cloudOrder.css')}}">
</head>

<body>
<!-- 导航栏 -->
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
                    <a href="/cloudsharing">
                        云公益
                        <br>
                        <span>Cloud&nbsp;Sharing</span>
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
<!-- ///////////////////////// -->
<div class="body">
    <div class="tagline">
        <p>
            <big>黑</big>.
            <b>至纯</b>，
            <big>肉</big>.
            <b>至鲜</b>，
            <big>品</big>.
            <b>非凡</b>
        </p>
    </div>
    <div class="service">
        <p>Breeeding</p>
        <p>我们的养殖</p>
        <p class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </div>
    <div class="Flowing">
        <div class="Fll">
            <div class="nav-flow">
                <p>Flow chart</p>
                <p class="last">流程示意图</p>
            </div>
            <div id="nav-img">
                <div class="one" id="ra">
                    <img src="{{url('v2/img/buy-detail/duck1.png')}}" alt="">
                </div>
                <div class="two" id="ra">
                    <img src="{{url('v2/img/buy-detail/duck2.png')}}" alt="">
                </div>
                <div class="three" id="ra">
                    <img src="{{url('v2/img/buy-detail/duck3.png')}}" alt="">
                </div>
                <div class="four" id="ra">
                    <img src="{{url('v2/img/buy-detail/duck4.png')}}" alt="">
                </div>
                <div class="five" id="ra">
                    <img src="{{url('v2/img/buy-detail/duck4.png')}}" alt="">
                </div>
                <div class="line-one" id="ll"></div>
                <div class="line-two" id="ll"></div>
                <div class="line-three" id="ll"></div>
                <div class="line-four" id="ll"></div>
                <div class="ra-texting">详情</div>
                <div class="ra-text-one" id="te">前期</div>
                <div class="ra-text-two" id="te">中期</div>
                <div class="ra-text-three" id="te">后期</div>
                <div class="ra-text-four" id="te">投资分红</div>
                <div class="ra-text-five" id="te">认购收获</div>
            </div>
        </div>
    </div>
    <!-- //////////////////////////// -->
    <div class="marg">
        <div class="ma">
            @foreach($goods as $item)
            <div class="marg-ch" style="margin-top: 100px">
                <div class="marg-img">
                    <img src="{{url('uploads/'.$item->logo)}}" alt="">
                </div>
                <div class="marg-text">
                    <div class="product-text" id="pro">
                        <div class="text-chlid1">产品跟踪</div>
                        <div class="text-child2">
                        <p>
                            <span style="color: rgb(206, 168, 110);font-size: 1.5em;">
                                <a href="" style="list-style: none; color: rgb(206, 168, 110);">{{$item->name}}</a>
                            </span>&nbsp;&nbsp;产地&nbsp;&nbsp;西充
                        </p>
                        </div>
                        <div class="text-child3">
                            <p style="color: rgb(189, 184, 184); letter-spacing: 3px;font-size: 1.1em;">{{$item->description}}</p>
                            <p id="more">价格：
                                <big>¥{{$item->price}}/{{$item->unit}}</big>&nbsp;&nbsp;订单数：
                                <big>10只</big>
                                <span>(截止7月25日)</span>
                            </p>
                            <a href="{{url('goods/buy/'.$item->id)}}">详情>></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- /////////////// -->
<!-- 锚点 -->

<div class="ds" style="float: none;"></div>
<!-- 底部   -->
<div class="grey-line"></div>
<div class="foot">
    <div class="foot-desc">
        <div class="foot-part part1">
            <img src="{{url('v2/img/农牧云3.png')}}" alt="">
        </div>
        <div class="foot-part part2">
            <p>网站首页 / HOME</p>
            <p>公司简介 / INTRODUCTION</p>
            <p>公司动态 / NEWS</p>
        </div>
        <div class="foot-part part3">
            <p>电子邮箱 / 132456789@163.com</p>
            <p>联系电话 / 12345678901</p>
        </div>
        <div class="foot-part part4">
            <p>农牧云官方微信</p>
            <img src="{{url('v2/img/农牧云3.png')}}" alt="">
        </div>
    </div>
    <div style="clear: both;"></div>
    <p class="manage">版权所有:云谷驴图有限公司&nbsp;&nbsp;&nbsp;&nbsp;©2018 - 川ICP备180000001号
        <a href="">站点管理</a>
    </p>
</div>
</body>
<script src="{{url('v2/js/jquery.min.js')}}"></script>
<script src="assets/js/amazeui.js"></script>

<script>
    $(window).bind("scroll", function () {
        var top = $(this).scrollTop(); // 当前窗口的滚动距离
        // console.log($(this))
        if (top > 1) {
            $(".nav").css({
                "background": "white",
                "opacity": "1",
                "transition": "background-color 1s"
            });
            $(".head").css({
                "position": "fixed",

            });
            $(".nav-table a").css("color", "black");
            $(".company a").css("color", "black");
            $(".logo span").css("color", "black");
            $(".am-input-group").css("opacity", "1")
            $(".title").attr("src", "img/标题-黑.png")
        }
        if (top == 0) {
            $(".head").css({
                "position": "unset",

            });
            $(".nav").css({
                "background": "none",
                "opacity": "1",
            });
            $(".nav-table a").css("color", "black");
            $(".am-input-group").css("opacity", "0.5")
            $(".title").attr("src", "img//标题-黑.png")
        }
    });
    ///////////////////////////
    $(document).ready(function () {
        $("a.toplink").click(function () {
            $("html,body").animate({
                scrollTop: $($(this).attr("href")).offset().top + "px"
            }, {
                duration: 1000,
                easing: "swing"
            });
            return false;
        });
    });
</script>

</html>