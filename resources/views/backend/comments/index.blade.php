@extends('backend.layouts.master')
@section('title')
Danh sách bình luận
@endsection
@section('content-header')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="page-header">
          <h2 class="pageheader-title">Danh sách các bình luận</h2>
      </div>
  </div>
</div>
@endsection
@section('content')
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Danh sách các bình luận</h4>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="card-title">Danh sách bình luận</div>
                </div>
                <div class="card-body">
                  <table class="table table-head">
                    <thead>
                      <tr>
                        <th>Duyệt</th>
                        <td>Người dùng</td>
                        <td>Nội dung</td>
                        <td>Game đã bình luận</td>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (!empty($comments))
                        @foreach($comments as $cmt)
                          <tr data-widget="expandable-table" aria-expanded="true">
                            <td>
                              @if($cmt->comment_status==1)
                                  <button  data-comment_status="0" data-id="{{ $cmt->id }}" id="{{$cmt->comment_product_id}}" class="btn btn-primary btn-sm comment_check"><i class="fas fa-eye"></i></button>
                              @else
                                  <button  data-comment_status="1" data-id="{{ $cmt->id }}" id="{{$cmt->comment_product_id}}" class="btn btn-danger btn-sm comment_check"><i class="fas fa-eye-slash"></i></button>
                              @endif
                            </td>
                            <td>{{$cmt->comment_name}} | <span class="font-italic text-success">{{ $cmt->comment_email }}</span></td>
                            <td>
                              <span class="card-text">{{$cmt->comment}}</span><br/>
                              <span >->Trả lời:
                                <ul style="margin-bottom:0px;">
                                  @foreach ($comment as $cmt_reply )
                                    @if($cmt_reply->comment_reply==$cmt->id)
                                      <li class="text-success" style="list-style:decimal;">{{ $cmt_reply->comment }}</li>
                                    @endif
                                  @endforeach
                                </ul>  
                              </span><br/>
                              <textarea rows="3" class="form-control reply_{{ $cmt->id }} mb-1"></textarea>
                              @if($cmt->comment_status==1)
                                  <p><button data-id="{{ $cmt->id }}" data-product_id="{{$cmt->comment_product_id}}" class="btn btn-xs btn-primary mt-1 btn_reply">Trả lời</button></p>
                              @endif
                            </td>
                            <td><a href="{{ route('frontend.main.info',$cmt->product->id) }}">{{$cmt->product->name}}</a></td>
                            <td>
                              <form method="POST" action="{{route('backend.comments.destroy',$cmt->id) }}">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Bạn có muốn xoá bình luận này?');"class="btn btn-danger delete_cmt"><i class="fas fa-trash"></i></button>  
                              </form>                         
                            </td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
                {{ $comments->links() }}
              </div>
            </div>
          </div>
        </div> 
@endsection
