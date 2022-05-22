<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>    
    <link rel="stylesheet" href="/frontend/css/all.min.css">
    <link rel="stylesheet" href="/frontend/css/reponsive.css">
    <link rel="stylesheet" href="/frontend/css/sweetalert.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <link rel="stylesheet" href="/frontend/css/css1.css">
    <link rel="stylesheet" href="/frontend/css/shop.min.css">
    <link rel="stylesheet" href="/frontend/css/cart.css">
    <link rel="stylesheet" href="/frontend/css/checkout.css">
    <link rel="stylesheet" href="/frontend/css/info.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha512-dTu0vJs5ndrd3kPwnYixvOCsvef5SGYW/zSSK4bcjRBcZHzqThq7pt7PmCv55yb8iBvni0TSeIDV8RYKjZL36A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha512-dTu0vJs5ndrd3kPwnYixvOCsvef5SGYW/zSSK4bcjRBcZHzqThq7pt7PmCv55yb8iBvni0TSeIDV8RYKjZL36A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <title>ShopABC-Mua bán game linh tinh</title>
    <style>
      .tag-label{
          top: 2px;
          left: 2px;
          text-align: center;
          display: block;
          position: absolute;
      }
      .overflow{
        display: -webkit-box;
        width: 90%;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
      }
    </style>
</head>
<body>
  <!--------------------------------------
  HEADER
  --------------------------------------->
  @include('frontend.includes.header')
  <!-- End Header -->
      
  <!--------------------------------------
  MAIN CONTENT
  --------------------------------------->
  @yield('content')
  <!--------------------------------------
  FOOTER
  --------------------------------------->
  @include('frontend.includes.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="/frontend/js/jquery.bxslider.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/frontend/js/code.js"></script>
    <script src="/frontend/js/codeshop.js"></script>
    <script src="/frontend/js/article.js"></script>
    <script src="/frontend/js/carts.js"></script>
    <script src="/frontend/js/sweetalert.js"></script>
    <script src="/frontend/js/shop-detail.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function() {
            $('.acoask').on('click', function() {
                if($(this).hasClass('active')) {
                  $(this).siblings('.acoanswer').slideUp();
                  $(this).removeClass('active');
                }
                else {
                  $('.acoanswer').slideUp();
                  $('.acoask').removeClass('active');
                  $(this).siblings('.acoanswer').slideToggle();
                  $(this).toggleClass('active');
                }
            });     
        });
    </script>
    <script style="text/javascript">
      function remove_background(product_id){
        for(var count=1;count<=5;count++){
          $('#'+product_id+'-'+count).css('color','#ccc');
        }
      }
      $(document).on('mouseenter','.rating',function(){
        var index = $(this).data("index");
        var product_id = $(this).data("product_id");
        remove_background(product_id);
        for(var count = 1;count<=index;count++){
          $('#'+product_id+'-'+count).css('color','#ffcc00');
        }
      });
      $(document).on('mouseleave','.rating',function(){
        var index = $(this).data("index");
        var product_id = $(this).data("product_id");
        var rating = $(this).data("rating");
        remove_background(product_id);
        for(var count = 1;count<=rating;count++){
          $('#'+product_id+'-'+count).css('color','#ffcc00');
        }
      });
      $(document).on('click','.rating',function(){
        var index = $(this).data("index");
        var product_id = $(this).data("product_id");
        var _token = $('input[name="_token"]').val();
        $.ajax({
          url:'{{ url('/insert_rating') }}',
          method:'POST',
          data:{
            index:index,
            product_id:product_id,
            _token:_token,
          },
          success:function(data){
            if(data=='done'){
              swal("Gửi đánh giá thành công!");
            }
            else{
              swal("Lỗi đánh giá!")
            }
          }
        });
      });
    </script>
      <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
      <script>//<![CDATA[
        if (address_2 = localStorage.getItem('address_2_saved')) {
          $('select[name="calc_shipping_district"] option').each(function() {
            if ($(this).text() == address_2) {
              $(this).attr('selected', '')
            }
          })
          $('input.billing_address_2').attr('value', address_2)
        }
        if (district = localStorage.getItem('district')) {
          $('select[name="calc_shipping_district"]').html(district)
          $('select[name="calc_shipping_district"]').on('change', function() {
            var target = $(this).children('option:selected')
            target.attr('selected', '')
            $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
            address_2 = target.text()
            $('input.billing_address_2').attr('value', address_2)
            district = $('select[name="calc_shipping_district"]').html()
            localStorage.setItem('district', district)
            localStorage.setItem('address_2_saved', address_2)
          })
        }
        $('select[name="calc_shipping_provinces"]').each(function() {
          var $this = $(this),
            stc = ''
          c.forEach(function(i, e) {
            e += +1
            stc += '<option value=' + e + '>' + i + '</option>'
            $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
            if (address_1 = localStorage.getItem('address_1_saved')) {
              $('select[name="calc_shipping_provinces"] option').each(function() {
                if ($(this).text() == address_1) {
                  $(this).attr('selected', '')
                }
              })
              $('input.billing_address_1').attr('value', address_1)
            }
            $this.on('change', function(i) {
              i = $this.children('option:selected').index() - 1
              var str = '',
                r = $this.val()
              if (r != '') {
                arr[i].forEach(function(el) {
                  str += '<option value="' + el + '">' + el + '</option>'
                  $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
                })
                var address_1 = $this.children('option:selected').text()
                var district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('address_1_saved', address_1)
                localStorage.setItem('district', district)
                $('select[name="calc_shipping_district"]').on('change', function() {
                  var target = $(this).children('option:selected')
                  target.attr('selected', '')
                  $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                  var address_2 = target.text()
                  $('input.billing_address_2').attr('value', address_2)
                  district = $('select[name="calc_shipping_district"]').html()
                  localStorage.setItem('district', district)
                  localStorage.setItem('address_2_saved', address_2)
                })
              } else {
                $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
                district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('district', district)
                localStorage.removeItem('address_1_saved', address_1)
              }
            })
          })
        })
        //]]>
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#sort').on('change',function(){
            var url = $(this).val();
            if(url){
              window.location = url;
            }
            return false;
          })
        })
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
              var id = $(this).data('id_product');
              var cart_product_id = $('.cart_product_id_' + id).val();
              var cart_product_name = $('.cart_product_name_' + id).val();
              var cart_product_image = $('.cart_product_image_' + id).val();
              var cart_product_price = $('.cart_product_price_' + id).val();
              var cart_product_qty = $('.cart_product_qty_' + id).val();
              var _token = $('input[name="_token"]').val();
              $.ajax({
                    url: '{{url('/cart/addajax')}}',
                    method: 'POST',
                    data:
                    {
                      cart_product_id:cart_product_id,
                      cart_product_name:cart_product_name,
                      cart_product_image:cart_product_image,
                      cart_product_price:cart_product_price,
                      cart_product_qty:cart_product_qty,
                      _token:_token
                    },
                    success:function(){
                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                              function() {
                                  window.location.href = "{{url('/cart/my-cart')}}";
                              });
                      }
                  })
          });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart-info').click(function(){
              var id = $(this).data('id_product');
              var cart_product_id = $('.cart_product_id_' + id).val();
              var cart_product_name = $('.cart_product_name_' + id).val();
              var cart_product_image = $('.cart_product_image_' + id).val();
              var cart_product_price = $('.cart_product_price_' + id).val();
              var cart_product_qty = $('.cart_product_qty_' + id).val();
              var _token = $('input[name="_token"]').val();
              $.ajax({
                    url: '{{url('/cart/addajax')}}',
                    method: 'POST',
                    data:
                    {
                      cart_product_id:cart_product_id,
                      cart_product_name:cart_product_name,
                      cart_product_image:cart_product_image,
                      cart_product_price:cart_product_price,
                      cart_product_qty:cart_product_qty,
                      _token:_token
                    },
                    success:function(){
                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                              function() {
                                  window.location.href = "{{url('/cart/my-cart')}}";
                              });
                      }
                  })
          });
        });
      </script>
      <script type="text/javascript">
          $(document).ready(function(){
            $('.choose').change('change',function(){
              var action = $(this).attr('id');
              var ma_id = $(this).val();
              var _token = $('input[name="_token"]').val();
              var result = '';
              if(action == 'province'){
                result ='district';
              }
              else{
                result='ward';
              }
              $.ajax({
                url:'{{ url('/select') }}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                  $('#'+result).html(data);
                }
              });
            });
          })
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          load_comment();
          function load_comment(){
            var product_id = $('.comment_product_id').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:'{{ url('/load_comment') }}',
              method:'POST',
              data:{
                product_id:product_id,
                _token:_token
              },
              success:function(data){
                $('#comment_show').html(data);
              }
            });
          }
          $('.send_comment').click(function(){
            var product_id = $('.comment_product_id').val();
            var comment_name = $('.comment_name').val();
            var comment_email = $('.comment_email').val();
            var comment = $('.comment').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:'{{ url('/send_comment') }}',
              method:'POST',
              data:{
                product_id:product_id,
                _token:_token,
                comment_name:comment_name,
                comment_email:comment_email,
                comment:comment,
              },
              success:function(){ 
                swal("Đánh giá","Gửi đánh giá thành công","success");
                        window.setTimeout(function(){
                          location.reload();
                        },2000); 
                load_comment();
              }
            });
            
          });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
            $('.send_order').click(function(){
              swal({
                  title: 'Bạn có muốn xác nhận đơn hàng?',
                  text: 'Đơn hàng sẽ không được hoàn trả khi đặt, bạn có muốn đặt không?',
                  showCancelButton: true,
                  confirmButtonClass:'btn-success',
                  cancelButtonClass:'btn-danger',
                  confirmButtonText: 'Xác nhận',
                  cancelButtonText: 'Quay lại',
                  closeOnConfirm:false,
                  closeOnCancel: false  
                  },
                  function(isConfirm){
                  if (isConfirm) {
                    var fName = $('.fName').val();
                    var lName = $('.lName').val();
                    var phone = $('.phone').val();
                    var email = $('.email').val();
                    var province = $('.province').val();
                    var district = $('.district').val(); 
                    var ward = $('.ward').val();
                    var message = $('.message').val();
                    var coupon = $('.coupon').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                      url: '{{url('/checkout/saveOrder')}}',
                      method: 'POST',
                      data:
                      {
                        fName:fName,
                        lName:lName,
                        phone:phone,
                        email:email,
                        province:province,
                        district:district,
                        ward:ward,
                        message:message,
                        coupon:coupon,
                        _token:_token,
                      },
                      success:function(){
                        swal("Đơn hàng","Đơn hàng của bạn đã được gửi thành công","success");
                        window.setTimeout(function(){
                          location.reload();
                        },2000); 
                      }
                    });
                     
                  } 
                  else {
                    swal("Đóng","Đơn hàng chưa được gửi, vui lòng hoàn tất đơn hàng","error");
                  }
                });
              });
        });
      </script>
      <script>
        $(document).ready(function(){
          $('.send_order').click(function(){
              swal({
                  title: 'Bạn có muốn xoá bình luận?',
                  text: 'Sau khi xoá xong sẽ không thể khôi phục, xác nh',
                  showCancelButton: true,
                  confirmButtonClass:'btn-success',
                  cancelButtonClass:'btn-danger',
                  confirmButtonText: 'Xác nhận',
                  cancelButtonText: 'Quay lại',
                  closeOnConfirm:false,
                  closeOnCancel: false  
                  },
                  function(isConfirm){
                  if (isConfirm) {
                    var fName = $('.fName').val();
                    var lName = $('.lName').val();
                    var phone = $('.phone').val();
                    var email = $('.email').val();
                    var province = $('.province').val();
                    var district = $('.district').val(); 
                    var ward = $('.ward').val();
                    var message = $('.message').val();
                    var coupon = $('.coupon').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                      url: '{{url('/checkout/saveOrder')}}',
                      method: 'POST',
                      data:
                      {
                        fName:fName,
                        lName:lName,
                        phone:phone,
                        email:email,
                        province:province,
                        district:district,
                        ward:ward,
                        message:message,
                        coupon:coupon,
                        _token:_token,
                      },
                      success:function(){
                        swal("Đơn hàng","Đơn hàng của bạn đã được gửi thành công","success");
                        window.setTimeout(function(){
                          location.reload();
                        },2000); 
                      }
                    });
                     
                  } 
                  else {
                    swal("Đóng","Đơn hàng chưa được gửi, vui lòng hoàn tất đơn hàng","error");
                  }
                });
              });
        })
      </script>
      <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
      {!! Toastr::message() !!}
</body>
</html>