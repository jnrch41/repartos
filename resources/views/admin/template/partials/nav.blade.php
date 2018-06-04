<nav class="navbar navbar-expand-lg nav_reparto">
  <img class="nav_logo_ivess" src="../../../img/logo_ivess_interno_blanco.png" alt="logo_ivess">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon fa fa-bars hamburguesa"></span>
  </button>
  <div class="collapse navbar-collapse nav_sup" id="navbarNavDropdown">
    <ul class="navbar-nav">
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
        <a class="nav-link" href="{{ route('admin.users.index' )}}">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estadísticas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tutoriales">Tutoriales</a>
      </li>
    </ul>
    <div class="usuario_logeado">
      <i class="fa fa-user"></i>
      <p>Juan Perez</p>
    </div>
  </div>
</nav>
