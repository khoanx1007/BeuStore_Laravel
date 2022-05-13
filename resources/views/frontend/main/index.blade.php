@extends('frontend.layouts.client')
@section('content')
	<div class="banner-top">
        <div class="bannerslide owl-theme owl-carousel m-0 mt-5">
            <div class="img-bg">
                <img src="frontend/img/bg1.jpg">
                <div class="container">
                    <div class="row m-0 absolute">
                        <div class="col-xl-6 col-lg-6 col-12 pl-xl-5 pl-lg-5 pl-md-5 pl-3">
                            <div class="text-inside text-white ">
                                <span>A lot of packs for your wallet</span>
                                <p>Game of The Year: Full Edition</p>
                                <h4>God of war, The last of us 2, Sekiro...</h4>
                                <div class="btn-shop">
                                    <a href="blog-detail.html">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-bg">
                <img src="frontend/img/bg2.jpg" >
                <div class=" container">
                    <div class="row m-0 absolute">
                        <div class="col-xl-6 col-lg-6 col-12 pl-xl-5 pl-lg-5 pl-md-5 pl-3">
                            <div class="text-inside text-white">
                                <span>10% Sale Off</span>
                                <p>Games for PC, Console, Switch...</p>
                                <h4>Prestige and Quality</h4>
                                <div class="btn-shop">
                                    <a href="blog-detail.html">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <div class="bannerbottom mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-3">
                    <div class="bannerb-left text-white">
                        <span>Sony Interactive Entertainment</span>
                        <h1>God of War 4</h1>
                        <h6>Kratos's adventure with his son to explore the world.</h6>
                        <div class="buy-shop">
                            <a href="cart.html">
                                BUY NOW
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <div class="bannerb-right text-white">
                        <span>Rockstar Games</span>
                        <h1>Red Dead Redemption 2</h1>
                        <h6>Heroic life of Athur Morgan to escape his destiny.</h6>
                        <div class="buy-shop">
                            <a href="cart.html">
                                BUY NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category-home" >
        <div class="container">
            <div class="row dark">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="category-home-next_text">
                   <h3>Danh mục game</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="category-home-next_list">
                        <ul class="d-flex pt-2">
                            <li class="PC blue" >PC</li>
                            <li class="Console" >Console</li>
                            <li class="Switch" >Switch</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-pc pb-5"> 
                <div class="row">
                    @foreach ($categories_pc as $category )
                        @foreach ($category->products2 as $product )
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
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
                                                <span class="font-weight-bolder">{{ $product->price_origin }}$</span>
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
                    @endforeach
                </div>
            </div>
            <div class="product-console pb-5">
                <div class="row">
                    @foreach ($categories_console as $category )
                        @foreach ($category->products2 as $product )
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
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
                                                <span class="font-weight-bolder">{{ $product->price_origin }}$</span>
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
                    @endforeach
                </div>
            </div>
            <div class="product-switch pb-5">
                <div class="row">
                    @foreach ($categories_switch  as $category )
                        @foreach ($category->products2 as $product )
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
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
                                                <span class="font-weight-bolder">{{ $product->price_origin }}$</span>
                                                <button type="button" class="btn btn-primary add-to-cart" data-id_product="{{ $product->id }}" name="add-to-cart">Thêm giỏ hàng</button>
                                            </form>
                                            {{-- <form action="{{ route('frontend.carts.add',$product->id) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-primary"><span>Thêm vào giỏ hàng</span></button>                            
                                            </form> --}}
                                            
                                        </div>
                                    </div><div class="card-block d-flex flex-column align-items-center"> 
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
                                        <span class="font-weight-bolder">{{ $product->price_origin }}$</span>
                                        <button type="button" class="btn btn-primary add-to-cart" data-id_product="{{ $product->id }}" name="add-to-cart">Thêm giỏ hàng</button>
                                    </form>
                                    {{-- <form action="{{ route('frontend.carts.add',$product->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary"><span>Thêm vào giỏ hàng</span></button>                            
                                    </form> --}}
                                    
                                </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>  
    </div>
    <div class="gta-v mb-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-8 col-10">
                    <div class="gta-v-text text-white">
                        <h1>Rockstar Games</h1>
                        <span id="GtaV-text">Grand Thief Auto V</span>
                        <p class="h5">One of the best open-world games of all time on PC, Top 2 Best-selling game, Game of the Decade...</p>
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
    <div class="new-products" >
        <div class="container">
            <div class="row mb-3 ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                   <div class="category-home_text">
                       <h3>Game mới</h3>
                   </div>
                </div>
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="more-category">
                        <a href="shop.html">More Products <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="productnew-box row m-0 owl-theme owl-carousel border border-bottom-0 border-right-0 border-left-0">
                @foreach ($tags_new as $tag)
                    @foreach ($tag->products as $product )
                        <div class="col-12 p-0">
                            <div class="product-box" >
                                <div class="card">
                                    <div class="card-img">
                                        <a href="">
                                            <img class="card-img-top" src="{{ $product->my_image }}">
                                        </a>
                                    </div>
                                    <div>
                                        <span class="tag-label p-2 badge badge-primary">Mới</span>
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
                                        <span class="font-weight-bolder">{{ $product->price_origin }}$</span>
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
                @endforeach
            </div>
        </div>
    </div>
    <div class="mb-5 user-saying">
        <div class="client-block owl-carousel owl-theme">
            <div class="client-saying1 row m-0 d-flex justify-content-center">
                <div class="client-text text-center col-lg-6 col-md-8 col-11 text-white d-flex flex-column align-items-center">
                    <h2 class="p-1">Our Client Say!</h2>
                    <h1>-------------</h1>
                    <p class="h5">“Do Not Mistake My Silence For Lack Of Grief.”</p>
                    <p class="h5">“Don't Be Sorry, Be Better.”</p>
                    <p class="h5">“The Cycle Ends Here. We Must Be Better Than This.”</p>
                    <img class="client-img mt-5" src="frontend/img/Norse_Kratos.png">
                    <h2>Kratos</h2>
                </div>
            </div>
            <div class="client-saying2 row m-0 d-flex justify-content-center">
                <div class="client-text text-center col-lg-6 col-md-8 col-11 text-white d-flex flex-column align-items-center">
                    <h2 class="p-1">Our Client Say!</h2>
                    <h1>-------------</h1>
                    <p class="h5">"We're more ghosts than people."</p>
                    <p class="h5">"Be loyal to what matters."</p>
                    <p class="h5">"We're thieves in a world that don't want us no more."</p>
                    <img class="client-img mt-5" src="frontend/img/athurmorgan.jpg">
                    <h2>Athur Morgan</h2>
                </div>
            </div>
            <div class="client-saying3 row m-0 d-flex justify-content-center">
                <div class="client-text text-center col-lg-6 col-md-8 col-11 text-white d-flex flex-column align-items-center">
                    <h2 class="p-1">Our Client Say!</h2>
                    <h1>-------------</h1>
                    <p class="h5"> “Why do I keep letting you hide me inside of things?”</p>
                    <p class="h5"> “You will never leave this island.”</p>
                    <p class="h5">“You Can’t Get Khotun’s Reward If You’re Dead”</p>
                    <img class="client-img mt-5" src="frontend/img/JinSakai.png">
                    <h2>Jin Sakai</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="lastest-news" >
        <div class="container lastest-news">
            <div class="row m-0 mb-4">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                   <div class="category-home_text">
                       <h3>Our Lastest News</h3>
                   </div>
                </div>
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="more-category">
                        <a href="blog.html">
                            More Blog
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row m-0 news-slides owl-carousel owl-theme">
                <div class="col-12 list-news">
                    <div class="latest-news-block pb-3">
                        <a href="blog-detail.html">
                            <img class="card-img-top" src="frontend/img/news1.jpg">
                        </a>
                        <div class="news-block pt-3 d-flex flex-column align-items-start">
                            <h5>Go ahead! Now! With your family!</h5>
                            <p>By <span class="blue" >  Partner 2021 /   Aug 23, 2021</span></p>
                            <p class="latest-news" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                            <div class="buy-shop2">
                                <a href="blog-detail.html">
                                    Continue Reading
                                </a>
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="col-12 list-news">
                    <div class="latest-news-block pb-3">
                        <a href="blog-detail.html">
                            <img class="card-img-top" src="frontend/img/news2.jpg">
                        </a>
                        <div class="news-block pt-3 d-flex flex-column align-items-start">
                            <h5>Only fire when i Tell you to FIRE!</h5>
                            <p>By <span class="blue" >  Partner 2021 /   Mar 23, 2021</span></p>
                            <p class="latest-news" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                            <div class="buy-shop2">
                                <a href="blog-detail.html">
                                    Continue Reading
                                </a>
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="col-12 list-news">
                    <div class="latest-news-block pb-3">
                        <a href="blog-detail.html">
                            <img class="card-img-top" src="frontend/img/news3.jpg">
                        </a>
                        <div class="news-block pt-3 d-flex flex-column align-items-start">
                            <h5>The fate of Hyrule depends on us!</h5>
                            <p>By <span class="blue" >  Partner 2021 /   Jun 23, 2021</span></p>
                            <p class="latest-news" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                            <div class="buy-shop2">
                                <a href="blog-detail.html">
                                    Continue Reading
                                </a>
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="col-12 list-news">
                    <div class="latest-news-block pb-3">
                        <a href="blog-detail.html">
                            <img class="card-img-top" src="frontend/img/news4.jpg">
                        </a>
                        <div class="news-block pt-3 d-flex flex-column align-items-start">
                            <h5>Change Will Not Come In A Sunrise</h5>
                            <p>By <span class="blue" >  Partner 2021 /   Jan 23, 2021</span></p>
                            <p class="latest-news" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                            <div class="buy-shop2">
                                <a href="blog-detail.html">
                                    Continue Reading
                                </a>
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="col-12 list-news">
                    <div class="latest-news-block pb-3">
                        <a href="blog-detail.html">
                            <img class="card-img-top" src="frontend/img/news5.jpg">
                        </a>
                        <div class="news-block pt-3 d-flex flex-column align-items-start">
                            <h5>You've Heard Stories About Me.</h5>
                            <p>By <span class="blue" >  Partner 2021 /   Apr 10, 2021</span></p>
                            <p class="latest-news" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                            <div class="buy-shop2">
                                <a href="blog-detail.html">
                                    Continue Reading
                                </a>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-brand mt-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="logo-brand-slider  owl-theme owl-carousel ">
                    <div class="slider-box">
                        <div class="col-12">
                            <div class="brand-img">
                                <img src="frontend/img/logo3.png">
                            </div>
                        </div>
                    </div>
                    <div class="slider-box">
                        <div class="col-12">
                            <div class="brand-img">
                                <img src="frontend/img/logo1.webp">
                            </div>
                        </div>
                    </div>
                    <div class="slider-box">
                        <div class="col-12">
                            <div class="brand-img">
                                <img src="frontend/img/logo5.png" >
                            </div>
                        </div>
                    </div>
                    <div class="slider-box">
                        <div class="col-12">
                            <div class="brand-img">
                                <img src="frontend/img/log4.png" >
                            </div>
                        </div>
                    </div>
                    <div class="slider-box">
                        <div class="col-12">
                            <div class="brand-img">
                                <img src="frontend/img/logo6.png" >
                            </div>
                        </div>
                    </div>
                    <div class="slider-box">
                        <div class="col-12">
                            <div class="brand-img">
                                <img src="frontend/img/logo7.jpg" >
                            </div>
                        </div>
                    </div>
                    <div class="slider-box">
                        <div class="col-12">
                            <div class="brand-img">
                                <img src="frontend/img/logo11.png" >
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection