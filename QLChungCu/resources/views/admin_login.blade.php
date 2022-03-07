@extends('layout')
@section('content')

<base href="{{asset('')}}">
<div class="login-area ptb-100">
<div class="container">
<div class="login-form">
	<title>Đăng nhập Admin</title>
<h2>Login</h2>

<?php
$message=Session::get('message');
if($message)
{
	echo'<span class="text-alert">',$message,'</span>';
	Session::put('message',null);
}
?>
<form action="{{route('signin')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
<input type="text" class="form-control" name="admin_email" placeholder="Email" required>
</div>
<div class="form-group">
<input type="password" class="form-control" name="admin_password" placeholder="Password" required>
</div>
<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">

<input type="checkbox" id="test2">
<label for="test2">Remember me</label>
</p>

</div>
<div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">
<a href="#" class="lost-your-password">Lost your password?</a>

<div class="form-group">
	<p>
	<a href="register_auth" class="lost-your-password">Đăng kí Auth?</a>
</p>
	<a href="login_auth" class="lost-your-password">Đăng nhập Auth?</a>
</div>
</div>
</div>
<button type="submit" value="Đăng nhập" name="login" class="default-btn">Log In <span></span></button>
</form>
</div>
</div>
</div>
@endsection