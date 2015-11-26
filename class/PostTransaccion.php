<?php

include('DefinicionProyecto.php');
session_start();
$ID = $_POST['ID_pantalla']; // con esto decide de que pantalla viene la peticion
	
	if( $ID == "01"){

		$nombre= $_POST['nombre'];
		$tipo= $_POST['tipo'];
		$unidad= $_POST['unidad'];
		$descripcion= $_POST['descripcion'];
		$caracterisitcas= $_POST['caracterisitcas'];
		$id_alumno = $_SESSION['Id'];
		$objeto= new DefinicionProyecto($descripcion,$tipo,$unidad,$caracterisitcas,$nombre,$id_alumno);
		echo $objeto->insert_proyectodef_01();
	} //hola

?>