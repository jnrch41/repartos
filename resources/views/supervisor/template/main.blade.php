<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Panel administracion</title>
    <link rel="icon" type="image/png" href="/img/ivess_logo_favicon.png" />
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../../js/jquery-ui.js"></script>
    <script src="../../../js/peity.js"></script>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body>
    @include('supervisor.template.partials.nav')

        <div class="panel-body">
          @yield('content')
        </div>


    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function() {

      // graficos pequeños
      $(".line").peity("line");


      // Datepicker

      $('#periodo_inicial').datepicker({

      });

      $('#periodo_final').datepicker({

      });

      // Datepicker



      });
    </script>


<footer>
  <p>® Copyright 2018 - El Jumillano S.A.  -  Desarrollo realizado por el equipo de sistemas</p>
</footer>
  </body>
</html>
