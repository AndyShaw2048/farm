@if($errors->any())
    @foreach($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
<form action="/register" method="post">
    @csrf
    <input type="text" name="telephone" value="{{old('telephone')}}">
    <input type="text" name="password">
    <input type="text" name="password_confirmation">
    <input type="text" name="email">
    <button type="submit">Sub</button>
</form>