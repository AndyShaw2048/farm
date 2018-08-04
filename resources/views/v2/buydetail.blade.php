<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('v2/css/nav_foot.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('v2/css/buy-detail.css')}}" />
    <link rel="stylesheet" href="{{url('v2/layui/css/layui.css')}}" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="css/chart.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="css/chart.css" /> -->
    <link rel="stylesheet" href="{{url('v2/assets/css/amazeui.css')}}">

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
    <div class="nav-one">
        <div class="nav-img">
            <img src="{{url('v2/img/peach.jpg')}}" alt="">
            <img src="{{url('v2/img/woodborder.png')}}" alt="">
        </div>
        <div class="nav-text">
            <div class="text-one">
                绿壳鸡蛋
            </div>
            <div class="text-two">
                <i class="layui-icon layui-icon-face-smile" style="font-size: 30px; color: rgb(132, 160, 182);"></i>
            </div>
            <div class="text-three">
                <p>
                    <big>¥1.2/</big>个&nbsp;&nbsp;
                    <span class="ds">¥1.8/个</span>
                </p>
            </div>
            <div class="text-four">绿壳鸡蛋中的蛋白质对人体的肝脏有修复作用，而且绿壳鸡蛋的蛋黄中的卵磷脂可促进肝细胞的再生。</div>
            <div class="text-five">
                <div class="but">
                    <input class="b" type="button" value="+" onclick="jia()" style="width: 30px;height: 30px;border-radius: 15px 0 0 15px;">
                    <input class="aa" id="zhi" type="text" value="0" style="width: 40px;height: 32px; text-align: center;">
                    <input class="bb" type="button" value="-" onclick="jian()" style="width: 30px;height: 30px;border-radius:0 15px 15px 0;">
                </div>
                <a href="">
                    <div class="shop">添加到购物车</div>
                </a>
            </div>
            <a href="">
                <div class="text-six">
                    <button id="buy" type="button">立即购买</button>
                </div>
            </a>
        </div>
    </div>
    <!-- /////////////////////////////// -->
    <div class="box">
        <span class="box-line"></span>
        <span class="box-text">产品简介</span>
        <span class="box-line"></span>
    </div>
    <div class="eng">INTRODUCTIONS</div>
    <!-- /////////////////// -->
    <div class="marg-page">
        <div class="marg-page-ch1">
            <div class="marg-img">
                <img src="{{url('v2/img/peach.jpg')}}" alt="">
            </div>
            <div class="marg-text">
                <p>五黑鸡产地介绍</p>
                <p> &nbsp;&nbsp;西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。 西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。 西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。 西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。
                    西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。 西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。
                </p>
            </div>
        </div>
        <div class="marg-page-ch2" style="margin-top: 100px;">
            <div class="marg-page-ch1">
                <div class="marg-img">
                    <img src="{{url('v2/img/peach.jpg')}}" alt="">
                </div>
                <div class="marg-text">
                    <p>五黑鸡产地介绍</p>
                    <p> &nbsp;&nbsp;西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。 西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。 西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。 西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。
                        西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。 西充是一个五黑鸡的好地方，五黑鸡的好地方，好地方。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- /////////////// -->
    <!-- 锚点 -->
    <div class="nav-pos" style="margin-top: 50px;">
        <a href="#am-head" class="toplink">
            <img src="{{url('v2/img/顶部.jpg')}}" alt="" width="66px;" height="115px;">
        </a>
    </div>
    <div class="ds" style="float: none;"></div>
</div>
<!-- 底部   -->
<div class="footer">
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
</div>
</body>
<!-- <script src="assets/js/amazeui.js"></script> -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
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
    ///////////////////
    function jia() {
        var zhi = document.getElementById("zhi");
        zhi.value = parseInt(zhi.value) + 1;
    }

    function jian() {
        var zhi = document.getElementById("zhi");
        zhi.value = parseInt(zhi.value) - 1;
    }
</script>

</html>