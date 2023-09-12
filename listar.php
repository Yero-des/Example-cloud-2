<?php

include("conexion.php");
$con = conexion();

$sql = "SELECT * FROM persona";
$resultado = pg_query($con, $sql);

if (!$resultado) {
    die("Error en la consulta: " . pg_last_error());
}

?>

<!doctype html>
<html lang="es">
  <head>
    <title>Pagina Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><img src="index2.png" style="width: 30px; position: absolute;"> <span style="position: relative; left: 35px;">Index</span></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/listar.php">Listar</a>
        <a class="p-2 text-dark" href="/index.php">Registrar</a>
        <a class="p-2 text-dark" href="#">Actualizar</a>
        <a class="p-2 text-dark" href="#">Eliminar</a>
      </nav>
    </div>

    <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Listar datos with Railway</h1>
      <p class="lead">PostgreSQL + PHP</p>
    </div>

    <div class="container">

      <?php
      while ($persona = pg_fetch_assoc($resultado)) {
      ?>
          <div class="card mb-3">
              <div class="card-body">
                  <div class="row text-success">
                      <div class="col-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                      </div>
                      <div class="col-auto">
                          <?php echo $persona['nombre']; ?>
                      </div>
                      <div class="col-auto">
                          <?php echo $persona['apellido']; ?>
                      </div>
                      <div class="col-auto">
                          <?php echo $persona['direccion']; ?>
                      </div>
                  </div>
              </div>
          </div>
      <?php
      }
      ?>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://www.svgrepo.com/show/508391/uncle.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2023-1</small>
          </div>
        </div>
      </footer>
    </div>

    <?php pg_close($conexion); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>
