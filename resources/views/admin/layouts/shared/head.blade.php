@php if(env('ROOT_FOLDER')) $root = env('ROOT_FOLDER'); else $root='public/' @endphp
<link rel="shortcut icon" href="{{ URL::asset($root.'assets/images/favicon.ico') }}">

@yield('css')

<!-- App css -->
<link href="{{ URL::asset($root.'assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

@if(isset($isDark) && $isDark)
<link href="{{ URL::asset($root.'assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset($root.'assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />
@else
<link href="{{ URL::asset($root.'assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    @if(isset($isRTL) && $isRTL)
    <link href="{{ URL::asset($root.'assets/css/app-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    @else
    <link href="{{ URL::asset($root.'assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    @endif
@endif
