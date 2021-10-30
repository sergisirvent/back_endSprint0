<?php
require_once('../LogicaNegocio/guardarMedicion.php');
// -------------------------------------------------
//
// POST ../rest/diHola.php
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