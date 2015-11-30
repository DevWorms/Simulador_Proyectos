<?php

class DeudasImpustos{
	private $id_proyecto;
	private $db;
	private $deuda;
	private $tipoImp;
	private $porcentaje;
	private $sobreconcep;
	private $tasaDescu;

	public function __construct($id_proyecto){

		$this->id_proyecto = $id_proyecto;
		$this->db = new mysqli("www.devworms.com", "rootuc", "toor5", "simuladoruc");		
		$this->id_proyecto =1;
	}

	public function impuestos($tipoImp, $porcentaje, $sobreconcep, $tasaDescu){
		$this->tipoImp = $tipoImp;
		$this->porcentaje = $porcentaje;
		$this->sobreconcep = $sobreconcep;
		$this->tasaDescu = $tasaDescu;
		$query1 = "INSERT INTO impustos_10 VALUES(".$this->id_proyecto.",'".$this->tipoImp."',".$this->porcentaje.",'".$this->sobreconcep."');";
		$query2 = "INSERT INTO tasa_11 VALUES(".$this->id_proyecto.",".$this->tasaDescu.")";
		//probar después con clase connector, ocasionó problemas
        if ($result = $this->db->query($query1)) {
        	if ($result = $this->db->query($query2)) {
        	$this->db->close();
            return true;
        	}
        } else {
        	printf($this->db->error);
            return false;
        }
	}

	public function getDeuda(){ 
		//Llenar tabla del Pago de la Deuda
		$query = "SELECT Monto_financ, Interes_anual, Plazo FROM inv_inic05c ic INNER JOIN financiemiento08 f 
					ON(ic.ID_proyecto = f.ID_proyecto) WHERE ic.ID_proyecto = ".$this ->id_proyecto.";";
        if ($result = $this->db->query($query)) {
            if ($result->num_rows == 1) {
				$resultado = $result->fetch_assoc();
				$this->deuda = array();
				
				//formatear como string para poder hacer operaciones exactas
				$monto = number_format ( $resultado[Monto_financ], 4 , "." ,  "" );
				$interesAnual = number_format ( $resultado[Interes_anual], 2 , "." ,  "" );
				$plazo = number_format ( $resultado[Plazo], 0 , "." ,  "" );
				//fórmula de plazo fijo
				$f1 = bcpow(bcadd("1", $interesAnual,2), $plazo,10);
				$pagoFijo = bcmul ( $monto , bcdiv(bcmul($interesAnual, $f1,10), bcsub($f1, 1,10),10),10);
				$Rfinal = "0";
				//contrucción de la tabla 
				for($i =0; $i <= $resultado[Plazo]; $i++){
					if($i == 0){
						$this->deuda[0]=array("0",$monto,"0","0","0");
					}else {
						$interes = bcmul($this->deuda[$i-1][1], $interesAnual,10);
						$pagoCap = bcsub($pagoFijo, $interes,10);
						$montoRedu = bcsub($this->deuda[$i-1][1], $pagoCap,10);
						$this->deuda[$i]=array(strval($i),$montoRedu,$pagoFijo,$interes,$pagoCap);
						$Rfinal = bcadd($Rfinal, $pagoCap,10);
					}
				}
				$this->deuda[$resultado[Plazo]+1]=array("--","--","--","--",$Rfinal);					

				insertDeuda($resultado[Plazo]);
				$this->db->close();
				return json_encode($this->deuda);
			}else 
				return "Hubo un problema inesperada";
        } else {
            // Si la consulta NO se ejecuta imprime el error
            printf($this->db->error);
            return "error";
        }
	}

	public function insertDeuda($plazo){
		for($i = 0; $i <= $plazo ; $i++){
			$query = "INSERT INTO tabla_deuda09 VALUES(".$this->id_proyecto.", ". $i .",CAST('".$this->deuda[$i][1]."' as DECIMAL(19,4)), 
				CAST('".$this->deuda[$i][2]."' as DECIMAL(19,4)), CAST('".$this->deuda[$i][3]."' as DECIMAL(19,4)),
				CAST('".$this->deuda[$i][4]."' as DECIMAL(19,4)));";
			if ($result = $this->db->query($query)) {        	
            	continue;
        	} else {
        		error_log($this->db->error, 0);
        	}
		}
		
	}
}
?>