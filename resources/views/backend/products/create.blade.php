@extends('backend.layouts.master')
@section('title')
Tạo sản phẩm
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
        <a href="#">Tạo sản phẩm</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <form action="{{route('backend.products.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="card-body">
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
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập..." value="{{ old('name') }}">
              @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group" >
              <label>Hãng Game</label>
              <select class="form-control" name="brand">
                  @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
                <label>Giá gốc</label>
                <input type="text" name="price_origin" class="form-control @error('price_origin') is-invalid @enderror " value="{{ old('price_origin') }}" placeholder="Nhập...">
                @error('price_origin')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Giá Sale</label>
                <input type="text" name="price_sale" class="form-control  @error('price_sale') is-invalid @enderror" value="{{ old('price_sale') }}" placeholder="Nhập...">
                @error('price_sale')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="comment">Mô tả</label>
                <textarea rows="5" type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="comment" rows="5"  placeholder="Nhập..."></textarea>
                @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group" >
              <label>Danh mục</label>
              <select multiple="" class="form-control @error('categories') is-invalid @enderror" id="exampleFormControlSelect2" name="categories[]">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
              @error('categories')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group" >
                  <label for="exampleFormControlSelect2">Tags</label>
                  <select multiple="" class="form-control @error('tags') is-invalid @enderror" id="exampleFormControlSelect2" name="tags[]">
                    @foreach ($tags as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                  @error('tags')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
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