<p>商品名称：{{$goods->name}}</p>
<p>商品描述：{{$goods->description}}</p>
<p>商品logo：{{$goods->logo}}</p>
<p>商品实物图：{{$goods->pics}}</p>
<p>商品类型：{{$goods->goods_type}}</p>
<p>商品单价：{{$goods->price}}</p>
<p>商品库存：{{$goods->stocks}}</p>
<p>商品销量：{{$goods->sales}}</p>


@if($errors->any())
    @foreach($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
<form action="self" method="post">
    @csrf
    <input type="text" name="goods_id" value="{{$goods->id}}" hidden>
    <p>购买数量：<input type="text" name="num"></p>
    <p>真实姓名：<input type="text" name="name"></p>
    <p>固定电话：<input type="text" name="phone"></p>
    <p>移动电话：<input type="text" name="mobile"></p>
    <p>省份：<input type="text" name="province"></p>
    <p>城市：<input type="text" name="city"></p>
    <p>区县：<input type="text" name="district"></p>
    <p>地址：<input type="text" name="address"></p>
    <p>邮编：<input type="text" name="zip"></p>
    <button type="submit">Sub</button>
</form>