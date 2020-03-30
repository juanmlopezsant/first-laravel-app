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

        <!-- Todas las vistas que usen este layout.blade.php van a tener disponible los mensajes de las operaiones CRUD creadas con éxito -->
        @include('partials.session-status')

        @yield('content')
    </body>
 </html>