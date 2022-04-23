@extends('auth.auth_layout')
@section('title')
Đăng nhập
@endsection
@section('css')
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/frontend/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/frontend/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/frontend/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/frontend/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/frontend/login/css/main.css">
<!--===============================================================================================-->
@endsection
@section('content')
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form class="login100-form validate-form" action="{{ route('auth.login') }}" method="post">
        @csrf
        <span class="login100-form-title p-b-43">
          Đăng nhập
        </span>
        <div class="wrap-input100 validate-input">
          <span class="label-input100">Email</span>
          <input class="input100" type="email" name="email" placeholder="Nhập Email...">
          <span class="focus-input100"></span>
          @error('email') <div class="alert-validate" data-validate = "{{ $message }}"></div>@enderror
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">Mật khẩu</span>
          <input class="input100" type="password" name="password" placeholder="********">
          <span class="focus-input100"></span>
          @error('password') <div class="alert-validate" data-validate = "{{ $message }}"></div>@enderror
        </div>

        <div class="flex-sb-m w-full p-t-3 p-b-32">
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Duy trì đăng nhập
            </label>
          </div>

          <div>
            <a href="#" class="txt1">
              Quên mật khẩu
            </a>
          </div>
        </div>
        
    

        <div class="container-login100-form-btn">
          <button type="submit"  class="login100-form-btn">
            Đăng nhập
          </button>
        </div>
        <div class="text-center p-t-25">
          <a class="txt2" href="{{ route('auth.register') }}">
          Tạo tài khoản
          <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
        
        <div class="text-center p-t-20 p-b-20">
          <span class="txt2">
            Hoặc đăng nhập thông qua
          </span>
        </div>

        <div class="login100-form-social flex-c-m">
          <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
            <i class="fa fa-facebook-f" aria-hidden="true"></i>
          </a>

          <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </div>
      </form>

      <div class="login100-more" style="background-image: url('/frontend/login/images/bg-01.jpg');">
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<!--===============================================================================================-->
  <script src="/frontend/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/frontend/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="/frontend/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	{{-- <script src="/frontend/login/js/main.js"></script> --}}
  <script>

    
    </script>
@endsection