@extends('backend.layouts.master')
@section('css')
<style>
  .image{
        position: relative;
    }
    .mybutton{
        padding-top: 10px;
        z-index: 10000;
        padding-bottom: 0;
        position: absolute;
        top: 30%;
        left: 24%;
        opacity: 0;
        right: 0;
        transition: 0.3s;
    }
    .mybutton:hover{
        opacity: 1;
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
          <a href="{{route('backend.images.create') }}" class="btn btn-info ml-3" id="create-new-product">Thêm ảnh</a>
        </div>
        <div class="card-body">
          <table class="table table-head">
            <thead>
              <tr>
                {{-- <th scope="col">ID</th>
                <th scope="col">STT</th> --}}
                <th scope="col">Tên Game</th>
                <th scope="col">Hình ảnh</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product )
                  <tr>
                    <td>{{ $product->name }}</td>
                    <td class="cointainer">
                      <div class="row">
                          @foreach ($images as $image )
                            @if ($product->id == $image->product_id)
                              @if (!empty($image->image))
                                <div class="col-3 p-1 image">
                                  <img src="{{ $image->my_image }}" style="width:100%;">   
                                  <div class="mybutton d-flex">
                                    <a href="{{route('backend.images.edit',$image->id) }}" ><button class="btn btn-primary"><i class="fas fa-pen"></i></button></a>
                                    &nbsp;&nbsp;&nbsp;
                                    <form method="POST" action="{{route('backend.images.destroy',$image->id) }}">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                                    </form>                         
                                  </div>
                                </div> 
                              @endif
                            @endif
                          @endforeach 
                      </div>  
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