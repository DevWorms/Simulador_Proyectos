<?php

class Descuento {

	private $descuento;    
    private $conn;

    public function __construct($descuento){

    	$this->conn = new Connector();


    	$this->descuento = $this->conn->sec($descuento);
    }


    public function __destruct() {

    	$this->conn = "";


        $this->descuento = "";
    }


    public function insert_Descuento() {


    	$query = "INSERT INTO tasa_11(ID_proyecto, Tasa) VALUES ('".$_SESSION['proyecto_id']."','".$this->descuento."')"; 
        return $this->conn->execute($query);

    }

}

?>