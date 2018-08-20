@extends('layouts.app')
@section('content')
<main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> បញ្ជីរាយនាមទាហាន</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>

          <li class="breadcrumb-item active"><a href="#">បញ្ជីរាយនាមទាហាន</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered text-center" id="sampleTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ឈ្មោះ</th>
                    <th>ភេទ</th>
                    <th>ថ្ងៃកំណើត</th>
                    <th>មុខងារ</th>
                    <th>ឋានន្តរសក្កិ</th>
                    <th>សញ្ជាតិ</th>
                    <th>រូបថត</th>
                    <td>Action</td>

                  </tr>
                </thead>
                <tbody id="list">
                  @if($soldiers)
                  @foreach($soldiers as $key => $soldier)
                  <tr>
                    <td>{!!($key+1)!!}</td>
                    <td>{!!$soldier->khLname!!} {!!$soldier->khFname !!}</td>
                    <td>{!!$soldier->sex!!}</td>
                    <td>{!!$soldier->DOB!!}</td>
                    <td>{!!$soldier->greeting->position!!}</td>
                    <td>{!!$soldier->greeting->grade!!}</td>
                    <td>{!!$soldier->greeting->nationality!!}</td>
                    <td>
                      <img src="{{asset('/img/faces')}}/{{$soldier->image->image}}" width="40" height="40" alt="">
                    </td>
                    <td>
                      <a href="#"><i class="fa fa-edit mx-1"></i></a>
                      <a href="#"><i class="fa fa-print mx-1"></i></a>
                      <a href="javascript:;" class="remove" data-id="{{$soldier->id}}"><i class="fa fa-trash mx-1"></i></a>
                    </td>







                  </tr>
                  @endforeach
                  @endIf
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
@section('contentScript')
<script type="text/javascript" src="{{asset('js/plugins/sweetalert.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>

  <script type="text/javascript">var table = $('#sampleTable').DataTable();</script>

</script>
<script type="text/javascript">
  $(function(){

    $('.remove').on('click',function(){
      var id = $(this).data('id');
      var index = $(this).parents('tr');
      console.log("{{url('armies')}}/"+id);
      swal({
          title: "ដំណឹង",
          text: "អ្នកប្រាកដជាចង់លុបទន្និន័យនេះ ឬទេ?",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "លុប",
          cancelButtonText: "មិនលុប",
          closeOnConfirm: false,
          closeOnCancel: false
        }, function(isConfirm) {
          if (isConfirm) {

                // window.location.herf =
                $.ajax({
                  type: 'DELETE',

                  url:"{{url('armies')}}/"+id,
                  beforeSend: function(e){
            				$.blockUI({css:{
                      border: 'none',
                       padding: '15px',
                       backgroundColor: '#000',
                       '-webkit-border-radius': '10px',
                       '-moz-border-radius': '10px',
                       opacity: .5,
                       color: '#fff'
                      },
            				})
            			},
            			success: function(res){
            				setTimeout($.unblockUI,1000);
                    if(res.success){
                      console.log(res);
                      table.row( index ).remove().draw();
                      swal.close();
                    }else{

                      console.log(res);
                    }
            			},
            			error: function(xhr, status, error) {
            				var err = eval("(" + xhr.responseText + ")");
                        console.log(err);
            			}
                });
          } else {

            swal.close();
          }
        });

    });
    $('#img').on('click',function(){
      $('#uploadimageModal').modal('show');
    });

      $('#save').on('click',function(){
          var data = $('#army,#greeting,#education,#health,#join,#myProfile').serialize();

          $.ajax({
               type: 'post',
			         data: data,
			         dataType: 'json',
			         url: $('#army').attr('action'),
			beforeSend: function(e){
				$.blockUI({css:{
          border: 'none',
           padding: '15px',
           backgroundColor: '#000',
           '-webkit-border-radius': '10px',
           '-moz-border-radius': '10px',
           opacity: .5,
           color: '#fff'
          },
				})
			},
			success: function(res){
				setTimeout($.unblockUI,function() {

									if(res.success){
                    console.log(res.success);
					}else{
						// $('.alert-danger > span').html(res['msg']);
						// $('.alert-danger').fadeIn();
            console.log(res);
					}
				},1000);
			},
			error: function(xhr, status, error) {
				var err = eval("(" + xhr.responseText + ")");
            console.log(err);
			}
          });
      });
      $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width:180,
          height:180,
          type:'square' //circle
        },
        boundary:{
          width:220,
          height:220
        }
      });
      $('.myImg').on('click',function(){
        $('#upload_image').click();
      });
      $('#upload_image').on('change', function(){
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
          });

          $('.crop_image').click(function(event){
            $image_crop.croppie('result', {

              size: 'viewport'
            }).then(function(response){

              $.ajax({
                 url:$('#photo').attr('action'),
                 type: "POST",
                 data:{"image": response},
                 success:function(res)
                 {
                   $('#uploadimageModal').modal('hide');
                   $('.img').attr('src',response);

                   $('#thisImage').val(res.image);
                   console.log(res);
                 },
           			error: function(xhr, status, error) {
           				var err = eval("(" + xhr.responseText + ")");
                       console.log(err);
           			}
               });

            });
          });
          $('.deleteArmy').on('clcik',function(){
            alert('hi');
            // swal({
            //     title: "ដំណឹង",
            //     text: "អ្នកប្រាកដជាចង់លុបទន្និន័យនេះ ឬទេ?",
            //     type: "warning",
            //     showCancelButton: true,
            //     confirmButtonText: "លុប",
            //     cancelButtonText: "មិនលុប",
            //     closeOnConfirm: false,
            //     closeOnCancel: false
            //   }, function(isConfirm) {
            //     if (isConfirm) {
            //       var id = $(this).data('id');
            //
            //         $.ajax({
            //              type: 'DELETE',
          	// 		         dataType: 'json',
          	// 		         url: '"{{url("delete/army")}}"/'+id,
          	// 		beforeSend: function(e){
          	// 			$.blockUI({css:{
            //         border: 'none',
            //          padding: '15px',
            //          backgroundColor: '#000',
            //          '-webkit-border-radius': '10px',
            //          '-moz-border-radius': '10px',
            //          opacity: .5,
            //          color: '#fff'
            //         },
          	// 			})
          	// 		},
          	// 		success: function(res){
          	// 			setTimeout($.unblockUI,1000);
            //         if(res.success){
            //             console.log(res.success);
          	// 				}else{
          	// 					// $('.alert-danger > span').html(res['msg']);
          	// 					// $('.alert-danger').fadeIn();
            //           console.log(res);
          	// 				}
            //
          	// 		},
          	// 		error: function(xhr, status, error) {
          	// 			var err = eval("(" + xhr.responseText + ")");
            //           console.log(err);
          	// 		}
            //   });
            //
            //     } else {
            //
            //       swal.close();
            //     }
            //   });
          });
    });
</script>
@endsection
