
        <!-- Header
        ============================================= -->
        <header id="new-header" data-menu-padding="24" data-sticky-shrink="false">

            <div id="header-wrap">
                <div class="container">
                     <nav class="navbar navbar-expand-lg  navbar-dark">
                      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/public/images/logo.png') }}"  width="150px" height="50px" alt=""></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav m-auto">
                          @if( \Auth::user() && \Auth::user()->roles->first()->name == 'admin' )
                                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/dashboard') }}"><div>Dashboard</div></a></li>
                                @elseif( \Auth::user() && \Auth::user()->roles->first()->name == 'company' )
                                    <li class="nav-item"><a class="nav-link" href="{{ url('company/dashboard') }}"><div>Dashboard</div></a></li>
                                @elseif( \Auth::user() && \Auth::user()->roles->first()->name == 'User' )
                                    <li class="nav-item"><a class="nav-link" href="{{ url('user/dashboard') }}"><div>Dashboard</div></a></li>
                                @endif
                                <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}"><div>Home</div></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('about_us') }}"><div>Our Company</div></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('pricing')  }}"><div>Pricing</div></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('faqs') }}"><div>FAQs</div></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('blogs') }}"><div>Blogs</div></a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('contact_us') }}"><div>Contact Us</div></a></li>
    </ul>
      <ul class="navbar-nav">

      @guest
                                    <li class="nav-item"><a href="{{  url('login') }}" class="nav-link"> Login </a></li>
                                    <li class="nav-item"><a href="{{ url('register')  }}" class="nav-link"> Register </a></li>
                                    @else
                                       <!-- <li class="nav-item"><a class="nav-link" href="#"><div>{{ Auth::user()->name  }}</div></a>
                                            <ul class="sub-menu-container navbar-nav mb-0">
                                                <li class="nav-item"><a class="nav-link my-0 mb-n3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><div>Logout</div></a></li>
                                            <</ul>
                                        </li> -->
                                           <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        {{ Auth::user()->name  }}
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href=""{{ route('logout') }}"">Logout</a>
      </div>
    </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    @endif







    </ul>
  </div>
</nav>
                </div>
            </div>
        </header><!-- #header end -->

