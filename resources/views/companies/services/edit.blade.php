@extends('companies.layouts.vertical')



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

        h6 { font-weight: 800; }

    </style>

@endsection



@section('breadcrumb')

    <div class="row page-title">

        <div class="col-md-12">

            <nav aria-label="breadcrumb" class="float-right mt-1">

                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="{{ url('company/dashboard') }}">Company Dashboard</a></li>

                    <li class="breadcrumb-item active" aria-current="page"> Services </li>

                </ol>

            </nav>

            <h4 class="mb-1 mt-0">Edit Service</h4>

        </div>

    </div>

@endsection



@section('content')



    <div id="loader">

        <div class="spinner-grow text-primary m-2" role="status">

            <span class="sr-only">Loading...</span>

        </div>

    </div>

          
                          

    <form action="{{ url('company/services/'.$service->id)  }}" method="POST">

        @csrf
        @method('PUT')
        <div class="bg-white p-5 ">
            <div class="row">
                <h6 class="col-12"> <b>Price/Km within 100km for:</b></h6>

                <div class="col-3">

                    <div class="form-group">

                        <label for=""> Studio </label>

                        <input type="text" name="price_per_km_for_studio_less_then_100km" value="{{ old('name',$service->rates->price_per_km_for_studio_less_then_100km)  }}" class="form-control @if($errors->has('price_per_km_for_studio_less_then_100km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 1 Bed </label>

                        <input type="text" name="price_per_km_for_1bed_less_then_100km" value="{{ old('name',$service->rates->price_per_km_for_1bed_less_then_100km)  }}" class="form-control @if($errors->has('price_per_km_for_1bed_less_then_100km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 2 Beds </label>

                        <input type="text" name="price_per_km_for_2bed_less_then_100km" value="{{ old('name',$service->rates->price_per_km_for_2bed_less_then_100km)  }}" class="form-control @if($errors->has('price_per_km_for_2bed_less_then_100km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 3 Beds </label>

                        <input type="text" name="price_per_km_for_3bed_less_then_100km" value="{{ old('name',$service->rates->price_per_km_for_3bed_less_then_100km)  }}" class="form-control @if($errors->has('price_per_km_for_3bed_less_then_100km')) is-invalid @endif" >

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 4 Beds </label>

                        <input type="text"  name="price_per_km_for_4bed_less_then_100km" value="{{ old('name',$service->rates->price_per_km_for_4bed_less_then_100km)  }}" class="form-control @if($errors->has('price_per_km_for_4bed_less_then_100km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 5 Beds </label>

                        <input type="text"  name="price_per_km_for_5bed_less_then_100km" value="{{ old('name',$service->rates->price_per_km_for_5bed_less_then_100km)  }}" class="form-control @if($errors->has('price_per_km_for_5bed_less_then_100km')) is-invalid @endif">

                    </div>

                </div>



            </div>



            <div class="row">



                <h6 class="col-12"> <b>Price/Km within 250km for:</b></h6>

                <div class="col-3">

                    <div class="form-group">

                        <label for=""> Studio </label>

                       
                         <input type="text"  name="price_per_km_for_studio_less_then_250km" value="{{ old('name',$service->rates->price_per_km_for_studio_less_then_250km)  }}" class="form-control @if($errors->has('price_per_km_for_studio_less_then_250km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 1 Bed </label>

                 
                         <input type="text"  name="price_per_km_for_1bed_less_then_250km" value="{{ old('name',$service->rates->price_per_km_for_1bed_less_then_250km)  }}" class="form-control @if($errors->has('price_per_km_for_1bed_less_then_250km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 2 Beds </label>

                     
                         <input type="text"  name="price_per_km_for_2bed_less_then_250km" value="{{ old('name',$service->rates->price_per_km_for_2bed_less_then_250km)  }}" class="form-control @if($errors->has('price_per_km_for_2bed_less_then_250km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 3 Beds </label>

                        
                         <input type="text"  name="price_per_km_for_3bed_less_then_250km" value="{{ old('name',$service->rates->price_per_km_for_3bed_less_then_250km)  }}" class="form-control @if($errors->has('price_per_km_for_3bed_less_then_250km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 4 Beds </label>

                   
                         <input type="text"  name="price_per_km_for_4bed_less_then_250km" value="{{ old('name',$service->rates->price_per_km_for_4bed_less_then_250km)  }}" class="form-control @if($errors->has('price_per_km_for_4bed_less_then_250km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 5 Beds </label>

                      
                         <input type="text"  name="price_per_km_for_5bed_less_then_250km" value="{{ old('name',$service->rates->price_per_km_for_5bed_less_then_250km)  }}" class="form-control @if($errors->has('price_per_km_for_5bed_less_then_250km')) is-invalid @endif">

                    </div>

                </div>



            </div>



            <div class="row">



                <h6 class="col-12"> <b>Price/Km within 1000km for: </b></h6>

                <div class="col-3">

                    <div class="form-group">

                        <label for=""> Studio </label>

                       
                         <input type="text"  name="price_per_km_for_studio_less_then_1000km" value="{{ old('name',$service->rates->price_per_km_for_studio_less_then_1000km)  }}" class="form-control @if($errors->has('price_per_km_for_studio_less_then_1000km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 1 Bed </label>

                      
                         <input type="text"  name="price_per_km_for_1bed_less_then_1000km" value="{{ old('name',$service->rates->price_per_km_for_1bed_less_then_1000km)  }}" class="form-control @if($errors->has('price_per_km_for_1bed_less_then_1000km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 2 Beds </label>

                         <input type="text"  name="price_per_km_for_2bed_less_then_1000km" value="{{ old('name',$service->rates->price_per_km_for_2bed_less_then_1000km)  }}" class="form-control @if($errors->has('price_per_km_for_2bed_less_then_1000km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 3 Beds </label>

                  
                         <input type="text"  name="price_per_km_for_3bed_less_then_1000km" value="{{ old('name',$service->rates->price_per_km_for_3bed_less_then_1000km)  }}" class="form-control @if($errors->has('price_per_km_for_3bed_less_then_1000km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 4 Beds </label>

                         <input type="text"  name="price_per_km_for_4bed_less_then_1000km" value="{{ old('name',$service->rates->price_per_km_for_4bed_less_then_1000km)  }}" class="form-control @if($errors->has('price_per_km_for_4bed_less_then_1000km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 5 Beds </label>

                       
                         <input type="text"  name="price_per_km_for_5bed_less_then_1000km" value="{{ old('name',$service->rates->price_per_km_for_5bed_less_then_1000km)  }}" class="form-control @if($errors->has('price_per_km_for_5bed_less_then_1000km')) is-invalid @endif">

                    </div>

                </div>



            </div>



            <div class="row">



                <h6 class="col-12"> <b> Price/Km within 2500km for: </b></h6>

                <div class="col-3">

                    <div class="form-group">

                        <label for=""> Studio </label>

                      
                         <input type="text"  name="price_per_km_for_studio_less_then_2500km" value="{{ old('name',$service->rates->price_per_km_for_studio_less_then_2500km)  }}" class="form-control @if($errors->has('price_per_km_for_studio_less_then_2500km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 1 Bed </label>

                        
                         <input type="text"  name="price_per_km_for_1bed_less_then_2500km" value="{{ old('name',$service->rates->price_per_km_for_1bed_less_then_2500km)  }}" class="form-control @if($errors->has('price_per_km_for_1bed_less_then_2500km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 2 Beds </label>

                       
                         <input type="text"  name="price_per_km_for_2bed_less_then_2500km" value="{{ old('name',$service->rates->price_per_km_for_2bed_less_then_2500km)  }}" class="form-control @if($errors->has('price_per_km_for_2bed_less_then_2500km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 3 Beds </label>

                      
                         <input type="text"  name="price_per_km_for_3bed_less_then_2500km" value="{{ old('name',$service->rates->price_per_km_for_3bed_less_then_2500km)  }}" class="form-control @if($errors->has('price_per_km_for_3bed_less_then_2500km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 4 Beds </label>

                       
                         <input type="text"  name="price_per_km_for_4bed_less_then_2500km" value="{{ old('name',$service->rates->price_per_km_for_4bed_less_then_2500km)  }}" class="form-control @if($errors->has('price_per_km_for_4bed_less_then_2500km')) is-invalid @endif">

                    </div>

                </div>



                <div class="col-3">

                    <div class="form-group">

                        <label for=""> 5 Beds </label>

                        
                         <input type="text"  name="price_per_km_for_5bed_less_then_2500km" value="{{ old('name',$service->rates->price_per_km_for_5bed_less_then_2500km)  }}" class="form-control @if($errors->has('price_per_km_for_5bed_less_then_2500km')) is-invalid @endif">

                    </div>

                </div>

            </div>



            <button type="submit" class="btn btn-outline-primary"> Submit </button>





        </div>

    </form>





@section('script')

    <script>

        $(document).ready(function () {

            $('#loader').fadeOut('slow');

        });

    </script>

@endsection





@endsection

