@extends('frontend.layouts.client')
@section('js')
@endsection
@section('content')
<div class="main-cart">
        <div class="container">
            <div class="row ">
                <h3 class="col-12 font-weight-bold mb-3">Giỏ hàng của bạn</h3>
                <div class="cartban col-12">
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
                                <span>TỔNG</span>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-2">
                            <div class="cart-content">
                                <span>THAO TÁC</span>
                            </div>
                        </div>
                    </div>
                    @php
                        print_r(Session::get('cart'));
                    @endphp
                    {{-- @foreach ($products  as $product )
                        <div class="cartitem">
                            <div class="row m-0 border d-flex  justify-content-center align-items-center">
                                <div class="ctic">
                                    <i class="fas fa-times"></i>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                    <div class="cart-content2 cart-img">
                                        <img src="{{ $product->options->image }}" class="w-100">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                    <div class="cart-content2">
                                        <span>{{ $product->name }}</span>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                    <div class="cart-content2">
                                        <span>{{ $product->price }}$ </span>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                    <div class="cart-content2">       
                                        <form action="{{ route('frontend.carts.update', $product->rowId) }}" method="POST">
                                            @csrf 
                                            <div class="quantity-goods d-flex align-items-center justify-content-center ml-3">
                                                <div class="numquan ml-5">
                                                    <div class="quantity d-flex justify-content-center align-items-center">
                                                        <div class="decre" style="cursor: pointer">
                                                            <span class="plus"><i class="fas fa-minus"></i></span>
                                                        </div>
                                                        <input style="width:45px;" type="text" class="qty-in" name="cart_qty" maxlength="2" max="999" value="{{ $product->qty }}">
                                                        <input type="hidden" class="qty-in" name="rowId_cart" value="{{ $product->rowId }}">
                                                        <div class="incre" style="cursor: pointer">
                                                            <span class="minus"><i class="fas fa-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-1">
                                                    <input class="btn bg-primary text-white rounded p-1" type="submit" value="Update"></a>
                                                </div>  
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                    <div class="cart-content2">
                                        <span class="font-weight-bold">{{ number_format ($product->qty * $product->price,0,'.','.')}}$</span>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                                    <div class="cart-contentic">
                                        <a href="{{ route('frontend.carts.delete', $product->rowId) }}"><i class="fas fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach       --}}
                </div>
            </div>
            <div class="row mt-3 d-flex justify-content-left pb-2">
                <div class="col-lg-6 col-12 btn-left d-flex flex-md-row flex-column">
                    <div class="buycart ml-md-2 mt-4">
                        <a href="{{ route('frontend.main.index') }}">TIẾP TỤC MUA SẮP</a>
                    </div>
                    <div class="clearcart ml-md-2 mt-4">
                        <a href="{{ route('frontend.carts.destroy') }}" class="clc">XOÁ TOÀN BỘ</a>
                    </div>
                </div>
            </div>
            <div class="formcart mt-5 pd-5">
                <form>
                    <div class="row">
                            <div class="col-lg-4 col-md-12 col-12 mb-3">
                                <h5 class="">DỰ TOÁN VẬN CHUYỂN VÀ THUẾ</h5>
                                <h4 class="line"></h4>
                                <p>Nhập điểm đến của bạn để nhận ước tính vận chuyển</p>
                                <div class="country-select d-flex flex-column">
                                    <label class="form-label font-weight-bold h6 pt-2" >*Tỉnh / Thành phố</label>
                                    <select name="calc_shipping_provinces" class="form-control" required="">
                                        <option value="">Tỉnh / Thành phố</option>
                                    </select>
                                    <input class="billing_address_1" name="" type="hidden" value="">
                                </div>
                                <div class="country-select d-flex flex-column">
                                    <label class="form-label font-weight-bold h6 pt-2" >*Quận / Huyện</label>
                                    <select name="calc_shipping_district" class="form-control" required="">
                                        <option value="">Quận / Huyện</option>
                                    </select>
                                    <input class="billing_address_2" name="" type="hidden" value="">
                                </div>
                                <div class="country-select d-flex flex-column">
                                    <label class="form-label font-weight-bold h6 pt-2" >*Địa chỉ </label>
                                    <input type="text" name="zipo" class="form-group opti" placeholder="Nhập.." required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-12 mb-3">
                                <form method="POST" action="{{ route('frontend.carts.check') }}"> 
                                    @csrf
                                    <h5 class="">NHẬP MÃ GIẢM GIÁ</h5>
                                    <h4 class="line"></h4>
                                    <p>Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                                    <div class="country-select d-flex flex-column">
                                        <label class="form-label font-weight-bold h6 pb-2" >Nhập mã giảm giá</label>
                                        <input type="text" name="coupon" class="opti form-group">
                                    </div>
                                    <button class="btn btn-primary" >Lấy mã</button  > 
                                </form>   
                            </div>                            
                            <div class="col-lg-4 col-md-12 col-12">
                                <h5 class="pb-1">Tổng giỏ hàng</h5>                    
                                <p class="d-flex justify-content-between">
                                    <span>Tổng giá trị sản phẩm</span>
                                    <b>{{ Cart::priceTotal().' '.'$' }}</b>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span>Thuế</span>
                                    <b>{{ Cart::tax().' '.'$' }}</b>
                                </p>
                                <p class="line"></p>
                                <h5 class="pb-1">Mã giảm giá</h5>
                                {{-- @foreach ( $coupondbs as $coupondb )
                                    <p class="d-flex justify-content-between">
                                        <span>{{ $coupondb->name }}</span>
                                        <b>{{ $product->setdiscount }}</b>
                                    </p>
                                @endforeach --}}
                                <p class="line"></p>
                                <div class="totalgrand d-flex justify-content-between">
                                    <h4 class="font-weight-bold">Tổng thanh toán</h4>
                                    <h4 class="font-weight-bold">{{ Cart::total().' '.'$' }}</h4>
                                </div>
                                <div class="buycart mt-3">
                                    <button>Đên trang thanh toán</button>
                                </div>                                
                            </div>
                    </div>
                </form>
                    
        </div>
</div>
@endsection
