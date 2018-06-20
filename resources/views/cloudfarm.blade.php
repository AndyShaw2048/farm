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
<div class="am-g subscription-body">
    <div class="am-g subscription">
        <div class="am-g order-nav">
            <div class="order-nav-all">
                <span>推荐认购</span>
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
<div class="am-g subscription-body">
    <div class="am-g subscription">
        
        <div class="am-g order-nav">
            <div class="order-nav-all">
                <span>用户排行认购</span>
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