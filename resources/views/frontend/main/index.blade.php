@extends('frontend.layouts.client')
@section('content')
<div>
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
            <div class="row mb-4">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                   <div class="category-home_text">
                       <h3>Top Categories</h3>
                   </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="more-category">
                        <a href="shop.html">
                            More Categories
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list-category mb-4" data-aos="fade-up">
                <div class="category-product bg-white">
                    <div class="cate-product_text text-dark">
                        <h6 class="font-weight-bold">God of War 4 GOTY</h6>
                        <p class="text-danger">Out of Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster1.jpg">
                    </div>
                </div>
                <div class="category-product bg-white">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">Red Dead Redemption 2</h6>
                        <p>In Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster2.jpg">
                    </div>
                </div>
                <div class="category-product bg-white ">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">Sekiro: Shadow Die Twice</h6>
                        <p class="text-danger">Out of Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster3.jpg">
                    </div>
                </div>
                <div class="category-product bg-white ">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">The Last Of Us 2</h6>
                        <p>In Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster4.jpg">
                    </div>
                </div>
                <div class="category-product bg-white ">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">Ghost Of Tsushima</h6>
                        <p>In Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster5.jpg">
                    </div>
                </div>
                <div class="category-product bg-white ">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">Legend Of Zelda: BOTW</h6>
                        <p class="text-danger">Out of Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster6.jpg">
                    </div>
                </div>
                <div class="category-product bg-white ">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">The Witcher 3: Wild Hunt</h6>
                        <p>In Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster7.jpg">
                    </div>
                </div>
                <div class="category-product bg-white ">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">Detroit: Become Human</h6>
                        <p>In Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster8.jpg">
                    </div>
                </div>
                <div class="category-product bg-white ">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">Marvel SpiderMan</h6>
                        <p class="text-danger">Out of Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster9.jpg">
                    </div>
                </div>
                <div class="category-product bg-white ">
                    <div class="cate-product_text text-dark" >
                        <h6 class="font-weight-bold">Cyperpunk 2077</h6>
                        <p>In Stock</p>
                    </div>
                    <div class="cate-product_img" >
                        <img class="product-img" src="frontend/img/poster10.jpg">
                    </div>
                </div>
            </div>
            <div class="row dark">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="category-home-next_text">
                   <h3>Hot Categories</h3>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="category-home-next_list">
                        <ul class="d-flex pt-2">
                            <li class="PC  blue" >PC</li>
                            <li class="Console" >Console</li>
                            <li class="Switch" >Switch</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-pc pb-5"> 
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a>
                                        <img class="card-img-top" src="frontend/img/bg1.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Ghost Of Tsushima</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg2.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Detroit: Become Human</a>
                                    </span>
                                    <span class="font-weight-bolder">$49.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg3.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">God Of War 4</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg4.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Red Dead Redemption 2</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg5.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Resident Evil 2: REMAKE</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg6.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Horizon: Zero Dawn</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg8.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Far Cry 5</a>
                                    </span>
                                    <span class="font-weight-bolder">$39.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg10.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Grand Thief Auto V</a>
                                    </span>
                                    <span class="font-weight-bolder">$19.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-console pb-5">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg1.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Ghost Of Tsushima</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg3.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">God Of War 4</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg4.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Red Dead Redemption 2</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg5.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Resident Evil 2: REMAKE</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg6.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Horizon: Zero Dawn</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg12.jpg">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Day's Gone</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-switch pb-5">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg9.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Legend of Zelda: BOTW</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg11.png">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Super Smash Bros: Ultimate</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="product-box" >
                            <div class="card">
                                <div class="card-img">
                                    <a href="">
                                        <img class="card-img-top" src="frontend/img/bg13.jpg">
                                    </a>
                                </div>
                                <div>
                                    <span class="label-hot">HOT</span>
                                </div>
                                <div id="link-action" class="action_link animate__animated ">
                                    <ul>
                                        <li>
                                            <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                          <label for="rating1" class="fa fa-star"></label>
                                          <label for="rating2" class="fa fa-star"></label>
                                          <label for="rating3" class="fa fa-star"></label>
                                          <label for="rating4" class="fa fa-star"></label>
                                          <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    <span class="font">
                                       <a class="infocard font-weight-bold" href="shop-details.html">Animal Crossing: New Horizon</a>
                                    </span>
                                    <span class="font-weight-bolder">$59.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                       <h3>New Products</h3>
                   </div>
                </div>
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="more-category">
                        <a href="shop.html">More Products <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="productnew-box row m-0 owl-theme owl-carousel border border-bottom-0 border-right-0 border-left-0">
                <div class="col-12 p-0">
                    <div class="product-box" >
                        <div class="card">
                            <div class="card-img">
                                <a href="">
                                    <img class="card-img-top" src="frontend/img/new1.jpg">
                                </a>
                            </div>
                            <div>
                                <span class="label-new">NEW</span>
                            </div>
                            <div id="link-action" class="action_link animate__animated ">
                                <ul>
                                    <li>
                                        <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                   <a class="infocard font-weight-bold" href="shop-details.html">Battlefield 2042</a>
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
                                    <img class="card-img-top" src="frontend/img/new2.jpg">
                                </a>
                            </div>
                            <div>
                                <span class="label-new">NEW</span>
                            </div>
                            <div id="link-action" class="action_link animate__animated ">
                                <ul>
                                    <li>
                                        <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                   <a class="infocard font-weight-bold" href="shop-details.html">Far Cry 6</a>
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
                                    <img class="card-img-top" src="frontend/img/new3.jpg">
                                </a>
                            </div>
                            <div>
                                <span class="label-new">NEW</span>
                            </div>
                            <div id="link-action" class="action_link animate__animated ">
                                <ul>
                                    <li>
                                        <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                   <a class="infocard font-weight-bold" href="shop-details.html">Back 4 Blood</a>
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
                                    <img class="card-img-top" src="frontend/img/new4.jpg">
                                </a>
                            </div>
                            <div>
                                <span class="label-new">NEW</span>
                            </div>
                            <div id="link-action" class="action_link animate__animated ">
                                <ul>
                                    <li>
                                        <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                   <a class="infocard font-weight-bold" href="shop-details.html">Call of Duty: Vanguard</a>
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
                                    <img class="card-img-top" src="frontend/img/new5.jpg">
                                </a>
                            </div>
                            <div>
                                <span class="label-new">NEW</span>
                            </div>
                            <div id="link-action" class="action_link animate__animated ">
                                <ul>
                                    <li>
                                        <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                   <a class="infocard font-weight-bold" href="shop-details.html">Kena: Bridge of Spirits</a>
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
                                    <img class="card-img-top" src="frontend/img/new6.jpg">
                                </a>
                            </div>
                            <div>
                                <span class="label-new">NEW</span>
                            </div>
                            <div id="link-action" class="action_link animate__animated ">
                                <ul>
                                    <li>
                                        <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                   <a class="infocard font-weight-bold" href="shop-details.html">Fifa 22</a>
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
                                    <img class="card-img-top" src="frontend/img/new7.jpg">
                                </a>
                            </div>
                            <div>
                                <span class="label-new">NEW</span>
                            </div>
                            <div id="link-action" class="action_link animate__animated ">
                                <ul>
                                    <li>
                                        <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                   <a class="infocard font-weight-bold" href="shop-details.html">Life is Strange: True Colors</a>
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
                                    <img class="card-img-top" src="frontend/img/new8.jpg">
                                </a>
                            </div>
                            <div>
                                <span class="label-new">NEW</span>
                            </div>
                            <div id="link-action" class="action_link animate__animated ">
                                <ul>
                                    <li>
                                        <a href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
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
                                   <a class="infocard font-weight-bold" href="shop-details.html">Resident Evil 8: Village</a>
                                </span>
                                <span class="font-weight-bolder">$59.99</span>
                            </div>
                        </div>
                    </div>
                </div>
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
    <div class="subcriber">
        <div class="container-fluid">
            <div class="row d-flex flex-column align-items-center sub_box">
                <div class="col-6 text-center text-white" >
                    <span class="subtoour">Subscribe to Our Newsletter</span>
                    <p class="font-weight-bold">_____________</p>
                    <div class="alert p-2 alert-success rounded mb-2">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      </div>
                    <form role="form" action="" name="registration" class="text-center d-flex flex-column align-items-end" class="formsub">
                        <input type="email" placeholder="Enter email" class="form-control" name="email">
                        <button type="submit" class="border-0 bg-success text-white subbut">Submit</button>
                    </form>
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
    <div class="footer mt-5">
        <div class="container p-0">
            <div class="row m-0 bgbot d-flex justify-content-center pt-4 pb-4">
                    <div class="col-lg-4 col-md-6 pt-2 pb-2">
                            <img src="frontend/img/mylogo.png" class="pb-4 position-relative w-50">
                            <p class=""><i class="fas fa-home"></i> Van Xuyen, Hoang Van, Hiep Hoa, Bac Giang</p>
                            <p class=""><i class="fas fa-phone-alt"></i> 0385079001</p>
                            <p class=""><i class="fas fa-envelope"></i> khoanx1007@gmail.com</p>
                            <div class="footer-block-icon">
                                <span class="footer-icon">
                                    <i class="fab fa-facebook"></i>
                                   </span>
                                   <span class="footer-icon">
                                    <i class="fab fa-twitter"></i>
                                   </span>
                                   <span class="footer-icon">
                                    <i class="fab fa-youtube"></i>
                                   </span>
                                   <span class="footer-icon">
                                    <i class="fab fa-google-plus-g"></i>
                                </span>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-3 pt-2">
                            <h6 class="mb-4 h5 font-weight-bold">INFORMATION</h6>
                            <ul class="list-unstyled ">
                                <li><a href="">Delivery Information </a></li>
                                <li><a href="">Advanced Search</a></li>
                                <li><a href="">Helps & Faqs</a></li>
                                <li><a href="">Store Location </a></li>
                                <li><a href="">Orders & Returns </a></li>
                                <li><a href="">Deliveries </a></li>
                                <li><a href="">Refund & Returns</a></li>
                            </ul>

                    </div>                        
                    <div class="col-lg-2 col-md-3 pt-2">
                            <h6 class="mb-4 h5 font-weight-bold">OUR COMPANY</h6>
                            <ul class="list-unstyled ">
                                <li><a href="">Delivery </a></li>
                                <li><a href="">Legal Notice </a></li>
                                <li><a href="">Sitemap</a></li>
                                <li><a href="">Secure payment</a></li>
                                <li><a href="">Blog </a></li>
                                <li><a href="">About us</a></li>
                                <li><a href="">Carrers</a></li>                        
                            </ul>
                    </div>                        
                    <div class="col-lg-2 col-md-6 pt-2">
                            <h6 class="mb-4 h5 font-weight-bold">MY ACCOUNT</h6>
                            <ul class="list-unstyled">
                                <li><a href="">Search Terms</a></li>
                                <li><a href="">Advanced Search </a></li>
                                <li><a href="">Helps & Faqs </a></li>
                                <li><a href="">Store Location</a></li>
                                <li><a href="">Orders & Returns</a></li>
                                <li><a href="">Deliveries</a></li>
                                <li><a href="">Refund & Returns</a></li>                                
                            </ul>
                    </div>                        
                    <div class="col-lg-2 col-md-6 pt-2">
                            <h6 class="mb-3 h5 font-weight-bold">OPENING TIME</h6>
                            <ul class="list-unstyled mb-3">
                                <li><a href="">Mon - Fri : 8AM - 10PM </a></li>
                                <li><a href="">Sat : 9 AM-8PM </a></li>
                                <li><a href="">Suns : 14hPM - 18hPM</a></li>
                                <li><a href="">Mon - Fri : 8AM - 10PM</a></li>
                                <li><a href="">We Work All The Holidays </a></li>
                            </ul>      
                            <a href="">Download My App</a>                         
                    </div>
            </div>
            <div class="row m-0 bgbot2 pt-2 pb-2">
                <div class="col-12 text-center">
                    <span><i class="far fa-copyright"></i> 2021 <span style="color:dodgerblue;">BeuStore. </span> Made with <i class="fas fa-heart text-danger"></i> by BeuToxic</span>
                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>
</div>
@endsection