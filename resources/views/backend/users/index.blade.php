@extends('backend.layouts.master')
@section('content')
<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Danh sách thành viên</h4>
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
        <a href="#">Thành viên</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Danh sách thành viên</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Danh sách thành viên</div>
        </div>
        <div class="card-body">
          <table class="table table-head-bg-primary">
            <thead>
              <tr>
                <th scope="col">Người dùng</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Role</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user )
              <tr>
                <td>
                @if (!empty($user->image))
                  <div class="avatar-sm">
                    <img src="{{ $user->my_image }}" class="avatar-img rounded-circle"> 
                  </div>  
                @endif</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><span class="text-success">Chấp thuận</span></td>
                <td>{{$user->role}}</span></td>
                <td class="d-flex flex-wrap align-items-center">
                  <a href="{{route('backend.users.show',$user->id) }}" ><button class="btn btn-secondary"><i class="fas fa-eye"></i></button></a>
                  <a href="{{route('backend.users.edit',$user->id) }}"  ><button class="btn btn-primary" ><i class="fas fa-edit"></i></button></a>
                  <form method="POST" action="{{route('backend.users.destroy',$user->id) }}">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                  </form>                         
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
