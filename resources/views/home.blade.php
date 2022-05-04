<!DOCTYPE html>
<html lang=it>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('main-content')
        </main>
        @include('partials.footer')
    </body>
</html>
