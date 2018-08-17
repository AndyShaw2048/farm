<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <script type="text/javascript" src="{{url('about/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{url('assets/js/amazeui.min.js')}} "></script>
    <script src="{{url('assets/js/app.js ')}}"></script>
    <!-- stylesheet -->
    <link href="{{url('about/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('about/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}">
    <!-- //stylesheet -->

    <!-- font-awesome-icons -->
    <link href="{{url('about/css/font-awesome.css')}}" type="text/css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <style>
        .xiangmu a{
            color: #000;
            font-size: 1.5em;
        }
        .xiangmu a:hover {
            color:orange;
        }
    </style>
</head>

<body>
<div class="agileits_main">
    <!-- header -->
    <div class="w3_agile_logo">

        <h1 class="text-center">
            <a href="index.html">
                <img style="width: 400px;" src="{{url('about/images/云谷驴图.png')}}" alt="">
            </a>
        </h1>
    </div>
    <!-- banner -->
    <div class="w3_banner">
        <div class="container">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>
                            <div class="banner_text_w3layouts">
                                <h3>构建智慧型互联网农牧业生态圈</h3>
                                <span> </span>
                                <p>公司理念</p>
                            </div>
                        </li>
                        <li>
                            <div class="banner_text_w3layouts">
                                <h3>打造绿色、共享、众筹、扶贫的服务平台</h3>
                                <span> </span>
                                <p>公司定位</p>
                            </div>
                        </li>
                        <li>
                            <div class="banner_text_w3layouts">
                                <h3>实现“云养殖”模式，有需求就供应</h3>
                                <span> </span>
                                <p>战略定位</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <script src="{{url('about/js/responsiveslides.min.js')}}"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                </script>
            </div>
        </div>
    </div>
    <!-- menu -->
    <nav class="navbar navbar-inverse ">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse top-nav w3l" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav linkEffects linkHoverEffect_11 custom-menu">
                    <li class="agile_active">
                        <a href="index.html" class="scroll">
                            <span>首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="scroll">
                            <span>公司项目</span>
                        </a>
                    </li>
                    <li>
                        <a href="#gallery" class="scroll">
                            <span>合作伙伴 </span>
                        </a>
                    </li>
                    <li>
                        <a href="#team" class="scroll">
                            <span>公司成员</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="scroll">
                            <span>联系我们</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //menu -->
</div>
<!-- //banner -->

<!-- //home -->
<div class="about_agileinfo" id="about">
    <div class="container">
        <h3 class="title">公司项目</h3>
        <div class="about_main">
            <div class="col-md-6 col-sm-6 col-xs-6 about_agileits"></div>
            <div class="col-md-6 col-sm-6 col-xs-6 about_text_w3l xiangmu">
                <a href="/">农牧云</a>
                <P style="margin-top: 0">随着中国市场化进程的深入和现代信息化技术的应用，推动了农业全产业链改造升级。近年来农牧业存在粗放式管理、资金不足、供需失衡、产业链松散、食品安全等难题，并且农产品无法避开的销售半径特性，形成成熟盈利模式的电商平台很少。利用互联网信息的扁平化、透明化，致力实现农业产业链去中间化，加速推进农牧产品的品牌化是我们的目标。农业和互联网融合，绝不是简单的加法，而是通过产业的融合和创新，以最新的互联网行业之长，补最传统的农业之短，甚至是创造全新的产业模式。就此，南充市云谷驴图互联网科技有限公司制定了详细的战略计划。
                </P>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about -->
<div class="about_agileinfo" style="padding-top: 0;" id="about">
    <div class="container">
        <h3 class="title">新闻动态</h3>
        <div class="about_main">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div id="number-disc-0" class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
                    <ul class="am-slides">
                        <li>
                            <img src="{{url('about/images/xianjiabaChun.JPG')}}" />
                        </li>
                        <li>
                            <img style="width: 540px;height: 360px" src="{{url('img/yglt.jpg')}}" />
                        </li>
                        <li>
                            <img src="{{url('about/images/xianjiabaShuji.JPG')}}" />
                        </li>
                        <li>
                            <img src="{{url('about/images/zhangjiagou.JPG')}}" />
                        </li>
                        <li>
                            <img src="{{url('about/images/fenghuangli.JPG')}}" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 about_text_w3l">
                <ul class="kaocha">
                    <li>
                        <a href="">考察总结会议</a>
                        <span>2018/05/04</span>
                    </li>
                    <li>
                        <a href="">南充市西充县古楼镇鲜家坝村考察
                            <span>2018/05/03</span>
                        </a>
                    </li>
                    <li>
                        <a href="">南充市西充县古楼镇唇牙村村考察</a>
                        <span>2018/05/03</span>
                    </li>
                    <li>
                        <a href="">南充市西充县古楼镇冯二垭考察</a>
                        <span>2018/05/03</span>
                    </li>
                    <li>
                        <a href="">公司第一个项目--农牧云</a>
                        <span>2018/04/19</span>
                    </li>
                    <li>
                        <a href="">公司第一次正式大会</a>
                        <span>2018/04/18</span>
                    </li>
                    <li>
                        <a href="">公司正式成立</a>
                        <span>2018/04/17</span>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- coperation -->
<div class="gallery_wthree" id="gallery">
    <div class="container">
        <h3 class="title">南充市西充县合作对象</h3>
        <div class="gallery_grid agileits_w3layouts">
            <div class="col-md-6  col-sm-6 col-xs-6 grid_w3">
                <div class="grid-1">
                    <a class="cm-overlay" href="images/2.jpg">
                        <img src="{{url('about/images/peach.JPG')}}" alt=" " class="img-responsive" />
                        <div class="w3agile-text w3agile-text-smal1">
                            <h5>古楼镇香桃基地</h5>
                        </div>
                    </a>
                </div>
                <div class="sub_grid gallery_w3l">
                    <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
                        <a class="cm-overlay" href="images/tuzhu.JPG">
                            <img src="{{url('about/images/tuzhu.JPG')}}" alt=" " class="img-responsive" />
                            <div class="w3agile-text w3agile-text-small">
                                <h5>古楼镇家养土猪</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-b grid_w3l">
                        <a class="cm-overlay" href="images/zangxiangzhu.jpg">
                            <img src="{{url('about/images/zangxiangzhu.jpg')}}" alt=" " class="img-responsive" />
                            <div class="w3agile-text w3agile-text-smal1">
                                <h5>古楼镇藏香猪</h5>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 grid_w3">
                <div class="sub_grid">
                    <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
                        <a class="cm-overlay" href="images/tuji.jpg">
                            <img src="{{url('about/images/tuji.jpg')}}" alt=" " class="img-responsive" />
                            <div class="w3agile-text w3agile-text-small">
                                <h5>古楼镇散养土鸡</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-d grid_w3l">
                        <a class="cm-overlay" href="images/lvkeEgg.jpg">
                            <img src="{{url('about/images/lvkeEgg.jpg')}}" alt=" " class="img-responsive" />
                            <div class="w3agile-text w3agile-text-smal1">
                                <h5>古楼镇绿壳鸡蛋</h5>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="grid-1 grid-2">
                    <a class="cm-overlay" href="images/fenghuangli.JPG">
                        <img src="{{url('about/images/fenghuangli.JPG')}}" alt=" " class="img-responsive" />
                        <div class="w3agile-text w3agile-text-smal1">
                            <h5>古楼镇鲜家坝凤凰李</h5>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- section -->
<div style="height:400px;" class="w3layouts-section" id="blog">
    <div class="container">
        <!-- <h3 class="title">合作农场</h3> -->
        <h2 style="color: white">南充市西充香桃村</h2>
        <a href="#myModal" class="agilebtn" data-toggle="modal" data-target="#myModal">
            <span>更多农牧场</span>
        </a>
    </div>
</div>
<!-- //section -->
<!--team -->
<div class="team agileits-w3layouts" id="team">
    <div class="container">
        <h3 class="title">公司成员</h3>
        <div class="team-w3ls">
            <div class="col-md-4 col-sm-4 col-xs-4 team-grid w3_agileits">
                <!-- <img class="img-w3l t1-wthree img-responsive" src="images/t2.jpg" alt=""> -->
                <h5>蔡汶宏</h5>
                <p>公司法人代表</p>
                <!-- <div class="social-icons">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-facebook icon icon-border facebook"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter icon icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div> -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 team-grid w3_agileits t2">
                <!-- <img class="img-w3l t1-wthree img-responsive" src="images/t1.jpg" alt=""> -->
                <h5>余思慧</h5>
                <p>经理</p>
                <!-- <div class="social-icons">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-facebook icon icon-border facebook"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter icon icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div> -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 w3_agileits team-grid">
                <!-- <img class="img-w3l t1-wthree img-responsive" src="images/t3.jpg" alt=""> -->
                <h5>柏景潇</h5>
                <p>监事</p>
                <!-- <div class="social-icons agile">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-facebook icon icon-border facebook"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter icon icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div> -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team-->
<!-- contact -->
<div class="contact-w3-agileits" id="contact">
    <div class="contact-main">
        <div class="col-md-7 col-sm-7 col-xs-7 contact-right-w3l">
            <form action="#" method="post">
                <!-- <input type="text" class="name" name="name" placeholder="First Name" required=""> -->
                <input type="text" class="name" name="name" placeholder="姓名" required="">
                <input type="email" class="name" name="name" placeholder="邮箱" required="">
                <!-- <input type="text" class="name" name="name" placeholder="Subject" required=""> -->
                <textarea placeholder="您的内容" required=""></textarea>
                <input type="submit" value="发送">
            </form>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-5 contact-left-w3ls">
            <div class="mail contact-grid-agileinfo">
                <div class="col-md-1 col-sm-2 col-xs-2 contact-icon-wthree">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
                <div class="col-md-11 col-sm-9 col-xs-9 contact-text-agileinfo">
                    <h4>给我们发邮件</h4>
                    <p>
                        <a href="mailto:info@example.com">1321254@163.com</a>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="call contact-grid-agileinfo">
                <div class="col-md-1 col-sm-2 col-xs-2 contact-icon-wthree">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                </div>
                <div class="col-md-11 col-sm-9 col-xs-9 contact-text-agileinfo">
                    <h4>给我们打电话</h4>
                    <p>2803542</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="visit contact-grid-agileinfo">
                <div class="col-md-1 col-sm-2 col-xs-2 contact-icon-wthree">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </div>
                <div class="col-md-11 col-sm-9  col-xs-9 contact-text-agileinfo">
                    <h4>访问我们</h4>
                    <p>南充市顺庆区莲池路54号大学科技园大楼326-7</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //contact -->
<!-- subscribe -->
<!-- <div class="subscribe w3_agile">
    <div class="container">
        <h3 class="title text-center">subscribe</h3>
        <div class="subscribe-wthree">
            <form action="#" method="post">
                <input type="email" placeholder="Enter email" required="">
                <input type="submit" value="subscribe" class="botton">
            </form>
        </div>
    </div>
</div> -->
<!-- //subscribe -->
<!-- copy-right -->
<div class="copy-right agileits-w3layouts">
    <div class="container">

        <p>Copyright &copy; 2018
            <br> 南充市云谷驴图互联网科技有限责任公司.
        </p>
    </div>
</div>
<!-- //copy-right -->
<!-- Gallery-plugin -->
<script src="{{url('about/js/jquery.mobile.custom.min.js')}}"></script>
<script src="{{url('about/js/jquery.cm-overlay.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.cm-overlay').cmOverlay();
    });
</script>
<!-- //Gallery-plugin -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{url('about/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{url('about/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<script src="{{url('about/js/SmoothScroll.min.js')}}"></script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<script type="text/javascript" src="{{url('about/js/bootstrap.js')}}"></script>
</body>

</html>