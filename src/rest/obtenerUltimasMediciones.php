

<?php
/**
* obtenerUltimasLasMediciones.php
* @author Sergi Sirvent Sempere
* Fecha: 2021/10
*
* Metodo de rest que llama al metodo de la logica verdadera obtenerUltimasLasMediciones
*
*/
//--------------------------------------------
require_once('../LogicaNegocio/obtenerUltimasMediciones.php');
// -------------------------------------------------
//
// POST ../rest/obtenerUltimasMediciones.php
//
// cuantas:Z -> obtenerUltimasMediciones() --> Lista<MedicionPOJO>
//
// Se recibe un numero entero que corresponde al numero de mediciones que
//desea obtener el usuario de la base de datos . Este numero viene dentro de la URL de la peticion
//
//La lista de mediciones corresponde a las ultimas (las que pide el usuario)
//viene devuelta en lista de objetos JSON
// -------------------------------------------------


//guardamos la cantidad de mediciones que quiere el usuario en una variable
$Cuantas= $_GET["Cuantas"];
//echo "Esto es cuantas";
//echo $Cuantas;

//creamos una variable que almacene la lista de mediciones
$listaMediciones = obtenerUltimasMediciones($Cuantas);

echo $listaMediciones

?>