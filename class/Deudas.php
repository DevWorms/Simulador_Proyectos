<?php

class Deudas {

	private $periodo_deuda1;
	private $monto_deuda1;
	private $fijo_deuda1;
	private $interes_deuda1;
	private $capital_deuda1;
	private $periodo_deuda2;
	private $monto_deuda2;
	private $fijo_deuda2;
	private $interes_deuda2;
	private $capital_deuda2;
	private $periodo_deuda3;
	private $monto_deuda3;
	private $fijo_deuda3;
	private $interes_deuda3;
	private $capital_deuda3;
	private $periodo_deuda4;
	private $monto_deuda4;
	private $fijo_deuda4;
	private $interes_deuda4;
	private $capital_deuda4;
	private $periodo_deuda5;
	private $monto_deuda5;
	private $fijo_deuda5;
	private $interes_deuda5;
	private $capital_deuda5;
    private $conn;

    public function __construct($periodo_deuda1, $monto_deuda1, $fijo_deuda1, $interes_deuda1, $capital_deuda1, 
                            $periodo_deuda2, $monto_deuda2, $fijo_deuda2, $interes_deuda2, $capital_deuda2,
                            $periodo_deuda3, $monto_deuda3, $fijo_deuda3, $interes_deuda3, $capital_deuda3,
                            $periodo_deuda4, $monto_deuda4, $fijo_deuda4, $interes_deuda4, $capital_deuda4,
                            $periodo_deuda5, $monto_deuda5, $fijo_deuda5, $interes_deuda5, $capital_deuda5){

    	$this->conn = new Connector();


    	$this->periodo_deuda1 = $this->conn->sec($periodo_deuda1);
    	$this->monto_deuda1 = $this->conn->sec($monto_deuda1);
    	$this->fijo_deuda1 = $this->conn->sec($fijo_deuda1);
    	$this->interes_deuda1 = $this->conn->sec($interes_deuda1);
    	$this->capital_deuda1 = $this->conn->sec($capital_deuda1);

        $this->periodo_deuda2 = $this->conn->sec($periodo_deuda2);
        $this->monto_deuda2 = $this->conn->sec($monto_deuda2);
        $this->fijo_deuda2 = $this->conn->sec($fijo_deuda2);
        $this->interes_deuda2 = $this->conn->sec($interes_deuda2);
        $this->capital_deuda2 = $this->conn->sec($capital_deuda2);

        $this->periodo_deuda3 = $this->conn->sec($periodo_deuda3);
        $this->monto_deuda3 = $this->conn->sec($monto_deuda3);
        $this->fijo_deuda3 = $this->conn->sec($fijo_deuda3);
        $this->interes_deuda3 = $this->conn->sec($interes_deuda3);
        $this->capital_deuda3 = $this->conn->sec($capital_deuda3);

        $this->periodo_deuda4 = $this->conn->sec($periodo_deuda4);
        $this->monto_deuda4 = $this->conn->sec($monto_deuda4);
        $this->fijo_deuda4 = $this->conn->sec($fijo_deuda4);
        $this->interes_deuda4 = $this->conn->sec($interes_deuda4);
        $this->capital_deuda4 = $this->conn->sec($capital_deuda4);

        $this->periodo_deuda5 = $this->conn->sec($periodo_deuda5);
        $this->monto_deuda5 = $this->conn->sec($monto_deuda5);
        $this->fijo_deuda5 = $this->conn->sec($fijo_deuda5);
        $this->interes_deuda5 = $this->conn->sec($interes_deuda5);
        $this->capital_deuda5 = $this->conn->sec($capital_deuda5);
    }

    public function __destruct() {

    	$this->conn = "";

        $this->periodo_deuda1 = "";
        $this->monto_deuda1 = "";
        $this->fijo_deuda1 = "";
        $this->interes_deuda1 = "";
        $this->capital_deuda1 = "";

        $this->periodo_deuda2 = "";
        $this->monto_deuda2 = "";
        $this->fijo_deuda2 = "";
        $this->interes_deuda2 = "";
        $this->capital_deuda2 = "";

        $this->periodo_deuda3 = "";
        $this->monto_deuda3 = "";
        $this->fijo_deuda3 = "";
        $this->interes_deuda3 = "";
        $this->capital_deuda3 = "";

        $this->periodo_deuda4 = "";
        $this->monto_deuda4 = "";
        $this->fijo_deuda4 = "";
        $this->interes_deuda4 = "";
        $this->capital_deuda4 = "";

        $this->periodo_deuda5 = "";
        $this->monto_deuda5 = "";
        $this->fijo_deuda5 = "";
        $this->interes_deuda5 = "";
        $this->capital_deuda5 = "";
    }

    public function insert_Deudas() {


    	$query = "INSERT INTO tabla_deuda09(ID_proyecto, Periodo, Monto, Pago_fijo, Interes, Pago_capital) VALUES 
                   
        ('".$_SESSION['proyecto_id']."','".$this->periodo_deuda1."','".$this->monto_deuda1."','".$this->fijo_deuda1."','".$this->interes_deuda1."','".$this->capital_deuda1."'),
        ('".$_SESSION['proyecto_id']."','".$this->periodo_deuda2."','".$this->monto_deuda2."','".$this->fijo_deuda2."','".$this->interes_deuda2."','".$this->capital_deuda2."'),
        ('".$_SESSION['proyecto_id']."','".$this->periodo_deuda3."','".$this->monto_deuda3."','".$this->fijo_deuda3."','".$this->interes_deuda3."','".$this->capital_deuda3."'),
        ('".$_SESSION['proyecto_id']."','".$this->periodo_deuda4."','".$this->monto_deuda4."','".$this->fijo_deuda4."','".$this->interes_deuda4."','".$this->capital_deuda4."'),
        ('".$_SESSION['proyecto_id']."','".$this->periodo_deuda5."','".$this->monto_deuda5."','".$this->fijo_deuda5."','".$this->interes_deuda5."','".$this->capital_deuda5."')"; 
        

        return $this->conn->execute($query);

    }
}

?>