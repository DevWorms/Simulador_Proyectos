<?php
include('Connector.php');
include('DefinicionProyecto.php');
include('DefinicionMercado.php');
session_start();
$ID = $_POST['ID_pantalla']; // con esto decide de que pantalla viene la peticion
	
	if( $ID == "01"){ //pantalla 01

		$nombre= $_POST['nombre'];
		$tipo= $_POST['tipo'];
		$unidad= $_POST['unidad'];
		$descripcion= $_POST['descripcion'];
		$caracterisitcas= $_POST['caracterisitcas'];
		$id_alumno = $_SESSION['Id'];
		$defProy= new DefinicionProyecto($descripcion,$tipo,$unidad,$caracterisitcas,$nombre,$id_alumno);
		echo $defProy->insert_proyectodef_01();
	} 

	if($ID == "02") { //pantalla 02

		$local = $_POST['local'];
		$regional = $_POST['regional'];
		$nacional = $_POST['nacional'];
		$extranjero = $_POST['extranjero'];
		$nse = $_POST['nse'];
		$escolaridad = $_POST['escolaridad'];
		$rangoedad = $_POST['rangoedad'];
		$descripcion = $_POST['descripcion'];

		$id_alumno = $_SESSION['Id'];

		$query = "SELECT MAX(ID_proyecto) FROM proyectodef_01 WHere ID_alumno=".$id_alumno;
		$db= new Connector();
		if ($db->execute($query)) {
			$resultado =  $result->fetch_array();
			$id_proyecto = $resultado[0];

			$defMerc = new DefinicionMercado($id_proyecto,$local,$regional,$nacional,$extranjero,
									$nse,$escolaridad,$rangoedad,$descripcion);

			echo $defMerc->insert_def_merc02();
		}
	}
?>