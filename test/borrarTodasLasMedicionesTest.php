<?php

if($_SERVER["REQUEST_METHOD"]=="DELETE"){//comprobamos que tipo de peticion REST es DELETE
    
    require_once 'conexionTest.php';//accedemos a la conexion de la bbdd
        
    //montamos la consulta con los parametros y la lanzamos
    $query='DELETE FROM `mediciones` WHERE `Medicion`=23';
$resultado=$mysql->query($query);
    
    //comprobamos si los datos se han almacenado correctamente
if($resultado==true){
    echo "Los datos se borran de manera correcta";
}else{
    echo "Error al borrar datos";
}
}