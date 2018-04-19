<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/css/amazeui.css')}}">
    <link rel="stylesheet" href="{{url('css/conmany.css')}}">
    <title>农牧云</title>
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
                        <img src="{{url('img/农牧云1.png')}}" alt="">
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
    <div class="mp4" id="changeImg">
        <video id="vedio" width="100%" height="100%" autoplay loop="true">
            <source src="{{url('audio/农牧云2.mp4')}}" type="video/mp4"> 您的浏览器不支持此种视频格式。
        </video>
    </div>
</div>
<div class="am-g desc-list">
    <div class="am-g desc">
        <h1>新鲜健康</h1>
        <p>平台所有商品都是绿色食物，每天早上按时采摘保证新鲜。</p>
    </div>
    <div class="am-g desc">
        <h1>实时查看</h1>
        <p>无论你在哪儿，你都可以随时可以查看订购物品的成长状态。</p>
    </div>
    <div class="am-g desc">
        <h1>全国联盟</h1>
        <p>全国各大牧场农场共同联盟，保证商品的多样性。</p>
    </div>
</div>
<div class="foot">
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="/admin">管理登录</a>
    </p>
</div>

</body>
<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/amazeui.j')}}s"></script>
<script>
    $(window).bind("scroll", function() {
        var top = $(this).scrollTop(); // 当前窗口的滚动距离
        // console.log($(this))
        if (top > 1) {
            $(".nav").css({
                "background": "white",
                "opacity": "0.8",
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
    var seconds = 0;
    var changeImg = '<img src="img/景.jpg" style="width:100%;transition:2s;" alt="">';
    $(() => {
        function setTime() {
        seconds++;
        console.log(seconds)
        if (seconds == 20) {
            $("#vedio").css("display", "none");
            $("#changeImg").append(changeImg)
            clearInterval(time);
        }
    }
    var time = setInterval(setTime, 1000);
    var vedio = $("#vedio");
    vedio.attr("loop", "");
    });
</script>

</html>