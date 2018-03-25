@foreach($goods as $item)
    <a href="/goods/detail/{{$item->id}}">{{$item->name}}</a>
@endforeach