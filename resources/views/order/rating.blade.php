@if($errors->any())
    @foreach($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
<form action="/home/order/rating" method="post">
    @csrf
    <p>订单号：{{$order->order_id}}</p>
    <input type="text" name="order_id" value="{{$order->order_id}}" hidden>
    <input type="text" name="goods_grade">
    <input type="text" name="goods_content">
    <input type="text" name="goods_pics">
    <input type="text" name="shop_grade">
    <input type="text" name="shop_content">
    <input type="text" name="shop_pics">
    <button type="submit">Sub</button>
</form>