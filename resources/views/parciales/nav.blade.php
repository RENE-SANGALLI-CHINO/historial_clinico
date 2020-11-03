<nav class="navbar bg-white shadow-sm"> 
    <a class="navbar-brand" href="">
        {{ config('app.name')}}
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"> <a class="nav-link {{setActive('Inicio') }}" href="/">INICIO</a> </li>
        <li class="nav-item"> <a class="nav-link {{setActive('acerca') }}" href="/acerca">QUIENES SOMOS</a> </li>
        <li class="nav-item"> <a class="nav-link {{setActive('contacto') }}" href="/contacto">CONTACTO</a> </li>
        <li class="nav-item"><a class="nav-link {{setActive('login') }}" href="{{ route('login')}}">INICIAR SESION</a></li>
    </ul>
</nav>