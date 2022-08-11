<header class="header_area" id="header">
    <div class="container-fluid h-100">
          <div class="row h-100">
                <div class="col-12 h-100">
                      <nav class="h-100 navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('home') }}">

                                  <h2 style="font-weight: 700;color: #ffffff;">
                                        FreeLanWeb
                                  </h2>
                                  <!-- <img src="assets/img/logo.jpg" alt="" class="logo"> -->

                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                  data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false"
                                  aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="dorneNav">


                                  <!-- <div class="dorne-search-btn">
                                        <a id="search-btn" href="#"><i class="fa fa-search"
                                                    aria-hidden="true"></i> Search</a>
                                  </div> -->
                                  <ul class="navbar-nav" id="dorneMenu">
                                    @if (Route::has('login'))

                                        @auth
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('info') }}">FreeLanWeb Info</a>
                                            </li>

                                            @if (Auth::user()->role==0)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('job') }}">Job</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="{{ route('seller.index') }}">Seller</a>
                                            </li>
                                            @endif
                                            @if (Auth::user()->role==1)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('service') }}">Service</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" href="{{ route('buyer.index') }}">Buyer</a>
                                            </li>
                                            @endif

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle font-capital" href="" id="navbarDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>

                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                    <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                    this.closest('form').submit();">Logout</a>
                                                    </form>
                                                </div>
                                            </li>


                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('info') }}">FreeLanWeb Info</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('job') }}">Job</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('service') }}">Service</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                @if (Route::has('register'))
                                                <a class="nav-link join-btn" href="{{ route('register') }}">Join</a>

                                                {{-- <div class="dorne-add-listings-btn">
                                                    <a href="{{ route('register') }}" class=" join-btn">join</a>
                                              </div> --}}
                                                @endif

                                        @endauth
                                        </li>
                                    @endif
                                  </ul>

                                  <!-- <div class="dorne-add-listings-btn">
                                        <a href="contact.html" class="btn dorne-btn">Contact</a>
                                  </div> -->
                            </div>
                      </nav>
                </div>
          </div>
    </div>
</header>
