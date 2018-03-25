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
    <input type="text" name="num">
    <button type="submit">Sub</button>
</form>