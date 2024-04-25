@include('frontPartial.header')
@section('title','Services')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

<style>
  .services .icon-box {
    margin-bottom: 27px;
    margin-left: 30px;
  }

  .services-btn {
    font-size: 14px;
    font-weight: 500;
    padding: 5px 30px;
    border-radius: 0;
    margin-top: 20px;
  }

  .badge {
    display: inline-block;
    min-width: 10px;
    padding: 6px 10px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    /* background-color: blue; */
    background-color: #3b933b;
    border-radius: 10px;
  }

  #cancelled {
    display: inline-block;
    min-width: 10px;
    padding: 6px 10px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    /* background-color: blue; */
    background-color: #8f3c3c;
    border-radius: 10px;

  }
</style>
<style>
  .modal-backdrop.show {
    opacity: var(--bs-backdrop-opacity);
    z-index: 22;
  }

  .fade {
    opacity: 1;
  }

  .modal.fade .modal-dialog {
    transform: translate(0, 25%);
  }

  .item {
    min-height: 400px;
    margin-left: 150px;
  }

  .modal-header {
    display: inline-block !important;
  }

  .modal-header p {
    text-align: right;
  }

  .modal-price {
    text-align: right;
  }
</style>
<style>
  /* Inspired by https://dribbble.com/shots/6544191-Radio-Buttons */
  *,
  *::before *::after {
    box-sizing: border-box;
  }

  .radios {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-wrap: wrap;
  }

  @media (max-width: 640px) {
    .radios {
      flex-direction: column;
    }
  }

  .radio input {
    position: absolute;
    pointer-events: none;
    visibility: hidden;
    display: none;
  }

  .radio {
    margin: 0 !important;
  }

  .radio label {
    color: rgb(68, 68, 68) !important;
    font-weight: 700 !important;
    font-size: 11px !important;
  }

  .radio input:focus+label {
    background: #eef;
  }

  .radio input:focus+label .checker {
    border-color: #66f;
  }

  .radio input:checked+label .checker {
    box-shadow: inset 0 0 0 6px #6d8500;
  }

  .radio label {
    display: flex;
    align-items: center;
    height: 28px;
    border-radius: 14px;
    padding: 0 8px 0 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .radio label:hover {
    background: #eef;
  }

  .radio label:hover .checker {
    box-shadow: inset 0 0 0 2px #66f;
  }

  .radio .checker {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    margin-right: 8px;
    box-shadow: inset 0 0 0 2px #ccc;
    transition: box-shadow 0.3s ease;
  }

  .clearCSS {
    display: none;
  }

  .form-group.row.enter-desired-hours {
    margin-top: 30px;
  }

  small.discount {
    margin-top: -18px;
    color: #b5523c;
  }

  a.term-condition {
    text-decoration: underline !important;
  }

  a.term-condition:hover {
    text-decoration: none !important;
  }

  span.text-dark.to_date_err.text-danger {
    color: #a94442 !important;
  }

  .modal-confirm {
    color: #636363;
    width: 400px;
  }

  .modal-confirm .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
    text-align: center;
    font-size: 14px;
  }

  .modal-confirm .modal-header {
    border-bottom: none;
    position: relative;
  }

  .modal-confirm h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -10px;
  }

  .modal-confirm .close {
    position: absolute;
    top: -5px;
    right: -2px;
  }

  .modal-confirm .modal-body {
    color: #999;
  }

  .modal-confirm .modal-footer {
    border: none;
    text-align: center;
    border-radius: 5px;
    font-size: 13px;
    padding: 10px 15px 25px;
  }

  .modal-confirm .modal-footer a {
    color: #999;
  }

  .modal-confirm .icon-box {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    border-radius: 50%;
    z-index: 9;
    text-align: center;
    border: 3px solid #f15e5e;
  }

  .modal-confirm .icon-box i {
    color: #f15e5e;
    font-size: 46px;
    display: inline-block;
    margin-top: 13px;
  }

  .modal-confirm .btn {
    color: #fff;
    border-radius: 4px;
    background: #60c7c1;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    min-width: 120px;
    border: none;
    min-height: 40px;
    border-radius: 3px;
    margin: 0 5px;
    outline: none !important;
  }

  .modal-confirm .btn-info {
    background: #c1c1c1;
  }

  .modal-confirm .btn-info:hover,
  .modal-confirm .btn-info:focus {
    background: #a8a8a8;
  }

  .modal-confirm .btn-danger {
    background: #f15e5e;
  }

  .modal-confirm .btn-danger:hover,
  .modal-confirm .btn-danger:focus {
    background: #ee3535;
  }

  .trigger-btn {
    display: inline-block;
    margin: 100px auto;
  }
  .CancelledModal{
    max-width: 400px !important;
    width:100% !important;
    margin: auto;
    padding: 10px;
  }
  .CancelledModal .modal-footer{
    justify-content: center !important;
    flex-wrap: nowrap !important;
  }
  .disabled-link {
  pointer-events: none;
  color: #8f3c3c;
}
</style>
<section id="hero" style="min-height:350px !important; margin:auto; height:auto !important">
  <div class="hero-container mt-5" style="margin:auto;">
    {{-- <h3 style="background:transparent " class="services-title">Services</h3> --}}
    <div class="what-we-offer mt-5">
      <h1>{{__('Your Requested Talents')}}</h1>
      <h3 style="background:transparent; font-size:18px;">{{__('Explore the 50k+ Strong pre-audit talent from all over the world.')}}</h3>
    </div>
  </div>
</section>

<section id="services" class="services">
  <section id="pricing" class="pricing">
    <div class="container">
      <div class="row">
        <div class="table-responsive" id="shop-page">
          <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">{{__('Job')}}</th>
                <th scope="col">{{__('Rate')}}</th>
                <th scope="col">{{__('Description')}}</th>
                <th scope="col">{{__('From')}}</th>
                <th scope="col">{{__('To')}}</th>
                <th>{{__('Status')}}</th>
                <th colspan="2">{{__('Action')}}</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($requests as $request)
              <tr>
                <th>{{$i++}}</th>
                <td>{{__($request->expertise->jobss->title)}} | {{__($request->expertise->name)}}</td>
                <td>{{__($request->rate_type) }} | {{$request->hours }}</td>
                @if($request->status =="Requested")
                <td><a href="javascript:void(0)" data-desc="{{$request->description}}" class="show-description"><b>show</b></a></td>
                @else
                <td><a href="javascript:void(0)"  class="disabled-link "><b>show</b></a></td>
                @endif
                <td>{{$request->from_date}}</td>
                <td>{{$request->to_date}}</td>
                @if($request->status =="Requested")
                <td> <span class="badge badge-success">{{__($request->status)}}</span></td>
                @else
                <td> <span class="badge badge-danger" id="cancelled">{{__($request->status)}}</span></td>
                @endif
                @if($request->status =="Requested")
                <td class="text-left"><a href="#" data-id="{{$request->id}}" class="edit-request"><i class="fa fa-pencil" style="font-size: 20px;margin-right:20px;" aria-hidden="true"></i></a> <a href="#" class="delete-request" data-id="{{$request->id}}"><i class="fa fa-times text-danger" style="font-size:20px;" aria-hidden="true"></i></a></td>
                @else
                <td class="text-center"><i class="fa fa-ban text-danger" style="font-size: 20px;" aria-hidden="true"></i></td>

                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section><!-- End Pricing Section -->
</section><!-- End Services Section -->
<!-- modal show for request descrition started here -->
<div class="modal fade" id="showDescriptionModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center" id="myModalLabel">{{__('Request Description')}}</h4>

      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="description-title">ASDJAJAJ</h5>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal show for request description ended here -->

<!--edit request modal started here -->
<div class="modal fade" id="editRequestModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header ">
        <!-- <h4 class="modal-title text-center" id="myModalLabel">{{__('Edit Your Request')}}</h4> -->
        <button type="button" class="close  close-btn-request-edit-modal" data-dismiss="modal" aria-hidden="true">&times;</button>


      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <form id="editrequestformsubmit">
              @csrf
              <div class="form-group row">
                <div class="col-md-12">
                  <div class="radios">
                    <div class="radio" id="radioBtnDiv">
                      <input type="radio" id="radio1" value="Hourly" class="radiovalue" name="radio1[]">
                      <label for="radio1">
                        <div class="checker"></div>
                        {{__('Hourly')}}
                      </label>
                    </div>

                    <div class="radio">
                      <input type="radio" id="radio2" value="Daily" class="radiovalue" name="radio1[]">
                      <label for="radio2">
                        <div class="checker"></div>
                        {{__('Daily')}}
                      </label>
                    </div>

                    <div class="radio">
                      <input type="radio" id="radio3" value="Weekly" class="radiovalue" name="radio1[]">
                      <label for="radio3">
                        <div class="checker"></div>
                        {{__('Weekly')}}
                      </label>
                    </div>

                    <div class="radio">
                      <input type="radio" id="radio4" value="Monthly" class="radiovalue" name="radio1[]">
                      <label for="radio4">
                        <div class="checker"></div>
                        {{__('Monthly')}}
                      </label>
                    </div>
                  </div>
                  <span class="rate_err text-danger"></span>
                </div>

              </div>

              <div class="form-group row  enter-desired-hours">
                <div class="col-md-6">
                  <label class="hourlyInputField" style="display: none;">{{__('How many hours?')}}</label>
                  <input type="number" min="4" value="4" class="form-control hourlyInputField clearCSS " id="edit_desired-hour" />
                </div>
                <div class="desired_err text-danger"></div>
              </div>
              <input type="hidden" id="EditrequestID" />

              <div class="form-group row">
                <div class="col-md-6">
                  <label>{{__('From Date')}}</label>
                  <!-- <input type="date" class="form-control" id="from_date" name="from_date" /> -->
                  <input type="text" id="from_date_edit" class="form-control datepicker" autocomplete="off">
                  <div class=" from_date_err text-danger"></div>
                  <label>{{__('To Date')}}</label>
                  <!-- <input type="date" class="form-control" id="to_date" name="to_date" /> -->
                  <input type="text" id="to_date_edit" class="form-control datepicker" autocomplete="off">
                  <span class="text-dark to_date_err text-danger"></span>
                </div>
                <div class="col-md-6">
                  <label>{{__('Description')}}</label>
                  <textarea class="form-control" name="requestdescription" id="requestdescription" id="form4Example3" rows="4"></textarea>
                  <div class="requestdescription_err text-danger"></div>
                </div>

              </div>

              <button type="submit" class="btn btn-success p-3 btn-sm-block mb-4 float-end" id="submitBtn">{{__('Update Request')}}</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--edit request ended here -->

<!-- delete conformation modal started here -->
<div id="requestCancelledModal" class="modal fade">
  <div class="modal-dialog modal-confirm CancelledModal">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>
        <h4 class="modal-title">Are you sure?</h4>
        <button type="button" class="close close-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="requestId" id="CancelledrequestId">
        <p>Do you really want to Cancel these resources? This process cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info cancel-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger delete-cancel-request">Delete</button>
      </div>
    </div>
  </div>
</div>
<!-- delete conformation modal ended here -->



@include('frontPartial.footer')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script>
  $('.show-description').click(function() {

    $('#showDescriptionModal').modal('show');
    var desc = ($(this).attr("data-desc"));
    $('.description-title').empty();
    $('.description-title').append(desc);
  })

  //code for cancel btn when click on cancel btn
</script>

<script>
  //code for canclled request
  $(".delete-request").click(function() {
    $('#requestCancelledModal').delay(350).fadeIn('slow').modal('show');
    var requestID = ($(this).attr('data-id'));
    $("#CancelledrequestId").val(requestID);
  })
  //code for click on cancel or close (cross) btn  started
  $(".cancel-btn").click(function() {
    $('#requestCancelledModal').delay(350).fadeOut('slow').modal('hide');
  })
  $(".close-btn").click(function() {
    $('#requestCancelledModal').delay(350).fadeOut('slow').modal('hide');
  })
  //code for click on cancel or close (cross) btn ended
  $(".delete-cancel-request").click(function() {
    var deleteCancelled = $("#CancelledrequestId").val();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{ url('cancelled')}}",
      type: 'GET',
      dataType: "json",
      data: {
        deleteCancelled: deleteCancelled,
      },
      success: function(response) {
        $("#requestCancelledModal").modal('hide');
        window.location.reload();

      },
    });
  })
</script>

<script>
  $('.edit-request').click(function(e) {
    e.preventDefault();
    var requestID = $(this).attr('data-id');
    $('#editRequestModal').modal('show');


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      url: "{{ route('edit.employee.request')}}",
      type: 'GET',
      dataType: "json",
      data: {
        requestID: requestID,
      },
      success: function(response) {
        //console.log(response.edit.description);

        //new code for chacking radio button
        if (response.edit.rate_type == 'Hourly') {
          $("#radio1").prop('checked', true);
          $('.hourlyInputField').show();
          $('#edit_desired-hour').val(response.edit.hours);
        } else if (response.edit.rate_type == 'Daily') {
          $("#radio2").prop('checked', true);
          $('.hourlyInputField').hide();
          $('#edit_desired-hour').val('');
        } else if (response.edit.rate_type == 'Weekly') {
          $("#radio3").prop('checked', true);
          $('.hourlyInputField').hide();
          $('#edit_desired-hour').val('');
        } else {
          $("#radio4").prop('checked', true);
          $('.hourlyInputField').hide();
          $('#edit_desired-hour').val('');
        }
        //
        //code for radio button if click on other button
        //code for radio button
        $(".radio").change(function(e) {
          e.preventDefault();
          var val = $("#radio1:checked").val();
          if (val) {
            $(".hourlyInputField").css('display', 'block');
            $('#edit_desired-hour').val(response.edit.hours);
          } else {
            $(".hourlyInputField").css('display', 'none');
            $("#edit_desired-hour").val('');
          }
        });
        //ended
        $("#EditrequestID").val(response.edit.id);
        $('#from_date_edit').val(response.edit.from_date);
        $('#to_date_edit').val(response.edit.to_date);
        $("#requestdescription").val(response.edit.description);

      },
    });
  });


  //code for edit modal when click on close btn
  $(".close-btn-request-edit-modal").click(function() {
    $('#editRequestModal').delay(350).fadeOut('slow').modal('hide');
  })
</script>
<script>
  $('#editrequestformsubmit').submit(function(e) {
    e.preventDefault();
    let EditrequestID = $("#EditrequestID").val();
    var to_date = $("#to_date_edit").val();
    var em_form_date = $("#from_date_edit").val();
    var rate_type = $("input[name='radio1[]']:checked").val();

    var hours = $("#edit_desired-hour").val();
    var requestdescription = $.trim($("#requestdescription").val());



    var chk = true;
    $('.aggree_err').html('');
    $(".requestdescription_err").html('');
    $('.to_date_err').html('');
    $('.from_date_err').html('');
    $('.rate_err').html('');
    $('.desired_err').html('');
    if (requestdescription == '') {
      $(".requestdescription_err").html("{{__('The From Date Field is Required')}}");
      chk = false;
    }
    if (to_date == '') {
      $('.to_date_err').html("{{__('The To Date Field is Required')}}");
      chk = false;
    }
    if (em_form_date == '') {
      $('.from_date_err').html("{{__('The From Date Field is Required')}}");
      chk = false;
    }
    if (!$("input[name='radio1[]']:checked").val()) {
      $('.rate_err').html("{{__('You must be selected one option')}}");
      chk = false;
    }
    if ($("input[name='radio1[]']:checked").val() == "Hourly") {
      if (hours < 4) {
        $('.desired_err').html("{{__('Value must be greater than 3.')}}");
        chk = false;
      }

    }

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    //code for ajax start here

    if (chk) {
      $.ajax({
        url: "{{ route('update.employee.request')}}",
        type: 'GET',
        dataType: "json",
        data: {
          EditrequestID: EditrequestID,
          to_date: to_date,
          em_form_date: em_form_date,
          hours: hours,
          rate_type: rate_type,
          requestdescription: requestdescription,
        },
        beforeSend: function(xhr) {
          $("#submitBtn").html("{{__('Updating...')}}");
        },
        success: function(response) {
          location.reload();
          //$("#shop-page").load(window.location + " #shop-page");
          $('#editRequestModal').modal('hide');
        },
        complete: function(response) {
          $("#submitBtn").html("{{__('Update Request')}}");
        }
      });
    }

  });
</script>