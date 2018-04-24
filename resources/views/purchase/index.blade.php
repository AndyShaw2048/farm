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
                    <th>订购人</th>
                    <th>每期金额</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr style="margin-bottom: 10px;border: 1px solid grey">
                    <td colspan="8">
                        <span>2018-3-31 11:15:56</span>
                        <span style="margin: 0 40px 0 40px;">订购单号</span>
                        <span style="font-weight: bold">54161235133</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 400px;">
                        <ul style="padding-left: 60px;" class="am-nav am-nav-tabs">
                            <li id="number-0" class="am-active">
                                <a href="#">第一期</a>
                            </li>
                            <li id="number-1">
                                <a href="#">第二期</a>
                            </li>
                            <li id="number-2">
                                <a href="#">第三期</a>
                            </li>
                        </ul>
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
                            <video src="{{url('audio/农牧云2.mp4')}}" width="383px;" controls></video>
                        </div>
                        <div id="number-disc-2" class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0" style="display: none">
                            <p>亲，您订购的商品还处于第二期成长中。</p>
                            <p>敬请期待它的成长。</p>
                        </div>
                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                                <span style="font-weight: bold;">农牧云水果基地&nbsp;&nbsp;
                                    <br> 多汁石榴&nbsp;&nbsp;
                                    <br>新鲜采集水果
                                </span>
                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                        <span>x1(500g)</span>

                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                        <span>第2期</span>

                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                        <span>张三</span>
                        <i class="am-icon-user"></i>
                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                                <span style="color: rgb(180, 180, 180);border-bottom: 1px solid  rgb(180, 180, 180);padding-bottom: 5px;">
                                    总额￥25.00
                                </span>
                        <br>
                        <span style="color: rgb(180, 180, 180);margin-left:10px; ">在线支付</span>
                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                        <span style="color: rgb(180, 180, 180)">第二期成长中</span>
                        <br>
                                <span>
                                    <i class="am-icon-sellsy"></i>
                                    <span style="color: red;font-size: 0.7em;">+110经验</span>
                                </span>
                        <br>

                    </td>
                    <td style="padding-top: 80px;padding-left: 10px;">
                        <button type="button" class="am-btn am-btn-default">再次购买</button>
                        <br>
                        <p style="color: red;margin: 2px 0 0 15px;cursor: pointer;">删除订单 </p>
                    </td>
                </tr>
                </tbody>
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

