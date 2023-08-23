@extends('frontend.layouts.client')
@section('content')
	<div class="banner-top">
        <div class="bannerslide owl-theme owl-carousel m-0 mt-5">
            <div class="img-bg">
                <img src="frontend/img/bg1.jpg">
            </div>
            <div class="img-bg">
                <img src="frontend/img/bg2.jpg" >
            </div>
        </div>
    </div>   
    <div class="category-home" >
        <div class="container">
            <div class="row dark">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="category-home-next_text">
                   <h3>Hot Gear</h3>
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
                    @endforeach
                </div>
                {{$categories_pc->links()}}
            </div>
        </div>  
    </div>
    <div class="new-products" >
        <div class="container">
            <div class="row mb-3 ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                   <div class="category-home_text">
                       <h3>New Gear</h3>
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
                @endforeach
            </div>
        </div>
    </div>
    <div class="mb-5 user-saying">
        <div class="client-block owl-carousel owl-theme">
            @foreach ($comments as $cmt )
                <div class="client-saying1 row m-0 d-flex justify-content-center">
                    <div class="client-text text-center col-lg-6 col-md-8 col-11 text-white d-flex flex-column align-items-center">
                        <h2 class="p-1">Đánh giá của người dùng!</h2>
                        <h1>-------------</h1>
                        <img class="client-img mt-5" src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg">
                        <h2>{{ $cmt->comment_name }}</h2>
                        <p class="h5">“{{ $cmt->comment }}”</p>
                        <p class="h5"><a href="{{ route('frontend.main.info',$cmt->product->id) }}">{{ $cmt->product->name }}</a></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="logo-brand mt-5" >
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