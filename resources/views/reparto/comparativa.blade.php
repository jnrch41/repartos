@extends('reparto.template.main')
@section('content')


  <div class="titulo_seccion">
    <h2 class="display-5">Comparativa</h2>
    <p class="">Aquí podrá evaluar a los supervisores y a los repartos</p>
  </div>
  <div class="seteo_comparativa">
      <select class="form-control">
        <option selected>Repartidores</option>
      </select>
      <div class="seteo_rango_fechas">
        <i class="fa fa-calendar-alt icon_calendar"></i>
        <input type="text" id="periodo_inicial" width="200" value="" placeholder="Fecha incial"/>
        <i class="fa fa-calendar-alt icon_calendar"></i>
        <input type="text" id="periodo_final" width="200" value="" placeholder="Fecha final"/>
      </div>
  </div>
  <div class="col-sm-12 tabla">
    <table class="table table-striped tabla_responsive">
      <thead class="cabecera_tabla">
        <tr>
          <th>#</th>
          <th>Items</th>
          <th>Nuevos clientes</th>
          <th>Env improd</th>
          <th>Mov envases</th>
          <th>Clientes inact</th>
          <th>Sifones</th>
          <th>Botellones</th>
          <th>Saborizadas</th>
          <th>Desv hs</th>
          <th>Fiado</th>
          <th>Reclamos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>R1</td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>R5</td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>R20</td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>R14</td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>R23</td>
          <td> <button class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>R16</td>
          <td> <button class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>R19</td>
          <td> <button class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
        </tr>
      </tbody>
    </table>
  </div>







   <div class="grafico_chart">
     <canvas id="chart_comparativa" width="100%" height="400"></canvas>
     <script src="../../js/chart_comparativa.js"> </script>
   </div>


@stop
