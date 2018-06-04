<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ivess Repartos | Login</title>
    <link rel="icon" type="image/png" href="/img/ivess_logo_favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/login.css">
    <script src="js/SendForm.js">

    </script>
  </head>
  <body class="contenedor_login">
    <div class="wrapper">
        <div class="container">
            <div class="stencil">
                <div class="line">
                    <div class="line"></div>
                </div>
            </div>
            <div class="border-triangle"></div>
            <div class="content-triangle"></div>
            <div class="enter-triangle-one"></div>
            <div class="enter-triangle-two"></div>
            <form onsubmit="return false" method="post" id="form" class="AjaxForm" action="">
                <div class="title">
                    <label>El</label>
                    <label>Jumillano</label>
                </div>
                <div class="input-inform">
                    <input type="text" name="name" id="name" placeholder="Ingrese su usuario" />
                    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" />
                    <input type="button" value="Olvidé la contraseña" id="forgot-pas"/>
                </div>
                <div class="enter">
                    <img src="/img/power_icon_1.png" alt="">
                    <input type="submit" name="submit" value="Ingresar" id="enter"/>
                </div>
            </form>
            <div class="msjRespuesta">

            </div>
        </div>
    </div>
  </body>
</html>

@php
  $_POST['mi_variable']=$usuarios[0]->name;

  //Pasar variable php a JavaScript

  echo "<script>\n";
  echo "var_javascript='".$_POST['mi_variable']."'\n";
  echo "</script>\n";
@endphp


<script>
var user_valido = null;
console.log(var_javascript);

$("#forgot-pas").click(function() {
  alert( "Comuníquece al 15-3910-7352" );
});

// Esto da una posicion del array y su nombre    var usuarios = '<?php echo $usuarios[2]->name;?>'

var usuarios = '<?php echo $usuarios;?>'
console.log(usuarios);



$("#enter").click(function() {
  var name_input = $("#name").val();
  var pass_input = $("#password").val();


});



</script>

@php
  session_start();
@endphp

@foreach ($usuarios as $usuario)
@if ( $usuario->name === 'sebita')
Perfecto
@endif
@endforeach
