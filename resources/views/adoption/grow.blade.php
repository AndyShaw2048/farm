<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/order-detail.css')}}">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <script src="/layui/layui.js"></script>
    <link rel="stylesheet" href="/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="{{url('css/message.css')}}">
    <title>农牧云-生长详情</title>
</head>

<body>
<div class="am-g head">
    <div class="nav">
        <table class="nav-table">
            <tr>
                <td class="logo">
                    <div class="logo-title">
                        <img class="title" src="{{url('img/标题-黑.png')}}" alt="">
                    </div>
                    <div class="logo-img">
                        <img src="{{url('img/农牧云3.png')}}" alt="">
                    </div>
                </td>
                <td>
                    <a href="/">首页
                        <br>
                        <span>Home&nbsp;Page</span>
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
                    <a href="/cloudtravel">云游天下
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
<div class="am-g body">
    <table class="detail-table">
        <tr>
            <th colspan="6" style="font-size: 3em;">认购物品成长详细</th>
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
                <div>
                    <ul class="am-nav am-nav-tabs">
                        @for($i=1;$i<$adoption->total_stage+1;$i++)
                            @if($i==1)
                                <li id="number-{{$i}}" class="am-active">
                                    <a href="#">第 {{$i}} 期成长状态</a>
                                </li>
                            @else
                                <li id="number-{{$i}}">
                                    <a href="#">第 {{$i}} 期成长状态</a>
                                </li>
                            @endif
                        @endfor
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                @for($i=1;$i<$adoption->total_stage+1;$i++)
                    <?php
                        $detail = \App\Adoption\AdoptionDetail::where('order_id',$adoption->order_id)
                                                                ->where('current_stage',$i)
                                                                ->orderBy('created_at','desc')->first();
                    ?>
                <div id="number-disc-{{$i}}" class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0"  style="display: {{$i == 1 ? "block" : "none"}}">
                    @if(!is_null($detail))
                        @if(!is_null($detail->description))
                            <p>{{$detail->description}}</p>
                        @elseif(!is_null($detail->picture))
                            <img src="{{url($detail->picture)}}" alt="" width="100%">
                        @endif
                    @else
                        <p>亲，您订购的商品还处于第 {{$adoption->current_stage}} 期成长中。</p>
                        <p>敬请期待它的成长。</p>
                    @endif
                </div>
                @endfor
            </td>
        </tr>
    </table>


</div>
<div class="am-g remark">
    <div class="remark-list">
        <span>最新评论</span>
    </div>
    @foreach($comments as $comment)
    <table class="remark-table">
        <tr>
            <td class="remark-desc">
                <table class="remark-time">
                    <tr>
                        <td class="remark-date">
                            <div>
                                <h2>{{date("Y-m-d",strtotime($comment->created_at))}}</h2>
                                {{--<h1>{{date("d",strtotime($comment->created_at))}}/{{date("m",strtotime($comment->created_at))}}</h1>--}}
                                {{--<h2>{{date("Y",strtotime($comment->created_at))}}</h2>--}}
                                <div style="margin-top: 10px;text-align: center" >

                                    <p>
                                        来自：{{\App\User::getUser($comment->user_id)->nickname}}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="remark-article" rowspan="2">
                            <p>{{$comment->comment}}</p>
                        </td>
                    </tr>

                </table>
            </td>
            <td rowspan="2" class="remark-img">
                <img src="{{url('img/牛1.jpg')}}" alt="">
                <img src="{{url('img/牛1.jpg')}}" alt="">
            </td>
        </tr>
    </table>
    @endforeach

    <div style="text-align: center;">
        <form action="/adoption/order/comment" method="post" class="layui-form">
            @csrf
            <input type="text" hidden name="orderID" value="{{$adoption->order_id}}">
            <label for="">我要评论</label>
            <div class="layui-form-item layui-form-text">
                    <textarea name="comment" placeholder="请输入内容" class="layui-textarea"></textarea>
            </div>
            <div class="layui-form-item">
                    <button class="layui-btn" lay-submit lay-filter="form1">立即提交</button>
            </div>
        </form>
    </div>
</div>




<div class="foot">
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="">管理登录</a>
    </p>
</div>
<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/amazeui.js')}}"></script>
<script src="{{url('js/message.min.js')}}"></script>
<script>
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(form1)', function(data){
//            layer.msg(JSON.stringify(data.field));
            $.ajax({
                url: data.form.action,
                type: data.form.method,
                data: data.field,
                success: function (data) {
                    console.log(data[0].code);
                    if(data[0].code == 200)
                    {
                        window.setTimeout("window.location=''",1800);
                        $.message('评论成功');
                    }
                    else
                    {
                        $.message({
                            message:'操作失败',
                            type:'error'
                        });
                    }

                }
            });
            return false;
        });
    });

    {{--$(window).bind("scroll", function () {--}}
        {{--var top = $(this).scrollTop(); // 当前窗口的滚动距离--}}
        {{--// console.log($(this))--}}
        {{--if (top > 1) {--}}
            {{--$(".nav").css({--}}
                {{--"background": "white",--}}
                {{--"opacity": "1",--}}
                {{--"transition": "background-color 1s",--}}
                {{--"position": "fixed"--}}
            {{--});--}}

            {{--$(".nav-table a").css("color", "black");--}}
            {{--$(".company a").css("color", "black");--}}
            {{--$(".logo span").css("color", "white");--}}
            {{--$(".am-input-group").css("opacity", "1")--}}
            {{--$(".title").attr("src",{{url('img/标题-黑.png')}})--}}
        {{--}--}}
        {{--if (top == 0) {--}}
            {{--$(".nav").css({--}}
                {{--"background": "none",--}}
                {{--"opacity": "1",--}}
                {{--"position": "unset"--}}
            {{--});--}}
            {{--$(".nav-table a").css("color", "black");--}}
            {{--$(".company a").css("color", "black");--}}
            {{--$(".am-input-group").css("opacity", "0.5")--}}
            {{--$(".title").attr("src", {{url('img/标题-黑.png')}})--}}
        {{--}--}}
    {{--});--}}

    var count;
    $(() => {
        count = $(".am-nav-tabs li").length+1
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