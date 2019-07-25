
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" width="30" height="30" alt="">
    </a>
    <form action="{{ route('logout') }}" id="logout-form" method="POST">
        {{ csrf_field() }}
        <a href="#" class="text-white" onclick="getElementById('logout-form').submit()">Cerrar Sesión</a>
    </form>
</nav>