@extends('backend.layouts.master')
@section('content')
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
          <a href="{{route('backend.products.create') }}" class="btn btn-info ml-3" id="create-new-product">Add New</a>
        </div>
        <div class="card-body">
          <table class="table table-head">
            <thead>
              <tr>
                {{-- <th scope="col">ID</th>
                <th scope="col">STT</th> --}}
                <th scope="col">Sản phẩm</th>
                <th scope="col">Tên</th>
                <th scope="col">Giá gốc</th>
                <th scope="col">Giá sale</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Tình Trạng</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product )
              <tr>
                <td>
                @if (!empty($product->image))
                  <img src="{{ $product->my_image }}" style="width:50px;height:50px;border-radius:100%;">   
                @endif</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price_origin}}</td>
                <td>{{$product->price_sale}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->status}}</span></td>
                <td class="d-flex flex-wrap align-items-center">
                  <a href="{{route('backend.products.edit',$product->id) }}" ><button class="btn btn-primary">Sửa</button></a>
                  &nbsp;
                  <form method="POST" action="{{route('backend.products.destroy',$product->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Xoá</button>  
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