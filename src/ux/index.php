<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mostrar datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- ---------------------------------------------------- -->
      <script src="LogicaFake/obtenerTodasLasMediciones.js"></script>
      <script src="LogicaFake/obtenerUltimasMediciones.js"></script>

      <!-- ---------------------------------------------------- -->
      <script>
          function mostrarTodasMediciones(){
              // llamo a la función de la lógica (versión fake)
              obtenerTodasLasMediciones(function (err,res) {
                  if ( err ) {
                      alert( "Ha habido un error" )
                      return
                  }
                    window.alert(res)
              })
          }
      </script>

  </head>
  <body>
  <?php include('../conexiones/conexion.php'); ?>
  <br>
     <div class="container">
         <table class="table">
          <tr><h1>Lista de Mediciones</h1></tr>
          <tr>
              <th>ID</th>
              <th>Medicion</th>
              <th>Latitud</th>
              <th>Longitud</th>
              <th>Major</th>
              <th>Minor</th>
              
          </tr>

          <?php
             /*
          $sql="select * from mediciones";
          $resultado=mysqli_query($mysql, $sql);
          
          while($mostrar=mysqli_fetch_array($resultado)){
             */
          ?>
          
          <tr>

          </tr>
          


      </table>
         <button class="button"  onclick="mostrarTodasMediciones()">MostrarTodasLasMediciones</button>
     </div>
      
  </body>
</html>