<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <!-- variable de php (Redireccion url es para indicar que are una redirrecion
        a http//.$_SERVER esta variable me dara informacion del host donde yo estoy
        ['HTTP_HOST'] que es para que nos devuelva la url para poder redireccionar ."/sitioweb1.1.1 que es el nombre de la carpeta del sitio web")
        detal form que cuando precione el botom me va a permitir mandar a el usuario a esa url -->
            <?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb1.1.1" ?>

    <!-- barra de navegacion -->
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del sitio web <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Productos</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar secion</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio web</a>
        </div>
    </nav>
    <br>


        <div class="container">
            
            <div class="row">