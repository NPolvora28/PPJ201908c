<?php

include 'conexion.php';

$db = "prueba";
$conex = new connection();
$conexion = $conex->conect();

$descripcion = $_POST['descripcion'];
$consulta = "INSERT INTO ".$db.".permisos(descripcion) VALUES('".$descripcion."')";
$conexion->query($consulta);
$conex->disconect();

echo "Ingresado correctamente";

//echo $consulta;


?>