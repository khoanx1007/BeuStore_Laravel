@extends('backend.layouts.master')
@section('title')
Danh sách hãng Game
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
            <h4 class="page-title">Danh sách đơn hàng</h4>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="card-title">Danh sách đơn hàng</div>
                </div>
                <div class="card-body">
                  <table class="table table-head">
                    <thead>
                      <tr>
                        <th>Tên</th>
                        <td>Email</td>
                        <td>Điện thoại</td>
                        <td>Địa chỉ</td>
                        <td>Ngày tạo</td>
                        <th>Đơn hàng</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($orders as $order)
                        <tr data-widget="expandable-table" aria-expanded="true">
                          <td>{{$order->first_name}} {{ $order->last_name }}</td>
                          <td>{{$order->email}}</td>
                          <td>{{$order->phone}}</td>
                          <td>{{$order->my_ward->name }}, {{$order->my_district->name }}, {{$order->my_province->name }}</td>
                          <td>{{$order->created_at}}</td>
                          <td class="d-flex align-items-center">  
                            <a href="{{route('backend.orders.show',$order->order_product) }}"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>  
                            <form method="POST" action="{{route('backend.orders.destroy',$order->order_product) }}">
                              @csrf
                              @method('DELETE')
                              <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                            </form>                         
                          </td>
                        </tr>
                      @endforeach
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
