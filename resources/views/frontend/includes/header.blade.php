	
<div id="helloworld" class="mb-3">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<b class="banner text-white">Nhập mã khuyến mại để giảm giá đơn hàng</b>
			</div>
			<div class="col-4">
				<b class="banner-language  text-left text-white font-weight-bold"><i class="fas fa-phone"></i> +84 38 507 9001</i>
				</b>
				&nbsp;
				<b class="banner-language  text-left text-white font-weight-bold"><i class="fas fa-envelope"></i> Khoanx1007@gmail.com</i>
				</b>
			</div>
		</div>
	</div>
</div>    
<nav class="navbar navbar-expand-lg header">   
	<div class="container d-flex align-items-center justify-content-between">
		<div id="left-1" class="col-xl-3 col-lg-3 col-md-6 col-8 text-left">
			<a href="{{ route('frontend.main.index') }}"><img src="/frontend/img/mylogo.png" id="logo"></a>
		</div>
		<div class="col-md-6 col-4 tab-content">
			<div class="d-flex justify-content-end">
				<div class="header-list-item">
					<a href="#"><i id="icon-header" class="fas fa-shopping-bag"></i></a>
					<span class="number-icon">
						9
					</span>
				</div>
				<div class="menu-bars" >
					<i id="bars" class="fas fa-bars"></i>
				</div>
			</div>
		</div>
		<div id="right-1" class="col-xl-7 col-lg-7 d-flex justify-content-center">
			<div class="input-group">
				<input id="searching" type="text" class="form-control" placeholder="Tìm kiếm...">
				<select id="searching2" class="selectpicker">
					<option>Danh mục</option>
					{{-- @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach --}}
				</select>
				<span class="input-btn">
					<button id="submit"  class=" btn btn-success" type="button"><i class="fas fa-search"></i></button>
				</span>
			</div>      
		</div>
		<div class="col-xl-2 col-lg-2 col-md-6 text-right desktop-content">
			<div class="d-flex">
				<div class="header-list-item" id="hide2">
					<i id="icon-header" class="far fa-heart"></i>
				</div>
				<div class="header-list-item">
					<a href="{{ route('frontend.carts.indexajax') }}"><i id="icon-header" class="fas fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>
	 </div>
</nav>   
<div class="end-hd mt-3 mb-5">
	<div class="container">
		<div class="row d-flex align-items-center justify-content-between">
			<div class="col-xl-3 col-lg-3 col-md-12 col-12 header-end_block ">
				<div class="category text-white">
					<span class="cate-click rounded-circle">
						<i class="align fas fa-align-left"></i>
						<b>Danh mục sản phẩm</b>
					</span>
				</div>
				<div class="category-menu">
					<ul>
						@foreach ($brands as $brand)
                                  <li value="{{$brand->id}}"><a href="#">{{$brand->name}}</a></li>
                        @endforeach
					</ul>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 mt-1 searchbox text-center">
				<nav class="d-flex justify-content-center mt-3">
					<ul class="navi mt-lg-0 mt-2">
						<li><a href="{{ route('frontend.main.shop') }}" class="nav-bar font-weight-bold">Cửa hàng</a></li>
						<li><a href="#" class="nav-bar font-weight-bold">Danh mục</a></li>
						<li><a href="#" class="nav-bar font-weight-bold">Giới thiệu</a></li>
						<li><a href="#" class="nav-bar font-weight-bold">Q&A</a></li>
					</ul> 
				</nav>
			</div>
			<div class="col-xl-3 col-lg-2 calling-box text-right mt-3">
				<ul class="ml-auto d-flex align-items-center float-right">
					@guest
						<li class="nav-item">
							<a class="nav-link text-cyan font-weight-bold" href="{{ route('auth.login') }}">Đăng nhập</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-success font-weight-bold" href="{{ route('auth.register') }}">Đăng ký</a>
						</li>
						@else
							<li class="avatar">
								<div class="efecto" style="background-image: url({{ auth()->user()->my_image }})">
								</div>
							</li>
							<div class="acoblock">
								<div class="acoask">
									<b>&nbsp; {{ auth()->user()->name }}</b>
								</div>
								<div class="acoanswer">
									<a href="{{ route('backend.dashboard') }}" class="bg-white p-1 mt-5 font-weight-bold text-dark" style="cursor: pointer;" onclick="this.closet('form').submit(); return false;">
										Backend
									</a>
									<form method="post" action="{{ route('auth.logout') }}">
										@csrf
										<button  class="btn bg-white p-1 font-weight-bold text-dark" onclick="this.closet('form').submit(); return false;">
										  Đăng Xuất
										</button>
									  </form>
								</div>  	
							</div>
					@endguest
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Navbar -->