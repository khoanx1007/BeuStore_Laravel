@extends('backend.layouts.master')
@section('title')
Thông tin đơn hàng
@endsection
@section('content-header')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="page-header">
          <h2 class="pageheader-title">Danh sách Coupon</h2>
      </div>
  </div>
</div>
@endsection
@section('content')
        @if (session('error'))
          <div class="alert alert-danger" role="alert">
            {{ session('error') }}
          </div>
        @endif
        @if (session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Thông tin đơn hàng</h4>
          </div>
          @foreach ($order as $ord)
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="card-title font-weight-bold">Đơn hàng {{ $ord->order_product }} của {{ $ord->first_name }} {{ $ord->last_name }}</div>
                </div>
                @php
                    $total=0;
                    $total_coupon=0;
                @endphp  
                <div class="card-body">
                  <table class="table table-head">
                    <thead>
                      <tr>
                        <th>Game</th>
                        <td>Tên</td>
                        <td>Đơn giá</td>
                        <td>Số lượng</td>
                        <th class="text-right">Tổng</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                        @php
                            $total+=$product->product_price*$product->product_qty;
                        @endphp
                        <tr data-widget="expandable-table" aria-expanded="true">
                          <td><img style="width:192px;height:108px;" src="{{ $product->product_img }}"></td>
                          <td>{{$product->product_name}}</td>
                          <td>{{$product->product_price}}</td>
                          <td>{{$product->product_qty }}</td>
                          <td class="text-right">{{ number_format($product->product_qty*$product->product_price,0,',','.') }}$</td>
                        </tr>
                      @endforeach
                    </tbody>
                    <tr>
                        <td colspan="5">
                            <div class="d-flex justify-content-between">
                                <h4 class="font-weight-bold">Tổng phụ:</h4>
                                <h4 class="font-weight-bold text-center">{{ number_format($total,0,',','.') }}$</h4>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h4 class="font-weight-bold">Shipping:</h4>
                                <h4 class="font-weight-bold">Free Shipping</h4>
                            </div> 
                            <div class="d-flex justify-content-between">
                                
                                @foreach($coupons as $coupon)
                                    @if($coupon->name == $ord->coupon)
                                        @if($coupon->type==1)
                                            @php
                                                $total_coupon = ($total*$coupon->discount)/100;
                                            @endphp 
                                            <h4 class="font-weight-bold">Mã Giảm giá:</h4>
                                            <h4 class="font-weight-bold">-{{ number_format($total_coupon,0,',','.') }}$</h4>
                                        @else
                                            @php
                                                $total_coupon = ($coupon->discount);
                                            @endphp 
                                            <h4 class="font-weight-bold">Mã Giảm giá:</h4>
                                            <h4 class="font-weight-bold">-{{ number_format($total_coupon,0,',','.') }}$</h4>
                                        @endif
                                    @endif    
                                @endforeach
                                @if($total_coupon==0)
                                    <h4 class="font-weight-bold">Mã Giảm giá:</h4>
                                    <h4 class="font-weight-bold">0$</h4>
                                @endif
                            </div> 
                            <div class="d-flex justify-content-between">
                                <h2 class="font-weight-bold text-info">Tổng cộng:</h2>
                                <h2 class="font-weight-bold text-info">{{ number_format($total-$total_coupon,0,',','.') }}$</h4></h2>
                            </div> 
                        </td>
                    </tr>
                  </table>
                </div>
                {{-- @include('backend.products.create')
                @include('backend.products.edit') --}}
              </div>
            </div>
          </div>
          @endforeach
        </div> 
@endsection
