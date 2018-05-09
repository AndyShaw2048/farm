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
                            <img src="{{url($detail->picture)}}" alt="">
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
                                    <img src="{{url(\App\User::getUser($comment->user_id)->avatar)}}" alt="" width="50">
                                    <br>
                                    {{\App\User::getUser($comment->user_id)->nickname}}
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
                <img src="img/牛.jpg" alt="">
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
            layer.msg(JSON.stringify(data.field));
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