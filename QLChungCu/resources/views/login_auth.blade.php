@extends('layout')
@section('content')

<base href="{{asset('')}}">
<div class="login-area ptb-100">
<div class="container">
<div class="login-form">
<h2>Đăng nhập Authentication</h2>
<title>Đăng nhập Authentication</title>
<?php
$message=Session::get('message');
if($message)
{
	echo'<span class="text-alert">',$message,'</span>';
	Session::put('message',null);
}
?>
<form action="{{route('dangnhapAuth')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	@foreach($errors->all() as $val)
	<ul>
		<li> {{$val}}</li>
	</ul>
	@endforeach
<div class="form-group">
<input type="text" class="form-control" name="admin_email" value="{{old('admin_name')}}" placeholder="Email" required></div>
<div class="form-group">
<input type="password" class="form-control" name="admin_password" placeholder="Password" required></div>

<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
<p>
<input type="checkbox" id="test2">
<label for="test2">Remember me</label>
</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">

<a href="#" class="lost-your-password">Lost your password?</a>

</div>
</div>
<button type="submit" value="Đăng nhập" name="login" class="default-btn">Đăng nhập Auth <span></span></button>
</form>
</div>
</div>
</div>
@endsection