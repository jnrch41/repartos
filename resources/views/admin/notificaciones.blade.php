@extends('admin.template.main')
@section('content')



  <div class="jumbotron">
    <h2 class="display-5">Notificaciones</h2>
    <p class="">Aquí podrá ver las notificaciones recibidas por los supervisores</p>
  </div>

  <div class="filtros_notificaciones">
      <select class="form-control">
        <option selected>Ayer</option>
        <option>Ultima semana</option>
        <option>Ultimo mes</option>
      </select>
  </div>


  <div class="container">
    <div class="accordion" id="acordion1">
      <div class="card">
        <div class="card-header" id="header1">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Pendientes de revisión
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="header1" data-parent="#acordion1">
          <div class="card-body">

            <div class="panel-group">
              <div class="row">
                 <div class="col-md-12">
                   <div class="panel panel-danger">
                         <div class="panel-heading cabecera_notificaciones">
                           10/05/2018
                           <i class="fa fa-eye notificacion_no_vista"></i>
                         </div>
                         <div class="panel-body">
                           <div class="cada_notificacion">
                             <p> <b>R1:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                             <i class="fa fa-eye notificacion_no_vista"></i>
                           </div>
                           <hr>
                           <div class="cada_notificacion">
                             <p> <b>R10:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                             <i class="fa fa-eye notificacion_no_vista"></i>
                           </div>
                           <hr>
                           <div class="cada_notificacion">
                             <p> <b>R11:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                             <i class="fa fa-eye notificacion_no_vista"></i>
                           </div>
                           <hr>
                         </div>
                   </div>
                   <div class="panel panel-danger">
                         <div class="panel-heading cabecera_notificaciones">
                           10/05/2018
                           <i class="fa fa-eye notificacion_no_vista"></i>
                         </div>
                         <div class="panel-body">
                           <div class="cada_notificacion">
                             <p> <b>R11:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                             <i class="fa fa-eye notificacion_no_vista"></i>
                           </div>
                           <hr>
                         </div>
                   </div>
                 </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="accordion" id="acordion2">
      <div class="card">
        <div class="card-header" id="header2">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
              Historial
            </button>
          </h5>
        </div>

        <div id="collapsetwo" class="collapse show" aria-labelledby="header2" data-parent="#acordion2">
          <div class="card-body">

            <div class="panel-group">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-info">
                        <div class="panel-heading cabecera_notificaciones">
                          10/05/2018
                          <small>Visto</small>
                        </div>
                        <div class="panel-body">
                          <p> <b>R3:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                          <hr>
                        </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


  </div>

<script type="text/javascript">

$(document).ready(function() {

  $(".cada_notificacion i").click(function() {
    if ($(this).hasClass("notificacion_no_vista")) {
      $(this).removeClass("notificacion_no_vista");
      $(this).addClass("notificacion_vista");
    }else {
      $(this).removeClass("notificacion_vista");
      $(this).addClass("notificacion_no_vista");
    }

  });




});


</script>

@stop
