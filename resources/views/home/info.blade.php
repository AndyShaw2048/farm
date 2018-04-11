<!doctype html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin user Examples</title>
    <meta name="description" content="这是一个 user 页面">
    <meta name="keywords" content="user">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{url('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
</head>
<script type="text/javascript">
    function getFileSize()
    {
        var fso = document.getElementById('user-pic').files;
        var obj = document.getElementById('user-pic');
        var maxsize = 2* 1024 * 1024;
        if(fso[0].size > maxsize)
        {
            alert('图片大小超过2M');
            obj.value = "";
        }
    }
</script>
<body>

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <img style="margin-left:100px;height:50px;cursor: pointer;" src="{{url('img/农牧云.png')}}" alt="">
    <span style="margin-left:80px;cursor: pointer;">
        <small>首页</small>
    </span>
    <span style="margin-left:80px;cursor: pointer;">
        <small>云上集市</small>
    </span>
    <span style="margin-left:80px;cursor: pointer;">
        <small>云上农场</small>
    </span>
        <strong style="margin-left:80px;cursor: pointer;">个人中心</strong>
    <span style="margin-left:80px;cursor: pointer;">
        <small>关于我们</small>
    </span>
    </div>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li>
                <a href="javascript:;">
                    <span class="am-icon-envelope-o"></span> 消息
                    <span class="am-badge am-badge-warning">5</span>
                </a>
            </li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li>
                    <a href="/home">
                        <span class="am-icon-home"></span> 个人主页</a>
                </li>
                <li>
                    <a href="/home/account/info">
                        <span class="am-icon-male"></span> 个人资料</a>
                </li>
                <li>
                    <a href="/home/account/cart">
                        <span class="am-icon-puzzle-piece"></span> 我的购物车</a>
                </li>
                <li>
                    <a href="/home/order" class="am-cf">
                        <span class="am-icon-check"></span> 我的订单
                        <!-- <span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span> -->
                    </a>

                </li>
                <li>
                    <a href="/home/purchase">
                        <span class="am-icon-table"></span> 我的订购</a>
                </li>
                <li>
                    <a href="/home/account/message">
                        <span class="am-icon-bullhorn"></span> 我的消息</a>
                </li>
                <li>
                    <a href="/logout">
                        <span class="am-icon-sign-out"></span> 注销</a>
                </li>
            </ul>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p>
                        <span class="am-icon-bookmark"></span> 公告</p>
                    <p>四川农大牧场4月5日-5月5日特大优惠活动。</p>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">个人资料</strong> /
                    <small>Personal information</small>
                </div>
            </div>

            <hr/>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-bd">

                            <p style="color:#0b6fa2;text-align: center;font-size: 1.3em;margin-top:0;margin-bottom: 5px;">头像设置</p>
                            <div class="am-g">
                                <div class="am-u-md-4">
                                    <img class="am-img-circle am-img-thumbnail" src="{{url($user->avatar)}}" alt="" />
                                </div>
                                <div class="am-u-md-8">
                                    <form class="am-form" method="post" action="/home/account/avatar"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="am-form-group">
                                            <input type="file" name="avatar" id="user-pic" onchange="getFileSize();">
                                            <p class="am-form-help">(图片大小为2M以下)</p>
                                            <button type="submit" class="am-btn am-btn-primary am-btn-xs">确认保存</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="am-panel am-panel-default">
                        <div class="am-panel-bd">
                            <!-- <div class="user-info">
                                <p>等级信息</p>
                                <div class="am-progress am-progress-sm">
                                    <div class="am-progress-bar" style="width: 60%"></div>
                                </div>
                                <p class="user-info-order">当前等级：
                                    <strong>LV1</strong> 活跃天数：
                                    <strong>587</strong> 距离下一级别：
                                    <strong>160</strong>
                                </p>
                            </div> -->
                            <div class="user-info">
                                <p>信用信息</p>
                                <div class="am-progress am-progress-sm">
                                    <div class="am-progress-bar am-progress-bar-success" style="width: 80%"></div>
                                </div>
                                <p class="user-info-order">信用等级：正常当前 信用积分：
                                    <strong>80</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
                    @if($errors->any())
                        {{--@foreach($errors->first() as $e)--}}
                            {{--<div class="am-alert am-alert-warning" data-am-alert>--}}
                                {{--<button type="button" class="am-close">&times;</button>--}}
                                {{--{{$e}}--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                            <div class="am-alert am-alert-warning" data-am-alert>
                                <button type="button" class="am-close">&times;</button>
                                {{$errors->first()}}
                            </div>
                    @endif
                    <form class="am-form am-form-horizontal" action="/home/account/info" method="post">
                        @csrf
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">头像 / Logo</label>
                            <div class="am-u-sm-9">
                                <img style="width: 100px;height: 100px" src="{{url($user->avatar)}}" alt="">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="nickname" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                            <div class="am-u-sm-9">
                                <input type="text" name="nickname" id="nickname" value="{{$user->nickname}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">会员等级</label>
                            <div class="am-u-sm-9">
                                <div style="margin: 0" class="am-progress am-progress-sm">
                                    <div class="am-progress-bar" style="width: 60%"></div>
                                </div>
                                <p style="margin: 0" class="user-info-order">会员等级
                                    <strong style="color: red;font-size: 1.2em">svip {{$user->grade}}</strong>&nbsp&nbsp&nbsp距离下一等级还需消费160元
                                </p>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="email" class="am-u-sm-3 am-form-label">电子邮件 / Email</label>
                            <div class="am-u-sm-9">
                                <input type="email" name="email" id="email" value="{{$user->email}}">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">联系电话 / Telephone</label>
                            <div class="am-u-sm-9">
                                <input type="tel" name="telephone" id="user-phone" value="{{$user->telephone}}">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">确认修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2018 南充</p>
        </footer>
    </div>
    <!-- content end -->

</div>

<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/amazeui.min.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>

</body>

</html>