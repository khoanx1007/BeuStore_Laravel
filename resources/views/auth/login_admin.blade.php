@extends('auth.auth_layout_admin')
@section('content')
<div class="login100-form-title" style="background-image: url(/backend/login/images/bg-01.jpg);">
	<span class="login100-form-title-1">
		Đăng nhập
	</span>
</div>
<form class="login100-form validate-form" method="POST" action="{{ route('admin.login.authenticate') }}">
	@csrf
	<div class="wrap-input100 validate-input m-b-26">
		<span class="label-input100">Email</span>
		<input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Nhập Email">
		@error('email')
			<span class="focus-input100"></span>
			<div class="alert-validate" data-validate = "{{ $message }}"></div>
		@enderror
	</div>

	<div class="wrap-input100 validate-input m-b-18">
		<span class="label-input100">Mật khẩu</span>
		<input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
		@error('password')
			<span class="focus-input100"></span>
			<div class="alert-validate" data-validate = "{{ $message }}"></div>
		@enderror
	</div>
	<div class="flex-sb-m w-full p-b-30">
        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
                Ghi nhớ tôi
            </label>
        </div>

        <div>
            <a href="{{route('admin.forgotPass')}}" class="txt1">
                Quên mật khẩu?
            </a>
        </div>
    </div>
	<div class="container-login100-form-btn">
		<button class="login100-form-btn bg-primary" id="btn-submit" type="submit">
			Đăng nhập
		</button>
	</div>
</form>
@endsection