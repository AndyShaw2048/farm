<div class="layui-container" style="width: 800px">
<form class="layui-form" action="">
    <div class="layui-form-item">
        <label class="layui-form-label">订单ID</label>
        <div class="layui-input-block">
            <input type="text" name="orderID" required disabled value="{{$order->order_id}}" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">上传期数</label>
        <div class="layui-input-block">
            <select name="city" lay-verify="required">
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
            <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
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
    <div class="layui-form-item text-center">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>

<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });

    layui.use('upload', function(){
        var upload = layui.upload;

        //执行实例
        var uploadInst = upload.render({
            elem: '#img' //绑定元素
            ,field:'img'
            ,multiple:'true'
            ,url: '/admin/adoptiondetails/uploadfile/img' //上传接口
            ,accept:'images'
            ,data: {
                '_token': $('meta[name="_token"]').attr('content')
            }
            ,acceptMime:'image/png,image/jpg,image/jpeg'
            ,done: function(res){
                console.log(res);
            }
            ,error: function(){
                //请求异常回调
            }
        });
    });

    layui.use('upload', function(){
        var upload = layui.upload;

        //执行实例
        var uploadInst = upload.render({
            elem: '#vdo' //绑定元素
            ,url: '/upload/' //上传接口
            ,accept:'video'
            ,accpetMime:'video/*'
            ,done: function(res){
                //上传完毕回调
            }
            ,error: function(){
                //请求异常回调
            }
        });
    });
</script>
</div>