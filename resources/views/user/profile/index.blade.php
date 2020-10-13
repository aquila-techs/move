@extends('user.layouts.vertical')


@section('css')
    <style>
        #loader {
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 100;
            background: #fff;
            padding-top: 20%;
            padding-left: 45%;
        }
        .nav-link { max-width: 150px; }
   .card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  max-width: 40%;
  margin: auto;
 text-align: center;
 padding: 10px 20px 20px 20px;
 border-radius: 40px;
}
.card2 .card2-body{
 padding: 20px 0px;
}
 .card2 img{
    max-width: 200px;
    height: auto;
    display: inline-block;
}

.card2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card2-body ul{
    margin: 0px;
    padding: 0px;
    list-style: none;
   margin-bottom: 25px;
}
.card2-body ul li{
    padding-bottom: 5px;
    font-size: 15px;
}

.card2-body .edit-btn{
     width: 300px;
     font-size: 16px;
     padding: 10px 20px;
     text-align: center;
     line-height: 16px;
     color: rgba(255,255,255,0.9);
     border-radius: 50px;
     background: linear-gradient(-45deg, #FFA63D, #FF3D77, #338AFF, #3CF0C5);
     background-size: 600%;
     animation: anime 8s linear infinite;
  }

 @keyframes anime {
   0%{
     background-position: 0% 50%;
   }
    50%{
     background-position: 100% 50%;
   }100%{
     background-position: 0% 50%;
}}
    </style>
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('user/dashboard') }}">User Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Profile</h4>
    </div>
</div>
@endsection

@section('content')
    <div id="loader">
        <div class="spinner-grow text-primary m-2" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

<div class="row">

    <div class="col-lg-12">
        <div class="card" >
            <div class="card-body">

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
                <div class="card2">
  <div class="card2-top"><img src="@if( isset( $user->user_profile ) &&  isset( $user->user_profile->image ) ){{ $user->user_profile->image  }}@else{{ asset('public\images\avatar.png') }}@endif" >
</div>
<div class="card2-body">

    <h4><b> {{ $user->name }} </b></h4>
    <ul>
    <li>  {{ $user->email }} </li>
    <li>  @if( isset( $user->user_profile ) ) {{ $user->user_profile->phone_number  }} @endif </li>
    <li> @if( isset( $user->user_profile ) ) {{ $user->user_profile->address  }} @endif </li>
    </ul>

  @php $id = 1; @endphp
   <a Class="edit-btn" href="{{url('user/profile/'.$user->id.'/edit')}}">Edit Profile</a>
  </div>
</div>
                <!-- end card -->
            </div>
            </div>
        </div>

</div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#loader').fadeOut('slow');
        });
    </script>
@endsection

@section('script-bottom')
@endsection
