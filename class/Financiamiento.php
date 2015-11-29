<?php 

	class Financiamiento{

		private $conn;
		private $id_proyecto;
		private $tipo;
		private $interes;
		private $plazos;
		private $anios;
		private $amortizacion;

		public function __construct($id_proyecto){
			
			$this->id_proyecto = $id_proyecto;
		}

		public function init($tipo,$interes,$plazos,$anios,$amortizacion){

			$this->conn = new Connector();
			
			$this->tipo = $this->conn->sec($tipo);
			$this->interes = $this->conn->sec($interes);
			$this->plazos = $this->conn->sec($plazos);
			$this->anios = $this->conn->sec($anios);
			$this->amortizacion = $this->conn->sec($amortizacion);
		}

		

		public function getCapitales(){
			$query = "SELECT Monto_propio,Monto_financ FROM inv_inic05c WHERE ID_proyecto=".$this->id_proyecto;
			$conexion_temp= new mysqli("localhost", "root", "dr4g0n", "simuladoruc");
			if($rs=$conexion_temp->query($query)){
				$resultado =  $rs->fetch_assoc();
			  	echo json_encode($resultado);
			}
			/*if($this->conn->execute($query)){		
			    $resultado =  $result->fetch_assoc();
			   echo json_encode($resultado);
			    
	    	}*/ // no funcina la variable result del script Connector.php
		}

		public function insert_financiamiento08(){
			
			$query = "INSERT INTO financiemiento08(ID_proyecto,Tipo,Interes_anual,Plazo,anios,
					Amortizacion) VALUES(".$this->id_proyecto.",'".$this->tipo."',".$this->interes.",".
					$this->plazos.",".$this->anios.",'".$this->amortizacion."')";

			
			return $this->conn->execute($query);
		}
	}


?>