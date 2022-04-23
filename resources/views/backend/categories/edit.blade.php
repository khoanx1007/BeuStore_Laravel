@extends('backend.layouts.master')
@section('title')
Chỉnh sửa danh mục
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Chỉnh sửa danh mục</h3>
              </div>
              <form action="{{route('backend.categories.update',$category->id) }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <input type="hidden" name="_method" value="put"/>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bài viết</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="@error('name'){{ old('name') }}@else{{ $category->name }}  @enderror" id="exampleInputEmail1" placeholder="Enter...">
                    @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Mô tả</label>
                    <textarea id="editor" name="content" class="form-control @error('content') is-invalid @enderror">{{$category->content}}</textarea>
                    @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Sửa</button>
                  <a href="" class="btn btn-default float-right">Huỷ</a>
                </div>
              </form>
            </div> 
@endsection
