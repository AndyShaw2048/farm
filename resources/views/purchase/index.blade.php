@extends('layouts.main')

@section('title','我的订购')


@section('content')
<!-- content start -->
<div class="admin-content">
<div class="admin-content-body">
    <div class="am-cf am-padding">
        <div class="am-fl am-cf">
            <strong class="am-text-primary am-text-lg">我的订购</strong> /
            <small>MyOrder</small>
        </div>
    </div>
    <div class="am-g">
        <div class="am-u-sm-12">
            <table class="am-table am-table-bd am-table-striped admin-content-table">
                <thead>
                <tr>
                    <th style="color: red">
                        <span>全部订购&nbsp;&nbsp;&nbsp;</span>
                    </th>
                    <th>
                                <span>
                                    <small>待付款</small>
                                </span>
                    </th>
                    <th>
                                <span>
                                    <small>待收货</small>
                                </span>
                    </th>
                    <th>
                                <span style="cursor: pointer;">
                                    <small>订购回收站</small>
                                </span>
                    </th>
                    <th>
                        <input style="font-size: 0.9em;font-weight: lighter" type="search" placeholder="订购商品名称/订购单号">
                        <button style="height: 27px;line-height: 10px;font-size: 0.9em;" type="button" class="am-btn am-btn-primary">搜索</button>
                    </th>
                </tr>
                </thead>
            </table>
            <table class="am-table am-table-bd am-table-striped admin-content-table" style="margin-bottom:15px;">
                <thead>
                <tr>
                    <th style="width: 200px;">
                        <select style="text-decoration: none;font-weight:initial;font-size: 0.8em;" id="doc-select-1">
                            <option value="option1">近三个月订单</option>
                            <option value="option2">今年内订单</option>
                            <option value="option3">2017年订单</option>
                        </select>
                    </th>
                    <th colspan="2">订购详情</th>
                    <th>成长期数</th>
                    <th>每期金额</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                @if($adoptions->isEmpty())
                @else
                @foreach($adoptions as $adoption)
                <tbody>
                <tr style="margin-bottom: 10px;border: 1px solid grey">
                    <td colspan="8">
                        <span>{{$adoption->created_at}}</span>
                        <span style="margin: 0 40px 0 40px;">认购单号</span>
                        <span style="font-weight: bold">{{$adoption->order_id}}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{url('uploads/'.$adoption->Good->pic)}}" alt="" height="200px">
                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                                <span style="font-weight: bold;font-size: 1em">{{$adoption->name}}</span>
                                <br><span style="font-size: 0.6em;color: darkgray">{{$adoption->Farm->name}}</span>

                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                        <span>x{{$adoption->adopt_num}}({{$adoption->Good->unit}})</span>

                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                        <span>共 {{$adoption->total_stage}} 期</span>
                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                                <span style="border-bottom: 1px solid  rgb(180, 180, 180);padding-bottom: 5px;">
                                    总额￥25.00
                                </span>
                        <br>
                        <span style="margin-left:10px; ">在线支付</span>
                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                        <span style="font-weight: bold;">第二期成长中</span>
                        <br>
                                        <span>
                                            <i class="am-icon-sellsy"></i>
                                            <span style="color: red;font-size: 0.7em;">+110经验</span>
                                        </span>
                        <br>
                                        <span>代售
                                            <span style="color: red">￥10</span>
                                        </span>
                        <br>
                    </td>
                    </td>
                    <td style="padding-top: 50px;padding-left: 10px;">
                        <a href="/adoption/grow/{{$adoption->order_id}}" type="button" class="am-btn am-btn-primary" style="margin-bottom: 2px;color: white;">成长详情</a>
                        <br>
                        <a type="button" class="am-btn am-btn-secondary" style="margin-bottom: 2px;color: #fff;">再次购买</a>
                        <br>
                        <a type="button" class="am-btn am-btn-danger" style="color: white">删除订单</a>
                        <br>
                    </td>
                </tr>
                </tbody>
                @endforeach
                @endif
            </table>

        </div>
    </div>
    <footer class=" admin-content-footer ">
        <hr>
        <p class="am-padding-left ">© 2018 搭建.</p>
    </footer>
</div>
</div>
@endsection

@section('script-bottom')
<script>
    var count
    $(() => {
        count = $(".am-nav-tabs li").length
    // console.log(count)
    });
    $(".am-nav-tabs li").click((res) => {
        let tempId = $(res.currentTarget).attr("id");
    let newId = tempId.split("-")
    for (let i = 0; i < count; i++) {
        // console.log($("#number-disc-" + i))
        $("#number-disc-" + i).css("display", "none");
        $("#number-" + i).removeClass("am-active");
    }
    $("#" + tempId).addClass("am-active");
    $("#number-disc-" + newId[1]).css("display", "block");
    });
</script>
@endsection

