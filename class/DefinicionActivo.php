<?php
class DefinicionActivoA {

    private $concepto1;
    private $concepto2;
    private $concepto3;
    private $concepto4;
    private $concepto5;
    private $concepto6;
    private $concepto7;
    private $unidad1;
    private $unidad2;
    private $unidad3;
    private $unidad4;
    private $unidad5;
    private $unidad6;
    private $unidad7;
    private $cantidad1;
    private $cantidad2;
    private $cantidad3;
    private $cantidad4;
    private $cantidad5;
    private $cantidad6;
    private $cantidad7;
    private $precio1;
    private $precio2;
    private $precio3;
    private $precio4;
    private $precio5;
    private $precio6;
    private $precio7;
    private $total1;
    private $total2;
    private $total3;
    private $total4;
    private $total5;
    private $total6;
    private $total7;
    private $conn;
    private $proyecto_id;

    //hola
    public function __construct($concepto1, $concepto2, $concepto3, $concepto4, 
            $concepto5, $concepto6, $concepto7, $unidad1, $unidad2, $unidad3, 
            $unidad4, $unidad5, $unidad6, $unidad7, $cantidad1, $cantidad2, 
            $cantidad3, $cantidad4, $cantidad5, $cantidad6, $cantidad7, 
            $precio1, $precio2, $precio3, $precio4, $precio5, $precio6, 
            $precio7, $total1, $total2, $total3, $total4, $total5, $total6, 
            $total7, $proyecto_id) {

        $this->conn = new Connector();
        $this->proyecto_id = $proyecto_id;

        $this->concepto1 = $this->conn->sec($concepto1);
        $this->concepto2 = $this->conn->sec($concepto2);
        $this->concepto3 = $this->conn->sec($concepto3);
        $this->concepto4 = $this->conn->sec($concepto4);
        $this->concepto5 = $this->conn->sec($concepto5);
        $this->concepto6 = $this->conn->sec($concepto6);
        $this->concepto7 = $this->conn->sec($concepto7);

        $this->unidad1 = $this->conn->sec($unidad1);
        $this->unidad2 = $this->conn->sec($unidad2);
        $this->unidad3 = $this->conn->sec($unidad3);
        $this->unidad4 = $this->conn->sec($unidad4);
        $this->unidad5 = $this->conn->sec($unidad5);
        $this->unidad6 = $this->conn->sec($unidad6);
        $this->unidad7 = $this->conn->sec($unidad7);

        $this->cantidad1 = $this->conn->sec($cantidad1);
        $this->cantidad2 = $this->conn->sec($cantidad2);
        $this->cantidad3 = $this->conn->sec($cantidad3);
        $this->cantidad4 = $this->conn->sec($cantidad4);
        $this->cantidad5 = $this->conn->sec($cantidad5);
        $this->cantidad6 = $this->conn->sec($cantidad6);
        $this->cantidad7 = $this->conn->sec($cantidad7);

        $this->precio1 = $this->conn->sec($precio1);
        $this->precio2 = $this->conn->sec($precio2);
        $this->precio3 = $this->conn->sec($precio3);
        $this->precio4 = $this->conn->sec($precio4);
        $this->precio5 = $this->conn->sec($precio5);
        $this->precio6 = $this->conn->sec($precio6);
        $this->precio7 = $this->conn->sec($precio7);

        $this->total1 = $this->conn->sec($total1);
        $this->total2 = $this->conn->sec($total2);
        $this->total3 = $this->conn->sec($total3);
        $this->total4 = $this->conn->sec($total4);
        $this->total5 = $this->conn->sec($total5);
        $this->total6 = $this->conn->sec($total6);
        $this->total7 = $this->conn->sec($total7);
    }

    public function __destruct() {
        $this->concepto1 = "";
        $this->concepto2 = "";
        $this->concepto3 = "";
        $this->concepto4 = "";
        $this->concepto5 = "";
        $this->concepto6 = "";
        $this->concepto7 = "";

        $this->unidad1 = "";
        $this->unidad2 = "";
        $this->unidad3 = "";
        $this->unidad4 = "";
        $this->unidad5 = "";
        $this->unidad6 = "";
        $this->unidad7 = "";

        $this->cantidad1 = "";
        $this->cantidad2 = "";
        $this->cantidad3 = "";
        $this->cantidad4 = "";
        $this->cantidad5 = "";
        $this->cantidad6 = "";
        $this->cantidad7 = "";

        $this->precio1 = "";
        $this->precio2 = "";
        $this->precio3 = "";
        $this->precio4 = "";
        $this->precio5 = "";
        $this->precio6 = "";
        $this->precio7 = "";

        $this->total1 = "";
        $this->total2 = "";
        $this->total3 = "";
        $this->total4 = "";
        $this->total5 = "";
        $this->total6 = "";
        $this->total7 = "";
    }

    public function insert_DefinicionActivoA() {

        $query = "INSERT INTO  inv_activos05a (
                ID_proyecto, Concepto, Unidad, Cantidad, Precio, Total)
                VALUES ('" . $this->proyecto_id . "',  '" . $this->concepto1 . "',  '" . $this->unidad1 . "',  " . $this->cantidad1 . ",  " . $this->precio1 . ",  " . $this->total1 . "),
                       ('" . $this->proyecto_id . "',  '" . $this->concepto2 . "',  '" . $this->unidad2 . "',  " . $this->cantidad2 . ",  " . $this->precio2 . ",  " . $this->total2 . "),
                       ('" . $this->proyecto_id . "',  '" . $this->concepto3 . "',  '" . $this->unidad3 . "',  " . $this->cantidad3 . ",  " . $this->precio3 . ",  " . $this->total3 . "),
                       ('" . $this->proyecto_id . "',  '" . $this->concepto4 . "',  '" . $this->unidad4 . "',  " . $this->cantidad4 . ",  " . $this->precio4 . ",  " . $this->total4 . "),
                       ('" . $this->proyecto_id . "',  '" . $this->concepto5 . "',  '" . $this->unidad5 . "',  " . $this->cantidad5 . ",  " . $this->precio5 . ",  " . $this->total5 . "),
                       ('" . $this->proyecto_id . "',  '" . $this->concepto6 . "',  '" . $this->unidad6 . "',  " . $this->cantidad6 . ",  " . $this->precio6 . ",  " . $this->total6 . "),
                       ('" . $this->proyecto_id . "',  '" . $this->concepto7 . "',  '" . $this->unidad7 . "',  " . $this->cantidad7 . ",  " . $this->precio7 . ",  " . $this->total7 . ");";

        return $this->conn->execute($query);
    }
}

class DefinicionActivoB {

    private $monto1;
    private $monto2;
    private $monto3;
    private $monto4;
    private $concepto1b;
    private $concepto2b;
    private $concepto3b;
    private $concepto4b;
    private $conn;
    private $proyecto_id;

    public function __construct($concepto1b, $concepto2b, $concepto3b, $concepto4b, $monto1, $monto2, $monto3, $monto4, $proyecto_id) {
        $this->conn = new Connector();
        $this->proyecto_id = $proyecto_id;
        
        $this->monto1 = $this->conn->sec($monto1);
        $this->monto2 = $this->conn->sec($monto2);
        $this->monto3 = $this->conn->sec($monto3);
        $this->monto4 = $this->conn->sec($monto4);

        $this->concepto1b = $this->conn->sec($concepto1b);
        $this->concepto2b = $this->conn->sec($concepto2b);
        $this->concepto3b = $this->conn->sec($concepto3b);
        $this->concepto4b = $this->conn->sec($concepto4b);
    }

    public function __destruct() {
        $this->conn = "";
        $this->proyecto_id = "";
        
        $this->concepto1b = "";
        $this->concepto2b = "";
        $this->concepto3b = "";
        $this->concepto4b = "";

        $this->monto1 = "";
        $this->monto2 = "";
        $this->monto3 = "";
        $this->monto4 = "";
    }

    public function insert_DefinicionActivoB() {
        $query = "INSERT INTO inv_cap05b (
                ID_proyecto, Concepto, Monto)
                VALUES ('" . $this->proyecto_id . "', '" . $this->concepto1b . "',  " . $this->monto1 . "),
                       ('" . $this->proyecto_id . "', '" . $this->concepto2b . "',  " . $this->monto2 . "),
                       ('" . $this->proyecto_id . "', '" . $this->concepto3b . "',  " . $this->monto3 . "),
                       ('" . $this->proyecto_id . "', '" . $this->concepto4b . "',  " . $this->monto4 . ");";

        return $this->conn->execute($query);
    }
}

class DefinicionActivoC {

    private $capital;
    private $porcentaje1;
    private $porcentaje2;
    private $monto1;
    private $monto2;
    
    private $conn;
    private $proyecto_id;

    public function __construct($capital, $porcentaje1, $porcentaje2, $monto1, $monto2, $proyecto_id) {
        $this->conn = new Connector();
        $this->proyecto_id = $proyecto_id;
        
        $this->capital = $this->conn->sec($capital);
        $this->monto1 = $this->conn->sec($monto1);
        $this->monto2 = $this->conn->sec($monto2);
        $this->porcentaje1 = $this->conn->sec($porcentaje1);
        $this->porcentaje2 = $this->conn->sec($porcentaje2);
    }

    public function __destruct() {
        $this->conn = "";
        $this->proyecto_id = "";
        
        $this->capital = "";
        $this->monto1 = "";
        $this->monto2 = "";
        $this->porcentaje1 = "";
        $this->porcentaje2 = "";
    }

    public function insert_DefinicionActivoC() {
        $query = "INSERT INTO inv_inic05c (
                ID_proyecto, Capital, Porc_propio, Monto_propio, Porc_financ, Monto_financ)
                VALUES ('" . $this->proyecto_id . "', " . $this->capital . ", " . $this->porcentaje1 . ",  " . $this->monto1 . ", " . $this->porcentaje2 . ",  " . $this->monto2 . ");";

        return $this->conn->execute($query);
    }
}
?>