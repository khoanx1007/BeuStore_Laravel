function showAlert(event,id){
  event.preventDefault();
  Swal.fire({
    title: 'Xác nhận xoá?',
    text: 'Bạn sẽ không thể khôi phục tiến trình này!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Có',
    cancelButtonText: 'Không',
  }).then((result) => {
    if (result.isConfirmed) {
      $('#del-form-'+id).submit();
    }
  });
}
$(document).on('click', '.status', function (){
  Swal.fire({
      title: 'Bạn có chắn chắn không?',
      text: "Xác nhận thực hiện",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Có',
      cancelButtonText: 'Không',
  }).then((willDelete) => {
      if (willDelete.isConfirmed) {
          var id = $(this).data("id");
          $.ajax(
              {
                  url: "/admin/staffs/lock/"+id,
                  type: 'POST',
                  dataType: "JSON",
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  data: {

                  },
                  success: function (data)
                  {
                      if(data.status==200){
                          if(data.staff_status){
                              Swal.fire({
                                  position: 'center-center',
                                  icon: 'success',
                                  title: 'Đã mở khoá tài khoản',
                                  showConfirmButton: false,
                                  timer: 1500
                              });
                          }else{
                              Swal.fire({
                                  position: 'center-center',
                                  icon: 'success',
                                  title: 'Đã khoá tài khoản',
                                  showConfirmButton: false,
                                  timer: 1500
                              });
                          }
                          $('#table-container').load('/admin/staffs/reloadTable');
                      }
                  }
              });
      }
  });
});