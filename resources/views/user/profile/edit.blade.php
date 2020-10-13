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
 padding: 20px 20px 20px 20px;
 border-radius: 40px;
}
.card2 .card2-body{
 padding: 20px 0px;
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

.edit-btn2{
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
     border: transparent;
  }
.edit-btn2:hover{
     color: #fff;
    cursor: pointer;
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








.container2{
  height: 350px;
  width: 340px;
  position: relative;
  margin: auto;
}
.container2 .wrapper{
  position: relative;
  height: 300px;
  width: 100%;
  border-radius: 10px;
  background: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
 margin-bottom: 30px;
}
.wrapper.active{
  border: none;
 margin-bottom: 30px;
}
.wrapper .image{
  position: absolute;
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper img{
  height: 100%;
  width: 100%;
  }

.wrapper .icon{
  font-size: 100px;
  color: #9658fe;
}
.wrapper .text{
  font-size: 20px;
  font-weight: 500;
  color: #5B5B7B;
}
.wrapper #cancel-btn i{
  position: absolute;
  font-size: 20px;
  right: 15px;
  top: 15px;
  color: #9658fe;
  cursor: pointer;
  display: none;
}
.wrapper.active:hover #cancel-btn i{
  display: block;
}
.wrapper #cancel-btn i:hover{
  color: #e74c3c;
}
.wrapper .file-name{
  position: absolute;
  bottom: 0px;
  width: 100%;
  padding: 8px 0;
  font-size: 18px;
  color: #fff;
  display: none;
  background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%);
}
.wrapper.active:hover .file-name{
  display: block;
}
.card2-body .form-group{
margin-left: auto;
margin-right: auto;
max-width: 300px;
}

    </style>
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('user/dashboard') }}">User Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Edit Profile</h4>
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

<form action="{{ url('user/profile/'.$user->id)  }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="container2">
          <div class="wrapper">
            <div class="image">
              <img src="" alt="">
            </div>

            <div class="file-name">
             File name here</div>
            </div>
            <span  onclick="defaultBtnActive()" class="edit-btn2" id="custom-btn">Change Profile</span>
            <input id="default-btn"  name="pic" type="file" hidden>
    </div>


    <script>


        const wrapper = document.querySelector(".wrapper");
        const fileName = document.querySelector(".file-name");
        const defaultBtn = document.querySelector("#default-btn");
        const customBtn = document.querySelector("#custom-btn");
        const cancelBtn = document.querySelector("#cancel-btn i");
        const img = document.querySelector(".image img");
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
        function defaultBtnActive(){
            defaultBtn.click();
        }
        defaultBtn.addEventListener("change", function(){
            const file = this.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function(){
                    const result = reader.result;
                    img.src = result;
                    wrapper.classList.add("active");
                }
                // cancelBtn.addEventListener("click", function(){
                //     img.src = "";
                //     wrapper.classList.remove("active");
                // })
                reader.readAsDataURL(file);
            }
            if(this.value){
                let valueStore = this.value.match(regExp);
                fileName.textContent = valueStore;
            }
        });
    </script>

<!-- -->
  <div class="card2-top">
</div>
<div class="card2-body my-3">

 <div class="form-group">
 <input type="text" class="form-control" required name="name" value="{{ $user->name }}" placeholder="Name">
 </div>

<div class="form-group">
 <input type="text" class="form-control" name="phone_number" @if( isset( $user->user_profile ) ) value="{{ $user->user_profile->phone_number  }}" @endif placeholder="Phone Number">
 </div>
<div class="form-group mb-4">
 <textarea  class="form-control" name="address" placeholder="Address">@if( isset($user->user_profile) ){{ $user->user_profile->address  }}@endif</textarea>
 </div>

   <input type="submit" Class="edit-btn2" value="Update Profile">
 </form>
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

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }



            $("#imgInp").change(function() {
                readURL(this);
            });

        });
    </script>

@endsection

@section('script-bottom')
@endsection
