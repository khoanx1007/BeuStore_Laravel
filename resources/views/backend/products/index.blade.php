@extends('backend.layouts.master')
@section('css')
<style>
  .tag {
  background: #eee;
  border-radius: 3px 0 0 3px;
  color: #999;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 20px 0 23px;
  position: relative;
  margin: 0 10px 10px 0;
  text-decoration: none;
}
.tag::before {
  background: #fff;
  border-radius: 10px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
  content: '';
  height: 6px;
  left: 10px;
  position: absolute;
  width: 6px;
  top: 10px;
}

.tag::after {
  background: #fff;
  border-bottom: 13px solid transparent;
  border-left: 10px solid #eee;
  border-top: 13px solid transparent;
  content: '';
  position: absolute;
  right: 0;
  top: 0;
}
.tag:hover {
  background-color: dodgerblue;
  color: white;
  cursor: pointer;
}

.tag:hover::after {
   border-left-color: dodgerblue; 
}
</style>
@endsection
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
                <th scope="col">Hãng Game</th>
                <th scope="col">Giá gốc($)</th>
                <th scope="col">Giá sale($)</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Tag</th>
                <th scope="col">Tình Trạng</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product )
              <tr>
                <td>
                @if (!empty($product->image))
                  <img src="{{ $product->my_image }}" style="width:192px;height:108px;">   
                @endif</td>
                <td>{{$product->name}}
                  <h6 class="text-dark"><b class="text-primary">Slug</b>: {{$product->slug}}</p>
                </td>
                <td>{{$product->brand->name}}</td>
                <td>{{$product->price_origin}}</td>
                <td>{{$product->price_sale}}</td>
                <td>
                  @foreach($product->categories as $category)
                    <span class="tag">{{ $category->name }}</span>
                  @endforeach
                </td>
                <td>
                  @foreach($product->tags as $tag)
                    <span class="badge badge-info">{{ $tag->name }}</span>
                  @endforeach
                </td>
                <td>{{$product->status_text}}</span></td>
                <td>
                  <a href="{{route('backend.products.edit',$product->id) }}" ><button class="btn btn-primary">Sửa</button></a>
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