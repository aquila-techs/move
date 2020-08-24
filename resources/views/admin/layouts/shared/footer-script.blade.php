@php if(env('ROOT_FOLDER')) $root = env('ROOT_FOLDER'); else $root='public/' @endphp
<script src="{{ URL::asset($root.'assets/js/vendor.min.js') }}"></script>
@yield('script')
<script src="{{ URL::asset($root.'assets/js/app.min.js') }}"></script>
@yield('script-bottom')
