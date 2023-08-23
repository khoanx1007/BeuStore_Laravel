@extends('frontend.layouts.client')     
@section('content')
<form style="border-top:2px solid black;">
    @csrf
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12">
                <p class="h2 pb-3">Thông tin hoá đơn</p>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="form-group">
                            <label  class="form-label font-weight-bold">Tên</label>
                            <input name="fName" type="text" placeholder="" class="fName form-control">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="form-group">
                            <label  class="form-label font-weight-bold">Họ</label>
                            <input name="lName" type="text" placeholder="" class="lName form-control">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 mt-1">
                        <div class="form-group">
                            <label  class="form-label font-weight-bold" name="phone">*SĐT</label>
                            <input id="phone" name="phone" type="text" placeholder="" class="phone form-control">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 mt-1">
                        <div class="form-group">
                            <label  class="form-label font-weight-bold" name="email">*Địa chỉ Email</label>
                            <input id="email" name="email" type="email" placeholder="" class="email form-control">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="form-group">
                            <label class="form-label font-weight-bold h6 pt-2" >*Tỉnh / Thành phố</label>
                            <select name="province" id="province" class="form-control choose province" >
                                <option value="">Chọn tỉnh / thành phố</option>
                                @foreach ($provinces as $key=>$province)
                                    <option value="{{ $province->matp }}">{{ $province->name }}</option>
                                @endforeach 
                            </select>  
                        </div>      
                    </div>
                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="form-group">
                            <label class="form-label font-weight-bold h6 pt-2" >*Quận / Huyện</label>
                            <select name="district" id="district" class="form-control choose district" >
                                <option value="">Chọn quận / huyện</option>
                            </select>  
                        </div>      
                    </div>
                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="form-group">
                            <label class="form-label font-weight-bold h6 pt-2" >*Xã / Phường</label>
                            <select name="ward" id="ward" class="form-control ward" >
                                <option value="">Chọn xã / phường</option>
                            </select>  
                        </div>      
                    </div>      
                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="d-flex flex-column">
                            <label  class="form-label font-weight-bold h5">Thông tin thêm </label>
                            <label  class="form-label font-weight-bold">Ghi chú </label>
                            <textarea class="message form-control" name="message" placeholder=""></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                @if(Session::get('cart')==true)
                    <p class="h2 pb-3">Đơn hàng của bạn</p>
                    <div class="rounded" style="background-color:#e8ebef;padding:20px 30px;">
                        @php
                            $total=0;
                            $total_coupon=0;
                        @endphp                       
                        @foreach (Session::get('cart')  as $key => $cart )
                                @php
                                    $total+=$cart['product_price']*$cart['product_qty'];
                                @endphp
                            <div class="order">
                                <div class="orderbox d-flex justify-content-between align-items-center">
                                    <h6 class="text-secondary d-flex align-items-center font-weight-bold">
                                        <div> 
                                            <img src="{{ $cart['product_image'] }}" style="width: 96px; potision:relative;">
                                        </div>
                                        &nbsp;{{ $cart['product_name'] }} x {{ $cart['product_qty'] }}
                                    </h6>
                                    <h6 class="text-secondary">{{ number_format($cart['product_price']*$cart['product_qty'],0,',','.') }}$</h6>
                                </div>
                            </div>
                        @endforeach
                        <div class="order pt-2 pb-2">
                            <div class="orderbox d-flex justify-content-between">
                                <h6 class="font-weight-bold">Tổng phụ</h6>
                                <h6 class="font-weight-bold">{{ number_format($total,0,',','.') }}$</h6>
                            </div>
                            <div class="orderbox d-flex justify-content-between">
                                <h6 class="font-weight-bold">Shipping</h6>
                                <h6 class="font-weight-bold">Free Shipping</h6>
                            </div>
                            
                            @if(Session::get('coupon'))
                                @foreach (Session::get('coupon') as $key => $cou)
                                    <input type="hidden" name="coupon" class="coupon" value="{{ $cou['coupon_code'] }}">
                                    @if($cou['coupon_condition']==1)
                                    <p class="line"></p>
                                        <b class="pb-1 h5 font-weight-bold">Mã giảm giá</b>
                                        <p class="d-flex justify-content-between">
                                            <b>{{ $cou['coupon_code'] }}</b>
                                            @php
                                                $total_coupon = ($total*$cou['coupon_price'])/100;
                                            @endphp 
                                            <span>-{{ number_format($total_coupon,0,',','.') }}$</span>
                                        </p>
                                    @else 
                                        <b class="pb-1 font-weight-bold">Mã giảm giá</b>
                                        @php
                                            $total_coupon = ($cou['coupon_price']);
                                        @endphp 
                                        <p class="d-flex justify-content-between">
                                            <span>{{ $cou['coupon_code'] }}</b>
                                            <span>-{{ number_format($cou['coupon_price'],0,',','.') }}$</span>
                                        </p>
                                    @endif  
                                @endforeach 
                            @else
                                <input type="hidden" name="coupon" class="coupon" value="no">
                            @endif
                            <h4 class="line"></h4>
                        </div>
                        <div class="order">
                            <div class="orderbox d-flex justify-content-between">
                                <h4 class="font-weight-bold">Tổng tiền</h4>
                                <h4 class="font-weight-bold">{{ number_format($total-$total_coupon,0,',','.') }}$</h4>
                            </div>
                            <h4 class="line"></h4>
                        </div>
                        <!-- <div class="pay">
                            <div class="orderbox d-flex justify-content-between">
                                <p>Chuyển khoản</p>
                                <span class=""><i class="fas fa-angle-down"></i></span>
                            </div>
                        </div> -->
                        <!-- <div class="pay">
                            <div class="orderbox d-flex justify-content-between">
                                <p>Check payments</p>
                                <span class=""><i class="fas fa-angle-down"></i></span>
                            </div>
                        </div>
                        <div class="pay">
                            <div class="orderbox d-flex justify-content-between">
                                <p> Cash on delivery</p>
                                <span class=""><i class="fas fa-angle-down"></i></span>
                            </div>
                        </div> -->
                    </div>
                    <div class=" text-center mt-4">
                        <button type="button" name="send_order" class="btn btn-primary send_order">ĐẶT HÀNG</button>
                    </div>
                @else
                    <p class="h2 pb-3">Đơn hàng của bạn</p>
                    <div class="rounded" style="background-color:#e8ebef;padding:20px 30px;">
                        Bạn chưa mua sản phẩm nào, vui lòng quay lại và mua sắm.
                    </div>
                @endif
            </div>
        </div>
    </div>
</form>
@endsection