@extends('layout')
@section('content')

<base href="{{asset('')}}">
<div class="login-area ptb-100">
<div class="container">
<div class="login-form">
<h2>Đăng kí Auth</h2>
<title>Đăng kí Auth</title>
<?php
$message=Session::get('message');
if($message)
{
	echo'<span class="text-alert">',$message,'</span>';
	Session::put('message',null);
}
?>
<form action="{{route('dangkiAuth')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	@foreach($errors->all() as $val)
	<ul>
		<li> {{$val}}</li>
	</ul>
	@endforeach
<div class="form-group">
<input type="text" class="form-control" name="admin_name" value="{{old('admin_name')}}" placeholder="Your Name" required></div>
<div class="form-group">
<input type="text" class="form-control" name="admin_email" value="{{old('admin_name')}}" placeholder="Email" required></div>
<div class="form-group">
<input type="password" class="form-control" name="admin_password" placeholder="Password" required></div>

<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">

</div>
<div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">


<a href="login_auth" class="lost-your-password">Đăng nhập Auth</a>
</div>
</div>
<button type="submit" value="Đăng nhập" name="login" class="default-btn">Đăng kí <span></span></button>
</form>
</div>
</div>
</div>
@endsection