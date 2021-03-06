<div class="layui-container" style="width: 800px">
<form class="layui-form" action="detail" id="form1" method="post">
    @csrf
    <div class="layui-form-item">
        <label class="layui-form-label">订单ID</label>
        <div class="layui-input-block">
            <input type="text" name="orderID" required disabled value="{{$order->order_id}}" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">上传期数</label>
        <div class="layui-input-block">
            <select name="currentStage" lay-verify="required">
                @for($i=1;$i<$order->total_stage+1;$i++)
                    @if($i<$order->current_stage)
                         <option value="{{$i}}" disabled>第 {{$i}} 期</option>
                    @else
                        <option value="{{$i}}">第 {{$i}} 期</option>
                    @endif
                @endfor
            </select>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">文本描述</label>
        <div class="layui-input-block">
            <textarea name="textDesc" placeholder="请输入内容" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">照片描述</label>
        <div class="layui-input-block">
            <button type="button" class="layui-btn" id="img">
                <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">视频描述</label>
        <div class="layui-input-block">
            <button type="button" class="layui-btn" id="vdo">
                <i class="layui-icon">&#xe67c;</i>上传视频

            </button>
        </div>
    </div>
    <input type="text" hidden id="upload-image" name="image" value="">
    <input type="text" hidden id="movie" name="movie" value="">
    <div class="layui-form-item text-center">
        <div class="layui-input-block">
            <button class="layui-btn" id="btn" lay-submit lay-filter="form1">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>

<script>
    layui.use('upload', function(){
        var upload = layui.upload;

        //执行实例
        upload.render({
            elem: '#img' //绑定元素
            ,field:'img'
            ,url: '/admin/adoptiondetails/uploadfile/img' //上传接口
            ,data: {
                '_token': $('meta[name="_token"]').attr('content')
            }
            ,done: function(res){
                $('#img').html('<i class="layui-icon">&#xe67c;</i>上传成功');
                $('#img').css('background-color','#0CCA2A');
//                console.log(res[0].path);
                $('#upload-image').val(res[0].path);
            }
            ,error: function(){
                //请求异常回调
            }
        });
    });


    //Demo
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        form.on('submit(form1)', function(data){
//            layer.msg(JSON.stringify(data.field));
            $.ajax({
                url: data.form.action,
                type: data.form.method,
                data: data.field,
                success: function (info) {
                    window.setTimeout("window.location='/admin/adoptiondetails'",1800);
                    toastr.success('保存成功');
                }
            });
            return false;
        });
    });



</script>
</div>