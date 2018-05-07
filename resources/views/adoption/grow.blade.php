<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/order-detail.css')}}">
    <title>农牧云-生长详情</title>
</head>

<body>
@include('layouts.nav')
<div class="am-g body">
    <table class="detail-table">
        <tr>
            <th colspan="6" style="font-size: 3em;">生长详情</th>
        </tr>
        <tr>
            <th>订单号:
                <span>{{$adoption->order_id}}</span>
            </th>
            <th>{{$adoption->Farm->name}}</th>

            <th>{{$adoption->Good->name}}</th>
            <th>正处于
                <span style="color: red;">第 {{$adoption->current_stage}} 期</span>成长(距下一期:
                <span style="color: red;">12天</span> )
            </th>
            <th>成长总期数: {{$adoption->total_stage}} 期({{$adoption->days_per_stage}} 天/期)</th>
            <th>距离收获还剩:
                <span style="color: red">{{$diff}}天</span>
            </th>
        </tr>
        <tr>
            <td colspan="6" style="padding-top: 5px;">
                <ul class="am-nav am-nav-tabs">
                    <li id="number-0" class="am-active">
                        <a href="#">第一期成长状态</a>
                    </li>
                    <li id="number-1">
                        <a href="#">第二期成长状态</a>
                    </li>
                    <li id="number-2">
                        <a href="#">第三期成长状态</a>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <div id="number-disc-0" class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0" style="display: block">
                    <ul class="am-slides">
                        <li>
                            <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" />
                        </li>
                        <li>
                            <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" />
                        </li>
                    </ul>
                </div>
                <div id="number-disc-1" class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0" style="display: none">
                    <video src="../农牧云2.mp4" width="100%;" controls></video>
                </div>
                <div id="number-disc-2" class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0" style="display: none">
                    <p>亲，您订购的商品还处于第二期成长中。</p>
                    <p>敬请期待它的成长。</p>
                </div>
            </td>
        </tr>
    </table>


</div>
<div class="am-g remark">
    <div class="remark-list">
        <span>评论列表</span>
    </div>
    <table class="remark-table">
        <tr>
            <td class="remark-desc">
                <table class="remark-time">
                    <tr>
                        <td class="remark-date">
                            <div>
                                <h1>04/25</h1>
                                <h2>2018</h2>
                                <p>
                                    来自:会说**星星
                                </p>
                            </div>
                        </td>
                        <td class="remark-article" rowspan="2">
                            <p>草原牛就是不一样,好吃不上火。跟大白菜一样香甜可口，好吃。</p>
                        </td>
                    </tr>

                </table>
            </td>
            <td rowspan="2" class="remark-img">
                <img src="img/牛.jpg" alt="">
            </td>
        </tr>
    </table>
    <table class="remark-table">
        <tr>
            <td class="remark-desc">
                <table class="remark-time">
                    <tr>
                        <td class="remark-date">
                            <div>
                                <h1>04/24</h1>
                                <h2>2018</h2>
                                <p>
                                    来自:白菜**君
                                </p>
                            </div>
                        </td>
                        <td class="remark-article" rowspan="2">
                            <p>草原牛就是不一样,好吃不上火。跟大白菜一样香甜可口，好吃。</p>
                        </td>
                    </tr>
                </table>
            </td>
            <td rowspan="2" class="remark-img">
                <img src="img/牛1.jpg" alt="">
                <img src="img/牛1.jpg" alt="">
            </td>
        </tr>
    </table>
    <table class="remark-table">
        <tr>
            <td class="remark-desc">
                <table class="remark-time">
                    <tr>
                        <td class="remark-date">
                            <div>
                                <h1>04/24</h1>
                                <h2>2018</h2>
                                <p>
                                    来自:白菜**君
                                </p>
                            </div>
                        </td>
                        <td class="remark-article" rowspan="2">
                            <p>草原牛就是不一样,好吃不上火。跟大白菜一样香甜可口，好吃。</p>
                        </td>
                    </tr>
                </table>
            </td>
            <td rowspan="2" class="remark-img">
                <img src="img/牛1.jpg" alt="">
                <img src="img/牛1.jpg" alt="">
            </td>
        </tr>
    </table>
    <table class="remark-table">
        <tr>
            <td class="remark-desc">
                <table class="remark-time">
                    <tr>
                        <td class="remark-date">
                            <div>
                                <h1>04/24</h1>
                                <h2>2018</h2>
                                <p>
                                    来自:白菜**君
                                </p>
                            </div>
                        </td>
                        <td class="remark-article" rowspan="2">
                            <p>草原牛就是不一样,好吃不上火。跟大白菜一样香甜可口，好吃。</p>
                        </td>
                    </tr>
                </table>
            </td>
            <td rowspan="2" class="remark-img">
                <img src="img/牛1.jpg" alt="">
                <img src="img/牛1.jpg" alt="">
            </td>
        </tr>
    </table>
</div>
<div class="editor">
    <script id="container" name="content" type="text/plain" style="height: 300px;">
            这里写你的初始化内容
        </script>
    <button type="button" class="am-btn am-btn-primary">提交评论</button>
</div>
<div class="foot">
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="">管理登录</a>
    </p>
</div>
<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/amazeui.js')}}"></script>

<!-- 富文本编辑器 -->
<!-- 配置文件 -->
<script type="text/javascript" src="{{url('assets/utf8-php/ueditor.config.js')}}"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="{{url('assets/utf8-php/ueditor.all.js')}}"></script>
<!-- 实例化编辑器 -->


<script>
    var ue = UE.getEditor('container');
    // $(window).bind("scroll", function () {
    //     var top = $(this).scrollTop(); // 当前窗口的滚动距离
    //     // console.log($(this))
    //     if (top > 1) {
    //         $(".nav").css({
    //             "background": "black",
    //             "opacity": "0.8",
    //             "transition": "background-color 1s",
    //             "position": "fixed"
    //         });

    //         $(".nav-table a").css("color", "white");
    //         $(".company a").css("color", "white");
    //         $(".logo span").css("color", "white");
    //         $(".am-input-group").css("opacity", "1")
    //         $(".title").attr("src", "img/标题.png")
    //     }
    //     if (top == 0) {
    //         $(".nav").css({
    //             "background": "none",
    //             "opacity": "1",
    //             "position": "unset"
    //         });
    //         $(".nav-table a").css("color", "black");
    //         $(".company a").css("color", "black");
    //         $(".am-input-group").css("opacity", "0.5")
    //         $(".title").attr("src", "img/标题-黑.png")
    //     }
    // });
    var count;
    $(() => {
        count = $(".am-nav-tabs li").length
    // console.log(count)
    });
    $(".am-nav-tabs li").click((res) => {
        let tempId = $(res.currentTarget).attr("id");
    let newId = tempId.split("-")
    for (let i = 0; i < count; i++) {
        $("#number-disc-" + i).css("display", "none");
        $("#number-" + i).removeClass("am-active");
    }
    $("#" + tempId).addClass("am-active");
    $("#number-disc-" + newId[1]).css("display", "block");
    });
    // $(".remark-img img").click(function () {
    //     $(this).css({
    //         "position": "absolute",
    //         "width": "500px"
    //     })
    //     console.log($(this).context.currentSrc);
    // });
</script>
</body>

</html>