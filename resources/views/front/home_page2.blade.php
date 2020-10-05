@extends('layouts.front.template')

@php $root = env('ROOT_FOLDER'); @endphp


@section('content')
    <link rel="stylesheet" href="{{ $root }}/front/owl/owl.carousel.min.css">
{{--    <link rel="stylesheet" href="{{ $root }}/public/front/owl/owl.theme.default.min.css">--}}
<style>
.card-text { line-height: 1.6em; margin-bottom: 8px; color: #666; font-size: 14px; }
.card a:hover { color: var(--themecolor); font-weight: 600; }
.card i { font-size: 11px; margin-left: 2px; }
.bg-light { background: #fafafa !important; }
section { min-height: 400px; }
.owl-carousel { padding-top: 5%; }
.arrow-div { margin-top: 5%; }
.arrow-icon { width: 40px; height: 40px; background: #fff; padding-left: 15%; margin-bottom: 10px;  }
.arrow-icon:hover { box-shadow: 10px 10px 40px 5px #ccc; cursor: pointer; }
h3 { margin-top: 12% !important; }
.nav-link, .nav-link:hover { color: #fff; }
.item-body { height: 80%; }
.item-footer { height: 20%; }
.checked { color: #ffa500; }
.item-body img  { height: 210px; }
.stars, .item-footer { margin-top: 5%; }
a { color: #888a85 ; }
a:hover { var(--themecolor) !important; }
.h2 {
        font-size: 40px !important;
        font-family: cursive !important;
        color: gray;
}
.modal-form-body
{
    position: relative;
    width: 100%;
    height: 100%;
}
.hide { display: none; }
.modal-body img{
    max-width: 200px;
    display: flex;
    justify-content: center;
    margin: auto;
}
#zipcodelist{
  position: absolute;
    top: 60px;
    width: 77.6%;
}
#zipcodelist ul,
#zipcodelist1 ul{
  list-style: none;
}
#zipcodelist ul li,
#zipcodelist ul li{
  padding: 5px;
  border: 1px solid #ddd;
    border-top: none;
    border-bottom: none;
  background-color: #fafafa;
  color: #555;
}
#zipcodelist ul li:hover,
#zipcodelist1 ul li:hover{
  background-color: #555;
  color: #fff;
 cursor: pointer;
}
</style>
			<!-- Including header -->
		@include('front.includes.header')


		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap" style="overflow: visible;">

                <div class="container" style="z-index: 2">

                    <div class="row topmargin justify-content-end">
                        <div class="col-lg-6">

                          <h1>Find professionals for pretty much anything.</h1>
                           <form class="page-2" action="{{ url('get-quote')  }}" method="get">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control company" autocomplete="off" id="destination"  placeholder="Choose your destination?" style="width: 40%;">
                                 <div id="zipcodelist">

                                    </div>
                                  <div class="input-group-append ">
                                  <button class="btn button btn-lg" id="modal_opened" data-toggle="modal" data-target="#myModal" type="button">search</button>
                                </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-lg-5 d-none d-lg-flex flex-wrap justify-content-center">
                                <img src="{{ asset('public/images/home_page.jpg') }}" style="margin-top: -20% !important;" alt="Image 1" class="d-flex align-self-end ml-5 mt-3">
                        </div>
                    </div>
                </div>








<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button style="position: absolute; top: 10px; right: 10px; z-index: 2;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">

            <img class="img img-responsive" src="{{ asset($root.'front/images/homepage_modal_pic.jpg') }}" alt="">
              <form  method="get" class="date-form needs-validation" novalidate action="{{ url('get-quote') }}"  >

                  <div class="form-group">
                  <input  class="form-control ab" id="destination1" autocomplete="off" name="from_location">
                   <div id="zipcodelist1">

                                    </div>
                  <Label> Were You Moving From?</Label>
                  <div class="invalid-feedback">
        Please Select.
      </div>

              </div>

              <div class="form-group">
                  <input autocomplete="off" class="form-control ab" type="text" name="date">
                  <Label> Select Pickup Date</Label>
                   <div class="invalid-feedback">
                    Please Select.
                  </div>
              </div>
              <div class="form-group">
                  <input  class="form-control ab"  autocomplete="off" name="to_location">
                  <Label> Were You Moving To?</Label>
                    <div class="invalid-feedback">
                        Please Select.
                    </div>
              </div>
              <button class="button button-circle" type="submit"> Submit </button>

            </form>
              <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
      </div>



    </div>
  </div>
</div>

                <!--Form Modal -->
                {{-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="modal-form-body" id="formModalInfo">
                                        <h3 class="text-center"> We need some information from you.</h3>
                                        <button type="button" class="float-left btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q1">Next</button>
                                    </div>

                                    <div class="modal-form-body hide" id="q1">
                                        <input type="text" class="form-control company" name="current_location" placeholder="From" style="width: 40%;">
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="formModalInfo">Back</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q2">Next</button>
                                    </div>
                                    <div class="modal-form-body hide" id="q2">
                                        <input type="text" class="form-control company" name="mover_name" placeholder="Name" style="width: 40%;">
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="q1">Back</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q3">Next</button>
                                    </div>
                                    <div class="modal-form-body hide" id="q3">
                                        <input type="text" class="form-control company" name="destination" required="" placeholder="Choose your destination?" style="width: 40%;">
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="q2">Back</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q4">Next</button>
                                    </div>
                                    <div class="modal-form-body hide" id="q4">
                                        <h3 class="text-center"> Phone </h3>
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="q3">Back</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q5">Next</button>
                                    </div>
                                    <div class="modal-form-body hide" id="q6">
                                        <h3 class="text-center"> Date </h3>
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="q5" data-dismiss="modal">Close</button>
                                        <button type="button" class="float-right btn btn-primary" >Submit</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>
        </section><!-- #content end -->

    {{--                Companies Tab       --}}
                <section class="bg-light">
                    <div class="container-fluid">
                        <div class="row py-5">
                            <div class="col-md-3 pl-5">
                                <h3> Top Rated Moving Companies </h3>
                                <p class="card-text"> We analyzed millions of bids from Thumbtack professionals to see what things really cost. Find out what other people have paid for projects like yours. </p>
                                <a href="#" class="button button-rounded btn-sm"> Get All Companies <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                            </div>
                            <div class="col-md-8">
                                <div class="owl-carousel owl-theme" id="companyCarousel">
                                    @foreach( $pms as $pm )
                                    <div class="item">
                                        <div class="item-body">
                                            @if( $pm->media )
                                                <img src="{{ asset('storage/company/media/'.$pm->media->logo)  }}" alt="">
                                            @else
                                                <img src="https://secureservercdn.net/50.62.172.232/6cb.dd2.myftpupload.com/wp-content/uploads/2019/11/Moving-Companies.jpg" alt="">
                                            @endif
                                        </div>
                                        <div class="item-footer">
                                            <h6> {{ $pm->name  }} </h6>
                                            <div class="stars mt-n4">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-1 arrow-div">
                                <div class="arrow-icon" id="nextCompanybtn">
                                    <i class="fa fa-long-arrow-up" aria-hidden="true"></i><br>
                                </div>
                                <div class="arrow-icon"  id="prevCompanybtn">
                                    <i class="fa fa-long-arrow-down mt-3" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

        {{--     Retalors Tab    --}}
    <section class="clearfix">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme" id="retalorCarosousel">
                        @foreach( $realtors as $realtor )
                        <div class="item">
                            <div class="item-body">
                                @if( $realtor->media )
                                    <img src="{{ asset('storage/company/media/'.$realtor->media->logo)  }}" alt="">
                                @else
                                    <img src="https://snow-wolf-studios.com/wp-content/uploads/Fotolia_72430358_Subscription_Monthly_M-1.jpg" alt="">
                                @endif
                            </div>
                            <div class="item-footer">
                                <h6> {{ $realtor->name }} </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-1 arrow-div">
                    <div class="arrow-icon" id="nextRetalorbtn">
                        <i class="fa fa-long-arrow-up" aria-hidden="true"></i><br>
                    </div>
                    <div class="arrow-icon"  id="prevRetalorbtn">
                        <i class="fa fa-long-arrow-down mt-3" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-3 pr-5">
                    <h3> Top Rated Realtors </h3>
                    <p class="card-text"> We analyzed millions of bids from Thumbtack professionals to see what things really cost. Find out what other people have paid for projects like yours. </p>
                    <a href="#" class="button button-rounded btn-sm "> Get All Realtors <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
    </section>


    {{--                Service Providers Tab       --}}
    <section class="bg-light">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-md-3 pl-5">
                    <h3> Top Rated Service Providers </h3>
                    <p class="card-text"> We analyzed millions of bids from Thumbtack professionals to see what things really cost. Find out what other people have paid for projects like yours. </p>
                    <a href="#" class="button button-rounded btn-sm"> Get All Service Providers <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme" id="spCarousel">
                        @foreach( $sps as $sp )
                        <div class="item">
                            <div class="item-body">
                                @if( $sp->media )
                                    <img src="{{ asset('storage/company/media/'.$sp->media->logo)  }}" alt="">
                                @else
                                    <img src="https://miro.medium.com/max/685/1*BfCdPHrqkGIIwv7j9O5LhQ.jpeg" alt="">
                                @endif
                            </div>
                            <div class="item-footer">
                                <h6> {{ $sp->name }} </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-1 arrow-div">
                    <div class="arrow-icon" id="nextspbtn">
                        <i class="fa fa-long-arrow-up" aria-hidden="true"></i><br>
                    </div>
                    <div class="arrow-icon"  id="prevspbtn">
                        <i class="fa fa-long-arrow-down mt-3" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--                Home Improvement Tab       --}}
    <section class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h2 class="text-center"> Home Improvement </h2>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c.png" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4> Home Remodeling </h4>
                                        <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                        <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c-1.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Kitchen Remodeling </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/Untitled-1.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Bathroom Remodeling </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Home Repair </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c-2.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Home Additions </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c-3.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Desk Extensions </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

<script src="https://use.fontawesome.com/3f7c8758bb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="{{ $root }}front/owl/owl.carousel.min.js"></script>
<script>






    $(document).ready(function(){

        const token = '{{ csrf_token()  }}';





     // Autocomplete Textbox

     $("#destination").keyup(function(){
        var m_name = $(this).val();
	console.log(name)
        if(m_name != ''){
         $.ajax({
          type: 'Post',
          url: '{{url('getLocation')}}',
          data: {
            _token: token,
	    m_name: m_name
          },
          cache: false,
          success: function(data){
            $("#zipcodelist").fadeIn("fast").html(data);
          }
        });
       }else{
        $("#zipcodelist").fadeOut();
        $("#table-data").html("");
      }
    });

    // Autocomplete List Click Code
    $(document).on('click','#zipcodelist li',function(){
      $('#destination').val($(this).text());
      $("#zipcodelist").fadeOut();
    });



       // Autocomplete Textbox

     $("#destination1").keyup(function(){
        var m_name = $(this).val();
	console.log(name)
        if(m_name != ''){
         $.ajax({
          type: 'Post',
          url: '{{url('getLocation')}}',
          data: {
            _token: token,
	    m_name: m_name
          },
          cache: false,
          success: function(data){
            $("#zipcodelist1").fadeIn("fast").html(data);
          }
        });
       }else{
        $("#zipcodelist1").fadeOut();
        $("#table-data1").html("");
      }
    });

    // Autocomplete List Click Code
    $(document).on('click','#zipcodelist1 li',function(){
      $('#destination1').val($(this).text());
      $("#zipcodelist1").fadeOut();
    });


        const company = $('#companyCarousel').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
        });
        $('#nextCompanybtn').click(function () {
            company.trigger('next.owl.carousel');
        });
        $('#prevCompanybtn').click(function () {
            company.trigger('prev.owl.carousel');
        });

        const relator = $('#retalorCarosousel').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
        });
        $('#nextRetalorbtn').click(function () {
            relator.trigger('next.owl.carousel');
        });
        $('#prevRetalorbtn').click(function () {
            relator.trigger('prev.owl.carousel');
        });

        const sp = $('#spCarousel').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
        });
        $('#nextspbtn').click(function () {
            sp.trigger('next.owl.carousel');
        });
        $('#prevspbtn').click(function () {
            sp.trigger('prev.owl.carousel');
        });

       $('#modal_opened').click(function(){
           $("input[name='from_location']").focus();
           const val = $('#destination').val();
           $("input[name='to_location']").val(val);
           $("input[name='to_location']").parent().addClass('ab-c');

       });




  $(".ab").focusin(function(){
   $(this).parent().addClass('ab-c');
  });
  $(".ab").focusout(function(){
      if($(this).val().length == 0)
     $(this).parent().removeClass('ab-c');
  });




    });
</script>
    <script src="//code.tidio.co/troyytbmxuk2s5nst1ilugz8htsimo39.js" async></script>
    @include('front.includes.footer')

@endsection
