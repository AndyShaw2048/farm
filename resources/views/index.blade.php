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
@include('layouts.nav')
<div class="am-g">
    <div class="mp4" id="changeImg">
        <video id="vid" width="100%" height="100%" autoplay="autoplay" loop="loop">
            {{--<source src="https://yibanoss1.oss-cn-shenzhen.aliyuncs.com/movie.mp4" type="video/mp4"> 您的浏览器不支持此种视频格式。--}}
            <source src="{{url('audio/movie.mp4')}}" type="video/mp4"> 您的浏览器不支持此种视频格式。
        </video>
        <script>
            document.getElementById('vid').play();
        </script>
    </div>
</div>
<div class="am-g desc-list">
    <div class="am-g desc" style="overflow: hidden">
        <h1>农牧云-精准扶贫</h1>
        <p>走进贫困农户，帮助农户售卖农产品，精准提高农户收入。</p>
    </div>
    <div class="am-g desc">
        <h1>农牧云-线上认购</h1>
        <p>每期定期支付，农户帮您养殖属于您自己的绿色、健康食物。</p>
    </div>
    <div class="am-g desc">
        <h1>农牧云-生态旅游</h1>
        <p>发展农村旅游业，注重生态、绿色旅游。</p>
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
<script src="{{url('assets/js/amazeui.j')}}"></script>
<script>
    $(window).bind("scroll", function() {
        var top = $(this).scrollTop(); // 当前窗口的滚动距离
        // console.log($(this))
        if (top > 1) {
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
            $(".am-input-group").css("opacity", "1")
            $(".title").attr("src", "img/标题.png")
        }
    });
//    var seconds = 0;
//    var changeImg = '<img src="img/1.jpg" style="width:100%;transition:2s;" alt="">';
//    $(() => {
//        function setTime() {
//        seconds++;
//        console.log(seconds)
//        if (seconds == 20) {
//            $("#vedio").css("display", "none");
//            $("#changeImg").append(changeImg)
//            clearInterval(time);
//        }
//    }
//    var time = setInterval(setTime, 1000);
//    var vedio = $("#vedio");
//    vedio.attr("loop", "");
//    });
</script>

</html>