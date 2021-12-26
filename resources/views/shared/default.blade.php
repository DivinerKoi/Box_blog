<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
        @include('shared._head')
        <div class="container">
            <div class="offset-md-1 col-md-10">
                @include('shared._messages')
                @yield('content')
            </div>
        </div>
    </body>
</html>
