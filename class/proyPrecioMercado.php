<?php

class proyPrecioMercado {

	private $proyMerc_per1;
	private $proyMerc_per2;
	private $proyMerc_per3;
	private $proyMerc_per4;
	private $proyMerc_per5;
	private $proyMerc_univenta1;
	private $proyMerc_univenta2;
	private $proyMerc_univenta3;
	private $proyMerc_univenta4;
	private $proyMerc_univenta5;
	private $proyMerc_precio1;
	private $proyMerc_precio2;
	private $proyMerc_precio3;
	private $proyMerc_precio4;
	private $proyMerc_precio5;
	private $proyMerc_inflacion1;
	private $proyMerc_inflacion2;
	private $proyMerc_inflacion3;
	private $proyMerc_inflacion4;
	private $proyMerc_inflacion5;
	private $proyMerc_pventa1;
	private $proyMerc_pventa2;
	private $proyMerc_pventa3;
	private $proyMerc_pventa4;
	private $proyMerc_pventa5;
    private $conn;

    public function __construct($proyMerc_per1,$proyMerc_per2,$proyMerc_per3,$proyMerc_per4,$proyMerc_per5,
        $proyMerc_univenta1,$proyMerc_univenta2,$proyMerc_univenta3,$proyMerc_univenta4,$proyMerc_univenta5,
        $proyMerc_precio1,$proyMerc_precio2,$proyMerc_precio3,$proyMerc_precio4,$proyMerc_precio5,
        $proyMerc_inflacion1,$proyMerc_inflacion2,$proyMerc_inflacion3,$proyMerc_inflacion4,$proyMerc_inflacion5,
        $proyMerc_pventa1,$proyMerc_pventa2,$proyMerc_pventa3,$proyMerc_pventa4,$proyMerc_pventa5){

    	$this->conn = new Connector();


    	$this->proyMerc_per1 = $this->conn->sec($proyMerc_per1);
    	$this->proyMerc_per2 = $this->conn->sec($proyMerc_per2);
    	$this->proyMerc_per3 = $this->conn->sec($proyMerc_per3);
    	$this->proyMerc_per4 = $this->conn->sec($proyMerc_per4);
    	$this->proyMerc_per5 = $this->conn->sec($proyMerc_per5);

    	$this->proyMerc_univenta1 = $this->conn->sec($proyMerc_univenta1);
    	$this->proyMerc_univenta2 = $this->conn->sec($proyMerc_univenta2);
    	$this->proyMerc_univenta3 = $this->conn->sec($proyMerc_univenta3);
    	$this->proyMerc_univenta4 = $this->conn->sec($proyMerc_univenta4);
    	$this->proyMerc_univenta5 = $this->conn->sec($proyMerc_univenta5);

    	$this->proyMerc_precio1 = $this->conn->sec($proyMerc_precio1);
    	$this->proyMerc_precio2 = $this->conn->sec($proyMerc_precio2);
    	$this->proyMerc_precio3 = $this->conn->sec($proyMerc_precio3);
    	$this->proyMerc_precio4 = $this->conn->sec($proyMerc_precio4);
    	$this->proyMerc_precio5 = $this->conn->sec($proyMerc_precio5);

    	$this->proyMerc_inflacion1 = $this->conn->sec($proyMerc_inflacion1);
    	$this->proyMerc_inflacion2 = $this->conn->sec($proyMerc_inflacion2);
    	$this->proyMerc_inflacion3 = $this->conn->sec($proyMerc_inflacion3);
    	$this->proyMerc_inflacion4 = $this->conn->sec($proyMerc_inflacion4);
    	$this->proyMerc_inflacion5 = $this->conn->sec($proyMerc_inflacion5);    	

    	$this->proyMerc_pventa1 = $this->conn->sec($proyMerc_pventa1);
    	$this->proyMerc_pventa2 = $this->conn->sec($proyMerc_pventa2);
    	$this->proyMerc_pventa3 = $this->conn->sec($proyMerc_pventa3);
    	$this->proyMerc_pventa4 = $this->conn->sec($proyMerc_pventa4);
    	$this->proyMerc_pventa5 = $this->conn->sec($proyMerc_pventa5);
    }

    public function __destruct() {

    	$this->conn = "";

    	$this->proyMerc_per1 = "";
    	$this->proyMerc_per2 = "";
    	$this->proyMerc_per3 = "";
    	$this->proyMerc_per4 = "";
    	$this->proyMerc_per5 = "";

    	$this->proyMerc_univenta1 = "";
    	$this->proyMerc_univenta2 = "";
    	$this->proyMerc_univenta3 = "";
    	$this->proyMerc_univenta4 = "";
    	$this->proyMerc_univenta5 = "";

    	$this->proyMerc_precio1 = "";
    	$this->proyMerc_precio2 = "";
    	$this->proyMerc_precio3 = "";
    	$this->proyMerc_precio4 = "";
    	$this->proyMerc_precio5 = "";

    	$this->proyMerc_inflacion1 = "";
    	$this->proyMerc_inflacion2 = "";
    	$this->proyMerc_inflacion3 = "";
    	$this->proyMerc_inflacion4 = "";
    	$this->proyMerc_inflacion5 = "";    	

    	$this->proyMerc_pventa1 = "";
    	$this->proyMerc_pventa2 = "";
    	$this->proyMerc_pventa3 = "";
    	$this->proyMerc_pventa4 = "";
    	$this->proyMerc_pventa5 = "";
    }

    public function insert_proyPrecMerc() {


    	$query = "INSERT INTO proy_merc03(ID_proyecto, ID_periodo, Unidad_venta, 
                Precio, Inflacion, Precio_venta) VALUES
            
        ('".$_SESSION['proyecto_id']."','".$this->proyMerc_per1."','".$this->proyMerc_univenta1."','".$this->proyMerc_precio1."','".$this->proyMerc_inflacion1."','".$this->proyMerc_pventa1."'),
        ('".$_SESSION['proyecto_id']."','".$this->proyMerc_per2."','".$this->proyMerc_univenta2."','".$this->proyMerc_precio2."','".$this->proyMerc_inflacion2."','".$this->proyMerc_pventa2."'),
        ('".$_SESSION['proyecto_id']."','".$this->proyMerc_per3."','".$this->proyMerc_univenta3."','".$this->proyMerc_precio3."','".$this->proyMerc_inflacion3."','".$this->proyMerc_pventa3."'),
        ('".$_SESSION['proyecto_id']."','".$this->proyMerc_per4."','".$this->proyMerc_univenta4."','".$this->proyMerc_precio4."','".$this->proyMerc_inflacion4."','".$this->proyMerc_pventa4."'),
        ('".$_SESSION['proyecto_id']."','".$this->proyMerc_per5."','".$this->proyMerc_univenta5."','".$this->proyMerc_precio5."','".$this->proyMerc_inflacion5."','".$this->proyMerc_pventa5."')"; 


        return $this->conn->execute($query);

    }
}

?>