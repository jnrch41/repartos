@extends('admin.template.main')

@section('content')

<div class="titulo_seccion">
  <h2 class="display-5">Estadísticas de ventas</h2>
  <p class="">Aquí podrá ver sus estadísticas de venta</p>
</div>
<div class="select_resumen">
    <select class="form-control">
      <option selected>Ciudadela</option>
      <option>La plata</option>
    </select>
</div>

<div class="row">

  <div class="col-sm-6 tabla">
    <table class="table table-striped">
      <div class="estadisticas_titulo">
        <h5>Sodas</h5>
      </div>
      <thead class="cabecera_tabla">
        <tr>
          <th>#</th>
          <th>Rto</th>
          <th>Este mes</th>
          <th>Vs Mes ant</th>
          <th>Vs Mes Año ant</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>5</td>
          <td>15</td>
          <td>820</td>
          <td>82</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>9</td>
          <td>5</td>
          <td>230</td>
          <td>780</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>23</td>
          <td>360</td>
          <td>20</td>
          <td>182</td>
        </tr>
        <tr>
          <th scope="row">Total</th>
          <td>-</td>
          <td>380</td>
          <td>1070</td>
          <td>1044</td>
        </tr>
      </tbody>
    </table>
  </div>



  <div class="col-sm-6 tabla">
    <table class="table table-striped">
      <div class="estadisticas_titulo">
        <h5>Botellones</h5>
      </div>
      <thead class="cabecera_tabla">
        <tr>
          <th>#</th>
          <th>Rto</th>
          <th>Este mes</th>
          <th>Vs Mes ant</th>
          <th>Vs Mes Año ant</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>5</td>
          <td>15</td>
          <td>820</td>
          <td>82</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>9</td>
          <td>5</td>
          <td>230</td>
          <td>780</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>23</td>
          <td>360</td>
          <td>20</td>
          <td>182</td>
        </tr>
        <tr>
          <th scope="row">Total</th>
          <td>-</td>
          <td>380</td>
          <td>1070</td>
          <td>1044</td>
        </tr>
      </tbody>
    </table>
  </div>


</div>




        <div class="col-sm-12 tabla">
          <table class="table table-striped">
            <div class="estadisticas_titulo">
              <h5>Aguas</h5>
            </div>
            <thead class="cabecera_tabla">
              <tr>
                <th>#</th>
                <th>Rto</th>
                <th>Este mes</th>
                <th>Vs Mes ant</th>
                <th>Vs Mes Año ant</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>5</td>
                <td>15</td>
                <td>820</td>
                <td>82</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>9</td>
                <td>5</td>
                <td>230</td>
                <td>780</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>23</td>
                <td>360</td>
                <td>20</td>
                <td>182</td>
              </tr>
              <tr>
                <th scope="row">Total</th>
                <td>-</td>
                <td>380</td>
                <td>1070</td>
                <td>1044</td>
              </tr>
            </tbody>
          </table>
        </div>



@endsection
