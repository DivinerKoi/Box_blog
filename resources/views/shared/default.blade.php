<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <style type="text/css">

        </style>
    </head>
    <body>
        @include('shared._head')
        <div class="con container">
           <div class="row">
              @include('shared._messages')
              @yield('content')
           </div>
           <div class="row"></div>
        </div>
     <!--   <div class="container">
            <div class=" col-md-12">
                @include('shared._messages')
                @yield('content')
            </div>
        </div> --><!-- offset-md-1 -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
