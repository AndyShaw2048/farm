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
    <link rel="stylesheet" href="{{url('v2/css/nav_foot.css')}}">
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
                                                <h1><span>{{$good->name}}</span></h1>
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
        <h1>合作伙伴</h1>
        <p class="disc">全国各地的优质农牧场共同加盟</p>
        <p class="line">&nbsp&nbsp&nbsp&nbsp</p>
    </div>
    <div class="farm-disc">
        <div class="am-g">
            <div class="farm-word farm-word-left"  style="margin-bottom: 10px;border: 1px solid lightgray">
                <p style="margin: 60px 0 0 40px;width: 90%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="farm-title">古楼镇</span>位于西充北部，距西充县城19公里，距南充市30多公里，境内有广南、巴南两条高速，且巴南高速在距场镇3公里处有出入口，交通便利。古楼镇辖17个行政村，幅员面积37平方公里，人口约2万人。充国香桃挂果树树均单产达100公斤，亩产3000公斤左右，单价3-10元/公斤，产值0.9-3万元/亩。2017年，挂果面积逾万亩，总产量逾4000万公斤，年产值约1.2亿元。充国香桃远销川、渝、云、贵等周边市场，成为南充市“顺西优质农产品生产加工示范区"主栽水果，市场前景十分广阔。同时古楼镇被授予“中国充国香桃之乡”“四川省农业科技示范镇”“西充县有机食品示范镇”，也是川东北地区有机充国香桃产业第一镇。</p>
            </div>
            <div class="farm-img">
                <img src="{{url('img/gulouzhen.jpg')}}" alt="" height="320px">
            </div>
        </div>
        <div class="am-g">
            <div class="farm-img">
                <img src="{{url('img/湖南锦绣生态农庄.jpg')}}" alt="">
            </div>
            <div class="farm-word farm-word-right"  style="margin-bottom: 10px;border: 1px solid lightgray">
                <p style="margin: 80px 0 0 20px;width: 90%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="farm-title">鲜家坝</span>为四川省重点扶贫乡村，交通落后，基础设施匮乏，村内道路坑洼不平，水利设施落后平均水平。由于这些劣势条件，全村整体经济水平偏低。</p>
            </div>
        </div>
        <div class="am-g" style="margin-bottom: 10px;">
            <div class="farm-word farm-word-left"   style="margin-bottom: 10px;border: 1px solid lightgray">
                <p style="margin: 80px 0 0 20px;width: 90%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="farm-title">唇牙村</span></span>村民委员会地址设在“川北心脏”、“川北重镇”的南充，四川 南充 古楼镇唇牙山村，联系人是张育俊，主要经营 对农 、牧副业的管理和指导等，于2001年12月1日在南充工商局登记注册挂牌成立，村委注册资本未提供，在职员工607名</p>
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
                <p style="margin-top: 80px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="farm-title">冯二垭</span>位于南充古楼镇，距京承高速密云县城出口仅4公里，交通方便，农庄以“生态，环保，可持续发展”为经营理念，以绿色、生态、环保为目标，以资源有效利用为载体，以绿色蔬菜、农产品为支撑，以老百姓的口碑为已任，依据生物链原理，把农庄中的种植、养殖、农产品加工、销售、餐饮、乡村游、农家乐、蔬菜配送等产业构建成为相互依存，相互转会，互为资源的循环封闭系统。实现了生态平衡，建立了一个比较完善的循环农业产业模式，成为一个生态、高效、和谐、观光旅游的绿色农业生态园。</p>
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
    <p>©2018 -南充市云谷驴图互联网科技有限公司-版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="/admin">网站管理</a>
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