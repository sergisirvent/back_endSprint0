<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){//comprobamos que tipo de peticion REST es
    
    include '../conexion.php';//accedemos a la conexion de la bbdd
    
    //montamos la consulta con los parametros y la lanzamos
    $query="SELECT * from mediciones";
$resultado=$mysql->query($query);
    
    //variabla que almacenará la respuesta de nuestra peticion
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
    echo "Error al insertar datos";
}
}