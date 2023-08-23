<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="/backend/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="/backend/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/backend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/backend/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/backend/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/backend/login/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				@yield('content')
			</div>
		</div>
	</div>
	<script src="/backend/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/backend/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/backend/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/backend/login/js/main.js"></script>
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	@error('login')
		<script>
			toastr.error("{{$message}}");
		</script>
    @enderror
    @if(Session::has('success'))
        <script>
            toastr.success("{!! session()->get('success') !!}");
        </script>
    @elseif(Session::has('error'))
        <script>
            toastr.error("{!! session()->get('error') !!}");
        </script>
    @endif
	<script src="/backend/assets/js/plugin/webfont/webfont.min.js"></script>
</body>
</html>