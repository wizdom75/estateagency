@section('navbar')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #007B5E">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
         {{ config('app.name', 'Estate Agency') }}
    </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerMain" aria-controls="navbarTogglerMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerMain">
            <!-- Navbar items Right -->
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-uppercase">
                    <li class="nav-item {{ Request::is('for-sale') || Request::is('for-sale/*')?'active':'' }}">
                        <a class="nav-link" href="/for-sale">For Sale</a>
                    </li>
                    <li class="nav-item {{ Request::is('to-rent') || Request::is('to-rent/*')?'active':'' }}">
                        <a class="nav-link" href="/to-rent">To Rent </a>
                    </li>
                    <li class="nav-item {{ Request::is('house-prices')?'active':'' }}">
                        <a class="nav-link" href="/house-prices">House Prices</a>
                    </li>
                    <li class="nav-item {{ Request::is('landlords')?'active':'' }}">
                        <a class="nav-link" href="/landlords">Landlords</a>
                    </li>
                    <li class="nav-item {{ Request::is('page/terms')?'active':'' }}">
                        <a class="nav-link" href="/page/terms">Terms</a>
                    </li>
                    <li class="nav-item {{ Request::is('page/about')?'active':'' }}">
                        <a class="nav-link" href="/page/about">About</a>
                    </li>
                    <li class="nav-item {{ Request::is('page/privacy')?'active':'' }}">
                        <a class="nav-link" href="/page/privacy">Privacy</a>
                    </li>
                    <li class="nav-item {{ Request::is('contact')?'active':'' }}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user-"></i>{{ __('Login') }}</a>
                    </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </nav>