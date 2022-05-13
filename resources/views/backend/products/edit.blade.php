@extends('backend.layouts.master')
@section('title')
Cập nhật sản phẩm
@endsection
@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Tạo sản phẩm</h4>
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
        <a href="#">Cập nhật sản phẩm</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Form Elements</div>
        </div>
        <form action="{{route('backend.products.update',$product->id )}}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
          @csrf
          @method('PUT')
          <input type="hidden" name="_method" value="put"/>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputFile">Hình ảnh</label>
              <p>
                @if (!empty($product->image))
                  <img src="{{ $product->my_image }}" style="width:192px;height:108px;">   
                @endif
              </p>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image">
                  <label class="custom-file-label" for="emxampleInputFile">Chọn Ảnh</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Tên Sản phẩm</label>
              <input type="text" name="name" class="form-control" value="{{ $product->name }}" placeholder="Nhập...">
            </div>
            <div class="form-group" >
              <label>Hãng Game</label>
              <select class="form-control" name='brand'>
                  @foreach ($brands as $brand)
                    <option value="{{$brand->id}}"
                      @if($product->brand_id == $brand->id) 
                        selected 
                      @endif
                      >{{$brand->name}}</option>
                  @endforeach
              </select>
            </div> 
            <div class="form-group">
                <label>Giá gốc</label>
                <input type="text" name="price_origin" class="form-control" value="{{ $product->price_origin }}" placeholder="Nhập...">
            </div>
            <div class="form-group">
                <label>Giá Sale</label>
                <input type="text" name="price_sale" class="form-control" value="{{ $product->price_sale }}" placeholder="Nhập...">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea type="text" name="description" class="form-control" id="comment" rows="5" value="{{ $product->description }}" placeholder="Nhập...">{{ $product->description }}</textarea>
            </div>
            <div class="form-group" >
              <label>Danh mục</label>
              <select multiple="" class="form-control" name='categories[]'>
                @foreach ($categories as $item)
                  @foreach ($product->categories as $product_category)
                    @php
                      $selected = "";
                      if ($product_category->id == $item->id){
                        $selected = "selected";
                        break;  
                      }
                    @endphp
                  @endforeach
                  <option value="{{$item->id}}" {{ $selected }}>{{$item->name}} </option>
                @endforeach
              </select>
          </div>  
          <div class="form-group">
                <label>Tags</label>
                <select multiple="" class="form-control" name='tags[]'>
                  @foreach ($tags as $item)
                    @foreach ($product->tags as $product_tag)
                      @php
                        $selected = "";
                        if ($product_tag->id == $item->id){
                          $selected = "selected";
                          break;
                        }
                      @endphp
                    @endforeach
                    <option value="{{$item->id}}" {{ $selected }}>{{$item->name}} </option>
                  @endforeach
                </select>
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
{{-- <div class="modal fade" id="ajax-product-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="productCrudModal"></h4>
        </div>
        <div class="modal-body">
            <form id="productForm" name="productForm" class="form-horizontal">
              <input type="hidden" name="product_id" id="product_id">
                <div class="form-group" >
                  <label for="exampleInputFile">Hình ảnh</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image">
                      <label class="custom-file-label" for="emxampleInputFile">Chọn Ảnh</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Tên Sản phẩm</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập...">
                </div>
                <div class="form-group">
                    <label>Giá gốc</label>
                    <input type="text" name="originprice" class="form-control" value="" placeholder="Nhập...">
                </div>
                <div class="form-group">
                    <label>Giá Sale</label>
                    <input type="text" name="saleprice" class="form-control" value="" placeholder="Nhập...">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="description" class="form-control" value="" placeholder="Nhập...">
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <input type="text" name="category_id" class="form-control" value="" placeholder="Nhập...">
                </div>
                <div class="modal-footer">
                  <button class="btn btn-success" type="submit" id="btn-save" value="create">Submit</button>
                  <a class="btn btn-danger" id="btn-cancel" href="">Cancel</a>
                </div>
            </form>
        </div>
        
    </div>
  </div>
</div> --}}