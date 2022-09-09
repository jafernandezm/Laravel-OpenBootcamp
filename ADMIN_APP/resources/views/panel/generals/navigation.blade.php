

<nav>
    <a class="btn btn-light" href=" javascript:void(0)" onclick="document.getElementById('logout').submit();" >Cerrar Sesion del usuario  </a>

    <form style="display: none;" id="logout" action="{{ route('logout')}}" method="POST">
        @csrf
    </form>

</nav>
