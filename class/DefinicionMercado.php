<?php


	class DefinicionMercado{

		private $id_proyecto;
		private $local;
		private $regional;
		private $nacional;
		private $extranjero;
		private $nse;
		private $escolaridad;
		private $rango_edad;
		private $descripcion;
		private $conn;

		public function __construct($id_proyecto,$local,$regional,$nacional,$extranjero,
									$nse,$escolaridad,$rango_edad,$descripcion){

			$this->conn = new Connector();

			$this->id_proyecto = $this->conn->sec($id_proyecto);
			$this->local = $this->conn->sec($local);
			$this->regional = $this->conn->sec($regional);
			$this->nacional = $this->conn->sec($nacional);
			$this->extranjero = $this->conn->sec($extranjero);
			$this->nse = $this->conn->sec($nse);
			$this->escolaridad = $this->conn->sec($escolaridad);
			$this->rango_edad = $this->conn->sec($rango_edad);
			$this->descripcion = $this->conn->sec($descripcion);
		}

		public function __destruct() {

			$this->id_proyecto = "";
			$this->local = "";
			$this->regional = "";
			$this->nacional = "";
			$this->extranjero = "";
			$this->nse = "";
			$this->escolaridad = "";
			$this->rango_edad ="";
			$this->descripcion = "";

		}

		public function insert_def_merc02(){

			$query = "INSERT INTO def_merc02(ID_proyecto,Local,Regional,Nacional,Extranjero,NSE,Escolaridad,Rango_edad,Descripcion) VALUES(".
					$this->id_proyecto.",".$this->local.",".$this->regional.",".$this->nacional.",".$this->extranjero.",'".$this->nse.
					"','".$this->escolaridad."','".$this->rango_edad."','".$this->descripcion."')";
			
			return $this->conn->execute($query);
			
		}

	}

?>