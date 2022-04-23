@extends('backend.layouts.master')
@section('title')
Tạo Blog
@endsection
@section('content')
          <div class="card card-dark">
              <div class="card-header">
                <h1 class="card-title">Tạo danh mục mới</h1>
              </div>
              <form action="{{route('backend.categories.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter...">
                    @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Mô tả</label>
                    <textarea id="editor" name="content" class="form-control @error('content') is-invalid @enderror"></textarea>
                    @error('content')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">Tạo</button>
                    <a href="" class="btn btn-default float-right">Huỷ</a>
                  </div>
                </div>
                <!-- /.card-body -->
                
              </form>
              
          </div>
@endsection
