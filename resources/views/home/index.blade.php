@extends('layouts.main')

@section('title','个人中心')

@section('content')
<!-- content start -->
<div class="admin-content">
    <div class="admin-content-body">
        <div class="am-cf am-padding">
            <div class="am-fl am-cf">
                <strong class="am-text-primary am-text-lg">个人主页</strong> /
                <small>PersonalCenter</small>
            </div>
        </div>

        <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
            <li>
                <img class="am-img-thumbnail am-circle" style="height:98px;float:left;" src="{{url($user->avatar)}}" alt="">
                <a href="#" class="am-text-secondary">
                    <span class="am-icon-btn am-icon-user"></span>
                    <br/>欢迎，{{$user->nickname}}
                    <br/>
                    <strong style="color:red">svip {{$user->grade}}</strong>
                </a>
            </li>
            <li>
                <a href="#" class="am-text-warning">
                    <span class="am-icon-btn am-icon-plane"></span>
                    <br/>集市订单数量
                    <br/>10</a>
            </li>
            <li>
                <a href="#" class="am-text-warning">
                    <span class="am-icon-btn am-icon-briefcase"></span>
                    <br/>农场认购数量
                    <br/>10</a>
            </li>
            <li>
                <a href="#" class="am-text-danger">
                    <span class="am-icon-btn am-icon-recycle"></span>
                    <br/>完成订单
                    <br/>82</a>
            </li>

        </ul>

        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-bd am-table-striped admin-content-table">
                    <thead>
                    <tr>
                        <a href="/home/order">详细订单</a>
                    </tr>
                    <tr>
                        <th>订单号</th>
                        <th>农场</th>
                        <th>种类</th>
                        <th>成交订单数</th>
                        <th>管理</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($orders->isEmpty())
                        <tr>
                            <td>
                                暂无订单消息
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                    @else
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->order_id}}</td>
                        <td>农牧云水果基地</td>
                        <td>
                            <a href="#">水果</a>
                        </td>
                        <td>
                            <span class="am-badge am-badge-success">20</span>
                        </td>
                        <td>
                            <div class="am-dropdown" data-am-dropdown>
                                <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle>
                                    <span class="am-icon-cog"></span>
                                    <span class="am-icon-caret-down"></span>
                                </button>
                                <ul class="am-dropdown-content">
                                    <li>
                                        <a href="#">隐藏</a>
                                    </li>
                                    <li>
                                        <a href="#">删除</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-md-12">
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">我的收获地址&nbsp;&nbsp;&nbsp;
                        <small>
                            <a href="">新增收货地址</a>
                        </small>
                        <span class="am-icon-chevron-down am-fr"></span>
                    </div>
                    <div class="am-panel-bd am-collapse am-in" id="collapse-panel-1">
                        <div class="am-scrollable-horizontal">
                            <table class="am-table am-table-bordered am-table-striped am-text-nowrap">
                                <tr>
                                    <th>收货人</th>
                                    <th>所在地区</th>
                                    <th>详细地址</th>
                                    <th>邮编</th>
                                    <th>电话/手机</th>
                                    <th>操作</th>
                                </tr>
                                @foreach($addresses as $address)
                                    <tr>
                                        <td>{{$address->receiver_name}}</td>
                                        <td>{{$address->receiver_province.' '.$address->receiver_city.' '.$address->receiver_district}}</td>
                                        <td>{{$address->receiver_address}}</td>
                                        <td>{{$address->receiver_zip}}</td>
                                        <td>{{$address->receiver_phone.' / '.$address->receiver_mobile}}</td>
                                        <td>
                                            <a href="">修改</a>
                                            <a href="">删除</a>
                                        </td>
                                        <td>
                                        @if($address->default)
                                            <span style="color: red">默认地址</span>
                                        @else
                                            <a>设为默认地址</a>
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="am-g">
        <div class="am-u-md-12">
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">订购商品&nbsp;&nbsp;&nbsp;
                    <small>
                        <a href="">详细>></a>
                    </small>
                    <span class="am-icon-chevron-down am-fr"></span>
                </div>
                <div class="am-panel-bd am-collapse am-in" id="collapse-panel-2">
                    <div class="am-g">
                        <div class="am-u-md-6">
                            <table class="am-table am-table-bordered am-table-striped am-text-nowrap">
                                <thead>
                                <tr>
                                    <th>订购水果类&nbsp;
                                        <!-- <small>
                                            <a href="">更多>></a>
                                        </small> -->
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td rowspan="6" style="width: 278px;">
                                        <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
                                            <ul class="am-slides">
                                                <li>
                                                    <img src="{{url('img/bing-1.jpg')}}" />
                                                </li>
                                                <li>
                                                    <img src="{{url('img/bing-2.jpg')}}" />
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        名称:
                                    </td>
                                    <td>
                                        <span>清甜雪梨</span>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>来源</span>
                                    </td>
                                    <td>农牧云水果基地</td>
                                    <ul style="list-style-type: none;text-align:center;">


                                        <li></li>
                                    </ul>
                                </tr>
                                <tr>
                                    <td>
                                        成长期数:
                                    </td>
                                    <td>
                                        <span>第二期成长</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        还需支付期数:
                                    </td>
                                    <td>
                                        <span>1（共三期）</span>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>

                        <div class="am-u-md-6">
                            <table class="am-table am-table-bordered am-table-striped am-text-nowrap">
                                <thead>
                                <tr>
                                    <th>订购牧产品&nbsp;
                                        <!-- <small>
                                            <a href="">更多>></a>
                                        </small> -->
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td rowspan="6" style="width: 278px;">
                                        <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
                                            <ul class="am-slides">
                                                <li>
                                                    <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" />
                                                </li>
                                                <li>
                                                    <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" />
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        名称:
                                    </td>
                                    <td>
                                        <span>清甜雪梨</span>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>来源</span>
                                    </td>
                                    <td>农牧云水果基地</td>
                                    <ul style="list-style-type: none;text-align:center;">


                                        <li></li>
                                    </ul>
                                </tr>
                                <tr>
                                    <td>
                                        成长期数:
                                    </td>
                                    <td>
                                        <span>第一期成长</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        还需支付期数:
                                    </td>
                                    <td>
                                        <span>2（共三期）</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="admin-content-footer">
        <hr>
        <p class="am-padding-left">© 2018 搭建.</p>
    </footer>
    <div class="addLocation" style="display: none;width: 200px;height: 200px;color: red;position: absolute">
        1
    </div>
</div>
@endsection