@extends('backend.layouts.master')
@section('title')
Danh sách danh mục
@endsection
@section('content-header')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="page-header">
          <h2 class="pageheader-title">Danh sách danh mục</h2>
          <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lí danh mục</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Danh sách danh mục</li>
                  </ol>
              </nav>
          </div>
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
        <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-header d-flex justify-content-between">
                  <div>
                    <a href="{{route('backend.categories.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
                    <a href="{{route('backend.categories.index2') }}"  class="btn btn-success"><i class="fas fa-recycle"></i></a>
                  </div>
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr class="bg-success" aria-expanded="false">
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                        <tr data-widget="expandable-table" aria-expanded="true">
                          <td>{{$category->id}}</td>
                          <td class="text-primary" style="max-width:80px;" >{{$category->name}}
                          <p class="text-dark">Slug: {{$category->slug}}</p>
                          </td>
                          <td>{{$category->content}}</td>
                          <td>{{$category->created_at}}</td>
                          <td class="d-flex flex-wrap">
                            <a href="{{route('backend.categories.edit',$category->id) }}"  class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <form method="POST" action="{{route('backend.categories.destroy',$category->id) }}">
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
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
@endsection
