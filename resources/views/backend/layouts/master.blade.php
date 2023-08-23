<!DOCTYPE html>
<html lang="en">
<head>
	{{-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> --}}
	<title>BeuStore Admin - @yield('title')</title>
	<link rel="icon" href="/backend/assets/img/favicon.ico" type="image/x-icon"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Fonts and icons -->
	<script src="/backend/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/backend/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="/backend/assets/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/backend/assets/css/style.css">
	<link rel="stylesheet" href="/backend/assets/css/css.css">
	<link rel="stylesheet" href="/frontend/css/sweetalert.css">
	<link rel="stylesheet" href="/backend/assets/toastr/toastr.min.css">
	@yield('css')
</head>
<body>
	
	<div class="wrapper">
		@include('backend.includes.header')

		<!-- Sidebar -->
		@include('backend.includes.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				@yield('content')
            	@include('backend.includes.footer')
			</div>
		</div>
		@yield('preloader')
		<!-- Custom template | don't include it in your project! -->
	</div>
	
	<!--   Core JS Files   -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="/backend/assets/js/core/popper.min.js"></script>
	<script src="/backend/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="/backend/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/backend/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="/backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Chart JS -->
	<script src="/backend/assets/js/plugin/chart.js/chart.min.js"></script>
	<!-- jQuery Sparkline -->
	<script src="/backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/backend/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="/backend/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/backend/assets/js/plugin/jqvmap/maps/jquery.vmap.worlds.js"></script>

	<!-- Sweet Alert -->
	<script src="/backend/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<!-- Atlantis JS -->
	<script src="/backend/assets/js/atlantis.min.js"></script>
	<script src="/backend/assets/js/script.js"></script>
    <script src="/backend/assets/toastr/toastr.min.js"></script>
	@if(Session::has('success'))
		<script>
			toastr.success("{!! session()->get('success') !!}");
		</script>
	@elseif(Session::has('error'))
		<script>
			toastr.error("{!! session()->get('error') !!}");
		</script>
	@endif
	@yield('js')
	<script type="text/javascript">
        $(document).ready(function(){
          $('.comment_check').click(function(){
              var comment_status = $(this).data('comment_status');
			  var comment_id = $(this).data('id');
			  var comment_product_id = $(this).attr('id');
			  $.ajax({
				  url:'{{ route('backend.') }}',
				  method:'POST',
				  headers:{
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  },
				  data:{
					comment_status:comment_status,
					comment_id:comment_id,
					comment_product_id:comment_product_id,
				  },
				  success:function(data){
					Swal.fire('Duyệt thành công!');
					window.setTimeout(function(){
                          location.reload();
                        },2000); 
				  }
			  });
			  
          });
        });
    </script>
	<script type="text/javascript">
        $(document).ready(function(){
          $('.btn_reply').click(function(){
			  var comment_id = $(this).data('id');
              var comment_reply = $('.reply_'+comment_id).val();
			  var comment_product_id = $(this).data('product_id');
			  $.ajax({
				  url:'{{ route('backend.reply') }}',
				  method:'POST',
				  headers:{
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  },
				  data:{
					comment_reply:comment_reply,
					comment_id:comment_id,
					comment_product_id:comment_product_id,
				  },
				  success:function(data){
					Swal.fire('Trả lời thành công!');
					$('.reply_'+comment_id).val('');
					window.setTimeout(function(){
                          location.reload();
                        },1500); 
				  }
			  });
			  
          });
        });
    </script>
	<script src="/ckeditor4/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('ckeditor');
		CKEDITOR.replace('ckeditor1');
		CKEDITOR.replace('ckeditor2');
		CKEDITOR.replace('ckeditor3');
	</script>
</body>
</html>