@extends('auth.auth_layout')
@section('title')
Đăng kí thành viên
@endsection
@section('css')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="/frontend/register/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/frontend/register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/frontend/register/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/frontend/register/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/frontend/register/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/frontend/register/vendor/animate/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="/frontend/register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/frontend/register/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/frontend/register/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="/frontend/register/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/frontend/register/css/util.css">
<link rel="stylesheet" type="text/css" href="/frontend/register/css/main.css">
<!--===============================================================================================-->
@endsection
@section('content')
<div class="limiter">
  <div class="container-login100">
    <div class="login100-more" style="background-image: url('/frontend/register/images/bg-01.jpg');"></div>
    <div class="wrap-login100 p-l-30 p-r-30 p-t-40 p-b-30 ">
      <form class="login100-form validate-form" action="{{ route('auth.register') }}" method="post">
        @csrf
        <span class="login100-form-title p-b-12">
          Đăng ký thành viên
        </span>
        <div class="wrap-input100 validate-input">
          <span class="label-input100">Họ tên</span>
          <input class="input100" type="text" name="name" placeholder="Họ tên...">
          <span class="focus-input100"></span>
          @error('name') <div class="alert-validate" data-validate = "{{ $message }}"></div>@enderror
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">Email</span>
          <input class="input100" type="email" name="email" placeholder="Địa chỉ Email...">
          <span class="focus-input100"></span>
          @error('email') <div class="alert-validate" data-validate = "{{ $message }}"></div>@enderror
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">Mật khẩu</span>
          <input class="input100" type="password" name="password" placeholder="********">
          <span class="focus-input100"></span>
          @error('password') <div class="alert-validate" data-validate = "{{ $message }}"></div>@enderror
        </div>

        <div class="wrap-input100 validate-input">
          <span class="label-input100">Nhập lại mật khẩu</span>
          <input class="input100" type="password" name="password_confirmation" placeholder="********">
          <span class="focus-input100"></span>
          @error('password') <div class="alert-validate" data-validate = "{{ $message }}"></div>@enderror
        </div>

        <div class="flex-m w-full p-b-33">
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              <span class="txt1">
                Tôi đồng ý với
                <a href="#" class="txt2 hov1">
                  Điều khoản sử dụng
                </a>
              </span>
            </label>
          </div>

          
        </div>

        <div class="container-login100-form-btn">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
              Đăng ký
            </button>
          </div>
          <a href="{{ route('auth.login') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
            Đăng nhập
            <i class="fa fa-long-arrow-right m-l-5"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('js')
<!--===============================================================================================-->
<script src="/frontend/register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/register/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/register/vendor/bootstrap/js/popper.js"></script>
	<script src="/frontend/register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/register/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/register/vendor/daterangepicker/moment.min.js"></script>
	<script src="/frontend/register/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/frontend/register/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	{{-- <script src="/frontend/register/js/main.js"></script> --}}
@endsection

     