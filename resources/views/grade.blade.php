@extends('layouts.app')
@section('content')
<main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> ដំឡើងឋានន្ដរសក្កិទាហាន</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item active"><a href="#">ដំឡើងឋានន្ដរសក្កិទាហាន</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
            <div class="tile">
              <div class="tile-title-w-btn">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">នាមត្រកូល</label>
                            <input type="text" class="form-control" id="lnamekh" name="lnamekh">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">នាមខ្លួន</label>
                            <input type="text" class="form-control" id="fnamekh" name="fnamekh">
                        </div>
                    </div>


                  <div class="col-sm-4 " style="margin-top:4px;">

                      <button type="button" name="button" class="btn btn-primary form-control mt-4 search" >search</button>

                  </div>
                </div>

              </div>
              <div class="tile-body">

                  <div id="frm-gretting" style="display:none;">
                    <form id="frm-greet">

                    <div class="row">


                      <div class="col-md-6">
                        <input type="hidden" class="form-control" name="upid" value="">

                        <input type="hidden" class="form-control" name="upsoldierID" value="">


                              <div class="form-group">
                                  <label class="bmd-label-floating">ឋានន្តរសក្កិ</label>
                                  <input type="text" class="form-control" name="upgrade" value="">
                              </div>
                            </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="bmd-label-floating">ថ្ងៃ ខែ ឆ្នាំ</label>
                                  <input type="text" class="form-control " id="demoDate" name="updateGrade">
                                </div>
                              </div>
                      </div>
                          <div class="row"><div class="col-md-6">
                              <div class="form-group">
                                  <label class="bmd-label-floating">មុខតំណែង</label>
                                  <input type="text" class="form-control" name="upposition">
                              </div>
                            </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="bmd-label-floating">ថ្ងៃ ខែ ឆ្នាំ</label>
                                  <input type="text" class="form-control " id="demoDate1" name="updatePosition">
                          </div>
                        </div>
                        </div>
                      <div class="row">
                          <div class="col-md-9">
                              <div class="form-group">
                                  <label class="bmd-label-floating">កងឯកភាព</label>
                                  <input type="text" class="form-control" name="upunit">
                              </div>
                            </div>
                            </div>
                      <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                  <label class="bmd-label-floating">ជនជាតិ</label>
                                  <input type="text" class="form-control" name="upethnicity" >
                            </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="bmd-label-floating">សញ្ជាតិ</label>
                                  <input type="text" class="form-control" name="upnationality" >
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="bmd-label-floating">សាសនា</label>
                                  <input type="text" class="form-control" name="upreligion">
                              </div>
                            </div>
                      </div>
                      </form>
                      <button type="button" class="btn btn-primary" id="upgrade" name="button">តំឡើងសក្កិ</button>
                  </div>

              </div>
            </div>
          </div>
          <div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn" >
              <h4 class="title" >ជីវប្រវត្ដ</h4>

            </div>
            <hr style="border-bottom:1px solid #333;">

            <div class="tile-body">
              <div class="row" id="profile">

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn" >
              <h4 class="title" >ពត៌មានដំឡើងឋានន្ដរសក្កិ</h4>

            </div>
            <hr style="border-bottom:1px solid #333;">

            <div class="tile-body" id="list">

            </div>
          </div>
      </div>
      </div>
    </main>
@endsection
@section('contentScript')
  <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>

<script type="text/javascript">

  $(function(){
      $('#upgrade').on('click',function(){

        console.log($('input[name=dateGrade]').val());
        var data = $('#frm-greet').serialize();
        $.ajax({
          type: 'post',
          data: data,
          dataType: 'json',
          url:'{{url("upgrade/army")}}',
          beforeSend: function(e){
    				$.blockUI({css:{
              border: 'none',
               padding: '15px',
               backgroundColor: '#000',
               '-webkit-border-radius': '10px',
               '-moz-border-radius': '10px',
               opacity: .5,
               color: '#fff'},})
    			},
    			success: function(res){
    				setTimeout($.unblockUI,1000);
            if(res.success){
              console.log(res);
              var length = $('#listUp tr').length;
              var str = '<tr> <td>'+(length+1)+'</td>'+
                          '<td>'+res.greet.grade+'</td>'+
                          '<td>'+res.greet.dateGrade+'</td>'+
                          '<td>'+res.greet.position+'</td>'+
                          '<td>'+res.greet.datePosition+'</td>'+
                          '</tr>';
                $('#listUp').append(str);
            }else{

              console.log(res.army);
            }

            console.log(res);
    			},
    			error: function(xhr, status, error) {
    				var err = eval("(" + xhr.responseText + ")");
                console.log(err);
    			}
        }

      )
      });

      $('.search').on('click',function(){
          var lnamekh = $('#lnamekh').val();
          var fnamekh = $('#fnamekh').val();

          $.ajax({
               type: 'post',
			         data: {lnamekh:lnamekh,fnamekh:fnamekh},
			         dataType: 'json',
			         url:'{{url("search/army")}}',
			beforeSend: function(e){
				$.blockUI({css:{
          border: 'none',
           padding: '15px',
           backgroundColor: '#000',
           '-webkit-border-radius': '10px',
           '-moz-border-radius': '10px',
           opacity: .5,
           color: '#fff'},})
			},
			success: function(res){
				setTimeout($.unblockUI,function() {

									if(res.success){
                    console.log(res);
					}else{
						// $('.alert-danger > span').html(res['msg']);
						// $('.alert-danger').fadeIn();
            console.log(res.army);
					}
				},1000);
        getProfile(res.army);
        getFrmGreeting(res.army);
        getListTable(res.greet);

        console.log(res);
			},
			error: function(xhr, status, error) {
				var err = eval("(" + xhr.responseText + ")");
            console.log(err);
			}
          });
      });
   function getProfile(army){
    var str = '';
      str += '<div class"col-md-8">';
      str += '<div class="bs-component mx-4 ">';
      str += '<div class="row">';

      str += '<div class="col-sm-8"><p style="width:150px;">ឈ្មោះ '+army.khLname+'&nbsp; &nbsp;'+army.khFname+'</p></div>';
      str += '<div class="col-sm-4"><p style="width:50px;">ភេទ '+army.sex+'</p></div>';

      str += '</div>';
      str += '<div class="row">';
      str += '<div class="col-sm-8"><p style="width:140px;">ឆ្នាំកំនើត : '+army.DOB+'</p></div>';
      str += '<div class="col-sm-4"><p style="width:80px;">ជនជាតិ '+army.greeting.nationality+'</p></div>';

      str += '</div>';
      str += '<div class="row">';
      str += '<div class="col-sm-12"><p style="width:250px;">ទីលំនៅបច្ចុប្បន្ន៖ ភូមិ '+army.cVillage+' ឃុំ '+army.cCommune+' ស្រុក '+army.cDistricts+' ខេត្ត '+army.cProvinces+'</p></div>';
      str += '</div>';
      str += '<div class="row">';
      str += '<div class="col-sm-8"><p style="width:140px;">ជំនាញ : '+army.education.skill+'</p></div>';
      str += '<div class="col-sm-4"><p style="width:80px;">ភាសា : '+army.education.foreignLang+'</p></div>';

      str += '</div>';
      str += '<div class="row">';
      str += '<div class="col-sm-12"><p style="width:150px;">ថ្ងៃចូលកងទ័ព : '+army.join_army.joinDate+'</p></div>';


      str += '</div>';
      str += '</div></div>';
      str += '<div class="col-md-4"><img src="{{asset("img/faces")}}/'+army.image.image+'" width="150" height="180"></div>';

      str += '';

      $('#profile').html(str);
  }
  function getFrmGreeting(data){
    $('input[name=upid]').val(data.greeting.id);

    $('input[name=upsoldierID]').val(data.greeting.soldierID);
      $('input[name=upgrade]').val(data.greeting.grade);
      $('input[name=updateGrade]').val(data.greeting.dateGrade);
      $('input[name=upposition]').val(data.greeting.position);
      $('input[name=updatePosition]').val(data.greeting.datePosition);
      $('input[name=upunit]').val(data.greeting.unit);
      $('input[name=upethnicity]').val(data.greeting.ethnicity);
      $('input[name=upnationality]').val(data.greeting.nationality);
      $('input[name=upreligion]').val(data.greeting.religion);



      $('#frm-gretting').attr('style','display:absolute');
  }
  function getListTable(data){
  var str =  ' <table class="table table-hover table-bordered text-center" id="sampleTable1">'+
              '<thead><tr>'+
              '<th>No</th>'+
              '<th>ឋានន្តរសក្កិ</th>'+
              '<th>ថ្ងៃ ខែ ឆ្នាំ</th>'+
              '<th>មុខតំណែង</th>'+
              '<th>ថ្ងៃ ខែ ឆ្នាំ</th>'+
              '</tr></thead>'+
            '<tbody id="listUp">';
            $.each(data,function(index,value){

      str  +=    '<tr>'+
                    '<td>'+(index+1)+'</td>'+
                    '<td>'+value.grade+'</td>'+
                    '<td>'+value.dateGrade+'</td>'+
                    '<td>'+value.position+'</td>'+
                    '<td>'+value.datePosition+'</td>'+
                '</tr>';
              })
      str += '</tbody>'+
            '</table>';
        $('#list').html(str);
        $('#sampleTable1').DataTable();
  }
    });
    $('#demoDate').datepicker({
      format: "yyyy-mm-dd",

      autoclose: true,
      todayHighlight: true
    });
    $('#demoDate1').datepicker({
      format: "yyyy-mm-dd",

      autoclose: true,
      todayHighlight: true
    });
</script>
<script type="text/javascript">$('#sampleTable1').DataTable();</script>

@endsection
