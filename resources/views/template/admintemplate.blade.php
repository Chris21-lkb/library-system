<!doctype html>
<html>
    <head>
        @include('includes.adminhead')
    </head>
    <body>
        <header>
            @include('includes.adminheader')
        </header>
        <div id="main">
            @yield('content')
        </div>
    </body>
</html>