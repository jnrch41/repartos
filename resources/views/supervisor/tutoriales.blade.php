@extends('supervisor.template.main')
@section('content')

  <div class="titulo_seccion">
    <h2 class="display-5">Tutoriales</h2>
    <p class="">Aquí podrá ver tutoriales por cada sección para despejar todas sus dudas sobre como funciona el sistema</p>
  </div>

<div class="buscador">
    <label for="">Buscador</label>
    <div class="buscador_btn">
      <input type="text" class="form-control input-lg" placeholder="Ingrese su búsqueda" />
      <span class="input-group-btn">
        <button class="btn btn-info btn-lg" type="button">
          <i class="fa fa-search"></i>
        </button>
      </span>
    </div>
</div>

  <div class="container">
  	<div class="row">
  	    <div class="col-md-4">
              <div class="card">
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/uBDJplLmSVw?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  <div class="card-body">
                      <h4 class="tutoriales_card_titulo">Resumen</h4>
                      <p class="tutoriales_descripcion">Explica como evaluar los indicadores de toda la fábrica y las sucursales. También evaluar supervisores y repartos.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/uBDJplLmSVw?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  <div class="card-body">
                      <h4 class="tutoriales_card_titulo">Comparativa</h4>
                      <p class="tutoriales_descripcion">Explica como comparar a los supervisores entre ellos y a los repartos. Todo esto mediante indicadores</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/uBDJplLmSVw?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  <div class="card-body">
                      <h4 class="tutoriales_card_titulo">Notificaciones</h4>
                      <p class="tutoriales_descripcion">Explica como puede ver que los supervisores hayan visto los problemas que tiene cada reparto</p>
                  </div>
              </div>
          </div>
  	</div>

    <br>

    <div class="row">
      <div class="row">
            <!-- Aqui habría una nueva fila de hasta 3 tutoriales -->
      </div>
  	</div>
  </div>


@stop
