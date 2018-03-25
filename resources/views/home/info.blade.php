@if($errors->any())
    @foreach($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
<form action="/home/account/info" method="post">
    @csrf
    <input type="text" name="nickname" value="{{$user->nickname}}">
    <input type="text" name="email" value="{{$user->email}}">
    <input type="text" name="address" value="{{$user->address}}">
    <button type="submit">Sub</button>
</form>