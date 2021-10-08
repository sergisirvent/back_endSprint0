<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mostrar datos</title>

  </head>
  <body>
  <?php include('../LogicaNegocio/conexion.php'); ?>
  <br>
      <table>
          <tr><h1>Lista de Mediciones</h1></tr>
          <tr>
              <th>ID</th>
              <th>Medicion</th>
              <th>Latitud</th>
              <th>Longitud</th>
              
          </tr>
          <?php
          $sql="select * from mediciones";
          $resultado=mysqli_query($mysql, $sql);
          
          while($mostrar=mysqli_fetch_array($resultado)){
          ?>
          
          <tr>
              <td><?php echo $mostrar['ID']?></td>
              <td><?php echo $mostrar['Medicion']?></td>
              <td><?php echo $mostrar['Latitud']?></td>
              <td><?php echo $mostrar['Longitud']?></td>
          </tr>
          
          <?php
          }
              ?>
      </table>
  </body>
</html>