@extends('layouts.main')

@section('title','购物车')

@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">购物车</strong> /
                    <small>ShoppingCart</small>
                </div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table am-table-bd am-table-striped admin-content-table">
                        <thead>
                        <tr>
                            <th style="color: red">
                                <span>全部商品&nbsp;&nbsp;&nbsp;</span>
                                <span>2</span>
                            </th>

                            <th style="padding-left: 50px;">

                                <label for="doc-select-1" style="text-decoration: none;font-weight:initial;">
                                    <small>配送至:</small>
                                </label>
                                <select style="text-decoration: none;font-weight:initial;font-size: 0.8em;" id="doc-select-1">
                                    <option value="option1">四川省&nbsp南充市&nbsp顺庆区&nbsp华凤 街道</option>
                                    <option value="option2">四川省&nbsp南充市&nbsp顺庆区&nbsp华凤 街道</option>
                                    <option value="option3">四川省&nbsp南充市&nbsp顺庆区&nbsp华凤 街道</option>
                                </select>
                                <span class="am-form-caret"></span>

                            </th>
                        </tr>
                        <tr>
                            <th style="width: 120px;">
                                <input type="checkbox" name="" id="">全选
                            </th>
                            <th>商品</th>
                            <th>单价</th>
                            <th>数量</th>
                            <th>小计</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="6" style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">农牧云牧场</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td style="line-height:40px;">
                                <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="{{url('img/猕猴桃.jpg')}}" alt="">
                                <span>农牧云水果基地</span>
                                <br>
                                <span>猕猴桃</span>
                                <br>
                                <span>500g/份</span>
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <input style="width: 50px;" type="number" minlength="0" value="1">
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <span style="cursor:pointer;color: red">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td style="line-height:40px;">
                                <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="{{url('img/玉米.jpg')}}" alt="">
                                <span>农牧云蔬菜基地</span>
                                <br>
                                <span>玉米</span>
                                <br>
                                <span>500g/份</span>
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <input style="width: 50px;" type="number" minlength="0" value="1">
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <span style="cursor:pointer;color: red">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">西南大牧场</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td style="line-height:40px;">
                                <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="{{url('img/多汁石榴.jpg')}}" alt="">
                                <span>西南大牧场水果基地</span>
                                <br>
                                <span>多汁石榴</span>
                                <br>
                                <span>500g/份</span>
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <input style="width: 50px;" type="number" minlength="0" value="1">
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <span style="cursor:pointer;color: red">删除</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td style="line-height:40px;">
                                <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="{{url('img/番茄.jpg')}}" alt="">
                                <span>西南大牧场蔬菜基地</span>
                                <br>
                                <span>番茄</span>
                                <br>
                                <span>500g/份</span>
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <input style="width: 50px;" type="number" minlength="0" value="1">
                            </td>
                            <td style="line-height: 80px;">￥25.00</td>
                            <td style="line-height: 80px;">
                                <span style="cursor:pointer;color: red">删除</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table am-table-bd am-table-striped admin-content-table">

                        <tr>
                            <td>
                                <input type="checkbox">全选
                            </td>
                            <td>
                                <span>删除选中商品</span>
                            </td>
                            <td>
                                    <span>已选择
                                        <span style="color: red">4</span> 件商品</span>
                            </td>
                            <td>总价
                                <span style="color: red;font-size: 1.4em">￥100</span>
                            </td>
                            <td>
                                <button type="button" class="am-btn am-btn-danger">结算</button>
                            </td>
                        </tr>
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