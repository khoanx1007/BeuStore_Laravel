@extends('backend.layouts.master')
@section('title')
Cài đặt
@endsection
@section('css')
@endsection
@section('content')
@php
    $genderArr = \App\Models\Staff::$genderArr;
    $genderMale = \App\Models\Staff::GENDER_MALE;
    $genderFemale = \App\Models\Staff::GENDER_FEMALE;
@endphp
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Cài đặt Admin</h4>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Thông tin cá nhân</div>
        </div>
        <form action="{{route('backend.admin.updateInfo') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="Email" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" disabled>
            </div>
            <div class="form-group">
              <label>Địa chỉ</label>
              <input type="text" name="name" class="form-control" value="{{ Auth::guard('admin')->user()->address }}">
            </div>
            <div class="form-group">
              <label>Số điện thoại</label>
              <input type="text" name="name" class="form-control" value="{{ Auth::guard('admin')->user()->phone }}">
            </div>
            <div class="form-group">
                <label>Giới tính</label>
                <select type="text" name="name" class="form-control">
                  @foreach ($genderArr as $item)
                      <option value="{{$item}}" {{ (Auth::guard('admin')->user()->gender == $item) ? 'selected' : '' }}>
                          @if($item == $genderMale) Nam
                          @elseif($item == $genderFemale) Nữ
                          @endif
                      </option>
                  @endforeach
                </select>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-action">
            <button class="btn btn-success">Xác nhận</button>
            <button class="btn btn-danger">Huỷ</button>
          </div>
        </form> 
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Đổi mật khẩu</div>
        </div>
        <form action="{{route('backend.categories.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Mật khẩu cũ</label>
              <input type="password" name="old_pass" class="form-control" placeholder="Nhập mật khẩu cũ..">
            </div>
            <div class="form-group">
              <label>Mật khẩu mới</label>
              <input type="password" name="new_pass" class="form-control" placeholder="Nhập mật khẩu mới...">
            </div>
            <div class="form-group">
              <label>Nhập lại mật khẩu mới</label>
              <input type="password" name="re_new_pass" class="form-control" placeholder="Nhập lại mật khẩu mới..">
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-action">
            <button class="btn btn-success">Đổi mật khẩu</button>
            <button class="btn btn-danger">Huỷ</button>
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>
@endsection