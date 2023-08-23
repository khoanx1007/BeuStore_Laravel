@extends('frontend.layouts.client')
@section('css')
@endsection
@section('content')
<div class="main-content pt-5">
	<div class="container-lg container-fluid-sm">
		<div class="row">
			<div class="col-12">
				<div class="gta-v mb-5">
					<div class="container">
						<div class="row">
							<div class="col-6 col-sm-8 col-10">
								<div class="text-white p-3">
									<h1>Rockstar Games</h1>
									<span id="GtaV-text">Grand Thief Auto V</span>
									<p class="h5">Một trong những tựa game bán chạy nhất mọi thời đại, vua của các game</p>
									<div class="btn-shop mt-xl-3 mt-lg-3 mt-0">
										<a href="shop-details.html">
											Buy Now
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<div class="row tool-shop d-flex justify-content-between">
						<div class="shop-icon col-lg-4  col-md-2 col-4">
							<i class="fas fa-th-list icon1 black" ></i>
							<i class="fas fa-bars icon2" ></i>
						</div>
						<div class="sorting p-1 col-lg-4 col-md-6 col-8 text-right">
							<label class="font-weight-bold">Sắp xếp theo:</label>
							<form>
								@csrf
								<select name="sort" id="sort">
									<option value="{{ Request::url() }}?sort_by=none" >--Lọc--</option>
									<option value="{{ Request::url() }}?sort_by=az">A đến Z</option>
									<option value="{{ Request::url() }}?sort_by=za" >Z đến A</option>
									<option value="{{ Request::url() }}?sort_by=tang_dan" >Giá tăng dần</option>
									<option value="{{ Request::url() }}?sort_by=giam_dan" >Giá giảm dần</option>
									<option value="{{ Request::url() }}?sort_by=new" >Mới nhất</option>
									<option value="{{ Request::url() }}?sort_by=old" >Cũ nhất</option>
								</select>
							</form>
						</div>
					</div>
				</div>
				<div class="product-pc pb-5"> 
					<div class="row text-center">
						@foreach ($my_products as $product )
							<div class="col-xl-3 col-lg-3 col-md-4 col-12">
								<div class="product-box" >
									<div class="card">
										<div class="card-img">
											<a href="">
												<img class="card-img-top" src="{{ $product->my_image }}">
											</a>
										</div>
										<div class="card-block d-flex flex-column align-items-center"> 
											<form class="d-flex flex-column align-items-center">
												@csrf
												<input type="hidden" value="{{ $product->id }}"class="cart_product_id_{{ $product->id }}">
												<input type="hidden" value="{{ $product->name }}"class="cart_product_name_{{ $product->id }}">
												<input type="hidden" value="{{ $product->my_image }}"class="cart_product_image_{{ $product->id }}">
												<input type="hidden" value="{{ $product->price_origin }}"class="cart_product_price_{{ $product->id }}">
												<input type="hidden" value="1"class="cart_product_qty_{{ $product->id }}">
												<a class="infocard font-weight-bold" href="{{ route('frontend.main.info',$product->id) }}">{{ $product->name }}</a>
												</span>
												<span class="font-weight-bolder font-italic text-secondary">{{ $product->price_origin }}$</span>    
												<button type="button" class="btn btn-primary add-to-cart" data-id_product="{{ $product->id }}" name="add-to-cart">Thêm giỏ hàng</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					{{$my_products->links()}}
				</div>
				<div class="bar-info pb-5"> 
					<div class="row">
						@foreach ($my_products as $product )
							<div class="cate-top bg-white rounded">
								<div class="cate-top_img" >
									<img class="product-img" src="{{ $product->my_image }}">
								</div>
								<div class="cate-des text-dark" >
									<h4 class="font-weight-bold text-rated">{{ $product->name }}</h4>
									<h5 class="font-weight-bolder text-dark"><span class="font-weight-bolder font-italic text-secondary">{{ $product->price_origin }}$</span></h5>
									<p class="overflow">{{ $product->description }}</p>
									<div class="shopping">
										<ul class="d-flex align-items-center">
											<li><a class="adding" href="cart.html">ADD TO CART</a></li>
											<li><a class="loveandpeace"><i class="far fa-heart"></i></a></li>
											<li><a class="loveandpeace"><i class="fas fa-sliders-h"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					{{$my_products->links()}}
				</div> 
			</div>
		</div>
	</div>
</div>
@endsection