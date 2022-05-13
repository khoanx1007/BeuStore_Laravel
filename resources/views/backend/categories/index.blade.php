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
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Danh sách sản phẩm</h4>
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
                <a href="#">Sản phẩm</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Danh sách</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="card-title">Danh sách sản phẩm</div>
                  <a href="{{route('backend.categories.create') }}" class="btn btn-info ml-3" id="create-new-product">Add New</a>
                </div>
                <div class="card-body">
                  <table class="table table-head">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Ngày tạo</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                        <tr data-widget="expandable-table" aria-expanded="true">
                          <td>{{$category->id}}</td>
                          <td class="text-primary" style="max-width:80px;" >{{$category->name}}
                          <p class="text-dark">Slug: {{$category->slug}}</p>
                          </td>
                          <td>{{$category->created_at}}</td>
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
