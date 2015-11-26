<?php
include('Connector.php');

	 class DefinicionProyecto{

		private $id_proyecto;
		private $descripcion;
		private $tipo;
		private $unidad_medida;
		private $caracteristicas;
		private $nombre;
		private $id_alumno;
		private $conn;
		//hola
		public function __construct($descripcion,$tipo,$unidad_medida,
									$caracteristicas,$nombre,$id_alumno) {

			$this->conn = new Connector();
			$this->descripcion = $this->conn->sec($descripcion);
			$this->tipo = $this->conn->sec($tipo);
			$this->unidad_medida = $this->conn->sec($unidad_medida);
			$this->caracteristicas = $this->conn->sec($caracteristicas);
			$this->nombre = $this->conn->sec($nombre);
			$this->id_alumno = $this->conn->sec($id_alumno);


		}

		public function __destruct() {
     
			$this->descripcion = "";
			$this->tipo = "";
			$this->unidad_medida = "";
			$this->caracteristicas ="";
			$this->nombre = "";
			$this->id_alumno = "";
    	}

		public function insert_proyectodef_01(){

			$query = "INSERT INTO proyectodef_01(Concepto,Descripcion,Tipo,Unidad_medida,Caracteristicas,
					Nombre,ID_alumno) VALUES('".$this->nombre."','".$this->descripcion."','".$this->tipo."','".
					$this->unidad_medida."','".$this->caracteristicas."','".$this->nombre."',".$this->id_alumno.")";

			
			return $this->conn->execute($query);
		}

	}

?>