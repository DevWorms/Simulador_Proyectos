<?php

include('Connector.php');
include('DefinicionProyecto.php');
include('DefinicionMercado.php');
include('DefinicionActivo.php');
include('Financiamiento.php');
include('proyDemandaEsperada.php');
include('proyPrecioMercado.php');
include('Impuesto.php');
include('Descuento.php');
include('Deudas.php');
include('Costos.php');

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

if ($ID == "03") { //pantalla 03
    $proymerc_periodo1 = $_POST['proymerc_periodo1'];    
    $proymerc_periodo2 = $_POST['proymerc_periodo2'];
    $proymerc_periodo3 = $_POST['proymerc_periodo3'];
    $proymerc_periodo4 = $_POST['proymerc_periodo4'];
    $proymerc_periodo5 = $_POST['proymerc_periodo5'];

    
    $proymerc_univenta1 =$_POST['proymerc_univenta1'];
    $proymerc_univenta2 =$_POST['proymerc_univenta2'];
    $proymerc_univenta3 =$_POST['proymerc_univenta3'];
    $proymerc_univenta4 =$_POST['proymerc_univenta4'];
    $proymerc_univenta5 =$_POST['proymerc_univenta5'];

    
    $proymerc_precio1 =$_POST['proymerc_precio1'];
    $proymerc_precio2 =$_POST['proymerc_precio2'];
    $proymerc_precio3 =$_POST['proymerc_precio3'];
    $proymerc_precio4 =$_POST['proymerc_precio4'];
    $proymerc_precio5 =$_POST['proymerc_precio5'];

    
    $proymerc_inflacion1 =$_POST['proymerc_inflacion1'];
    $proymerc_inflacion2 =$_POST['proymerc_inflacion2'];
    $proymerc_inflacion3 =$_POST['proymerc_inflacion3'];
    $proymerc_inflacion4 =$_POST['proymerc_inflacion4'];
    $proymerc_inflacion5 =$_POST['proymerc_inflacion5'];

   
    $proymerc_precioventa1 =$_POST['proymerc_precioventa1'];
    $proymerc_precioventa2 =$_POST['proymerc_precioventa2'];
    $proymerc_precioventa3 =$_POST['proymerc_precioventa3'];
    $proymerc_precioventa4 =$_POST['proymerc_precioventa4'];
    $proymerc_precioventa5 =$_POST['proymerc_precioventa5'];

    $proyMercado = new proyPrecioMercado(
            $proymerc_periodo1, $proymerc_periodo2, $proymerc_periodo3, $proymerc_periodo4, $proymerc_periodo5, 
            $proymerc_univenta1, $proymerc_univenta2, $proymerc_univenta3, $proymerc_univenta4, $proymerc_univenta5,
            $proymerc_precio1, $proymerc_precio2,$proymerc_precio3,$proymerc_precio4,$proymerc_precio5,
            $proymerc_inflacion1, $proymerc_inflacion2,$proymerc_inflacion3,$proymerc_inflacion4,$proymerc_inflacion5,
            $proymerc_precioventa1,$proymerc_precioventa2,$proymerc_precioventa3,$proymerc_precioventa4,$proymerc_precioventa5);
    echo $proyMercado->insert_proyPrecMerc();
}


if ($ID == "04") { //pantalla 04
    $proyDemandaEsperada_Per1 = $_POST['proyDemandaEsperada_Per1'];
    $proyDemandaEsperada_Per2 = $_POST['proyDemandaEsperada_Per2'];
    $proyDemandaEsperada_Per3 = $_POST['proyDemandaEsperada_Per3'];
    $proyDemandaEsperada_Per4 = $_POST['proyDemandaEsperada_Per4'];
    $proyDemandaEsperada_Per5 = $_POST['proyDemandaEsperada_Per5'];

    $proyDemandaEsperada_VtasE1 = $_POST['proyDemandaEsperada_VtasE1'];
    $proyDemandaEsperada_VtasE2 = $_POST['proyDemandaEsperada_VtasE2'];
    $proyDemandaEsperada_VtasE3 = $_POST['proyDemandaEsperada_VtasE3'];
    $proyDemandaEsperada_VtasE4 = $_POST['proyDemandaEsperada_VtasE4'];
    $proyDemandaEsperada_VtasE5 = $_POST['proyDemandaEsperada_VtasE5'];

    $proyDemandaEsperada_PrecioVta1 = $_POST['proyDemandaEsperada_PrecioVta1'];
    $proyDemandaEsperada_PrecioVta2 = $_POST['proyDemandaEsperada_PrecioVta2'];
    $proyDemandaEsperada_PrecioVta3 = $_POST['proyDemandaEsperada_PrecioVta3'];
    $proyDemandaEsperada_PrecioVta4 = $_POST['proyDemandaEsperada_PrecioVta4'];
    $proyDemandaEsperada_PrecioVta5 = $_POST['proyDemandaEsperada_PrecioVta5'];

    $proyDemandaEsperada_VtasED1 = $_POST['proyDemandaEsperada_VtasED1'];
    $proyDemandaEsperada_VtasED2 = $_POST['proyDemandaEsperada_VtasED2'];
    $proyDemandaEsperada_VtasED3 = $_POST['proyDemandaEsperada_VtasED3'];
    $proyDemandaEsperada_VtasED4 = $_POST['proyDemandaEsperada_VtasED4'];
    $proyDemandaEsperada_VtasED5 = $_POST['proyDemandaEsperada_VtasED5'];

    $proyDemandaEsperada_VtasEP1 = $_POST['proyDemandaEsperada_VtasEP1'];
    $proyDemandaEsperada_VtasEP2 = $_POST['proyDemandaEsperada_VtasEP2'];
    $proyDemandaEsperada_VtasEP3 = $_POST['proyDemandaEsperada_VtasEP3'];
    $proyDemandaEsperada_VtasEP4 = $_POST['proyDemandaEsperada_VtasEP4'];
    $proyDemandaEsperada_VtasEP5 = $_POST['proyDemandaEsperada_VtasEP5'];

    $proyDemandaEsperada_Monto1 = $_POST['proyDemandaEsperada_Monto1'];
    $proyDemandaEsperada_Monto2 = $_POST['proyDemandaEsperada_Monto2'];
    $proyDemandaEsperada_Monto3 = $_POST['proyDemandaEsperada_Monto3'];
    $proyDemandaEsperada_Monto4 = $_POST['proyDemandaEsperada_Monto4'];
    $proyDemandaEsperada_Monto5 = $_POST['proyDemandaEsperada_Monto5'];

    $proyDemandaEsperada_VtasEP21 = $_POST['proyDemandaEsperada_VtasEP21'];
    $proyDemandaEsperada_VtasEP22 = $_POST['proyDemandaEsperada_VtasEP22'];
    $proyDemandaEsperada_VtasEP23 = $_POST['proyDemandaEsperada_VtasEP23'];
    $proyDemandaEsperada_VtasEP24 = $_POST['proyDemandaEsperada_VtasEP24'];
    $proyDemandaEsperada_VtasEP25 = $_POST['proyDemandaEsperada_VtasEP25'];

    $proyDemandaEsperada_Monto21 = $_POST['proyDemandaEsperada_Monto21'];
    $proyDemandaEsperada_Monto22 = $_POST['proyDemandaEsperada_Monto22'];
    $proyDemandaEsperada_Monto23 = $_POST['proyDemandaEsperada_Monto23'];
    $proyDemandaEsperada_Monto24 = $_POST['proyDemandaEsperada_Monto24'];
    $proyDemandaEsperada_Monto25 = $_POST['proyDemandaEsperada_Monto25'];
    
    $proyeccion = new proyDemandaEsperada(
            $proyDemandaEsperada_Per1, $proyDemandaEsperada_Per2, $proyDemandaEsperada_Per3, $proyDemandaEsperada_Per4, $proyDemandaEsperada_Per5, 
            $proyDemandaEsperada_VtasE1, $proyDemandaEsperada_VtasE2, $proyDemandaEsperada_VtasE3, $proyDemandaEsperada_VtasE4, $proyDemandaEsperada_VtasE5, 
            $proyDemandaEsperada_PrecioVta1, $proyDemandaEsperada_PrecioVta2, $proyDemandaEsperada_PrecioVta3, $proyDemandaEsperada_PrecioVta4, $proyDemandaEsperada_PrecioVta5, 
            $proyDemandaEsperada_VtasED1, $proyDemandaEsperada_VtasED2, $proyDemandaEsperada_VtasED3, $proyDemandaEsperada_VtasED4, $proyDemandaEsperada_VtasED5, 
            $proyDemandaEsperada_VtasEP1, $proyDemandaEsperada_VtasEP2, $proyDemandaEsperada_VtasEP3, $proyDemandaEsperada_VtasEP4, $proyDemandaEsperada_VtasEP5, 
            $proyDemandaEsperada_Monto1, $proyDemandaEsperada_Monto2, $proyDemandaEsperada_Monto3, $proyDemandaEsperada_Monto4, $proyDemandaEsperada_Monto5, 
            $proyDemandaEsperada_VtasEP21, $proyDemandaEsperada_VtasEP22, $proyDemandaEsperada_VtasEP23, $proyDemandaEsperada_VtasEP24, $proyDemandaEsperada_VtasEP25, 
            $proyDemandaEsperada_Monto21, $proyDemandaEsperada_Monto22, $proyDemandaEsperada_Monto23, $proyDemandaEsperada_Monto24, $proyDemandaEsperada_Monto21,
            $_SESSION['proyecto_id']);
    echo $proyeccion->insert_proyDemandaEsperada();
}

if ($ID == "05A") { //pantalla 05
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

    $defActivo = new DefinicionActivoA($concepto1, $concepto2, $concepto3, $concepto4, $concepto5, $concepto6, $concepto7, $unidad1, $unidad2, $unidad3, $unidad4, $unidad5, $unidad6, $unidad7, $cantidad1, $cantidad2, $cantidad3, $cantidad4, $cantidad5, $cantidad6, $cantidad7, $precio1, $precio2, $precio3, $precio4, $precio5, $precio6, $precio7, $total1, $total2, $total3, $total4, $total5, $total6, $total7, $_SESSION['proyecto_id']);

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

if ($ID == "0607") { //pantalla 06,07
    $capitales = new Financiamiento($_SESSION['proyecto_id']);
    $capitales->getCapitales();
}

if ($ID == "08") { //pantalla08
    $tipo = $_POST['tipoFinac'];
    $interes = $_POST['interesFinac'];
    $plazos = $_POST['plazoFinac'];
    $anios = $_POST['graciaFinac'];
    $amortizacion = $_POST['amortizacionFinac'];
    $financiamiento = new Financiamiento($_SESSION['proyecto_id']);
    $financiamiento->init($tipo, $interes, $plazos, $anios, $amortizacion);
    echo $financiamiento->insert_financiamiento08();
}

if ($ID == "09") { //pantalla09

    $periodo_deuda1 = $_POST['periodo_deuda1'];
    $periodo_deuda2 = $_POST['periodo_deuda2'];
    $periodo_deuda3 = $_POST['periodo_deuda3'];
    $periodo_deuda4 = $_POST['periodo_deuda4'];
    $periodo_deuda5 = $_POST['periodo_deuda5'];

    $monto_deuda1 = $_POST['monto_deuda1'];
    $monto_deuda2 = $_POST['monto_deuda2'];
    $monto_deuda3 = $_POST['monto_deuda3'];
    $monto_deuda4 = $_POST['monto_deuda4'];
    $monto_deuda5 = $_POST['monto_deuda5'];

    $fijo_deuda1 = $_POST['fijo_deuda1'];
    $fijo_deuda2 = $_POST['fijo_deuda2'];
    $fijo_deuda3 = $_POST['fijo_deuda3'];
    $fijo_deuda4 = $_POST['fijo_deuda4'];
    $fijo_deuda5 = $_POST['fijo_deuda5'];

    $interes_deuda1 = $_POST['interes_deuda1'];
    $interes_deuda2 = $_POST['interes_deuda2'];
    $interes_deuda3 = $_POST['interes_deuda3'];
    $interes_deuda4 = $_POST['interes_deuda4'];
    $interes_deuda5 = $_POST['interes_deuda5'];

    $capital_deuda1 = $_POST['capital_deuda1'];
    $capital_deuda2 = $_POST['capital_deuda2'];
    $capital_deuda3 = $_POST['capital_deuda3'];
    $capital_deuda4 = $_POST['capital_deuda4'];
    $capital_deuda5 = $_POST['capital_deuda5'];


    $deudas = new Deudas($periodo_deuda1, $monto_deuda1, $fijo_deuda1, $interes_deuda1, $capital_deuda1, 
                            $periodo_deuda2, $monto_deuda2, $fijo_deuda2, $interes_deuda2, $capital_deuda2,
                            $periodo_deuda3, $monto_deuda3, $fijo_deuda3, $interes_deuda3, $capital_deuda3,
                            $periodo_deuda4, $monto_deuda4, $fijo_deuda4, $interes_deuda4, $capital_deuda4,
                            $periodo_deuda5, $monto_deuda5, $fijo_deuda5, $interes_deuda5, $capital_deuda5);

    echo $deudas->insert_Deudas();

}

if ($ID == "10") { //pantalla10
    $impuesto = $_POST['impuesto'];
    $porcentaje = $_POST['porcentaje'];
    $concepto = $_POST['concepto'];

    $impuesto = new Impuesto($impuesto, $porcentaje, $concepto);
    echo $impuesto->insert_Impuesto();
}

if ($ID == "11") { //pantalla10
    $descuento = $_POST['descuento'];

    $descontar = new Descuento($descuento);
    echo $descontar->insert_Descuento();
}



if ($ID == "12") { //pantalla10
    $periodo_costos1 = $_POST['periodo_costos1'];
    $periodo_costos2 = $_POST['periodo_costos2'];
    $periodo_costos3 = $_POST['periodo_costos3'];
    $periodo_costos4 = $_POST['periodo_costos4'];
    $periodo_costos5 = $_POST['periodo_costos5'];
    $ventas_costos1 = $_POST['ventas_costos1'];
    $ventas_costos2 = $_POST['ventas_costos2'];
    $ventas_costos3 = $_POST['ventas_costos3'];
    $ventas_costos4 = $_POST['ventas_costos4'];
    $ventas_costos5 = $_POST['ventas_costos5'];
    $utilidad_costos1 = $_POST['utilidad_costos1'];
    $utilidad_costos2 = $_POST['utilidad_costos2'];
    $utilidad_costos3 = $_POST['utilidad_costos3'];
    $utilidad_costos4 = $_POST['utilidad_costos4'];
    $utilidad_costos5 = $_POST['utilidad_costos5'];    
    $total_costos1 = $_POST['total_costos1'];
    $total_costos2 = $_POST['total_costos2'];
    $total_costos3 = $_POST['total_costos3'];
    $total_costos4 = $_POST['total_costos4'];
    $total_costos5 = $_POST['total_costos5'];    
    $porc_prod_costos1 = $_POST['porc_prod_costos1'];
    $porc_prod_costos2 = $_POST['porc_prod_costos2'];
    $porc_prod_costos3 = $_POST['porc_prod_costos3'];
    $porc_prod_costos4 = $_POST['porc_prod_costos4'];
    $porc_prod_costos5 = $_POST['porc_prod_costos5'];    
    $produccion_costos1 = $_POST['produccion_costos1'];
    $produccion_costos2 = $_POST['produccion_costos2'];
    $produccion_costos3 = $_POST['produccion_costos3'];
    $produccion_costos4 = $_POST['produccion_costos4'];
    $produccion_costos5 = $_POST['produccion_costos5'];    
    $porc_admin_costos1 = $_POST['porc_admin_costos1'];
    $porc_admin_costos2 = $_POST['porc_admin_costos2'];
    $porc_admin_costos3 = $_POST['porc_admin_costos3'];
    $porc_admin_costos4 = $_POST['porc_admin_costos4'];
    $porc_admin_costos5 = $_POST['porc_admin_costos5'];    
    $admin_costos1 = $_POST['admin_costos1'];
    $admin_costos2 = $_POST['admin_costos2'];
    $admin_costos3 = $_POST['admin_costos3'];
    $admin_costos4 = $_POST['admin_costos4'];
    $admin_costos5 = $_POST['admin_costos5'];    
    $porc_ventas_costos1 = $_POST['porc_ventas_costos1'];
    $porc_ventas_costos2 = $_POST['porc_ventas_costos2'];
    $porc_ventas_costos3 = $_POST['porc_ventas_costos3'];
    $porc_ventas_costos4 = $_POST['porc_ventas_costos4'];
    $porc_ventas_costos5 = $_POST['porc_ventas_costos5'];    
    $g_ventas_costos1 = $_POST['g_ventas_costos1'];
    $g_ventas_costos2 = $_POST['g_ventas_costos2'];
    $g_ventas_costos3 = $_POST['g_ventas_costos3'];
    $g_ventas_costos4 = $_POST['g_ventas_costos4'];
    $g_ventas_costos5 = $_POST['g_ventas_costos5'];

    $costo = new Costos($periodo_costos1,$periodo_costos2,$periodo_costos3,$periodo_costos4,$periodo_costos5,
                        $ventas_costos1,$ventas_costos2, $ventas_costos3, $ventas_costos4, $ventas_costos5, 
                        $utilidad_costos1,$utilidad_costos2,$utilidad_costos3,$utilidad_costos4,$utilidad_costos5, 
                        $total_costos1,$total_costos2,$total_costos3,$total_costos4,$total_costos5,
                        $porc_prod_costos1,$porc_prod_costos2,$porc_prod_costos3,$porc_prod_costos4,$porc_prod_costos5, 
                        $produccion_costos1,$produccion_costos2,$produccion_costos3,$produccion_costos4,$produccion_costos5, 
                        $porc_admin_costos1,$porc_admin_costos2,$porc_admin_costos3,$porc_admin_costos4,$porc_admin_costos5, 
                        $admin_costos1,$admin_costos2,$admin_costos3,$admin_costos4,$admin_costos5,
                        $porc_ventas_costos1,$porc_ventas_costos2,$porc_ventas_costos3,$porc_ventas_costos4,$porc_ventas_costos5, 
                        $g_ventas_costos1,$g_ventas_costos2,$g_ventas_costos3,$g_ventas_costos4,$g_ventas_costos5);


    echo $costo->insert_Costos();
}


?>