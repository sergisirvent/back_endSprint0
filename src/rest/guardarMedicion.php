/**
* guardarMedicion.php
* @author Sergi Sirvent Sempere
* Fecha: 2021/10
*
* Metodo de rest que llama al metodo de la logica verdadera guardarMedicion
*
*/
//--------------------------------------------
<?php
require_once('../LogicaNegocio/guardarMedicion.php');
// -------------------------------------------------
//
// POST ../rest/guardarMedicion.php
//
// medicion:MedicionPOJO -> guardarMedicion()
//
// medicion: medicion que se quiere guardar en la base de datos
//
//La medicion viene desde la app de movil en formato json
// -------------------------------------------------

$data = file_get_contents('php://input');
guardarMedicion($data);

?>