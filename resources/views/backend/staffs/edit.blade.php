@extends('backend.layouts.master')
@section('title')
Chỉnh sửa User
@endsection
@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Cập nhật nhân viên</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Thành viên</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Cập nhật người dùng</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="row"> 
            <div class="col-12">
              <form action="{{route('backend.staffs.update',['id' => $staff->id])}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-group @error('name') has-error @enderror">
                  <label>Tên</label>
                  <input type="text" class="form-control" name="name" value="@if(!empty(old('name'))){{old('name')}}@else{{$staff->name}}@endif" placeholder="Nhập tên..">
                  @error('name')
                    <small class="form-text text-muted">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group @error('email') has-error @enderror">
                  <label>Địa chỉ Email</label>
                  <input type="email" class="form-control" name="email" value="@if(!empty(old('email'))){{old('email')}}@else{{$staff->email}}@endif" placeholder="Nhập Email..">
                  @error('email')
                    <small class="form-text text-muted">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-check">
                  <label>Giới tính</label><br>
                  <label class="form-radio-label">
                    <input class="form-radio-input" type="radio" name="gender" value="{{ config('global.GENDER_MALE') }}" checked="">
                    <span class="form-radio-sign">Nam</span>
                  </label>
                  <label class="form-radio-label ml-3">
                    <input class="form-radio-input" type="radio" name="gender" value="{{ config('global.GENDER_FEMALE') }}">
                    <span class="form-radio-sign">Nữ</span>
                  </label>
                </div>
                <div class="form-group @error('address') has-error @enderror">
                  <label for="errorInput">Địa chỉ</label>
                  <input type="text" name="address" value="@if(!empty(old('address'))){{old('address')}}@else{{$staff->address}}@endif" class="form-control">
                  @error('address')
                    <small class="form-text text-muted">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group @error('phone') has-error @enderror">
                  <label for="errorInput">Số điện thoại</label>
                  <input type="text" name="phone" value="@if(!empty(old('address'))){{old('phone')}}@else{{$staff->phone}}@endif" class="form-control">
                  @error('phone')
                    <small class="form-text text-muted">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Vai trò</label>
                  <select class="form-control" name="role" id="exampleFormControlSelect1">
                    @foreach (\App\Models\Staff::$roleArr as $item)
                      <option value="{{$item}}" {{ ($staff->role == $item) ? 'selected' : '' }}>
                        @if($item==App\Models\Staff::ROLE_ADMIN) Quản trị viên
                        @elseif($item==App\Models\Staff::ROLE_EDITOR) Biên tập viên
                        @endif
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="card-action text-right">
                  <button type="submit" class="btn btn-success">Cập nhật</button>
                  <a href="{{route('backend.staffs.index')}}"  class="btn btn-danger">Huỷ</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection