

<?php
/**
 * guardarMedicion.php
 * @author Sergi Sirvent Sempere
 * Fecha: 2021/10
 *
 * Metodo de la lógica de negocio que se encarga de guardar
 * una medicion en la base de datos
 *
 */
//-----------------------------------------------------------
// MedicionPOJO medicion --> guardarMedicion()
//-----------------------------------------------------------
if($_SERVER["REQUEST_METHOD"]=="POST"){//comprobamos que tipo de peticion REST es

    require_once '../conexiones/conexion.php';//accedemos a la conexion de la bbdd

    //obtenemos la info
    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data);

    //separamos por parametros la informacion procedente de la logica fake
    $Medicion=$jsonData->{'Medicion'};
    $Longitud=$jsonData->{'Longitud'};
    $Latitud=$jsonData->{'Latitud'};
    $Major=$jsonData->{'Major'};
    $Minor=$jsonData->{'Minor'};

    //montamos la consulta con los parametros y la lanzamos
    $query="INSERT INTO mediciones (Medicion,Longitud,Latitud,Major,Minor) VALUES('".$Medicion."','".$Longitud."','".$Latitud."','".$Major."','".$Minor."')";
$resultado=$mysql->query($query);

    //comprobamos si los datos se han almacenado correctamente
if($resultado==true){
    echo "Los datos se introducen de forma correcta";
}else{
    echo "Error al insertar datos";
}
}
