<nav class="navbar navbar-expand-lg nav_reparto">
  <img class="nav_logo_ivess" src="../../../img/logo_ivess_interno_blanco.png" alt="logo_ivess">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon fa fa-bars hamburguesa"></span>
  </button>
  <div class="collapse navbar-collapse nav_sup" id="navbarNavDropdown">
    <ul class="navbar-nav">
      @guest
        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a></li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="resumen">Resumen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="comparativa">Comparativa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="notificaciones">Notificaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tutoriales">Tutoriales</a>
      </li>
    </ul>
    <div class="usuario_logeado">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
      </a>
      <div class="dropdown-menu menu_user_logeado" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>
    </div>
    @endguest
  </div>
</nav>


<style media="screen">

  .menu_user_logeado {
    left: 86%;
  }


  @media screen and (max-width: 990px) {

    .menu_user_logeado {
      left: 80%;
      top: 200px;
      border: 1px solid white;
      background-color: transparent;
    }

    .menu_user_logeado:hover {
      background-color: #1085b4;
    }

    .menu_user_logeado a {
      color: #f2f2f2;
    }

    .menu_user_logeado a:hover {
      color: #f2f2f2;
      background-color: #1085b4;
    }

  }


  @media screen and (max-width: 760px) {

    .menu_user_logeado {
      left: 70%;
      top: 200px;
      border: 1px solid white;
      background-color: transparent;
    }

    .menu_user_logeado:hover {
      background-color: #1085b4;
    }

    .menu_user_logeado a {
      color: #f2f2f2;
    }

    .menu_user_logeado a:hover {
      color: #f2f2f2;
      background-color: #1085b4;
    }

  }


  @media screen and (max-width: 480px) {

    .menu_user_logeado {
      left: 55%;
    }

  }


</style>
