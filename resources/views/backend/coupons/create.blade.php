@extends('backend.layouts.master')
@section('title')
Tạo mã giảm giá
@endsection
@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Tạo Coupon</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Tạo Coupon</div>
        </div>
        <form action="{{route('backend.coupons.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Tên mã</label>
              <input type="text" name="name" class="form-control" placeholder="Nhập...">
            </div>
            <div class="form-group">
              <label>Loại mã giảm giá</label>
              <select name="type" class="form-control">
                <option value="0">Giảm theo giá tiền</option>
                <option value="1">Giảm theo phần trăm</option>
              </select>
            </div>
            <div class="form-group">
              <label>Số lượng</label>
              <input type="text" name="qty" class="form-control" placeholder="Nhập...">
            </div>
            <div class="form-group">
              <label>Giảm giá</label>
              <input type="text" name="discount" class="form-control" placeholder="Nhập...">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-action">
            <button class="btn btn-success">Submit</button>
            <button class="btn btn-danger">Cancel</button>
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>
@endsection
