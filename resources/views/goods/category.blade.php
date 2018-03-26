@foreach($cate_array as $c)
    <div>----{{$c['item_name']}}----</div>
    @foreach($goods_array[$c['item_id']]->goods as $g)
        <a href="/goods/detail/{{$g->id}}">{{$g->name}}</a>
    @endforeach
@endforeach