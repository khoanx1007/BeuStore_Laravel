@extends('backend.layouts.master')
@section('title')
Danh sách hãng Game
@endsection
@section('content-header')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="page-header">
          <h2 class="pageheader-title">Danh sách hãng Game</h2>
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
            <h4 class="page-title">Danh sách hãng Game</h4>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <form>
                    <div class="input-group input-group-md" style="width: 400px;">
                      <input type="text" name="name" class="form-control float-right" placeholder="Nhập..">
                        <button type="submit" class="btn btn-default">
                          Filter
                        </button>
                    </div>
                  </form>
                  <a href="{{route('backend.brands.create') }}" class="btn btn-info ml-3" id="create-new-product">Thêm hãng Game</a>
                </div>
                <div class="card-body">
                  <table class="table table-head">
                    <thead>
                      <tr>
                        <th>Nhãn</td>
                        <th>Tên</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (!empty($brands))
                        @foreach($brands as $brand)
                          <tr data-widget="expandable-table" aria-expanded="true">
                            <td>
                              @if (!empty($brand->image))
                                <img src="{{ $brand->my_image }}" style="width:25%;">   
                              @endif
                            </td>
                            <td>{{$brand->name}}</td>
                            <td>
                              <a href="{{route('backend.brands.edit',$brand->id) }}">
                                <button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                              <form method="POST" action="{{route('backend.brands.destroy',$brand->id) }}">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                              </form>                         
                            </td>
                          </tr>
                        @endforeach
                      @endif
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
