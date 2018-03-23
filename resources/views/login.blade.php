<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
    @if($errors->any())
        @foreach($errors->get('e') as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif

    @if($errors->any())
        @foreach($errors->get('telephone') as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
<form class="form-horizontal" action="/login" method="post">
    @csrf
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Telephone</label>
        <div class="col-sm-10">
            <input autofocus="autofocus" type="text" name="telephone" class="form-control" id="inputEmail3" placeholder="Telephone" value="{{old('telephone')}}">
        </div>
    </div>
    @if($errors->any())
        @foreach($errors->get('password') as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </div>
</form>
</div>