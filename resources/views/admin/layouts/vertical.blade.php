<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Move in and out - Admin Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


        @include('companies.layouts.shared.head')


</head>
@php if(env('ROOT_FOLDER')) $root = env('ROOT_FOLDER'); else $root='public/' @endphp

@if(isset($isScrollable) && $isScrollable)
    <body class="scrollable-layout">
@elseif(isset($isBoxed) && $isBoxed)
    <body class="left-side-menu-condensed boxed-layout" data-left-keep-condensed="true">
@elseif(isset($isDarkSidebar) && $isDarkSidebar)
    <body class="left-side-menu-dark">
@elseif(isset($isCondensedSidebar) && $isCondensedSidebar)
    <body class="left-side-menu-condensed" data-left-keep-condensed="true">
@else
    <body>
@endif

@if(isset($withLoader) && $withLoader)
<!-- Pre-loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
        </div>
    </div>
</div>
<!-- End Preloader-->
@endif

    <div id="wrapper">

        @include('admin.layouts.shared.header')
        @include('admin.layouts.shared.sidebar')

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('breadcrumb')
                    @yield('content')
                </div>
            </div>

            @include('admin.layouts.shared.footer')
        </div>
    </div>

    @include('admin.layouts.shared.footer-script')

    @if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
    //]]></script>
    @endif
</body>

</html>
