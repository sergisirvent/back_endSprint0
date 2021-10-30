<?php
require_once('../LogicaNegocio/obtenerTodasLasMediciones.php');

// -------------------------------------------------
//
// GET ../rest/obtenerTodasLasMediciones.php
//
// guardarMedicion() --> Lista<MedicionPOJO>
//
//Devuelve una lista de mediciones que corresponde a todas las mediciones de la base de datos
//
//Se devuelve la lista en formato lista de objetos JSON
// -------------------------------------------------

//creo una variable que almacene la lista de mediciones
$listaMediciones = obtenerTodasLasMediciones();
echo $listaMediciones;

?>
