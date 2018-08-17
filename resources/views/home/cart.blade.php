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
                                <span>{{Cart::content()->count()}}</span>
                            </th>

                        <th style="padding-left: 50px;">

                                <label for="doc-select-1" style="text-decoration: none;font-weight:initial;">
                                    <small>配送至:</small>
                                </label>
                                <select style="text-decoration: none;font-weight:initial;font-size: 0.8em;" id="doc-select-1">
                                    <option value="option1">四川省&nbsp南充市&nbsp顺庆区&nbsp华凤 街道</option>
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
                        @if(Cart::content()->isEmpty())
                            <tr>
                                <td colspan="6">购物车暂无商品</td>
                            </tr>
                        @else
                            @foreach(Cart::content() as $item)
                                <tr>
                                    <td style="padding-left: 20px;">
                                        <input type="checkbox" name="item" value="{{$item->rowId}}">
                                    </td>
                                    <td style="line-height:40px;">
                                        <img style="width:120px;height:120px;float: left;margin-right: 10px;" src="{{url('uploads').'/'.$item->model->logo}}" alt="">
                                        <span>{{\App\Farm::GetNameByID($item->model->farm)}}</span>
                                        <br>
                                        <div style="width: 500px;;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">{{($item->model->description)}}</div>
                                        <br>
                                        <span>500g/份</span>
                                    </td>
                                    <td style="line-height: 80px;">{{$item->model->price}}</td>
                                    <td style="line-height: 80px;">
                                        <input style="width: 50px;" type="number" minlength="0" value="{{$item->qty}}" min="1">
                                    </td>
                                    <td style="line-height: 80px;">￥{{$item->price*$item->qty}}</td>
                                    <td style="line-height: 80px;">
                                        <a style="cursor:pointer;color: red" onclick="del('{{$item->rowId}}')">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table ">
                        <tr>
                            @if(!Cart::content()->isEmpty())
                            <td>
                                <a onclick="delArray()">删除选中商品</a>
                            </td>
                            @endif
                            {{--<td>--}}
                                    {{--<span>已选择--}}
                                        {{--<span style="color: red">4</span> 件商品</span>--}}
                            {{--</td>--}}

                            <td style="text-align: right">
                                总价
                                <span style="color: red;font-size: 1.4em">￥ {{Cart::subtotal()}}</span>&nbsp;&nbsp;&nbsp;
                                <button type="button" class="am-btn am-btn-danger">结算</button>
                            </td>
                        @endif
                        {{--<td>--}}
                        {{--<span>已选择--}}
                        {{--<span style="color: red">4</span> 件商品</span>--}}
                        {{--</td>--}}
                                </tr>
                        </table>
            <div style="height: 100px"></div>
        </div>
        <div style="height: 100px"></div>
    </div>
</div>


<script>
    function del(rowId){
        $.ajax({
            type: 'POST',
            url: '/home/cart/del',
            data: {rowId:rowId},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data){
                if(data[0].code == 200){

                    $.message({
                        message:'删除成功',
                        time:'1000',
                        type:'success'
                    });
                    window.setTimeout('location.reload()',1500);
                }
                else{
                    $.message({
                        message: '删除失败',
                        type: 'error'
                    });
                }
            },
            error: function(xhr, type){
                alert('Ajax error!')
            }
        });
    }

    function delArray()
    {
        var checkBoxArr = [];
        $('input[name="item"]:checked').each(function() {
            checkBoxArr.push($(this).val());
        });
        if(checkBoxArr == '')
        {
            alert("请先选择需要删除的商品");
            return;
        }
        $.ajax({
            type: 'POST',
            url: '/home/cart/del',
            data: {rowId:checkBoxArr},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data){
                if(data[0].code == 200){

                    $.message({
                        message:'删除成功',
                        time:'1000',
                        type:'success'
                    });
                    window.setTimeout('location.reload()',1500);
                }
                else{
                    $.message({
                        message: '删除失败',
                        type: 'error'
                    });
                }
            },
            error: function(xhr, type){
                alert('Ajax error!')
            }
        });
    }
</script>

<script>

    //查找thead下第一个th下的input
    var chbAll=document.querySelector(
            "thead th:first-child>input"
    );
    //查找tbody中所有第一个td下的input
    var chbs=document.querySelectorAll(
            "tbody td:first-child>input"
    );
    //为chbAll绑定单击事件
    chbAll.onclick=function(){
        //遍历chbs中每个chb
        for(var i=0;i<chbs.length;i++){
            //设置当前chb的checked等于this的checked
            chbs[i].checked=this.checked;
        }
    }
    //为chbs中每chb都绑定单击事件
    for(var i=0;i<chbs.length;i++){
        chbs[i].onclick=function(){
            if(!this.checked)
                chbAll.checked=false;
            else{
                //选择tbody下第一个td中的未选中的input
                var unchecked=
                        document.querySelector(
                                "tbody td:first-child>input:not(:checked)"
                        );
                if(unchecked===null)
                    chbAll.checked=true;
            }
        }
    }
</script>
@endsection