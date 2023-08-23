@extends('backend.layouts.master')
@section('title')
Tạo người dùng
@endsection
@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Thêm nhân viên</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="row"> 
            <div class="col-12">
              <form action="{{route('backend.staffs.store')}}" method="POST">
                @csrf
                <div class="form-group @error('name') has-error @enderror">
                  <label>Tên</label>
                  <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nhập tên..">
                  @error('name')
                    <small class="form-text text-muted">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group @error('email') has-error @enderror">
                  <label>Địa chỉ Email</label>
                  <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Nhập Email..">
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
                  <input type="text" name="address" value="{{old('address')}}" class="form-control">
                  @error('address')
                    <small class="form-text text-muted">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group @error('phone') has-error @enderror">
                  <label for="errorInput">Số điện thoại</label>
                  <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
                  @error('phone')
                    <small class="form-text text-muted">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Vai trò</label>
                  <select class="form-control" name="role" id="exampleFormControlSelect1">
                    @foreach (\App\Models\Staff::$roleArr as $item)
                      <option value="{{$item}}">
                        @if($item==App\Models\Staff::ROLE_ADMIN) Quản trị viên
                        @elseif($item==App\Models\Staff::ROLE_EDITOR) Biên tập viên
                        @endif
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="card-action text-right">
                  <button type="submit" class="btn btn-success">Thêm</button>
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