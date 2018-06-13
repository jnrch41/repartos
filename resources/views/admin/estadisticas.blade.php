@extends('admin.template.main')

@section('content')

<div class="titulo_seccion">
  <h2 class="display-5">Ubicar repartidor</h2>
  <p class="">Aquí podrá buscar la ubicación de cada repartidor</p>
</div>


<div class="select_resumen">
    <select class="form-control">
      <option selected>Seleccione reparto...</option>
      <option>Reparto 1</option>
    </select>
</div>


<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 440px;
        width: 100%;
        margin-bottom: 20px;
      }
      /* Optional: Makes the sample page fill the window. */

</style>

    <div id="map"></div>
    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.603722, lng: -58.381592},
          zoom: 16
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Su ubicación.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHgBo27RDL89DjGt1JWF2hXiDgfMFhLx4&callback=initMap"></script>





    <div class="titulo_seccion">
      <h2 class="display-5">Estadísticas de ventas</h2>
      <p class="">Aquí podrá buscar ver sus estadísticas de venta</p>
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


<script type="text/javascript">
var map;
function initMap() {
map = new google.maps.Map(document.getElementById('map'), {
  center: {lat: -32.397, lng: 150.644},
  zoom: 12
});
}
</script>

@endsection
