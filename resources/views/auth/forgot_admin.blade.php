@extends('auth.auth_layout_admin')
@section('content')
<div class="login100-form-title" style="background-image: url(/backend/login/images/bg-01.jpg);">
	<span class="login100-form-title-1">
		Quên mật khẩu
	</span>
</div>
<form class="login100-form validate-form" method="POST" action="{{ route('admin.sendEmail') }}">
	@csrf
	<div class="wrap-input100 validate-input m-b-26">
		<span class="label-input100">Email</span>
		<input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Nhập Email">
		@error('email')
			<span class="focus-input100"></span>
			<div class="alert-validate" data-validate = "{{ $message }}"></div>
		@enderror
	</div>
	<div class="container-login100-form-btn">
		<button class="login100-form-btn bg-primary" id="btn-submit" type="submit">
			Gửi email
		</button>
	</div>
	<div class="w-full text-right">
		<a href="{{route('admin.login')}}">
			Trở về trang đăng nhập
		</a>
	</div>
</form>
@endsection