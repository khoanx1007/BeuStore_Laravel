@extends('backend.layouts.master')
@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Tạo hãng Game</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Tạo hãng Game</div>
        </div>
        <form action="{{route('backend.brands.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputFile">Hình ảnh</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image">
                  <label class="custom-file-label" for="emxampleInputFile">Chọn Ảnh</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Tên hãng Game</label>
              <input type="text" name="name" class="form-control" placeholder="Nhập...">
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
