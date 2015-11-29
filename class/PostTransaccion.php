<?php

include('Connector.php');
include('DefinicionProyecto.php');
include('DefinicionMercado.php');
include('DefinicionActivo.php');
include('Financiamiento.php');

error_reporting(0);
session_start();
$ID = $_POST['ID_pantalla']; // con esto decide de que pantalla viene la peticion

if ($ID == "01") { //pantalla 01
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $unidad = $_POST['unidad'];
    $descripcion = $_POST['descripcion'];
    $caracterisitcas = $_POST['caracterisitcas'];
    $id_alumno = $_SESSION['Id'];
    $defProy = new DefinicionProyecto($descripcion, $tipo, $unidad, $caracterisitcas, $nombre, $id_alumno);
    echo $defProy->insert_proyectodef_01();
}

if ($ID == "02") { //pantalla 02
    $local = $_POST['local'];
    $regional = $_POST['regional'];
    $nacional = $_POST['nacional'];
    $extranjero = $_POST['extranjero'];
    $nse = $_POST['nse'];
    $escolaridad = $_POST['escolaridad'];
    $rangoedad = $_POST['rangoedad'];
    $descripcion = $_POST['descripcion'];

    $id_alumno = $_SESSION['Id'];

    $query = "SELECT MAX(ID_proyecto) FROM proyectodef_01 WHere ID_alumno=" . $id_alumno;
    $db = new Connector();
    if ($db->execute($query)) {
        $resultado = $result->fetch_array();
        $id_proyecto = $resultado[0];

        session_start();
        $_SESSION['proyecto_id'] = $id_proyecto;
        session_write_close();

        $defMerc = new DefinicionMercado($id_proyecto, $local, $regional, $nacional, $extranjero, $nse, $escolaridad, $rangoedad, $descripcion);

        echo $defMerc->insert_def_merc02();
    }
}

if ($ID == "05A") { //pantalla 01
    $concepto1 = $_POST['concepto1'];
    $concepto2 = $_POST['concepto2'];
    $concepto3 = $_POST['concepto3'];
    $concepto4 = $_POST['concepto4'];
    $concepto5 = $_POST['concepto5'];
    $concepto6 = $_POST['concepto6'];
    $concepto7 = $_POST['concepto7'];

    $unidad1 = $_POST['unidad1'];
    $unidad2 = $_POST['unidad2'];
    $unidad3 = $_POST['unidad3'];
    $unidad4 = $_POST['unidad4'];
    $unidad5 = $_POST['unidad5'];
    $unidad6 = $_POST['unidad6'];
    $unidad7 = $_POST['unidad7'];

    $cantidad1 = $_POST['cantidad1'];
    $cantidad2 = $_POST['cantidad2'];
    $cantidad3 = $_POST['cantidad3'];
    $cantidad4 = $_POST['cantidad4'];
    $cantidad5 = $_POST['cantidad5'];
    $cantidad6 = $_POST['cantidad6'];
    $cantidad7 = $_POST['cantidad7'];

    $precio1 = $_POST['precio1'];
    $precio2 = $_POST['precio2'];
    $precio3 = $_POST['precio3'];
    $precio4 = $_POST['precio4'];
    $precio5 = $_POST['precio5'];
    $precio6 = $_POST['precio6'];
    $precio7 = $_POST['precio7'];

    $total1 = $_POST['total1'];
    $total2 = $_POST['total2'];
    $total3 = $_POST['total3'];
    $total4 = $_POST['total4'];
    $total5 = $_POST['total5'];
    $total6 = $_POST['total6'];
    $total7 = $_POST['total7'];

    $defActivo = new DefinicionActivoA($concepto1, $concepto2, $concepto3, 
            $concepto4, $concepto5, $concepto6, $concepto7, $unidad1, $unidad2, 
            $unidad3, $unidad4, $unidad5, $unidad6, $unidad7, $cantidad1, 
            $cantidad2, $cantidad3, $cantidad4, $cantidad5, $cantidad6, 
            $cantidad7, $precio1, $precio2, $precio3, $precio4, $precio5, 
            $precio6, $precio7, $total1, $total2, $total3, $total4, $total5, 
            $total6, $total7, $_SESSION['proyecto_id']);
    
    echo $defActivo->insert_DefinicionActivoA();
}

if ($ID == "05B") { //pantalla 01
    $monto1 = $_POST['monto1'];
    $monto2 = $_POST['monto2'];
    $monto3 = $_POST['monto3'];
    $monto4 = $_POST['monto4'];
    
    $concepto1b = $_POST['concepto1b'];
    $concepto2b = $_POST['concepto2b'];
    $concepto3b = $_POST['concepto3b'];
    $concepto4b = $_POST['concepto4b'];
    
    $defActivob = new DefinicionActivoB($concepto1b, $concepto2b, $concepto3b, $concepto4b, $monto1, $monto2, $monto3, $monto4, $_SESSION['proyecto_id']);
    echo $defActivob->insert_DefinicionActivoB();
}

if ($ID == "05C") { //pantalla 01
    $capital = $_POST['capital'];
    $porcentaje1 = $_POST['pocentaje1'];
    $porcentaje2 = $_POST['pocentaje2'];
    $monto1 = $_POST['monto1'];
    $monto2 = $_POST['monto2'];
    
    $defActivoc = new DefinicionActivoC($capital, $porcentaje1, $porcentaje2, $monto1, $monto2, $_SESSION['proyecto_id']);
    echo $defActivoc->insert_DefinicionActivoC();
}

if($ID == "0607"){ //pantalla 06,07

    $capitales = new Financiamiento($_SESSION['proyecto_id']);
    $capitales->getCapitales();
}

if($ID =="08"){ //pantalla08

    $tipo = $_POST['tipoFinac'];
    $interes = $_POST['interesFinac'];
    $plazos = $_POST['plazoFinac'];
    $anios = $_POST['graciaFinac'];
    $amortizacion = $_POST['amortizacionFinac'];
    $financiamiento = new Financiamiento($_SESSION['proyecto_id']);
    $financiamiento->init($tipo,$interes,$plazos,$anios,$amortizacion);
    echo $financiamiento->insert_financiamiento08();
}
?>