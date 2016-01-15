<?php

class Costos {

	private $periodo_costos1;
    private $periodo_costos2;
    private $periodo_costos3;
    private $periodo_costos4;
    private $periodo_costos5;
    private $ventas_costos1;
    private $ventas_costos2;
    private $ventas_costos3;
    private $ventas_costos4;
    private $ventas_costos5;
    private $utilidad_costos1;
    private $utilidad_costos2;
    private $utilidad_costos3;
    private $utilidad_costos4;
    private $utilidad_costos5;    
    private $total_costos1;
    private $total_costos2;
    private $total_costos3;
    private $total_costos4;
    private $total_costos5;    
    private $porc_prod_costos1;
    private $porc_prod_costos2;
    private $porc_prod_costos3;
    private $porc_prod_costos4;
    private $porc_prod_costos5;    
    private $produccion_costos1;
    private $produccion_costos2;
    private $produccion_costos3;
    private $produccion_costos4;
    private $produccion_costos5;    
    private $porc_admin_costos1;
    private $porc_admin_costos2;
    private $porc_admin_costos3;
    private $porc_admin_costos4;
    private $porc_admin_costos5;    
    private $admin_costos1;
    private $admin_costos2;
    private $admin_costos3;
    private $admin_costos4;
    private $admin_costos5;    
    private $porc_ventas_costos1;
    private $porc_ventas_costos2;
    private $porc_ventas_costos3;
    private $porc_ventas_costos4;
    private $porc_ventas_costos5;    
    private $g_ventas_costos1;
    private $g_ventas_costos2;
    private $g_ventas_costos3;
    private $g_ventas_costos4;
    private $g_ventas_costos5;    

    private $conn;

    public function __construct($periodo_costos1,$periodo_costos2,$periodo_costos3,$periodo_costos4,$periodo_costos5,
                        $ventas_costos1,$ventas_costos2, $ventas_costos3, $ventas_costos4, $ventas_costos5, 
                        $utilidad_costos1,$utilidad_costos2,$utilidad_costos3,$utilidad_costos4,$utilidad_costos5, 
                        $total_costos1,$total_costos2,$total_costos3,$total_costos4,$total_costos5,
                        $porc_prod_costos1,$porc_prod_costos2,$porc_prod_costos3,$porc_prod_costos4,$porc_prod_costos5, 
                        $produccion_costos1,$produccion_costos2,$produccion_costos3,$produccion_costos4,$produccion_costos5, 
                        $porc_admin_costos1,$porc_admin_costos2,$porc_admin_costos3,$porc_admin_costos4,$porc_admin_costos5, 
                        $admin_costos1,$admin_costos2,$admin_costos3,$admin_costos4,$admin_costos5,
                        $porc_ventas_costos1,$porc_ventas_costos2,$porc_ventas_costos3,$porc_ventas_costos4,$porc_ventas_costos5, 
                        $g_ventas_costos1,$g_ventas_costos2,$g_ventas_costos3,$g_ventas_costos4,$g_ventas_costos5){

    	$this->conn = new Connector();


    	$this->periodo_costos1 = $this->conn->sec($periodo_costos1);
    	$this->ventas_costos1 = $this->conn->sec($ventas_costos1);
    	$this->utilidad_costos1 = $this->conn->sec($utilidad_costos1);
    	$this->total_costos1 = $this->conn->sec($total_costos1);
    	$this->porc_prod_costos1 = $this->conn->sec($porc_prod_costos1);
        $this->produccion_costos1 = $this->conn->sec($produccion_costos1);
        $this->porc_admin_costos1 = $this->conn->sec($porc_admin_costos1);
        $this->admin_costos1 = $this->conn->sec($admin_costos1);
        $this->porc_ventas_costos1 = $this->conn->sec($porc_ventas_costos1);
        $this->g_ventas_costos1 = $this->conn->sec($g_ventas_costos1);

        $this->periodo_costos2 = $this->conn->sec($periodo_costos2);
        $this->ventas_costos2 = $this->conn->sec($ventas_costos2);
        $this->utilidad_costos2 = $this->conn->sec($utilidad_costos2);
        $this->total_costos2 = $this->conn->sec($total_costos2);
        $this->porc_prod_costos2 = $this->conn->sec($porc_prod_costos2);
        $this->produccion_costos2 = $this->conn->sec($produccion_costos2);
        $this->porc_admin_costos2 = $this->conn->sec($porc_admin_costos2);
        $this->admin_costos2 = $this->conn->sec($admin_costos2);
        $this->porc_ventas_costos2 = $this->conn->sec($porc_ventas_costos2);
        $this->g_ventas_costos2 = $this->conn->sec($g_ventas_costos2);

        $this->periodo_costos3 = $this->conn->sec($periodo_costos3);
        $this->ventas_costos3 = $this->conn->sec($ventas_costos3);
        $this->utilidad_costos3 = $this->conn->sec($utilidad_costos3);
        $this->total_costos3 = $this->conn->sec($total_costos3);
        $this->porc_prod_costos3 = $this->conn->sec($porc_prod_costos3);
        $this->produccion_costos3 = $this->conn->sec($produccion_costos3);
        $this->porc_admin_costos3 = $this->conn->sec($porc_admin_costos3);
        $this->admin_costos3 = $this->conn->sec($admin_costos3);
        $this->porc_ventas_costos3 = $this->conn->sec($porc_ventas_costos3);
        $this->g_ventas_costos3 = $this->conn->sec($g_ventas_costos3);

        $this->periodo_costos4 = $this->conn->sec($periodo_costos4);
        $this->ventas_costos4 = $this->conn->sec($ventas_costos4);
        $this->utilidad_costos4 = $this->conn->sec($utilidad_costos4);
        $this->total_costos4 = $this->conn->sec($total_costos4);
        $this->porc_prod_costos4 = $this->conn->sec($porc_prod_costos4);
        $this->produccion_costos4 = $this->conn->sec($produccion_costos4);
        $this->porc_admin_costos4 = $this->conn->sec($porc_admin_costos4);
        $this->admin_costos4 = $this->conn->sec($admin_costos4);
        $this->porc_ventas_costos4 = $this->conn->sec($porc_ventas_costos4);
        $this->g_ventas_costos4 = $this->conn->sec($g_ventas_costos4);

        $this->periodo_costos5 = $this->conn->sec($periodo_costos5);
        $this->ventas_costos5 = $this->conn->sec($ventas_costos5);
        $this->utilidad_costos5 = $this->conn->sec($utilidad_costos5);
        $this->total_costos5 = $this->conn->sec($total_costos5);
        $this->porc_prod_costos5 = $this->conn->sec($porc_prod_costos5);
        $this->produccion_costos5 = $this->conn->sec($produccion_costos5);
        $this->porc_admin_costos5 = $this->conn->sec($porc_admin_costos5);
        $this->admin_costos5 = $this->conn->sec($admin_costos5);
        $this->porc_ventas_costos5 = $this->conn->sec($porc_ventas_costos5);
        $this->g_ventas_costos5 = $this->conn->sec($g_ventas_costos5);
    }

    public function __destruct() {

    	$this->conn = "";

        $this->periodo_costos1 = "";                     
        $this->ventas_costos1 = "";                    
        $this->utilidad_costos1 = "";                        
        $this->total_costos1 = "";                   
        $this->porc_prod_costos1 = "";                       
        $this->produccion_costos1 = "";                        
        $this->porc_admin_costos1 = "";         
        $this->admin_costos1 = "";             
        $this->porc_ventas_costos1 = "";       
        $this->g_ventas_costos1 = "";

        $this->periodo_costos2 = "";                     
        $this->ventas_costos2 = "";                    
        $this->utilidad_costos2 = "";                        
        $this->total_costos2 = "";                   
        $this->porc_prod_costos2 = "";                       
        $this->produccion_costos2 = "";                        
        $this->porc_admin_costos2 = "";         
        $this->admin_costos2 = "";             
        $this->porc_ventas_costos2 = "";       
        $this->g_ventas_costos2 = "";      

        $this->periodo_costos3 = "";                     
        $this->ventas_costos3 = "";                    
        $this->utilidad_costos3 = "";                        
        $this->total_costos3 = "";                   
        $this->porc_prod_costos3 = "";                       
        $this->produccion_costos3 = "";                        
        $this->porc_admin_costos3 = "";         
        $this->admin_costos3 = "";             
        $this->porc_ventas_costos3 = "";       
        $this->g_ventas_costos3 = "";      

        $this->periodo_costos4 = "";                     
        $this->ventas_costos4 = "";                    
        $this->utilidad_costos4 = "";                        
        $this->total_costos4 = "";                   
        $this->porc_prod_costos4 = "";                       
        $this->produccion_costos4 = "";                        
        $this->porc_admin_costos4 = "";         
        $this->admin_costos4 = "";             
        $this->porc_ventas_costos4 = "";       
        $this->g_ventas_costos4 = "";      

        $this->periodo_costos5 = "";                     
        $this->ventas_costos5 = "";                    
        $this->utilidad_costos5 = "";                        
        $this->total_costos5 = "";
        $this->porc_prod_costos5 = "";                       
        $this->produccion_costos5 = "";                        
        $this->porc_admin_costos5 = "";         
        $this->admin_costos5 = "";             
        $this->porc_ventas_costos5 = "";
        $this->g_ventas_costos5 = "";            
    }

    public function insert_Costos() {


    	$query = "INSERT INTO costos_gastos12(ID_proyecto, Periodo, Ventas_esperadas, Porc_utilidad, Costo_total, Porc_cto_prod, Monto_prod, Porc_cto_admon, Monto_admon, Porc_cto_ventas, Monto_ventas) VALUES 
                   
        ('".$_SESSION['proyecto_id']."','".$this->periodo_costos1."','".$this->ventas_costos1."','".$this->utilidad_costos1."','".$this->total_costos1."','".$this->porc_prod_costos1."','".$this->produccion_costos1."','".$this->porc_admin_costos1."','".$this->admin_costos1."','".$this->porc_ventas_costos1."','".$this->g_ventas_costos1."'),
        ('".$_SESSION['proyecto_id']."','".$this->periodo_costos2."','".$this->ventas_costos2."','".$this->utilidad_costos2."','".$this->total_costos2."','".$this->porc_prod_costos2."','".$this->produccion_costos2."','".$this->porc_admin_costos2."','".$this->admin_costos2."','".$this->porc_ventas_costos2."','".$this->g_ventas_costos2."'),
        ('".$_SESSION['proyecto_id']."','".$this->periodo_costos3."','".$this->ventas_costos3."','".$this->utilidad_costos3."','".$this->total_costos3."','".$this->porc_prod_costos3."','".$this->produccion_costos3."','".$this->porc_admin_costos3."','".$this->admin_costos3."','".$this->porc_ventas_costos3."','".$this->g_ventas_costos3."'),
        ('".$_SESSION['proyecto_id']."','".$this->periodo_costos4."','".$this->ventas_costos4."','".$this->utilidad_costos4."','".$this->total_costos4."','".$this->porc_prod_costos4."','".$this->produccion_costos4."','".$this->porc_admin_costos4."','".$this->admin_costos4."','".$this->porc_ventas_costos4."','".$this->g_ventas_costos4."'),
        ('".$_SESSION['proyecto_id']."','".$this->periodo_costos5."','".$this->ventas_costos5."','".$this->utilidad_costos5."','".$this->total_costos5."','".$this->porc_prod_costos5."','".$this->produccion_costos5."','".$this->porc_admin_costos5."','".$this->admin_costos5."','".$this->porc_ventas_costos5."','".$this->g_ventas_costos5."')"; 
        
        return $this->conn->execute($query);

    }
}

?>