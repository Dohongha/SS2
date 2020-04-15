<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('style.css') }}" />
    </head>
    <body>         
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>