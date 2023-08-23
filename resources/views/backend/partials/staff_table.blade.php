<table class="table table-head" id="table-container">
            <thead>
              <tr>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">SĐT</th>
                <th scope="col">Tình trạng</th>
                <th scope="col">Role</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($staffs as $staff )
                <tr>
                  <td>{{$staff->name}}</td>
                  <td>{{$staff->email}}</td>
                  <td>{{$staff->phone}}</td>
                  <td><span class="@if($staff->status) text-success @else text-danger @endif">{{$staff->status_text}}</span></td>
                  <td>{{$staff->role_text}}</span></td>
                  <td class="d-flex flex-wrap align-items-center">
                    <button class="btn btn-warning status" data-id="{{$staff->id}}" data-bs-toggle="tooltip" data-bs-placement="top" @if($staff->status) title="Khoá tài khoản"><i class="fas fa-lock"></i> @else title="Mở tài khoản"><i class="fas fa-unlock"></i>@endif</button>
                    <a href="{{route('backend.staffs.edit',$staff->id) }}" ><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Chỉnh sửa"><i class="fas fa-edit"></i></button></a>
                    <form method="POST" action="{{route('backend.staffs.destroy',$staff->id) }}" id="del-form-{{ $staff->id }}">
                      @csrf
                      @method('DELETE')
                      <button data-bs-toggle="tooltip" data-bs-placement="top" title="Xoá" class="btn btn-danger" onclick="showAlert(event, {{ $staff->id }})"><i class="fas fa-trash"></i></button>  
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
</table>