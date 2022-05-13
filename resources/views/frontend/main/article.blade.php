@extends('frontend.layouts.client')
@section('content')
	<div class="main-shop"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="goods-header">
						<div class="goods-img border rounded mb-5">
							<img src="{{ $product->my_image }}" class="w-100">
						</div>
						<div class="row productimg-bot owl-carousel owl-theme owl-nav">
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
						<div class="star-icon mt-2">
							<label for="rating1" class="fa fa-star"></label>
							<label for="rating2" class="fa fa-star"></label>
							<label for="rating3" class="fa fa-star"></label>
							<label for="rating4" class="fa fa-star"></label>
							<label for="rating5" class="fa fa-star"></label>
						</div>
						<p class="font-weight-bolder text-primary" >${{ $product->price_origin }}</p>
						<p class="text-secondary text-justify"> 
							{{ $product->description }}
						</p>
						<h4 class="line"></h4>
						<h6><i class="fas fa-check-circle text-primary pb-3"></i> Còn hàng</h6>
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
					<li class="gpbu blue">Cấu hình tối thiểu</li>
					<li class="dvbu">Cấu hình đề nghị</li>
					<li class="rcbu">Đánh giá</li>
				</ul>
			</div>
			<div class="destext text-justify" id="gpdes">
				<p>Similar to the previous entries in the series, Far Cry 6 is an action-adventure first-person shooter game set in an open world environment which the player can navigate on foot or via using various land vehicles, combat vehicles, watercrafts, or aircrafts. The gameplay mainly focuses on armed and close-quarters combat, while also allows the player to freely roam and explore Yara's 88 km² (34 sq mi) environment, which is divided into seven main regions with a vast array of terrain ranging from urban areas and dense jungles to mountain ranges and open oceans.</p>
				<p>The game incorporates many elements found in role-playing games, including upgradeable guerilla camps and gear customisation mechanics in order to uniquely tailor the gameplay experience, while also introducing a "Rank Level" system which indicates the rank of the player and highlights the level of a specific region similar to recent Assassin's Creed titles. As the game progresses and the player explores more regions of Yara, enemy forces will be equipped with more powerful, higher level gear and the surrounding military target locations become heavily fortified</p>
			</div>
			<div class="destext text-justify" id="dvdes">
				<p>Production of Far Cry 6 had been ongoing for four years at the time of its July 2020 announcement, with Ubisoft Toronto the lead studio for the game. Narrative director Navid Khavari said that they started researching revolutions of the past, they came across the idea of the modern guerrilla revolution such as the Cuban Revolution, which gave them numerous ideas of how to drive the player-character into fighting against a repressive government. This also brought back the need to give the player-character, Dani Rojas, a voice, compared to recent Far Cry games in which the protagonist had been silent. Khavari said "it was essential for us to ensure that the protagonist has a personal investment in that revolution". Using Cuba as an influence also established the return to a tropical setting, a feature of the earlier Far Cry games, as well as giving the setting a "timeless" look due to economic blockades that had been imposed on the island, mixing vintage cars with modern weapons. Khavari spent a month in Cuba, speaking to residents there to help develop the setting.</p>
				<p>In contrast to the media controversy over Ubisoft distancing its stance that Far Cry 5 was made as a political statement, Khavari said that Far Cry 6 was "political", adding: "A story about a modern revolution must be". While the game's narrative element is based on stories around Cuba, Khavari stated that the game "doesn't want to make a political statement about what's happening in Cuba specifically", and does not attempt to make "a simplified, binary political statement specifically on the current political climate in Cuba". Khavari's family had experienced the Iranian Revolution in the late 1970s, eventually having fled to Canada, and using these experiences, those from Cuba, and from other research that Ubisoft had done, he wanted Far Cry 6 to have a story "about the conditions that lead to the rise of fascism in a nation, the costs of imperialism, forced labor, the need for free-and-fair elections, LGBTQ+ rights, and more."</p>
			</div>
			<div class="destext text-justify" id="rcdes">
				<p>Far Cry 6 received "generally favorable" reviews, according to review aggregator Metacritic.</p>
				<p>An IGN review by Jon Ryan gave the game an 8 rating out of 10, saying that "Far Cry 6 smooths over a lot of the bumps that have cropped up in the past few games. Even though it misses some steps, especially with its new inventory system, it's the best the series has been in years."</p>
				<p>Destructoid's Jordan Devore gave 7.5 points out of 10, saying "Solid and definitely have [sic] an audience. There could be some hard-to-ignore faults, but the experience is fun."</p>
				<p>Matthew Gault of Vice criticized and described the game as "creatively and morally bankrupt", believing the game "felt like an exhausting chore list", Gault claimed his article "isn't a review" because "honestly, I can't play this shit anymore. I just can't do it."[</p>
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
				<div class="col-12 p-0">
					<div class="product-box" >
						<div class="card">
							<div class="card-img">
								<a href="">
									<img class="card-img-top" src="/frontend/img/new1.jpg">
								</a>
							</div>
							<div>
								<span class="label-new">NEW</span>
							</div>
							<div id="link-action" class="action_link animate__animated ">
								<ul>
									<li>
										<a><span><i class="fas fa-shopping-cart"></i></span></a>
									</li>
									<li>
										<a><span><i class="fas fa-sliders-h"></i></span></a>
									</li>
									<li>
										<a><span ><i class="fas fa-heart"></i></span></a>
									</li>
									<li>
										<a><span><i class="far fa-eye"></i></span></a>
									</li>
								</ul>
							</div>
							<div class="card-block d-flex flex-column align-items-center"> 
									<div class="star-icon mt-2">
									<input type="radio" name="rating1" id="rating1">
									<label for="rating1" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating2">
									<label for="rating2" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating3">
									<label for="rating3" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating4">
									<label for="rating4" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating5">
									<label for="rating5" class="fa fa-star"></label>
									</div>
								<span class="font">
								<a class="infocard font-weight-bold" href="shop-detail.html">Battlefield 2042</a>
								</span>
								<span class="font-weight-bolder">$69.99</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 p-0">
					<div class="product-box" >
						<div class="card">
							<div class="card-img">
								<a href="">
									<img class="card-img-top" src="/frontend/img/new3.jpg">
								</a>
							</div>
							<div>
								<span class="label-new">NEW</span>
							</div>
							<div id="link-action" class="action_link animate__animated ">
								<ul>
									<li>
										<a><span><i class="fas fa-shopping-cart"></i></span></a>
									</li>
									<li>
										<a><span><i class="fas fa-sliders-h"></i></span></a>
									</li>
									<li>
										<a><span ><i class="fas fa-heart"></i></span></a>
									</li>
									<li>
										<a><span><i class="far fa-eye"></i></span></a>
									</li>
								</ul>
							</div>
							<div class="card-block d-flex flex-column align-items-center"> 
									<div class="star-icon mt-2">
									<input type="radio" name="rating1" id="rating1">
									<label for="rating1" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating2">
									<label for="rating2" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating3">
									<label for="rating3" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating4">
									<label for="rating4" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating5">
									<label for="rating5" class="fa fa-star"></label>
									</div>
								<span class="font">
								<a class="infocard font-weight-bold" href="shop-detail.html">Back 4 Blood</a>
								</span>
								<span class="font-weight-bolder">$49.99</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 p-0">
					<div class="product-box" >
						<div class="card">
							<div class="card-img">
								<a href="">
									<img class="card-img-top" src="/frontend/img/new4.jpg">
								</a>
							</div>
							<div>
								<span class="label-new">NEW</span>
							</div>
							<div id="link-action" class="action_link animate__animated ">
								<ul>
									<li>
										<a><span><i class="fas fa-shopping-cart"></i></span></a>
									</li>
									<li>
										<a><span><i class="fas fa-sliders-h"></i></span></a>
									</li>
									<li>
										<a><span ><i class="fas fa-heart"></i></span></a>
									</li>
									<li>
										<a><span><i class="far fa-eye"></i></span></a>
									</li>
								</ul>
							</div>
							<div class="card-block d-flex flex-column align-items-center"> 
									<div class="star-icon mt-2">
									<input type="radio" name="rating1" id="rating1">
									<label for="rating1" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating2">
									<label for="rating2" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating3">
									<label for="rating3" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating4">
									<label for="rating4" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating5">
									<label for="rating5" class="fa fa-star"></label>
									</div>
								<span class="font">
								<a class="infocard font-weight-bold" href="shop-detail.html">Call of Duty: Vanguard</a>
								</span>
								<span class="font-weight-bolder">$59.99</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 p-0">
					<div class="product-box" >
						<div class="card">
							<div class="card-img">
								<a href="">
									<img class="card-img-top" src="/frontend/img/new5.jpg">
								</a>
							</div>
							<div>
								<span class="label-new">NEW</span>
							</div>
							<div id="link-action" class="action_link animate__animated ">
								<ul>
									<li>
										<a><span><i class="fas fa-shopping-cart"></i></span></a>
									</li>
									<li>
										<a><span><i class="fas fa-sliders-h"></i></span></a>
									</li>
									<li>
										<a><span ><i class="fas fa-heart"></i></span></a>
									</li>
									<li>
										<a><span><i class="far fa-eye"></i></span></a>
									</li>
								</ul>
							</div>
							<div class="card-block d-flex flex-column align-items-center"> 
									<div class="star-icon mt-2">
									<input type="radio" name="rating1" id="rating1">
									<label for="rating1" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating2">
									<label for="rating2" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating3">
									<label for="rating3" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating4">
									<label for="rating4" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating5">
									<label for="rating5" class="fa fa-star"></label>
									</div>
								<span class="font">
								<a class="infocard font-weight-bold" href="shop-detail.html">Kena: Bridge of Spirits</a>
								</span>
								<span class="font-weight-bolder">$59.99</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 p-0">
					<div class="product-box" >
						<div class="card">
							<div class="card-img">
								<a href="">
									<img class="card-img-top" src="/frontend/img/new6.jpg">
								</a>
							</div>
							<div>
								<span class="label-new">NEW</span>
							</div>
							<div id="link-action" class="action_link animate__animated ">
								<ul>
									<li>
										<a><span><i class="fas fa-shopping-cart"></i></span></a>
									</li>
									<li>
										<a><span><i class="fas fa-sliders-h"></i></span></a>
									</li>
									<li>
										<a><span ><i class="fas fa-heart"></i></span></a>
									</li>
									<li>
										<a><span><i class="far fa-eye"></i></span></a>
									</li>
								</ul>
							</div>
							<div class="card-block d-flex flex-column align-items-center"> 
									<div class="star-icon mt-2">
									<input type="radio" name="rating1" id="rating1">
									<label for="rating1" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating2">
									<label for="rating2" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating3">
									<label for="rating3" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating4">
									<label for="rating4" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating5">
									<label for="rating5" class="fa fa-star"></label>
									</div>
								<span class="font">
								<a class="infocard font-weight-bold" href="shop-detail.html">Fifa 22</a>
								</span>
								<span class="font-weight-bolder">$59.99</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 p-0">
					<div class="product-box" >
						<div class="card">
							<div class="card-img">
								<a href="">
									<img class="card-img-top" src="/frontend/img/new7.jpg">
								</a>
							</div>
							<div>
								<span class="label-new">NEW</span>
							</div>
							<div id="link-action" class="action_link animate__animated ">
								<ul>
									<li>
										<a><span><i class="fas fa-shopping-cart"></i></span></a>
									</li>
									<li>
										<a><span><i class="fas fa-sliders-h"></i></span></a>
									</li>
									<li>
										<a><span ><i class="fas fa-heart"></i></span></a>
									</li>
									<li>
										<a><span><i class="far fa-eye"></i></span></a>
									</li>
								</ul>
							</div>
							<div class="card-block d-flex flex-column align-items-center"> 
									<div class="star-icon mt-2">
									<input type="radio" name="rating1" id="rating1">
									<label for="rating1" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating2">
									<label for="rating2" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating3">
									<label for="rating3" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating4">
									<label for="rating4" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating5">
									<label for="rating5" class="fa fa-star"></label>
									</div>
								<span class="font">
								<a class="infocard font-weight-bold" href="shop-detail.html">Life is Strange: True Colors</a>
								</span>
								<span class="font-weight-bolder">$59.99</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 p-0">
					<div class="product-box" >
						<div class="card">
							<div class="card-img">
								<a href="">
									<img class="card-img-top" src="/frontend/img/new8.jpg">
								</a>
							</div>
							<div>
								<span class="label-new">NEW</span>
							</div>
							<div id="link-action" class="action_link animate__animated ">
								<ul>
									<li>
										<a><span><i class="fas fa-shopping-cart"></i></span></a>
									</li>
									<li>
										<a><span><i class="fas fa-sliders-h"></i></span></a>
									</li>
									<li>
										<a><span ><i class="fas fa-heart"></i></span></a>
									</li>
									<li>
										<a><span><i class="far fa-eye"></i></span></a>
									</li>
								</ul>
							</div>
							<div class="card-block d-flex flex-column align-items-center"> 
									<div class="star-icon mt-2">
									<input type="radio" name="rating1" id="rating1">
									<label for="rating1" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating2">
									<label for="rating2" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating3">
									<label for="rating3" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating4">
									<label for="rating4" class="fa fa-star"></label>
									<input type="radio" name="rating1" id="rating5">
									<label for="rating5" class="fa fa-star"></label>
									</div>
								<span class="font">
								<a class="infocard font-weight-bold" href="shop-detail.html">Resident Evil 8: Village</a>
								</span>
								<span class="font-weight-bolder">$59.99</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="logo-brand mt-5">
		<div class="container">
			<div class="row">
				<div class="logo-brand-slider  owl-theme owl-carousel " style="margin-top: 20px;">
					<div class="slider-box">
						<div class="col-12">
							<div class="brand-img">
								<img src="/frontend/img/logo3.png">
							</div>
						</div>
					</div>
					<div class="slider-box">
						<div class="col-12">
							<div class="brand-img">
								<img src="/frontend/img/logo1.webp">
							</div>
						</div>
					</div>
					<div class="slider-box">
						<div class="col-12">
							<div class="brand-img">
								<img src="/frontend/img/logo5.png" >
							</div>
						</div>
					</div>
					<div class="slider-box">
						<div class="col-12">
							<div class="brand-img">
								<img src="/frontend/img/log4.png" >
							</div>
						</div>
					</div>
					<div class="slider-box">
						<div class="col-12">
							<div class="brand-img">
								<img src="/frontend/img/logo6.png" >
							</div>
						</div>
					</div>
					<div class="slider-box">
						<div class="col-12">
							<div class="brand-img">
								<img src="/frontend/img/logo7.jpg" >
							</div>
						</div>
					</div>
					<div class="slider-box">
						<div class="col-12">
							<div class="brand-img">
								<img src="/frontend/img/logo11.png" >f
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>	
@endsection