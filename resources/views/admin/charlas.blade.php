@extends('admin.template.main')

@section('content')

  <div class="titulo_seccion">
    <h2 class="display-5">Charlas</h2>
    <p class="">Aquí podrá ver lo que conversó el supervisor con cada reparto</p>
  </div>

  <div class="filtros_charlas">
      <select class="form-control">
        <option selected>Supervisor 1</option>
        <option>Supervisor 2</option>
        <option>Supervisor 3</option>
      </select>

      <select class="form-control">
        <option selected>R10</option>
        <option>R3</option>
        <option>R5</option>
      </select>

      <select class="form-control">
        <option selected>Ayer</option>
        <option>Ultima semana</option>
        <option>Ultimo mes</option>
      </select>
  </div>


<div class="charlas_persianas">

  <div class="accordion" id="acordion1">
    <div class="card">
      <div class="card-header charlas_persiana" id="header1">
        <h5 class="mb-0">
          <button class="btn btn_notificaciones_persiana" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            10/05/2018
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
                         <h6>Supervisor 1</h6>
                         <p>12:45hs</p>
                       </div>
                       <div class="panel-body">
                         <br>
                         <div class="">
                           <h6> <b>Motivo:</b> Ventas</b></h6>
                           <p>Hable con el repartidor y se va a poner las pilas. Ya estamos todo ok</p>
                         </div>
                       </div>
                 </div>
                 <div class="panel panel-danger">
                       <div class="panel-heading fecha_notificaciones">
                         <h6>Supervisor 1</h6>
                         <p>15:30hs</p>
                       </div>
                       <div class="panel-body">
                         <br>
                         <div class="">
                           <h6> <b>Motivo:</b> Desvío de horario</b></h6>
                           <p>Hable con el repartidor y se va a poner las pilas. Ya estamos todo ok</p>
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
</div>

@endsection
