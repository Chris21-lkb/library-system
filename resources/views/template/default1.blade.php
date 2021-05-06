<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header1')
        </header>
        <div id="main">
            @yield('content')
        </div>
    </body>
</html>