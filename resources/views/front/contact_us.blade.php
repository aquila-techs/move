@extends('layouts.front.template')

	@section('content')

			<!-- Including header -->
			@include('front.includes.header')

@push('custom-css')

<style>
    .content-wrap { padding-top: 0; }
    #content { padding-top: 10px; }


	input
	{
	  border: none !important;
	  height: 50px !important;
	  line-height: 50px !important;
	  margin-bottom: 20px !important;
	  border-bottom: 1px solid #ced4da !important;
	}
	textarea { border: none !important; border-bottom: 1px solid #ced4da !important;  }
	label { display: none;  }
.contact-right p{
 margin-top: 10px;
}
.contact-right .add-info ul,
.contact-right .add-ico ul{
 list-style: none;
}
.contact-right .add-info ul li{
 padding: 15px 0px;
 display: flex;
}
.contact-right .add-info ul li i{
 font-size: 25px;
}
.contact-right .add-ico ul li{
 display: inline-block;
 padding: 0px 15px;
}
.contact-right .add-ico ul li i{
 font-size: 35px;
 color: #444;
}
.contact-right .add-ico ul li i:hover{
 font-size: 35px;
 color: #55be73
}

</style>

@endpush
					<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

                    <div class="row col-mb-50">
                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-map-marker2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone3"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-skype2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-twitter2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach (['danger', 'warning', 'success', 'info'] as $key)
                        @if(Session::has($key))
                            <div class="row">
                                <div class="offset-3 col-6">
                                    <div class="alert alert-{{ $key }} alert-dismissible fade show" role="alert">
                                        {{ Session::get($key) }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    <h3 class="col-12 mt-5"> Contact Us </h3>

                    <form action="{{ url('contact_us')  }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" autocomplete="off" required class="form-control" name="name" id="name" aria-describedby="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" autocomplete="off" required class="form-control" name="email" id="email" placeholder="email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="subject">Subject</label>
                                <input type="text" autocomplete="off" required class="form-control" name="subject" id="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="message">Message</label>
                                <textarea type="text" autocomplete="off" required class="form-control" name="message" rows="4" id="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="button  button-circle">Submit</button>
                    </form>

                </div>

			</div>
			</div>
		</section><!-- #content end -->

      @include('front.includes.footer')

@endsection
