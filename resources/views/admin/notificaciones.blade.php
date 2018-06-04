@extends('admin.template.main')
@section('content')



  <div class="titulo_seccion">
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


  <div class="notificaciones_persianas">
    <div class="accordion" id="acordion1">
      <div class="card">
        <div class="card-header notificaciones_fondo_persiana_pendientes" id="header1">
          <h5 class="mb-0">
            <button class="btn btn_notificaciones_persiana" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                         <div class="panel-heading fecha_notificaciones">
                           <h6>10/05/2018</h6>
                           <i class="fa fa-eye notificacion_todo_visto"></i>
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
                         <div class="panel-heading fecha_notificaciones">
                           <h6>12/05/2018</h6>
                           <i class="fa fa-eye notificacion_todo_visto"></i>
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
        <div class="card-header notificaciones_fondo_persiana_historial" id="header2">
          <h5 class="mb-0">
            <button class="btn btn_notificaciones_persiana" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
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
                        <div class="panel-heading fecha_notificaciones">
                          <h6>10/05/2018</h6>
                          <small>Visto</small>
                        </div>
                        <div class="panel-body">
                          <div class="cada_notificacion">
                            <p> <b>R3:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                          </div>
                          <hr>
                          <div class="cada_notificacion">
                            <p> <b>R3:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
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


//Hay que realizar varios foreach o sumar un for
//  $( "li" ).each(function( index ) {
//    console.log( index + ": " + $( this ).text() );
//  });



  $(".notificacion_todo_visto").click(function() {
  alert("Debiste haber visto todo");

  });

});


</script>

@stop
