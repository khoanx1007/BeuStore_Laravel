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
    <h4 class="page-title">Cấu hình game</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <a href="{{route('backend.requirements.create') }}" class="btn btn-info ml-3" id="create-new-product">Thêm cấu hình</a>
        </div>
        <div class="card-body">
          <table class="table table-head">
            <thead>
              <tr>
                {{-- <th scope="col">ID</th>
                <th scope="col">STT</th> --}}
                <th scope="col">Tên Game</th>
                <th scope="col">Cấu hình tối thiểu</th>
                <th scope="col">Cấu hình đề nghị</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product )
                  <tr>
                    <td>{{ $product->name }}</td>
                    @foreach ($requirements as $requirement )
                      @if ($product->id == $requirement->product_id)
                        <td>{{ $requirement->min_sys }}</td>
                        <td>{{ $requirement->sug_sys }}</td>
                      @else
                        <td></td>
                        <td></td>
                      @endif
                      <td>
                        <a href="{{route('backend.requirements.edit', $requirement->id) }}" ><button class="btn btn-primary"><i class="fas fa-pen"></i></button></a>                    
                      </td>
                    @endforeach
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