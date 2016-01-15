<?php

class Impuesto {

	private $impuesto;
	private $porcentaje;
	private $concepto;    
    private $conn;

    public function __construct($impuesto, $porcentaje, $concepto){

    	$this->conn = new Connector();


    	$this->impuesto = $this->conn->sec($impuesto);
    	$this->porcentaje = $this->conn->sec($porcentaje);
    	$this->concepto = $this->conn->sec($concepto);
    }


    public function __destruct() {

    	$this->conn = "";


        $this->impuesto = "";
        $this->porcentaje = "";
        $this->concepto = "";
    }


    public function insert_Impuesto() {


    	$query = "INSERT INTO impustos_10(ID_proyecto, Tipo, Porcentaje, Concepto) VALUES ('".$_SESSION['proyecto_id']."','".$this->impuesto."','".$this->porcentaje."','".$this->concepto."')"; 
        return $this->conn->execute($query);

    }

}

?>