<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/cloudShop.css" />
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/amazeui.min.css">
<title></title>
</head>

<body>

<input type="hidden" name="" id="id1" value="" />
<div class="nav">
    <div class="head-img">
        <img class="head-imgs" src="img/bg-农牧云.png" />
    </div>
    <div class="nav-a">
        <a href="#">农牧云</a>
    </div>
    <div class="nav-ul">
        <ul class="main-menu">
            <li>
                <a href="index.html" id="fir-page">首页</a>
            </li>
            <li>
                <a href="map.html" id="shar-page">云上集市</a>
            </li>
            <li>
                <a href="share.html">云上农场</a>
            </li>
            <li>
                <a href="partime-job.html">最新动态</a>
            </li>
            <li>
                <a href="sell.html">关于我们</a>
            </li>
            <li>
                <span id="login" href="">个人中心</span>
                <ul class="sub-menu">
                    <li>
                        <a href="">购物车</a>
                    </li>
                    <li>
                        <a href="">信息中心</a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="body">
    <div>
        <ul class="classify">
            <li class="fruit">
                <div class="line">

                </div>
                <a href="">清甜水果</a>
                <ul class="sub-classify">
                    <li>
                        <a href="">猕猴桃</a>
                    </li>
                    <li>
                        <a href="">荔枝</a>
                    </li>
                    <li>
                        <a href="">苹果</a>
                    </li>
                    <li>
                        <a href="">香蕉</a>
                    </li>
                </ul>
            </li>
            <li class="vege">
                <div class="line">

                </div>
                <a href="">新鲜蔬菜</a>
                <ul class="sub-classify">
                    <li>
                        <a href="">白菜</a>
                    </li>
                    <li>
                        <a href="">胡萝卜</a>
                    </li>
                    <li>
                        <a href="">菠菜</a>
                    </li>
                    <li>
                        <a href="">莴苣</a>
                    </li>
                </ul>
            </li>
            <li class="meat">
                <div class="line">

                </div>
                <a href="">品质肉类</a>
                <ul class="sub-classify">
                    <li>
                        <a href="">香蕉</a>
                    </li>
                    <li>
                        <a href="">香蕉</a>
                    </li>
                    <li>
                        <a href="">香蕉</a>
                    </li>
                    <li>
                        <a href="">香蕉</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="line">

                </div>
                <a href="">健康认购</a>

            </li>
        </ul>
    </div>
    <div class="carousel">
        <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
            <ul class="am-slides">
                <li>
                    <img src="img/s1.jpg" />
                </li>
                <li>
                    <img src="img/s5.jpg" />
                </li>
            </ul>
        </div>
    </div>
    <div class="commodity-list">


        <div style="clear:both"></div>
        <div class="hot-goods" id="hot-goods">

            <table cellspacing="0">
                <tr class="cloud-shop">
                    <td colspan="4">云上集市</td>
                </tr>
                <tr class="hot-title">
                    <td colspan="4">******************瓜果蔬菜******************</td>
                </tr>
                <tr class="kinds">
                    <td id="kinds1" class="hot-goods-class">
                        <p>
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </p>
                        <p>热门瓜果蔬菜</p>
                    </td>
                    <td id="kinds2">
                        <p>
                            <i class="fa fa-coffee" aria-hidden="true"></i>
                        </p>
                        <p>柑橘类</p>
                    </td>
                    <td id="kinds3">
                        <p>
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </p>
                        <p>瓜类</p>
                    </td>
                    <td id="kinds4">
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </p>
                        <p>其他</p>
                    </td>
                </tr>

            </table>
            <ul class="hot-goods-img" id="hot-goods-1">
                @foreach($goods as $good)
                <li>
                    <img src="uploads/{{$good->logo}}" alt="">
                    <br>
                    <span>{{$good->name}}</span>
                    <span> ￥{{$good->price}}</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                @endforeach
            </ul>
            <ul class="hot-goods-img" id="hot-goods-2">
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
            </ul>
            <ul class="hot-goods-img" id="hot-goods-3">
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
            </ul>
            <ul class="hot-goods-img" id="hot-goods-4">
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
            </ul>
        </div>
        <div style="clear:both"></div>
        <div class="hot-goods" id="hot-goods">
            <table cellspacing="0">
                <tr class="hot-title meat" id="meat">
                    <td colspan="4">******************农牧产品******************</td>
                </tr>
                <tr class="kinds">
                    <td id="meat1" class="hot-goods-class">
                        <p>
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </p>
                        <p>热门水果</p>
                    </td>
                    <td id="meat2">
                        <p>
                            <i class="fa fa-coffee" aria-hidden="true"></i>
                        </p>
                        <p>柑橘类</p>
                    </td>
                    <td id="meat3">
                        <p>
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </p>
                        <p>瓜类</p>
                    </td>
                    <td id="meat4">
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </p>
                        <p>其他</p>
                    </td>
                </tr>

            </table>
            <ul class="hot-goods-img" id="hot-meat-1">
                @foreach($goods as $good)
                <li>
                    <img src="uploads/{{$good->logo}}" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥25.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                @endforeach
                <li>
                    <img src="uploads/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥25.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥5.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥15.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥25.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥25.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥5.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥15.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
            </ul>
            <ul class="hot-goods-img" id="hot-meat-2">
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥26.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
            </ul>
            <ul class="hot-goods-img" id="hot-meat-3">
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥27.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
            </ul>
            <ul class="hot-goods-img" id="hot-meat-4">
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/多汁石榴.jpg" alt="">
                    <br>
                    <span>多汁石榴</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/猕猴桃.jpg" alt="">
                    <br>
                    <span>猕猴桃</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
                <li>
                    <img src="img/荔枝.jpg" alt="">
                    <br>
                    <span>荔枝</span>
                    <span> ￥28.00</span>
                    <button style="margin:0 auto;" type="button" class="am-btn am-btn-danger" data-am-modal="{target: '#my-popup'}">立即购买</button>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="am-popup" id="my-popup" style="height:533.5px;">
    <div class="am-popup-inner">
        <div class="am-popup-hd">
            <h4 class="am-popup-title">商品详细信息</h4>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd">
            <div class="am-g">
                <div class="am-u-sm-5">
                    <img src="img/荔枝.jpg" alt="">
                </div>
                <div style="margin-left:35px;width:305px;" class="am-u-sm-5">
                    <ul class="am-list" style="text-align:center;height:100%">
                        <li style="height:51.6px;line-height:50px;">
                            <span style="font-size:1.3em;font-weight: bolder;">多汁荔枝</span>
                            <span style="margin-left:5px;color:red">
                                <small>
                                    <span id="price">25</span>￥/份(500g)
                                </small>

                            </span>
                        </li>
                        <li style="height:51.6px;line-height:50px;">
                            <span>
                                <strong>来源:</strong> 农牧场水果基地</span>
                        </li>

                        <li style="height:51.6px;line-height:50px;">
                            <span id="count">购买数量:
                                <input id="count-input" type="number" value="1" min="0" max="99">
                            </span>
                        </li>
                        <li style="height:51.6px;line-height:50px;">
                            <span>
                                <strong>总价:
                                    <span id="total-price">11</span>
                                </strong>
                            </span>
                        </li>
                        <li style="height:54.6px;line-height:50px;">
                            <button id="add-cart" type="button" class="am-btn am-btn-danger">加入购物车</button>
                        </li>
                    </ul>
                </div>


            </div>
            <div style="margin-top:20px;">
                <ul class="am-avg-sm-3 am-thumbnails">
                    <li>
                        <img class="am-thumbnail" style="width:192px;height:110px;" src="img/荔枝.jpg" />
                    </li>
                    <li>
                        <img class="am-thumbnail" style="width:192px;height:110px;" src="img/荔枝.jpg" />
                    </li>
                    <li>
                        <img class="am-thumbnail" style="width:192px;height:110px;" src="img/荔枝.jpg" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="subscription">
    <div class="subscription-title">
        <h1>认购中心</h1>
        <p class="subscription-disc">多种自然生长牲畜类任你领养</p>
        <p class="subscription-line">&nbsp&nbsp&nbsp&nbsp</p>
    </div>
    <div class="subscription-animals">
        <div class="animals-img">
            <img src="img/清甜雪梨.jpg" alt="">
            <div class="animals-buy">
                <h1>农牧云农场</h1>
                <h2>清甜雪梨</h2>
                <p>￥30/期
                    <span>(共3期)</span>
                </p>
                <button>确定认购</button>
            </div>
        </div>
        <div class="animals-disc">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨</div>
        <div style="clear:both"></div>

        <div class="animals-disc">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨清甜雪梨</div>
        <div class="animals-img">
            <img src="img/清甜雪梨.jpg" alt="">
            <div class="animals-buy">
                <h1>农牧云农场</h1>
                <h2>清甜雪梨</h2>
                <p>￥30/期
                    <span>(共3期)</span>
                </p>
                <button>确定认购</button>
            </div>
        </div>
    </div>
</div>
<div style="clear:both"></div>
<div class="foot">
    <p>©2018 - 版权所有 </p>
    <p>PC版 | 本站自己手动搭建 |
        <a href="">管理登录</a>
    </p>
</div>

<script src="assets/js/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/amazeui.js"></script>
<script type="text/javascript">
    var price = $("#price").text();
    $("#add-cart").click(function () {
        alert("成功加入购物车");
        $("#count-input").val(1);
        $("#total-price").html(price);
        // $("body").removeClass("am-dimmer-active");
        // $("body").css("padding-left", "0")
        // $("#my-popup").removeClass("am-modal-active");
        // $(".am-dimmer").css("display", "none");
        // $(".am-dimmer").delay(3000).css("background", "rgba(0, 0, 0, .6)");
    });
    // $(".am-btn").click(function () {
    //     $(".am-dimmer").css("background", "rgba(0, 0, 0, .6)");
    // });
    $(function () {
        // console.log(price)
        $("#total-price").html(price)
        $("#count-input").click(function () {
            let totalPrice = this.value * price
            $("#total-price").html(totalPrice)
        });

        $("#kinds1").click(function () {
            for (var i = 0; i < 4; i++) {
                $("#kinds" + (i + 1)).removeClass();
                $("#hot-goods-" + (i + 1)).css("display", "none");
            }
            $("#kinds1").addClass("hot-goods-class");
            $("#hot-goods-1").css("display", "block");
        });
        $("#kinds2").click(function () {
            for (var i = 0; i < 4; i++) {
                $("#kinds" + (i + 1)).removeClass();
                $("#hot-goods-" + (i + 1)).css("display", "none");
            }
            $("#kinds2").addClass("hot-goods-class");
            $("#hot-goods-2").css("display", "block");
        });
        $("#kinds3").click(function () {
            for (var i = 0; i < 4; i++) {
                $("#kinds" + (i + 1)).removeClass();
                $("#hot-goods-" + (i + 1)).css("display", "none");
            }
            $("#kinds3").addClass("hot-goods-class");
            $("#hot-goods-3").css("display", "block");
        });
        $("#kinds4").click(function () {
            for (var i = 0; i < 4; i++) {
                $("#kinds" + (i + 1)).removeClass();
                $("#hot-goods-" + (i + 1)).css("display", "none");
            }
            $("#kinds4").addClass("hot-goods-class");
            $("#hot-goods-4").css("display", "block");
        });
        $("#meat1").click(function () {
            for (var i = 0; i < 4; i++) {
                $("#meat" + (i + 1)).removeClass();
                $("#hot-meat-" + (i + 1)).css("display", "none");
            }
            $("#meat1").addClass("hot-goods-class");
            $("#hot-meat-1").css("display", "block");
        });
        $("#meat2").click(function () {
            for (var i = 0; i < 4; i++) {
                $("#meat" + (i + 1)).removeClass();
                $("#hot-meat-" + (i + 1)).css("display", "none");
            }
            $("#meat2").addClass("hot-goods-class");
            $("#hot-meat-2").css("display", "block");
        });
        $("#meat3").click(function () {
            for (var i = 0; i < 4; i++) {
                $("#meat" + (i + 1)).removeClass();
                $("#hot-meat-" + (i + 1)).css("display", "none");
            }
            $("#meat3").addClass("hot-goods-class");
            $("#hot-meat-3").css("display", "block");
        });
        $("#meat4").click(function () {
            for (var i = 0; i < 4; i++) {
                $("#meat" + (i + 1)).removeClass();
                $("#hot-meat-" + (i + 1)).css("display", "none");
            }
            $("#meat4").addClass("hot-goods-class");
            $("#hot-meat-4").css("display", "block");
        });

        $(".am-popup-title").css('color', "red")
    });
</script>
</body>

</html>