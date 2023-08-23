@extends('frontend.layouts.client')
@section('js')
@endsection
@section('content')
<div class="main-cart" style="border-top:2px solid black;">
        <div class="container">
            <div class="row ">
                <h3 class="col-12 font-weight-bold mb-3">Giỏ hàng của bạn</h3>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="cartban col-12">
                    <form action="{{ route('frontend.carts.update') }}" method="POST">
                        @csrf 
                        <div class="row m-0 borderoutside d-lg-flex d-md-flex d-none">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-2">
                                <div class="cart-content">
                                    <span>SẢN PHẨM</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-2">
                                <div class="cart-content">
                                    <span>TÊN</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-2">
                                <div class="cart-content">
                                    <span>ĐƠN GIÁ</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-2">
                                <div class="cart-content">
                                    <span>SỐ LƯỢNG</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-2">
                                <div class="cart-content">
                                    <span>THÀNH TIỀN</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-2">
                                <div class="cart-content">
                                    <span>THAO TÁC</span>
                                </div>
                            </div>
                        </div>
                            @if(Session::get('cart')==true)
                                @php
                                    $total=0;
                                    $total_coupon=0;
                                @endphp
                                @foreach (Session::get('cart')  as $key => $cart )
                                @php
                                    $total+=$cart['product_price']*$cart['product_qty'];
                                @endphp
                                <div class="cartitem">
                                    <div class="row m-0 border d-flex  justify-content-center align-items-center">
                                        <div class="ctic">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                            <div class="cart-content2 cart-img">
                                                <img src="{{ $cart['product_image'] }}" class="w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                            <div class="cart-content2">
                                                <span>{{ $cart['product_name'] }}</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                            <div class="cart-content2">
                                                <span>{{ $cart['product_price'] }}$ </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                            <div class="cart-content2">           
                                                    <div class="quantity-goods d-flex align-items-center justify-content-center ml-2">
                                                        <div class="numquan ml-5">
                                                            <div class="quantity d-flex justify-content-center align-items-center">
                                                                <div class="decre" style="cursor: pointer">
                                                                    <span class="plus"><i class="fas fa-minus"></i></span>
                                                                </div>
                                                                <input style="width:45px;" type="text" class="qty-in" name="cart_qty[{{ $cart['session_id'] }}]" maxlength="2" max="999" value="{{ $cart['product_qty'] }}">
                                                                <input type="hidden" class="qty-in" name="rowId_cart" value="">
                                                                <div class="incre" style="cursor: pointer">
                                                                    <span class="minus"><i class="fas fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                            <div class="cart-content2">
                                                <span class="font-weight-bold">{{ number_format($cart['product_price'] * $cart['product_qty']) }}$</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                            <div class="cart-contentic">
                                                <a href="{{ route('frontend.carts.delete',$cart['session_id']) }}"><i class="fas fa-times" style="font-size: 25px;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div>      
                                <div class="d-flex mt-2">
                                    <input class="btn bg-primary text-white" type="submit" value="CẬP NHẬT GIỎ HÀNG"></a>
                                    <a href="{{ route('frontend.carts.destroy') }}" class="btn bg-danger text-white ml-2">XOÁ TOÀN BỘ</a>
                                </div>
                                <a href="{{ route('frontend.main.index') }}" class="btn bg-info text-white mt-2">TIẾP TỤC MUA SẮP</a>
                            </div>
                        
                        @else
                            <div class="cartitem">
                                <div class="row m-0 border d-flex  justify-content-center align-items-center">
                                    <div class="col-12">
                                        <b>Chưa có sản phẩm, quay lại cửa hàng và mua sắm nào!</b>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-left mt-2">
                                    <div class="col-lg-6 col-12 btn-left d-flex flex-md-row flex-column">
                                        <a href="{{ route('frontend.main.index') }}" class="btn bg-info text-white">TIẾP TỤC MUA SẮP</a> 
                                    </div>
                                </div>
                            </div>
                        @endif
                    </form>
                    @if(session::get('cart')==true)
                        <div class="formcart mt-5 pd-5">
                                <div class="row d-flex justify-content-between">
                                        <div class="col-lg-4 col-md-12 col-12 mb-3">
                                            <form  action="{{ route('frontend.carts.checkcp') }}" method="POST"> 
                                                @csrf
                                                <h5 class="">NHẬP MÃ GIẢM GIÁ</h5>
                                                <h4 class="line"></h4>
                                                <p>Nhập mã phiếu giảm giá của bạn nếu bạn có. Chỉ được dùng một mã duy nhất.</p>
                                                <div class="country-select d-flex flex-column">
                                                    <label class="form-label font-weight-bold h6 pb-2" >Nhập mã giảm giá</label>
                                                    <input type="text" name="coupon" class="opti form-control">
                                                </div>
                                                <input class="btn btn-primary check_coupon" type="submit" name="check_coupon" value="Kiểm tra mã">
                                            </form>   
                                        </div>                            
                                        <div class="col-lg-4 col-md-12 col-12">
                                            <h5 class="pb-1">Tổng giỏ hàng</h5>                    
                                            <p class="d-flex justify-content-between">
                                                <span>Tổng giá trị sản phẩm</span>
                                                <b>{{ number_format($total,0,',','.') }} $</b>
                                            </p>
                                            <p class="d-flex justify-content-between">
                                                <span>Thuế</span>
                                                <b>{{ Cart::tax().' '.'$' }}</b>
                                            </p>
                                            @if(Session::get('coupon'))
                                                @foreach (Session::get('coupon') as $key => $cou)
                                                    @if($cou['coupon_condition']==1)
                                                    <p class="line"></p>
                                                        <h5 class="pb-1">Mã giảm giá</h5>
                                                        <p class="d-flex justify-content-between">
                                                            <span>{{ $cou['coupon_code'] }}</span>
                                                            @php
                                                            $total_coupon = ($total*$cou['coupon_price'])/100;
                                                            @endphp 
                                                            <b>-{{ number_format($total_coupon,0,',','.') }}$</b>
                                                        </p>
                                                    @else 
                                                        <h5 class="pb-1">Mã giảm giá</h5>
                                                        @php
                                                            $total_coupon = ($cou['coupon_price']);
                                                        @endphp 
                                                        <p class="d-flex justify-content-between">
                                                            <span>{{ $cou['coupon_code'] }}</span>
                                                            <b>-{{ number_format($cou['coupon_price'],0,',','.') }}$</b>
                                                        </p>
                                                    @endif  
                                                @endforeach 
                                            @endif
                                            <p class="line"></p>
                                            <div class="totalgrand d-flex justify-content-between">
                                                <h4 class="font-weight-bold">Tổng thanh toán</h4>
                                                <h4 class="font-weight-bold">{{ number_format($total-$total_coupon,0,',','.') }} $</h4>
                                            </div>
                                            <div class="buycart mt-3">
                                                <a class="btn btn-primary" href="{{ route('frontend.checkout.index') }}">ĐẾN TRANG THANH TOÁN</a>
                                            </div>                                
                                    </div>
                                </div>   
                        </div>
                    @endif
                </div>
            </div>
            
        </div>
        
@endsection
