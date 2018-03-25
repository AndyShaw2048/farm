@foreach($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach
@if($orders->first())
    @foreach($orders as $order)
        ---------------
        <div>订单编号：{{$order->order_id}}
            |订单状态：{{$order->status}}
            @if(!($order->status > 4))
            |<a href="/home/order/cancel/{{$order->order_id}}">取消订单</a>
            @endif
            @if($order->status < 5 && $order->status > 1)
            |<a href="/home/order/receive/{{$order->order_id}}">确认收货</a>
            @endif
            @if($order->status == 5)
                |<a href="/home/order/rating/{{$order->order_id}}">发表评价</a>
            @endif
        </div>
    @endforeach
    @else
    暂时没有订单
@endif