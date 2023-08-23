@extends('backend.layouts.master')
@section('title')
Danh sách mã giảm giá
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
            <h4 class="page-title">Danh sách Coupon</h4>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <form>
                    <div class="input-group input-group-md" style="width: 400px;">
                      <input type="text" name="name" class="form-control float-right" placeholder="Nhập..">
                        <button type="submit" class="btn btn-default">
                          Filter
                        </button>
                    </div>
                  </form>
                  <a href="{{route('backend.coupons.create') }}" class="btn btn-info ml-3" id="create-new-product">Thêm Coupon</a>
                </div>
                <div class="card-body">
                  <table class="table table-head">
                    <thead>
                      <tr>
                        <th>Tên</th>
                        <td>Thể loại</td>
                        <td>Số lượng</td>
                        <td>Giảm giá</td>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(!empty($coupons))
                        @foreach($coupons as $coupon)
                          <tr data-widget="expandable-table" aria-expanded="true">
                            <td>{{$coupon->name}}</td>
                            <td>{{$coupon->type_coupon}}</td>
                            <td>{{$coupon->qty}}</td>
                            <td>{{$coupon->discount}}@if ($coupon->type == 1) % @else $ @endif</td>
                            <td>
                              <form method="POST" action="{{route('backend.coupons.destroy',$coupon->id) }}">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                              </form>                         
                            </td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
                {{-- @include('backend.products.create')
                @include('backend.products.edit') --}}
              </div>
            </div>
          </div>
        </div> 
@endsection
