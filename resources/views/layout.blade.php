 <!DOCTYPE html>
 <html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
    </head>

    <style>
        .active a{
          color: red;
          text-decoration: none;   
        }
    </style>

    <body>
        @include('partials/nav')
        @yield('content')
    </body>
 </html>