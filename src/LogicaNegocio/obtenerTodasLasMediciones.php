<?php
/**
 * obtenerTodasLasMediciones.php
 * @author Sergi Sirvent Sempere
 * Fecha: 2021/10
 *
 * Metodo de la lógica de negocio que se encarga de devolver de
 * la base de datos todas las mediciones
 *
 */
//---------------------------------------------
//obtenerTodasLasMediciones() --> Lista<MedicionPOJO>
//---------------------------------------------
function  obtenerTodasLasMediciones(){

    include '../conexiones/conexion.php';//accedemos a la conexion de la bbdd

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
        return json_encode($datos);


    }else{
        echo "Error al insertar datos";

    }
}


    
