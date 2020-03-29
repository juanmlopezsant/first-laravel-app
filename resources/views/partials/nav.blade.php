<nav>
    <ul>
        <!-- Verificamos el nombre de la ruta, que es el que está en web.php-->
    <li class="{{ setActive('home') }}"><a href="{{ route('home')}}">Home </a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about')}}">About </a></li>
        <li class="{{ setActive('projects.index')  }}"><a href="{{ route('projects.index')}}">Portfolio </a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact')}}">Contact </a></li>
    </ul>
</nav> 