@extends('frontend.layouts.client')
@section('content')
	<div class="main-shop"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="goods-header">
						<div class="col-12">
							<div class="goods-img border rounded mb-5">
								<img src="{{ $product->my_image }}" class="w-100">
							</div>
						</div>	
						<div class="row m-0 productimg-bot owl-carousel owl-theme owl-nav">
							<div class="col-12">
								<div class="bt-img border">
									<img src="{{ $product->my_image }}" class="w-100">
								</div>
							</div>
							@foreach ($images as $image )
								@if ($product->id == $image->product_id)
									<div class="col-12">
										<div class="bt-img border">
											<img src="{{ $image->my_image }}" class="w-100">
										</div>
									</div>
								@endif
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 left-description">
					<div class="goods-text">
						<h3>{{ $product->name }}</h3>
						<div class=" mt-2">
							<ul class="list-inline" style="display: inline;" title="Averange Rating">
								@for ($count=1;$count<=5;$count++)
									@php
										if($count<=$rating){
											$color='color:#ffcc00;';
										}
										else
										{
											$color='color:#ccc;';
										}
									@endphp
									<li style="display: inline;cursor:pointer;{{ $color }} font-size:30px;" title="star-rating" 
									data-index="{{ $count }}"
									data-product_id="{{ $product->id }}"
									data-rating="{{ $rating }}"
									class="rating"
									>
									&#9733;
									
									</li>
								@endfor
								
							</ul>({{ $ratinga }} Sao, dựa trên {{ $ratingc }} đánh giá)
						</div>
						<span class="font-weight-bolder font-italic text-primary" >${{ $product->price_origin }}</span>
						<p class="text-secondary text-justify"> 
							{{ $product->description }}
						</p>
						<h4 class="line"></h4>
						<h6><i class="fas fa-check-circle text-primary"></i> Còn hàng</h6>
						<span  class="service-goods pb-3">
							<i class="fas fa-truck text-primary"></i> <a class="black pr-3" href="">Giao hàng</a>
							<i class="fas fa-envelope  text-primary"></i> <a class="black pr-3" href="">Hỏi thêm về sản phẩm</a>
						</span>
						<form>
							@csrf
							<div class="quantity-goods d-flex align-items-center justify-content-left mt-3">
								<div class="numquan">
									<div class="quantity d-flex justify-content-center align-items-center">
										<div class="decre" style="cursor: pointer">
											<span class="plus"><i class="fas fa-minus remove_qty"></i></span>
										</div>
										<input type="text" name="qty" class="qty-in cart_product_qty_{{ $product->id }}" maxlength="2" max="999" value="1" >
										<input type="hidden" name="productid_hidden" value="{{ $product->id }}">
										<div class="incre" style="cursor: pointer">
											<span class="minus"><i class="fas fa-plus add_qty"></i></span>
										</div>
									</div>
								</div>
							</div>
							<input type="hidden" value="{{ $product->id }}" class="cart_product_id_{{ $product->id }}">
                            <input type="hidden" value="{{ $product->name }}" class="cart_product_name_{{ $product->id }}">
                            <input type="hidden" value="{{ $product->my_image }}" class="cart_product_image_{{ $product->id }}">
                            <input type="hidden" value="{{ $product->price_origin }}" class="cart_product_price_{{ $product->id }}">
							<div class="buycart pt-3">
								<button type="button" class="btn btn-primary add-to-cart-info" data-id_product="{{ $product->id }}" name="add-to-cart-info">Thêm vào giỏ hàng</button>
							</div>
						</form>
						<h6 class="font-weight-bold mt-3">Đảm bảo giao dịch an toàn</h6>
						<div class="logo-money mb-3">
							<img src="/frontend/img/payment1.png">
						</div>
						<div class="share d-flex">
							<p class="font-weight-bold">Share:</p>
							<span class="icshare"><i class="fab fa-facebook"></i></span>
							<span class="icshare"><i class="fab fa-twitter"></i></span>
							<span class="icshare"><i class="fab fa-instagram"></i></span>
						</div>
						<h4 class="line"></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="goods-description mt-5 pt-5">
		<div class="container">
			<div class="goods-description-hd">
				<ul class="d-flex threedes">
					<li class="gpbu blue">Đánh giá</li>
					<li class="rcbu">Cấu hình</li>
					<li class="dvbu">Gameplay</li>
					
				</ul>
			</div>
			<div class="destext text-justify" id="rcdes">
				@foreach ($requirement as $item )
					<h4>Cấu hình tối thiểu:</h4>
						{!! $item->min_sys !!}
					<h4>Cấu hình đề nghị:</h4>
						{!! $item->sug_sys !!}
				@endforeach
				
			</div>
			<div class="destext text-justify" id="dvdes">
				@foreach ($requirement as $item )
						{!! $item->gameplay !!}
				@endforeach
			</div>
			<div class="destext text-justify" id="gpdes">
				<form>
					@csrf
					<input type="hidden" name="comment_product_id" class="comment_product_id" value="{{ $product->id }}">
					<div id="comment_show"></div>
				</form>
					<div class="leave reply mt-2">
						<form>
							@csrf
							<h4 class="font-weight-bold">Để lại đánh giá:</h4>
							<ul class="list-inline rating" style="display: inline;" title="Averange Rating">
								@for ($count=1;$count<=5;$count++)
									@php
										if($count<=$rating){
											$color='color:#ffcc00;';
										}
										else
										{
											$color='color:#ccc;';
										}
									@endphp
									<li style="display: inline;cursor:pointer;{{ $color }} font-size:30px;" title="star-rating" 
									id="{{ $product->id }}-{{ $count }}"
									data-index="{{ $count }}"
									data-product_id="{{ $product->id }}"
									data-rating="{{ $rating }}"
									class="rating"
									>
									&#9733;
									
									</li>
								@endfor
								
							</ul>
							<div class="row">
								<div class="col-xl-12 col-md-12">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="form-group">
												<label class="form-label"><b>*Tên:</b></label>
												<input id="name" name="comment_name" type="text" placeholder="Enter Your Name" class="form-control comment_name">
											</div>
										
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="form-group">
												<label class="form-label"><b>*Email:</b></label>
												<input id="email" name="comment_email" type="email" placeholder="Enter Your Email" class="form-control comment_email">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="d-flex flex-column justify-content-start">
												<label class="form-label"><b>Viết đánh giá:</b></label>
												<textarea name="comment" class="comment form-control"></textarea>
											</div>
												<button type="button" name="send_comment" class="p-2 mt-3 rounded border border-0 bg-primary text-white send_comment">
													Gửi đánh giá
												</button>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
	<div class="new-products" style="padding-bottom: 0px;">
		<div class="container">
			<div class="row mb-3 ">
				<div class="col-xl-6 col-lg-6 col-md-6 col-12">
				<div class="category-home_text">
					<h3>Liên quan</h3>
				</div>
				</div>
				<div class="col-xl-6 col-md-6 col-12">
					<div class="more-category">
						<a href="shop.html">Thêm <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="productnew-box row m-0 owl-theme owl-carousel border border-bottom-0 border-right-0 border-left-0">
				@foreach ($products as $product )
					<div class="col-12 p-0">
						<div class="product-box" >
							<div class="card">
								<div class="card-img">
									<a>
										<img class="card-img-top" src="{{ $product->my_image }}">
									</a>
								</div>
								<div class="tag-label">
									@foreach ($product->tags as $tag)
										<div class="badge p-2
										@if ($tag->name == "Hot")
											badge-danger
										@elseif ($tag->name == "Mới")
											badge-info
										@elseif ($tag->name ==  "Yêu thích")
											badge-success       
										@else
											badge-warning
										@endif"> 
											{{ $tag->name }}
										</div> 
									@endforeach
								</div>
								<div class="card-block d-flex flex-column align-items-center"> 
										<div class="star-icon mt-2">
										<label for="rating1" class="fa fa-star"></label>
										<label for="rating2" class="fa fa-star"></label>
										<label for="rating3" class="fa fa-star"></label>
										<label for="rating4" class="fa fa-star"></label>
										<label for="rating5" class="fa fa-star"></label>
										</div>
									<span class="font">
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
									{{-- <form action="{{ route('frontend.carts.add',$product->id) }}" method="POST">
										@csrf
										<button class="btn btn-primary"><span>Thêm vào giỏ hàng</span></button>                            
									</form> --}}
									
								</div>
							</div>
						</div>
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
	<div class="logo-brand mt-5">
		<div class="container">
			<div class="row">
				<div class="logo-brand-slider  owl-theme owl-carousel " data-aos="fade-up">
                    @foreach ($brands as$brand )
                    <div class="slider-box">
                        <div class="col-12">
                            <div class="brand-img">
                                <img src="{{ $brand->my_image }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
			</div>
		</div>
	</div>	
@endsection