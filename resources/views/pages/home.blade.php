<! doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/home.css')}}">
    </head>
    <body>
        <header>
            <div class="header-title">
                <nav>
                    <ul>
                        <li><a href="#">BOOK SYSTEM MANAGEMENT</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-links">
                <nav>
                    <ul>
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->email }}
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('LOGOUT') }}
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div class="search">
                <form method="GET" action="searchbook">
                    @csrf
                    <img src="image\img.jpg" height="150px" />
                    <h3>SEARCH YOUR BOOK</h3>
                    <input type="text" placeholder="Search ..." name="search"/><br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </body>
</html>