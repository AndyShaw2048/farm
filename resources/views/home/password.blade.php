@if($errors->any())
    @foreach($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
<form action="/home/account/password" method="post">
    @csrf
    <input type="text" name="oldPwd">
    <input type="text" name="newPwd">
    <input type="text" name="newPwd_confirmation">
    <button type="submit">Sub</button>
</form>