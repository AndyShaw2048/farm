<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/cloudShop.css')}}" />
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('css/cloudFarm.css')}}">
    <title>农牧云|云上农场</title>
</head>

<body style="width: 100%;">
@include('layouts.nav')
<div class="am-g backImg">
    <img id="show-bgimg" src="{{url('img/cloudfarm_back.jpg')}}" alt="">
</div>

<div class="am-g subscription-body">
    <div class="am-g subscription">
        <div class="title" style="margin-top: 20px">
            <h1>认购中心</h1>
            <p class="disc">多种自然生长牲畜类任你领养</p>
            <p class="line">&nbsp&nbsp&nbsp&nbsp</p>
        </div>
        <div class="am-g order-nav">
            <div class="order-nav-all">
                <span>最新认购</span>
            </div>
            <div class="order-nav-list">
                <ul>
                    <li>
                        <a href="">全部</a>
                    </li>
                    <li>
                        <a href="">水果认购</a>
                    </li>
                    <li>
                        <a href="">牛类认购</a>
                    </li>
                    <li>
                        <a href="">鸡类认购</a>
                    </li>
                    <li>
                        <a href="">羊类认购</a>
                    </li>
                </ul>
            </div>
        </div>
        <div style="clear:both"></div>
        <div class="gallery">
            <div class="container">
                <div class="gallery-grids">
                    @if($goods->isEmpty())
                    @else
                        @foreach($goods as $good)
                            <div class="col-md-4 gallery-grid" style="height: 300px; overflow:hidden;">
                                <div class="grid">
                                    <figure class="effect-roxy">
                                        <a class="example-image-link" href="/adoption/buy/{{$good->id}}">
                                            <img src="{{url('uploads/'.$good->pic)}}" alt=""/>
                                            <figcaption>
                                                <h3><span>{{$good->name}}</span></h3>
                                                <p></p>
                                                <p>每期￥{{$good->price}} 共 {{$good->total_stage}} 期</p>
                                                <p class="click-order">点击立即认购</p>
                                            </figcaption>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="farm-list">
    <div class="title">
        <h1>优质牧场</h1>
        <p class="disc">全国各地的优质农场共同加盟</p>
        <p class="line">&nbsp&nbsp&nbsp&nbsp</p>
    </div>
    <div class="farm-disc">
        <div class="am-g">
            <div class="farm-word farm-word-left"  style="margin-bottom: 10px;border: 1px solid lightgray">
                <p style="margin: 80px 0 0 40px;width: 90%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="farm-title">长鹿农庄</span>即长鹿旅游休博园，2014年11月成为国家5A级旅游景区。由广东长鹿集团于2001年投资兴建，位于顺德伦教三洲，毗邻珠江干流，占地40万平方米，预计总投资7.8亿元，是一个以岭南历史文化、顺德水乡风情、农家生活情趣为特色，集吃、住、玩、赏、娱、购于一体的综合性景区，主要由“长鹿休闲度假村”、“机动游乐主题公园”、“水世界主题公园”、“农家乐主题公园”和“动物主题公园”等五大园区组成，各具特色，精彩纷呈，是休闲娱乐、旅游度假、商务会议的最佳场所，更是团队拓展、集体旅游的首选基地。</p>
            </div>
            <div class="farm-img">
                <img src="{{url('img/长鹿农庄.jpg')}}" alt="">
            </div>
        </div>
        <div class="am-g">
            <div class="farm-img">
                <img src="{{url('img/湖南锦绣生态农庄.jpg')}}" alt="">
            </div>
            <div class="farm-word farm-word-right"  style="margin-bottom: 10px;border: 1px solid lightgray">
                <p style="margin: 80px 0 0 20px;width: 90%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="farm-title">锦绣生态农庄</span>占地面积400亩，拥有各式豪华客房、会议室、风味餐厅、康体中心、钓鱼场以及按照国际标准建造的网球场等设施。79套豪华欧式客房，您能领略居于山水间的浪漫情怀；充满农庄风情的餐厅大厅和别致的贵宾包厢，无论是各种宴会还是三、五知己小聚，均能让您品尝到农庄为您精做的新鲜菜肴；洋溢着浓郁的锦绣农庄风情的大堂茶吧，又为您提供了会友、小憩之理想去处。</p>
            </div>
        </div>
        <div class="am-g" style="margin-bottom: 10px;">
            <div class="farm-word farm-word-left"   style="margin-bottom: 10px;border: 1px solid lightgray">
                <p style="margin: 80px 0 0 20px;width: 90%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="farm-title">内蒙古牧区</span></span>是我国最大的牧区。它东起大兴安岭，西至额济纳戈壁，面积88万多平方公里，草原面积13.2亿亩约占全国草场面积的1/4，全区生长着各种牧草近千种。大小牲畜4000万头，居全国首位，牛羊肉产量居全国第二，牛奶产量为全国第四，绵羊毛、山羊毛及驼毛产量居全国第一。</p>
            </div>
            <div class="farm-img">
                <img src="{{url('img/内蒙古牧区.jpg')}}" height="320px" alt="">
            </div>
        </div>
        <div class="am-g">
            <div class="farm-img">
                <img src="{{url('img/西藏牧区.jpg')}}" alt="">
            </div>
            <div class="farm-word farm-word-right"   style="margin-bottom: 10px;border: 1px solid lightgray">
                <p style="margin-top: 80px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="farm-title">西藏牧区</span>是我国最大的高寒草甸草原畜牧区，草场面积约8亿亩，在全国居第三位。由于自然条件高寒，草场质量以藏东南的山地峡谷较好，主要畜种有藏牦牛、藏羊、藏马等。其中改良绵羊有10多万只，改良黄牛2000多头。此外，本区在近年还引进牧草和饲料作物品种80多种，种植人工牧草近万亩，草场网围栏面积达40多万亩。</p>
            </div>
        </div>

    </div>
</div>
<div style="clear:both"></div>
{{--<div class="farm-lunbo">--}}
    {{--<div class="farm-lunbo-img">--}}
        {{--<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">--}}
            {{--<ul class="am-slides">--}}
                {{--<li>--}}
                    {{--<img src="{{url('img/bing-1.jpg')}}" />--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<img src="{{url('img/bing-2.jpg')}}" />--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- 云牧场功能 -->
<div class="am-g func ">
    <div class="title">
        <h1>牧场特色</h1>
        <p class="disc">多个优质农牧场共同维护食品安全
        <p class="line">&nbsp&nbsp&nbsp&nbsp</p>
    </div>
    <div class="func-detail">
        <div class="func-detail-icon">
            <table class="func-icon-table">
                <tr>
                    <td class="func-icon">
                        <table>
                            <tr>
                                <td class="func-icon-img">
                                    <img src="img/icon/14签收、审批通过 (1).png" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>安全保障</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="func-icon">
                        <table>
                            <tr>
                                <td class="func-icon-img">
                                    <img src="img/icon/01运输中、物流 (2).png" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>地面快速大巴</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="func-icon">
                        <table>
                            <tr>
                                <td class="func-icon-img">
                                    <img src="img/icon/208聊天、对话 (1).png" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>24小时在线人工服务</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="func-icon">
                        <table>
                            <tr>
                                <td class="func-icon-img">
                                    <img src="img/icon/41头程、空运 (1).png" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>远距离空运</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="func-icon">
                        <table>
                            <tr>
                                <td class="func-icon-img">
                                    <img src="img/icon/09安全、保障 (1).png" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>食品绝对的健康</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="func-icon">
                        <table>
                            <tr>
                                <td class="func-icon-img">
                                    <img src="img/icon/51快递员 (1).png" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>送货上门</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="func-detail-img">
            <img src="img/s4.jpg" alt="">
        </div>
    </div>
</div>
<div style="clear:both"></div>
<div class="foot">
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="">管理登录</a>
    </p>
</div>

<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/amazeui.js')}}"></script>
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
</script>
</body>

</html>