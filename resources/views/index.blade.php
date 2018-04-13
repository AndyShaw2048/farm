<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/amazeui.css">
    <link rel="stylesheet" href="css/company.css">
    <title>Document</title>
</head>

<body>
<div class="am-g head">
    <div class="nav">
        <table class="nav-table">
            <tr>
                <td class="logo">
                    <img class="" src="img/农牧云1.png" alt="">
                    <span class="title">农牧云</span>
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
                        <input type="text" class="am-form-field">
                            <span class="am-input-group-btn">
                                <button class="am-btn am-btn-default" type="button">
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
    <div class="mp4">
        <video width="100%" height="100%" autoplay loop="true">
            <source src="audio/农牧云2.mp4" type="video/mp4"> 您的浏览器不支持此种视频格式。
        </video>
    </div>
</div>
<div class="am-g content">
    <div class="am-u-lg-6"><img src="img/s1.jpg" class="am-img-responsive" alt="" /></div>
    <div class="am-u-lg-6 discrible">
        <span>纯天然</span>
        <p>
            随着营养科学研究的不断进步，人类对食品的认识逐步提高，食品不仅含有人体所需的营养物质，也含有一些有毒物质。所以在选择食品时，首先要注意食品的安全性。如今社会生存环境严重恶化，就是纯天然的水果、蔬菜也都可能残留各种农药、重金属等有毒成分，这些有毒成分不除掉，会危害健康。
        </p>
    </div>
</div>
<div class="am-g content">
    <div class="am-u-lg-6 discrible">
        <span>实时查看</span>
        <p>
            订购食品的成长状态实时查看，登录网页就可以看见自己的食物。即方便，又安心。
        </p>
    </div>
    <div class="am-u-lg-6"><img src="img/s1.jpg" class="am-img-responsive" alt="" /></div>
</div>
<div class="am-g content">
    <div class="am-u-lg-6"><img src="img/s1.jpg" class="am-img-responsive" alt="" /></div>
    <div class="am-u-lg-6 discrible">
        <span>纯天然</span>
        <p>
            随着营养科学研究的不断进步，人类对食品的认识逐步提高，食品不仅含有人体所需的营养物质，也含有一些有毒物质。所以在选择食品时，首先要注意食品的安全性。如今社会生存环境严重恶化，就是纯天然的水果、蔬菜也都可能残留各种农药、重金属等有毒成分，这些有毒成分不除掉，会危害健康。
        </p>
    </div>
</div>
<div class="am-g ">
    <div class="other">
        <div class="am-u-lg-4">1</div>
        <div class="am-u-lg-4">2</div>
        <div class="am-u-lg-4">3</div>
    </div>

</div>
<div class="foot">
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="">管理登录</a>
    </p>
</div>
</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/amazeui.js"></script>
<script>
    $(window).bind("scroll", function() {
        var top = $(this).scrollTop(); // 当前窗口的滚动距离
        // console.log($(this))
        if (top > 1) {
            $(".nav").css({
                "background": "white",
                "transition": "background-color 1s"
            });
            $(".nav-table a").css("color", "black");
            $(".company a").css("color", "black");
            $(".title").css("color","black");
        }
        if (top == 0) {
            $(".nav").css("background", "none");
            $(".nav-table a").css("color", "rgb(220, 220, 220)");
            $(".company a").css("color", "white");
            $(".title").css("color","white");
        }
    });
</script>

</html>