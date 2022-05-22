<!DOCTYPE html>
<html lang="en">
<head>
	{{-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> --}}
	<title>ABC Admin - Trang chủ</title>
	<link rel="icon" href="/backend/assets/img/icon.ico" type="image/x-icon"/>
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
	<link rel="stylesheet" href="/backend/assets/css/atlantis.min.css">	
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/backend/assets/css/style.css">
	<link rel="stylesheet" href="/frontend/css/sweetalert.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
	<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
	@yield('css')
</head>
<body>
	@yield('preloader')
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
	<script src="/frontend/js/sweetalert.js"></script>
	<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

	<!-- jQuery Sparkline -->
	<script src="/backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/backend/assets/js/plugin/chart-circle/circles.min.js"></script>

		{{-- <!-- Datatables -->
		<script src="/backend/assets/js/plugin/datatables/datatables.min.js"></script> --}}

	<!-- Bootstrap Notify -->
	{{-- <script src="/backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> --}}

	<!-- jQuery Vector Maps -->
	<script src="/backend/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/backend/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="/backend/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	

	<!-- Atlantis JS -->
	<script src="/backend/assets/js/atlantis.min.js"></script>
	
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/backend/assets/js/setting-demo.js"></script>
	<script src="/backend/assets/js/demo.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
		<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src=https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js></script>
	<script src=https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js></script>  
	<script>
		var SITEURL = '{{URL::to('')}}';
		$(document).ready( function () {
		  $.ajaxSetup({
			 headers: {
				 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			 }
		 });
		 $('#laravel_datatable').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('backend.products.index') }}",
				columns: [
						 {data: 'id', name: 'id', 'visible': false},
						 {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
						 {data: 'image', name: 'image',orderable: false,searchable: false},
						 { data: 'name', name: 'name' },
						 { data: 'price_origin', name: 'price_origin' },
						 { data: 'price_sale', name: 'price_sale' },
						 { data: 'category_id', name: 'category_id' },
						 { data: 'status', name: 'status' },
						 {data: 'action', name: 'action', orderable: false},
					  ],
			   order: [[0, 'desc']]
			 });
		 
		/*  When user click add user button */
		   $('#create-new-product').click(function () {
			   $('#btn-save').val("create-product");
			   $('#product_id').val('');
			   $('#productForm').trigger("reset");
			   $('#productCrudModal').html("Tạo Sản phẩm mới");
			   $('#ajax-product-modal').modal('show');
		   });
		   $('#btn-cancel').click(function() {
			   $('#ajax-product-modal').modal('hide');
		   });
		  
		  /* When click edit user */
		   $('body').on('click', '.edit-product', function () {
			 var product_id = $(this).data('id');
			 $.get('backend/products' + product_id +'/edit', function (data) {
				$('#title-error').hide();
				$('#product_code-error').hide();
				$('#description-error').hide();
				$('#productCrudModal').html("Edit Product");
				$('#btn-save').val("edit-product");
				$('#ajax-product-modal').modal('show');
				$('#product_id').val(data.id);
				$('#title').val(data.title);
				$('#product_code').val(data.product_code);
				$('#description').val(data.description);
			 })
		  });
		 
		   $('body').on('click', '.delete-product', function () {
		  
			   var product_id = $(this).data("id");
				
			   if(confirm("Are You sure want to delete !")){
				 $.ajax({
					 type: "get",
					 url: "{{ route('backend.products.destroy',1) }}",
					 success: function (data) {
					 var oTable = $('#laravel_datatable').dataTable(); 
					 oTable.fnDraw(false);
					 },
					 error: function (data) {
						 console.log('Error:', data);
					 }
				 });
			   }
		   }); 
		   
		  });
		  
	   if ($("#productForm").length > 0) {
			 $("#productForm").validate({
		  
			submitHandler: function(form) {
		  
			 var actionType = $('#btn-save').val();
			 $('#btn-save').html('Sending..');
			   
			 $.ajax({
				 data: $('#productForm').serialize(),
				 url:  "{{ 'backend.products.store'}}",
				 type: "POST",
				 dataType: 'json',
				 success: function (data) {
		  
					 $('#productForm').trigger("reset");
					 $('#ajax-product-modal').modal('hide');
					 $('#btn-save').html('Save Changes');
					 var oTable = $('#laravel_datatable').dataTable();
					 oTable.fnDraw(false);
					   
				 },
				 error: function (data) {
					 console.log('Error:', data);
					 $('#btn-save').html('Save Changes');
				 }
			 });
		   }
		 })
	   }
	</script>
	<script type="text/javascript">
        $(document).ready(function(){
          $('.comment_check').click(function(){
              var comment_status = $(this).data('comment_status');
			  var comment_id = $(this).data('id');
			  var comment_product_id = $(this).attr('id');
			  var _token = $('input[name="_token"]').val();
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