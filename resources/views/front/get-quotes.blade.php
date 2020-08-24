@extends('layouts.front.template')

@php $root = env('ROOT_FOLDER'); @endphp
<style>
.dark .menu-link { color: #666 !important; }
.dark .menu-link:hover { color: var(--themecolor) !important; }
.sub-menu-container .menu-link:hover { color: white; }
.bg-light { background: #fafafa !important; }
section { min-height: 400px; }
a { color: #888a85 ; }

</style>
@section('content')

    <!-- Including header -->
    @include('front.includes.header')


    <!-- Content
		============================================= -->
    <section id="content">
        <div class="content-wrap" style="overflow: visible;">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2> Choose your Movers </h2>
                        <p> We found the following moving companies who can assist you with your move on 9/5/2020.
{{--                            <a href="" class="btn btn-sm btn-info float-right"> Get Quotes </a> </p>--}}
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Company 1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c-1.png"" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Company 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/Untitled-1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Company 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Company 4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/Untitled-1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Company 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Company 4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/Untitled-1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Company 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Company 4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row mt-5">
                    <div class="offset-5 col-md-6">
                        <a href="#" class="ml-5 btn btn-md btn-outline-info">Load More</a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <script src="https://use.fontawesome.com/3f7c8758bb.js"></script>


    @include('front.includes.footer')

@endsection

