{{--@foreach($errors->all() as $error)--}}
{{--<p>{{$error}}</p>--}}
{{--@endforeach--}}
{{--@if($orders->first())--}}
{{--@foreach($orders as $order)--}}
    {{-------------------}}
    {{--<div>订单编号：{{$order->order_id}}--}}
        {{--|订单状态：{{$order->status}}--}}
        {{--@if(!($order->status > 4))--}}
        {{--|<a href="/home/order/cancel/{{$order->order_id}}">取消订单</a>--}}
        {{--@endif--}}
        {{--@if($order->status < 5 && $order->status > 1)--}}
        {{--|<a href="/home/order/receive/{{$order->order_id}}">确认收货</a>--}}
        {{--@endif--}}
        {{--@if($order->status == 5)--}}
            {{--|<a href="/home/order/rating/{{$order->order_id}}">发表评价</a>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--@endforeach--}}
{{--@else--}}
{{--暂时没有订单--}}
{{--@endif--}}

@extends('layouts.main')
@section('title','我的订单')
@section('content')
<!-- content start -->
<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding">
            <div class="am-fl am-cf">
                <strong class="am-text-primary am-text-lg">我的订单</strong> /
                <small>MyOrder</small>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                    <tr>
                        <th style="color: red">
                            <span>全部订单&nbsp;&nbsp;&nbsp;</span>
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
                                        <small>订单回收站</small>
                                    </span>
                        </th>
                        <th>
                            <input style="font-size: 0.9em;font-weight: lighter" type="search" placeholder="商品名称/订单号/牧场名称">
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
                        <th colspan="2">订单详情</th>
                        <th>收货人</th>
                        <th>金额</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    @if($orders->isEmpty())

                    @else
                    @foreach($orders as $order)
                    <tbody>
                    <tr style="margin-bottom: 10px;border: 1px solid grey">
                        <td colspan="7">
                            <span>{{$order->created_at}}</span>
                            <span style="margin: 0 40px 0 40px;">订单号</span>
                            <span style="font-weight: bold">{{$order->order_id}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img style="width: 100px;height: 100px;" src="{{url('uploads/'.$order->Good->pics)}}" alt="">
                        </td>
                        <td>
                                    <span style="font-size: 0.8em;font-weight: bold">{{$order->Good->title}}
                                        <br>500g/份
                                        <br>新鲜牛肉
                                    </span>
                        </td>
                        <td>
                            <span>x1</span>
                        </td>
                        <td>
                            <span style="font-size: 0.8em;">张三</span>
                            <i class="am-icon-user"></i>
                        </td>
                        <td>
                                    <span style="color: rgb(180, 180, 180);font-size: 0.8em;border-bottom: 1px solid  rgb(180, 180, 180);padding-bottom: 5px;">
                                        总额￥25.00
                                    </span>
                            <br>
                            <span style="font-size: 0.8em;color: rgb(180, 180, 180);margin-left:10px; ">在线支付</span>
                        </td>
                        <td>
                            <span style="color: red;font-weight: bold">未付款</span>
                            <br>
                                    <span>
                                        <i class="am-icon-sellsy"></i>
                                        <span style="color: red;font-size: 0.7em;">+110经验</span>
                                    </span>
                            <br>
                                    <span style="font-size: 0.8em;">
                                        订单详情
                                    </span>
                        </td>
                        <td>
                            <button type="button" class="am-btn am-btn-default">再次购买</button>
                            <br>
                            <p style="color: red;margin: 2px 0 0 15px;cursor: pointer;">删除订单 </p>
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