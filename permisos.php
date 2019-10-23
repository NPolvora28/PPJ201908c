<?php

include 'conexion.php';
$db = "prueba";

if(isset($_GET['accion'])){
	if ($_GET['accion'] == "agregar"){
	$accion = "guardar";
	$descripcion = "";
	$ideditar = "";
	include 'permisosformulario.php';
}
if ($_GET['accion'] == "eliminar"){

$conex = new connection();
$conexion = $conex->conect();

$id = $_GET['id'];
$consulta = "DELETE FROM ".$db.".permisos WHERE permisos.id=".$id;
$conexion->query($consulta);

$consulta = "SELECT * FROM ".$db.".permisos";
$resultado = $conexion->query($consulta);
$conex->disconect();

include 'permisosvista.php';

}
if ($_GET['accion'] == "mostrar"){
	
$conex = new connection();
$conexion = $conex->conect();


$consulta = "SELECT * FROM ".$db.".permisos";
$resultado = $conexion->query($consulta);
$conex->disconect();

include 'permisosvista.php';

}
if ($_GET['accion'] == "editar"){
	
$conex = new connection();
$conexion = $conex->conect();

$id = $_GET['id'];
$ideditar = $id;

$consulta = "SELECT * FROM ".$db.".permisos WHERE id=".$id;
$resultado = $conexion->query($consulta);
$conex->disconect();

while($row = mysqli_fetch_assoc($resultado)){
	
	$descripcion = $row["descripcion"];
}

$accion = "editar";

include 'permisosformulario.php';

}	
}

if(isset($_POST['accion'])){

if ($_POST['accion'] == "guardar"){
	
$conex = new connection();
$conexion = $conex->conect();

$descripcion = $_POST['descripcion'];
$consulta = 'INSERT INTO '.$db.'.permisos(descripcion) VALUES("'.$descripcion.'")';
$conexion->query($consulta);
$conex->disconect();

header("Location: permisos.php?accion=mostrar");
}
if ($_POST['accion'] == "editar"){
	
	$id = $_POST['id'];
	
	$conex = new connection();
	$conexion = $conex->conect();

	$descripcion = $_POST['descripcion'];
	$consulta = 'UPDATE '.$db.'.permisos SET descripcion="'.$descripcion.'" WHERE id ='.$id;
	$conexion->query($consulta);
	$conex->disconect();

	header("Location: permisos.php?accion=mostrar");

}
}








?>