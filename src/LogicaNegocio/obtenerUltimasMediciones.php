<?php
//-----------------------------------------------------------
// Int cuantas --> obtenerUltimasMediciones() --> Lista<MedicionPOJO>
//-----------------------------------------------------------
if($_SERVER["REQUEST_METHOD"]=="GET"){//comprobamos que tipo de peticion REST es GET
    
    require_once '../conexiones/conexion.php';//accedemos a la conexion de la bbdd
    
    
    
    //guardamos la cantidad de mediciones que quiere el usuario en una variable
    $Cuantas= $_GET["Cuantas"];
    //echo "Esto es cuantas";
    //echo $Cuantas;
    
    //montamos la consulta con los parametros y la lanzamos
    $query="SELECT * from mediciones ORDER BY ID DESC LIMIT ".$Cuantas;
   
    //echo $query;
    $resultado=$mysql->query($query);
    
    
    //variable que almacenará la respuesta de nuestra peticion
    $datos = array();
    
    //guardamos nuestro resultado en la array datos fila por fila
    foreach ($resultado as $row){
        
        $datos[]=$row;
    }
    
    //comprobamos si la peticion se ha procesado correctamente
if($resultado==true){
    
   //devolvemos la respuesta obtenida
echo json_encode($datos);

    
}else{
    //lanzamos error
    echo "Error al insertar datos";
}
}