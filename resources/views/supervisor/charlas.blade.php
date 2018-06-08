@extends('supervisor.template.main')
@section('content')

  <div class="titulo_seccion">
    <h2 class="display-5">Charlas</h2>
    <p class="">Aquí podrá dejar por sentado lo que conversó con cada repartidor</p>
  </div>

<div class="contenedor_charlas_super">

<div class="row">
  <div class="col-sm-6">
    <div class="select_charlas_super">
      <select class="form-control" name="">
        <option selected value="">R1</option>
        <option value="">R5</option>
        <option value="">R15</option>
        <option value="">R20</option>
      </select>
    </div>
    <br>
    <div class="charlas_form_super">
      <form>
        <div class="form-group">
          <label for="motivo">Motivo</label>
          <input type="text" name="motivo" class="form-control" placeholder="Ingrese el motivo">
        </div>
        <div class="form-group">
          <label for="descripcion">Comentarios</label>
          <textarea class="form-control" name="descripcion" rows="3"></textarea>
        </div>
      </form>
    </div>
    <div class="btn_charlas_sup">
      <button class="btn btn-primary btn-sm" type="button" name="button">Agregar</button>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="accordion" id="acordion1">
      <div class="card">
        <div class="card-header charlas_persiana" id="header1">
          <h5 class="mb-0">
            <button class="btn btn_notificaciones_persiana" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              10/05/2018
            </button>
          </h5>
          <p>10:15hs</p>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="header1" data-parent="#acordion1">
          <div class="card-body">

            <div class="panel-group">
              <div class="row">
                 <div class="col-md-12">
                   <div class="panel panel-danger">
                         <div class="panel-heading fecha_notificaciones">
                           <h6>Supervisor 1</h6>
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

</div>

</div>




  @stop
