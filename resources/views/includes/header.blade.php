<div class="header-content">
    <div class="header-content-title">
        <nav>
            <li><a>Book management system</a></li>
        </nav>
    </div>
    <div class="header-content-search">
        <form method="post" action="#">
            <input type="text" name="search" placeholder="Search for name ">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="header-content-userData">
        <nav>
            <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
     
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form></li>
        </nav>
    </div>
</div>