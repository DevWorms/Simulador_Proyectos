<?php

class proyDemandaEsperada {

    private $proyDemandaEsperada_Per1;
    private $proyDemandaEsperada_Per2;
    private $proyDemandaEsperada_Per3;
    private $proyDemandaEsperada_Per4;
    private $proyDemandaEsperada_Per5;
    private $proyDemandaEsperada_VtasE1;
    private $proyDemandaEsperada_VtasE2;
    private $proyDemandaEsperada_VtasE3;
    private $proyDemandaEsperada_VtasE4;
    private $proyDemandaEsperada_VtasE5;
    private $proyDemandaEsperada_PrecioVta1;
    private $proyDemandaEsperada_PrecioVta2;
    private $proyDemandaEsperada_PrecioVta3;
    private $proyDemandaEsperada_PrecioVta4;
    private $proyDemandaEsperada_PrecioVta5;
    private $proyDemandaEsperada_VtasED1;
    private $proyDemandaEsperada_VtasED2;
    private $proyDemandaEsperada_VtasED3;
    private $proyDemandaEsperada_VtasED4;
    private $proyDemandaEsperada_VtasED5;
    private $proyDemandaEsperada_VtasEP1;
    private $proyDemandaEsperada_VtasEP2;
    private $proyDemandaEsperada_VtasEP3;
    private $proyDemandaEsperada_VtasEP4;
    private $proyDemandaEsperada_VtasEP5;
    private $proyDemandaEsperada_Monto1;
    private $proyDemandaEsperada_Monto2;
    private $proyDemandaEsperada_Monto3;
    private $proyDemandaEsperada_Monto4;
    private $proyDemandaEsperada_Monto5;
    private $proyDemandaEsperada_VtasEP21;
    private $proyDemandaEsperada_VtasEP22;
    private $proyDemandaEsperada_VtasEP23;
    private $proyDemandaEsperada_VtasEP24;
    private $proyDemandaEsperada_VtasEP25;
    private $proyDemandaEsperada_Monto21;
    private $proyDemandaEsperada_Monto22;
    private $proyDemandaEsperada_Monto23;
    private $proyDemandaEsperada_Monto24;
    private $proyDemandaEsperada_Monto25;
    private $id_proyecto;
    private $conn;

    public function __construct($proyDemandaEsperada_Per1, $proyDemandaEsperada_Per2, $proyDemandaEsperada_Per3, $proyDemandaEsperada_Per4, $proyDemandaEsperada_Per5, $proyDemandaEsperada_VtasE1, $proyDemandaEsperada_VtasE2, $proyDemandaEsperada_VtasE3, $proyDemandaEsperada_VtasE4, $proyDemandaEsperada_VtasE5, $proyDemandaEsperada_PrecioVta1, $proyDemandaEsperada_PrecioVta2, $proyDemandaEsperada_PrecioVta3, $proyDemandaEsperada_PrecioVta4, $proyDemandaEsperada_PrecioVta5, $proyDemandaEsperada_VtasED1, $proyDemandaEsperada_VtasED2, $proyDemandaEsperada_VtasED3, $proyDemandaEsperada_VtasED4, $proyDemandaEsperada_VtasED5, $proyDemandaEsperada_VtasEP1, $proyDemandaEsperada_VtasEP2, $proyDemandaEsperada_VtasEP3, $proyDemandaEsperada_VtasEP4, $proyDemandaEsperada_VtasEP5, $proyDemandaEsperada_Monto1, $proyDemandaEsperada_Monto2, $proyDemandaEsperada_Monto3, $proyDemandaEsperada_Monto4, $proyDemandaEsperada_Monto5, $proyDemandaEsperada_VtasEP21, $proyDemandaEsperada_VtasEP22, $proyDemandaEsperada_VtasEP23, $proyDemandaEsperada_VtasEP24, $proyDemandaEsperada_VtasEP25, $proyDemandaEsperada_Monto21, $proyDemandaEsperada_Monto22, $proyDemandaEsperada_Monto23, $proyDemandaEsperada_Monto24, $proyDemandaEsperada_Monto21, $id_proyecto) {

        $this->conn = new Connector();

        $this->proyDemandaEsperada_Per1 = $this->conn->sec($proyDemandaEsperada_Per1);
        $this->proyDemandaEsperada_Per2 = $this->conn->sec($proyDemandaEsperada_Per2);
        $this->proyDemandaEsperada_Per3 = $this->conn->sec($proyDemandaEsperada_Per3);
        $this->proyDemandaEsperada_Per4 = $this->conn->sec($proyDemandaEsperada_Per4);
        $this->proyDemandaEsperada_Per5 = $this->conn->sec($proyDemandaEsperada_Per5);

        $this->proyDemandaEsperada_VtasE1 = $this->conn->sec($proyDemandaEsperada_VtasE1);
        $this->proyDemandaEsperada_VtasE2 = $this->conn->sec($proyDemandaEsperada_VtasE2);
        $this->proyDemandaEsperada_VtasE3 = $this->conn->sec($proyDemandaEsperada_VtasE3);
        $this->proyDemandaEsperada_VtasE4 = $this->conn->sec($proyDemandaEsperada_VtasE4);
        $this->proyDemandaEsperada_VtasE5 = $this->conn->sec($proyDemandaEsperada_VtasE5);

        $this->proyDemandaEsperada_PrecioVta1 = $this->conn->sec($proyDemandaEsperada_PrecioVta1);
        $this->proyDemandaEsperada_PrecioVta2 = $this->conn->sec($proyDemandaEsperada_PrecioVta2);
        $this->proyDemandaEsperada_PrecioVta3 = $this->conn->sec($proyDemandaEsperada_PrecioVta3);
        $this->proyDemandaEsperada_PrecioVta4 = $this->conn->sec($proyDemandaEsperada_PrecioVta4);
        $this->proyDemandaEsperada_PrecioVta5 = $this->conn->sec($proyDemandaEsperada_PrecioVta5);

        $this->proyDemandaEsperada_VtasED1 = $this->conn->sec($proyDemandaEsperada_VtasED1);
        $this->proyDemandaEsperada_VtasED2 = $this->conn->sec($proyDemandaEsperada_VtasED2);
        $this->proyDemandaEsperada_VtasED3 = $this->conn->sec($proyDemandaEsperada_VtasED3);
        $this->proyDemandaEsperada_VtasED4 = $this->conn->sec($proyDemandaEsperada_VtasED4);
        $this->proyDemandaEsperada_VtasED5 = $this->conn->sec($proyDemandaEsperada_VtasED5);

        $this->proyDemandaEsperada_VtasEP1 = $this->conn->sec($proyDemandaEsperada_VtasEP1);
        $this->proyDemandaEsperada_VtasEP2 = $this->conn->sec($proyDemandaEsperada_VtasEP2);
        $this->proyDemandaEsperada_VtasEP3 = $this->conn->sec($proyDemandaEsperada_VtasEP3);
        $this->proyDemandaEsperada_VtasEP4 = $this->conn->sec($proyDemandaEsperada_VtasEP4);
        $this->proyDemandaEsperada_VtasEP5 = $this->conn->sec($proyDemandaEsperada_VtasEP5);

        $this->proyDemandaEsperada_Monto1 = $this->conn->sec($proyDemandaEsperada_Monto1);
        $this->proyDemandaEsperada_Monto2 = $this->conn->sec($proyDemandaEsperada_Monto2);
        $this->proyDemandaEsperada_Monto3 = $this->conn->sec($proyDemandaEsperada_Monto3);
        $this->proyDemandaEsperada_Monto4 = $this->conn->sec($proyDemandaEsperada_Monto4);
        $this->proyDemandaEsperada_Monto5 = $this->conn->sec($proyDemandaEsperada_Monto5);

        $this->proyDemandaEsperada_VtasEP21 = $this->conn->sec($proyDemandaEsperada_VtasEP21);
        $this->proyDemandaEsperada_VtasEP22 = $this->conn->sec($proyDemandaEsperada_VtasEP22);
        $this->proyDemandaEsperada_VtasEP23 = $this->conn->sec($proyDemandaEsperada_VtasEP23);
        $this->proyDemandaEsperada_VtasEP24 = $this->conn->sec($proyDemandaEsperada_VtasEP24);
        $this->proyDemandaEsperada_VtasEP25 = $this->conn->sec($proyDemandaEsperada_VtasEP25);

        $this->proyDemandaEsperada_Monto21 = $this->conn->sec($proyDemandaEsperada_Monto21);
        $this->proyDemandaEsperada_Monto22 = $this->conn->sec($proyDemandaEsperada_Monto22);
        $this->proyDemandaEsperada_Monto23 = $this->conn->sec($proyDemandaEsperada_Monto23);
        $this->proyDemandaEsperada_Monto24 = $this->conn->sec($proyDemandaEsperada_Monto24);
        $this->proyDemandaEsperada_Monto25 = $this->conn->sec($proyDemandaEsperada_Monto25);

        $this->id_proyecto = $this->conn->sec($id_proyecto);
    }

    public function __destruct() {

        $this->conn = "";

        $this->proyDemandaEsperada_Per1 = '';
        $this->proyDemandaEsperada_Per2 = '';
        $this->proyDemandaEsperada_Per3 = '';
        $this->proyDemandaEsperada_Per4 = '';
        $this->proyDemandaEsperada_Per5 = '';

        $this->proyDemandaEsperada_VtasE1 = '';
        $this->proyDemandaEsperada_VtasE2 = '';
        $this->proyDemandaEsperada_VtasE3 = '';
        $this->proyDemandaEsperada_VtasE4 = '';
        $this->proyDemandaEsperada_VtasE5 = '';

        $this->proyDemandaEsperada_PrecioVta1 = '';
        $this->proyDemandaEsperada_PrecioVta2 = '';
        $this->proyDemandaEsperada_PrecioVta3 = '';
        $this->proyDemandaEsperada_PrecioVta4 = '';
        $this->proyDemandaEsperada_PrecioVta5 = '';

        $this->proyDemandaEsperada_VtasED1 = '';
        $this->proyDemandaEsperada_VtasED2 = '';
        $this->proyDemandaEsperada_VtasED3 = '';
        $this->proyDemandaEsperada_VtasED4 = '';
        $this->proyDemandaEsperada_VtasED5 = '';

        $this->proyDemandaEsperada_VtasEP1 = '';
        $this->proyDemandaEsperada_VtasEP2 = '';
        $this->proyDemandaEsperada_VtasEP3 = '';
        $this->proyDemandaEsperada_VtasEP4 = '';
        $this->proyDemandaEsperada_VtasEP5 = '';

        $this->proyDemandaEsperada_Monto1 = '';
        $this->proyDemandaEsperada_Monto2 = '';
        $this->proyDemandaEsperada_Monto3 = '';
        $this->proyDemandaEsperada_Monto4 = '';
        $this->proyDemandaEsperada_Monto5 = '';

        $this->proyDemandaEsperada_VtasEP21 = '';
        $this->proyDemandaEsperada_VtasEP22 = '';
        $this->proyDemandaEsperada_VtasEP23 = '';
        $this->proyDemandaEsperada_VtasEP24 = '';
        $this->proyDemandaEsperada_VtasEP25 = '';

        $this->proyDemandaEsperada_Monto21 = '';
        $this->proyDemandaEsperada_Monto22 = '';
        $this->proyDemandaEsperada_Monto23 = '';
        $this->proyDemandaEsperada_Monto24 = '';
        $this->proyDemandaEsperada_Monto25 = '';

        $this->id_proyecto = "";
    }

    public function insert_proyDemandaEsperada() {

        $query = "INSERT INTO proy_dem04 (ID_proyecto, ID_perido, Ventas_pza, 
                Precio_venta, Ventas_dinero, Porc_contado, Monto_contado, 
                Porc_credito, Monto_credito) VALUES
                ('".$this->id_proyecto."',  '".$this->proyDemandaEsperada_Per1."',  '".$this->proyDemandaEsperada_VtasE1."',  '".$this->proyDemandaEsperada_PrecioVta1."',  '".$this->proyDemandaEsperada_VtasED1."',  '".$this->proyDemandaEsperada_VtasEP1."',  '".$this->proyDemandaEsperada_Monto1."',  '".$this->proyDemandaEsperada_VtasEP21."',  '".$this->proyDemandaEsperada_Monto21."'),
                ('".$this->id_proyecto."',  '".$this->proyDemandaEsperada_Per2."',  '".$this->proyDemandaEsperada_VtasE1."',  '".$this->proyDemandaEsperada_PrecioVta1."',  '".$this->proyDemandaEsperada_VtasED1."',  '".$this->proyDemandaEsperada_VtasEP1."',  '".$this->proyDemandaEsperada_Monto1."',  '".$this->proyDemandaEsperada_VtasEP21."',  '".$this->proyDemandaEsperada_Monto22."'),
                ('".$this->id_proyecto."',  '".$this->proyDemandaEsperada_Per3."',  '".$this->proyDemandaEsperada_VtasE1."',  '".$this->proyDemandaEsperada_PrecioVta1."',  '".$this->proyDemandaEsperada_VtasED1."',  '".$this->proyDemandaEsperada_VtasEP1."',  '".$this->proyDemandaEsperada_Monto1."',  '".$this->proyDemandaEsperada_VtasEP21."',  '".$this->proyDemandaEsperada_Monto23."'),
                ('".$this->id_proyecto."',  '".$this->proyDemandaEsperada_Per4."',  '".$this->proyDemandaEsperada_VtasE1."',  '".$this->proyDemandaEsperada_PrecioVta1."',  '".$this->proyDemandaEsperada_VtasED1."',  '".$this->proyDemandaEsperada_VtasEP1."',  '".$this->proyDemandaEsperada_Monto1."',  '".$this->proyDemandaEsperada_VtasEP21."',  '".$this->proyDemandaEsperada_Monto24."'),
                ('".$this->id_proyecto."',  '".$this->proyDemandaEsperada_Per5."',  '".$this->proyDemandaEsperada_VtasE1."',  '".$this->proyDemandaEsperada_PrecioVta1."',  '".$this->proyDemandaEsperada_VtasED1."',  '".$this->proyDemandaEsperada_VtasEP1."',  '".$this->proyDemandaEsperada_Monto1."',  '".$this->proyDemandaEsperada_VtasEP21."',  '".$this->proyDemandaEsperada_Monto25."');";

        return $this->conn->execute($query);
    }

}

?>