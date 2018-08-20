@extends('layouts.app')
@section('content')
<main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>ទំរង់បំពេញប្រវត្តិសង្ខេប</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">ទំរង់បំពេញប្រវត្តិសង្ខេប</a></li>
        </ul>
      </div>
      <div class="row">
      <div class="col-md-8" id="post-frm">

          <div class=" tile " >

            <div class="tile-title "  id="headingMain">
              <h4 class="title "  >
                <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapseMain" aria-expanded="false" aria-controls="collapseMain">
                  នាយទាហាន នាយទាហានរង ពលទាហាន
                </button>
              </h4>

            </div>
            <div id="collapseMain" class="collapse show" aria-labelledby="headingMain" data-parent="#accordion">
                  <div class="tile-body">
                      <form id="army" action="{{url('armies')}}">
                          <div class="row">
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">នាមត្រកូល</label>
                                      <input type="text" class="form-control" name="lnamekh">
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">នាមខ្លួន</label>
                                      <input type="text" class="form-control" name="fnamekh">
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="lname" >
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">First Name</label>
                                      <input type="text" class="form-control" name="fname" >
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ឈ្មោះពីកំណើត</label>
                                      <input type="text" class="form-control" name="birthname"  >
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ឈ្មោះផ្សេងៗ</label>
                                      <input type="text" class="form-control" name="othername" >
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group " >
                                      <label class="bmd-label-floating">ឆ្នាំកំណើត</label>
                                      <div class="input-group" >
                                        <input type="text" class="form-control demoDate"  name="dob" >
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ភេទ</label>
                                      <select class="form-control text-center" id="exampleFormControlSelect1" name="sex">
                                       <option value="ប្រុស">ប្រុស</option>
                                       <option value="ស្រី">ស្រី</option>
                                     </select>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <p>ស្រុកកំនើត</p>
                          </div>

                          <div class="row">
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ភូមិ</label>
                                      <input type="text" class="form-control" name="bVillage" >
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ឃុំ</label>
                                      <input type="text" class="form-control" name="bCommune" >
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ស្រុក</label>
                                      <input type="text" class="form-control" name="bDistricts" >
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ខេត្ត</label>
                                      <input type="text" class="form-control" name="bProvinces" >
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <p>ទីលំនៅបច្ចុប្បន្ន</p>
                          </div>
                          <div class="row">
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ភូមិ</label>
                                      <input type="text" class="form-control" name="cVillage">
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ឃុំ</label>
                                      <input type="text" class="form-control" name="cCommune">
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ស្រុក</label>
                                      <input type="text" class="form-control" name="cDistricts">
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">ខេត្ត</label>
                                      <input type="text" class="form-control" name="cProvinces" >
                                  </div>
                              </div>
                          </div>


                      </form>
                  </div>
                </div>

              </div>

              <div class="tile">
                <div class="tile-title-w-btn" id="headingOne">
                  <h5 class="mb-0 title">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      មុខតំណែង និងឋានន្ដរសក្កិ
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="tile-body">
                    <form id="greeting">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">ឋានន្តរសក្កិ</label>
                                <input type="text" class="form-control" name="grade">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">ថ្ងៃ ខែ ឆ្នាំ</label>
                                <input type="text" class="form-control demoDate" name="dateGrade">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">មុខតំណែង</label>
                                <input type="text" class="form-control" name="position">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">ថ្ងៃ ខែ ឆ្នាំ</label>
                                <input type="text" class="form-control demoDate" name="datePosition">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label class="bmd-label-floating">កងឯកភាព</label>
                                <input type="text" class="form-control" name="unit">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">ជនជាតិ</label>
                                <input type="text" class="form-control" name="ethnicity" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">សញ្ជាតិ</label>
                                <input type="text" class="form-control" name="nationality" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">សាសនា</label>
                                <input type="text" class="form-control" name="religion">
                            </div>
                        </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <div class="tile">
                <div class="tile-title-w-btn" id="headingTwo">
                  <h5 class="mb-0 title">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      កំរិតវប្បធម៌ និងការអប់រំ
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="tile-body">
                    <form id="education">


                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">កំរិតវប្បធម៌</label>
                              <input type="text" class="form-control" name="education">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">ភាសាបរទេស</label>
                              <input type="text" class="form-control" name="foreignLang">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">មុខជំនាញ-ឯកទេស</label>
                              <input type="text" class="form-control" name="skill">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">ឆ្លងវគ្គសិក្សា (រយៈពេល)</label>
                              <input type="text" class="form-control" name="passCourse">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">ក្នុងប្រទេស</label>
                              <input type="text" class="form-control" name="inCountry">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">ក្រៅប្រទេស</label>
                              <input type="text" class="form-control" name="outCountry">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating">ឆ្លងប្រយុទ្ធ-បំរើប្រយុទ្ធ (ថ្នាក់ខ្ពស់បំផុត)</label>
                              <input type="text" class="form-control" name="passFight">
                          </div>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <div class="tile">
                <div class="tile-title-w-btn" id="headingThree">
                  <h5 class="mb-0 title">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      សុភាព និងពិន័យ
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="tile-body">
                    <form id="health">

                    <div class="row">
                      <div class="col-md-8">
                          <div class="form-group">
                              <label class="bmd-label-floating">សុភាព-របួស-ពិការ</label>
                              <input type="text" class="form-control" name="health">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label class="bmd-label-floating">ថ្ងៃទី ខែ ឆ្នាំ</label>
                              <input type="text" class="form-control demoDate" name="healthDate">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">សរសើរ</label>
                              <input type="text" class="form-control" name="appreciate">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="bmd-label-floating">ពិន័យ-ទណ្ឌកម្ម-តុលា</label>
                              <input type="text" class="form-control" name="fines">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating">ភិនភាគស្លាកស្នាម-កំពស់</label>
                              <input type="text" class="form-control" name="identity" >
                          </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tile">
                <div class="tile-title-w-btn" id="headingFour">
                  <h5 class="mb-0 title">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      ថ្ងៃចូលបំរើទ័ព និងស្ថានភាពគ្រួសារ
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="tile-body">
                    <form id="join">


                    <div class="row">
                      <div class="col-md-8">
                          <div class="form-group">
                              <label class="bmd-label-floating">ថ្ងៃចូលកងទ័ព</label>
                              <input type="text" class="form-control demoDate" name="joinDate" >
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating">ស្ថានភាពគ្រួសារ ឪពុកម្ដាយបង្កើត និងផ្ទាល់ខ្លួន</label>
                              <textarea name="description" class="form-control" rows="8" cols="80" ></textarea>
                          </div>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="tile">
                    <button class="btn btn-success" id="save" type="button">Save</button>
                    <button class="btn btn-danger" type="button">Reset</button>


                  </div>
                </div>
              </div>

      </div>
      <div class="col-md-4">
          <div class="tile card-profile">
              <div class="mx-5">
                  <a href="#pablo" class="img1">
                    <form id="myProfile">
                      <img class="img"  src="/img/b1.png" width="180" height="180" alt="">
                      <input type="hidden" name="ImageID" id="thisImage" value="">

                    </form>


                  </a>

              </div>
              <br>
              <div class="tile-body text-center">
                <button type="button" class="btn btn-outline-info img1 col-md-4"  name="button"> <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i></button>

                  <h4 class="card-title"></h4>

              </div>
          </div>

        </div>
      </div>

    </main>

<div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload & Crop Image</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">



          <div class="row">
             <div class="col-md-6">
               <form id="photo" action="{{url('upload')}}" >

              <div id="image_demo" ></div>
            </form>

             </div>
             <div class="col-md-5" >
               <div class="row">
                  <div class="col-sm-4 mx-4">
                    <button class="btn btn-success myImg ">Choose Image</button>
                    <input type="file" name="upload_image" id="upload_image" style="display:none;" accept="image/*" />
                  </div>
                </div>
                <br>
               <div class="row">
                 <div class="col-sm-4 mx-4">
                   <button class="btn btn-success crop_image ">Crop & Upload</button>
                 </div>
              </div>


           </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
    </div>
</div>
@endsection
@section('contentScript')
<script type="text/javascript" src="{{asset('js/plugins/sweetalert.min.js')}}"></script>

<script type="text/javascript">
$('.demoDate').datepicker({
  format: "yyyy-mm-dd",

  autoclose: true,
  todayHighlight: true
});


</script>
<script type="text/javascript">
  $(function(){
    $('.img1').on('click',function(){
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
        if(res.success){
          console.log(res.success);
          setTimeout($.unblockUI,1000);
          swal({
          		title: "ដំណឹង",
          		text: "បន្ដទៅបញ្ជី ឬ បង្កើតថ្មី?",
          		type: "success",
          		showCancelButton: true,
          		confirmButtonText: "បញ្ជី",
          		cancelButtonText: "បង្កើតថ្មី",
          		closeOnConfirm: false,
          		closeOnCancel: false
          	}, function(isConfirm) {
          		if (isConfirm) {
          			window.location.href = "{{url('armies')}}";
          		} else {
          			$('#army,#greeting,#education,#health,#join,#myProfile').trigger("reset");
                swal.close();
          		}
          	});
        }else{
          // $('.alert-danger > span').html(res['msg']);
          // $('.alert-danger').fadeIn();
          console.log(res);
        }

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
    });
</script>
@endsection
