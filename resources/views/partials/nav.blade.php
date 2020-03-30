<nav>
    <ul>
        <!-- Verificamos el nombre de la ruta, que es el que está en web.php-->
    <li class="{{ setActive('home') }}"><a href="{{ route('home')}}">Home </a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about')}}">About </a></li>
        <li class="{{ setActive('projects.index')  }}"><a href="{{ route('projects.index')}}">Portfolio </a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact')}}">Contact </a></li>
        
        <!-- Mostramos el link de login si no estamos autenticados, es decir, si sólo somos un invitado-->
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @else

            <!-- Si estamos autenticados -->
            <li><a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar sesión</a></li>

        @endguest

    </ul>
</nav> 

  <!-- Formulario para cerrar sesión-->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>