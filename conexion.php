<?php
$mysql=new mysqli("localhost","root","","datosmediciones");
if($mysql->connect_error){
    die("Error de conexion");
}else{
    echo "Conexio correcta";
}