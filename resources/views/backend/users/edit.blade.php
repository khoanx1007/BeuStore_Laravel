@extends('backend.layouts.master')
@section('title')
Chỉnh sửa User
@endsection
@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Cập nhật người dùng</h4>
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
        <div class="card-header">
          <div class="card-title">Form Elements</div>
        </div>
        <form action="{{route('backend.users.update',$user->id) }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
          @csrf
          @method('PUT')
          <input type="hidden" name="_method" value="put"/>
          <div class="card-body">
            <div class="form-group" >
              <label for="exampleInputFile">Hình nền</label>
              <p><img src="{{ $user->my_image }}" width="100px"></p>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image">
                  <label class="custom-file-label" for="emxampleInputFile">Chọn Ảnh</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Tên User</label>
              <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Nhập tên...">
            </div>
            <div class="form-group">
              <label>Vai trò</label>
              <input type="text" name="role" class="form-control" value="" placeholder="Nhập tên...">
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