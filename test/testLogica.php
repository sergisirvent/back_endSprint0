<?php
require_once ('../src/conexiones/conexion.php');
require_once('../src/LogicaNegocio/guardarMedicion.php');
require_once('../src/LogicaNegocio/obtenerTodasLasMediciones.php');



//primero llamamos a la base de datos que nos devuelva todas las
// mediciones y almacenamos en una variable cuantas tenemos


$arrayMediciones = array();
$arrayMediciones = obtenerTodasLasMediciones();
$cuantasHay = count(json_decode($arrayMediciones));
echo $cuantasHay ;
echo "Cuantas hay";
//creamos el objeto JSON
$medicion = new stdClass();
$medicion->Medicion = 999;
$medicion->Latitud = 999;
$medicion->Longitud = 999;
$medicion->Minor = 999;


//llamamos al metodo de la logica verdadera y le pasamos la medicion que acabamos de crear
guardarMedicion($medicion);




echo "Hola test";
?>