<!-- Navbar -->

<!-- Navbar -->
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container navigation">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/collections">Property</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                      </li>
                   
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" id="nav-item">
                                <a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                
                                    
                                
                            </li>
                            <ul class="sub-navbar">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Message</a></li>
                                    <li id="child-sub-navbar"><a href="#">My Activity</a></li>
                                        <ul class="child-navbar">
                                            <li><a href="">Bookmarks</a></li>
                                            <li><a href="/calendar">Scheduled Visits</a></li>
                                            <li><a href="/inquiry">Inquired Properties</a></li>
                                        </ul>
                                    <li><a href="/maintenance" >Maintenance Request</a></li>
                                    <li><a class="dropdown-list" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

</div>