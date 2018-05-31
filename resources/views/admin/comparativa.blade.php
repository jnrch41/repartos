@extends('admin.template.main')
@section('content')


  <div class="jumbotron">
    <h2 class="display-5">Comparativa</h2>
    <p class="">Aquí podrá evaluar a los supervisores y a los repartos</p>
  </div>
  <div class="seteo_comparativa">
      <select class="form-control">
        <option selected>Supervisores</option>
        <option>Repartidores</option>
      </select>
      <div class="seteo_rango_fechas">
        <i class="fa fa-calendar-alt icon_calendar"></i>
        <input type="text" id="periodo_inicial" width="200" value="" placeholder="Fecha incial"/>
        <i class="fa fa-calendar-alt icon_calendar"></i>
        <input type="text" id="periodo_final" width="200" value="" placeholder="Fecha final"/>
      </div>
  </div>
  <div class="col-sm-12">
    <table class="table table-striped">
      <thead class="cabecera_tabla">
        <tr>
          <th>#</th>
          <th>Items</th>
          <th>Nuevos clientes</th>
          <th>Env improd</th>
          <th>Mov envases</th>
          <th>Clientes inact</th>
          <th>Ventas</th>
          <th>Desv hs</th>
          <th>Fiado</th>
          <th>Reclamos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Jose Perez</td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Juan Ramirez</td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Jonathan Mayer</td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Luis Fonsi</td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Mickey Mouse</td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Lionel Messi</td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Don Quijote</td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_comparativa" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
      </tbody>
    </table>
  </div>





  <!-- Modal de reclamo y desvios -->
   <div class="modal fade" id="modal_comparativa">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">

         <!-- Modal cabecera -->
         <div class="modal-header">
           <h4 class="modal-title">Información desglosada</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <!-- Modal cuerpo -->
         <div class="modal-body">

           <div class="container">
             <div class="panel-group">
               <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-danger">
                          <div class="panel-body">
                            <p> <b>Motivo:</b> Explicacion </p>
                            <hr>
                            <p> <b>Detalle:</b> Explicacion </p>
                            <hr>
                            <p> <b>Estado:</b> Explicacion </p>
                            <hr>
                          </div>
                    </div>
                  </div>
               </div>
             </div>
           </div>
         </div>

         <!-- Modal footer -->
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
         </div>

       </div>
     </div>
   </div>




@stop
