


<?php
require('fpdf/fpdf.php');

$Nombre= utf8_decode("Páginas web");

class PDF extends FPDF
{
    /*function cabeceraVertical($cabecera)
    {
        $this->SetXY(10, 10); //Seleccionamos posición
        $this->SetFont('Arial','B',10); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(30,7, utf8_decode($columna),1, 2 , 'L' );
        }
    }*/
    function Header()
    {
        // Logo
        $this->Image('../img/UdelC.png',20,15,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->SetXY(130,15);
        // Título
        $this->Cell(120,10,utf8_decode('Proyección deDepreciación y Amortización'),1,0,'C');//mas nombre del alumno
        // Salto de línea
        
    }

    function Footer()
{

$this->SetY(-10);

$this->SetFont('Arial','I',8);

$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
   }

 
    function cabeceraHorizontalAños($cabecera)
    {
        $this->SetXY(20, 70);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(54,7, utf8_decode($fila),1, 0 , 'C' );
        }
    }

     function cabeceraHorizontalTitulos($cabecera)
    {
        $this->SetXY(20, 77);
        $this->SetFont('Arial','',8);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(27,7, utf8_decode($fila),1, 0 , 'C' );
        }
    }

    function cabeceraVerticalProducto($cabecera)
    {
        $this->SetXY(20, 84); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, utf8_decode($columna),1, 2 , 'L' );
        }
    }

    function cabeceraVerticalUnidades($cabecera)
    {
        $this->SetXY(47, 84); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, utf8_decode($columna).'%',1, 2 , 'C' );
        }
    }
    function cabeceraVerticalPorcentajes($cabecera,$coordX,$coordY)
    {
        $this->SetXY($coordX, $coordY); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, $columna,1, 2 , 'C' );
        }
    }


    function cabeceraHorizontalTotales($cabecera)
    {
        $this->SetXY(74,161); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, $columna."%",1, 0 , 'C' );
        }
    }

    function cabeceraHorizontalUnitario($cabecera)
    {
        $this->SetXY(74,172); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, $columna."%",1, 0 , 'C' );
        }
    }
} // FIN Class PDF

$pdf = new PDF('L','mm',array(216,356));
 
$pdf->AddPage();
 
//Títulos que llevará la cabecera
$miCabeceraAños = array('', 'Año 1', 'Año 2', 'Año 3', 'Año 4', 'Año 5');
$miCabeceraTitulos = array('Concepto',
                            'Porcentaje',
                            'Valor de Compra',
                            'Monto',
                            'Valor Neto',
                            'Monto',
                            'Valor Neto',
                            'Monto',
                            'Valor Neto',
                            'Monto',
                            'Valor Neto',
                            'Monto');
$producto = array('Dep. mobiliraio',
                  'Dep. epo. transp',
                  'Dep. epo. cómp.',
                  'Dep. maquinaria',
                  'Dep. edificio',
                  'Total depreciación',
                  '',
                  'Amort. gastos inst.',
                  'Amort. de seguros',
                  'Amort. fianzas',
                  'Total amortización');
$unidades = array(10,25,30,20,5,'','',5,100,100,'');
$porcentajes=array('','','','','','','','','','','');




//Poner la rutina para llenar los campos

$costo = array('','','','','','','','','','','');

//fin de la rutina de los campos


//Totales
$total = array('Total Cto. Admon','','','','','','','','','');


$unitario = array('Cto. unit fijo admon','','','','','','','','','');
//fintotales
$pdf->SetFont('Arial','B',16);

$pdf->SetXY(170,30);
 
 $pdf->Cell(30,10,'Forma 15',0,0,'C');//Nombre alumno

 
 $pdf->SetFont('Arial','',12);
 $pdf->SetXY(20,45);
 $pdf->Cell(130,10,'Proyecto:    '.$Nombre,0,0,'L');
 $pdf->SetXY(160,45);
 $pdf->Cell(130,10, utf8_decode('Producción:    '.$Nombre.''),0,0,'L');

 $pdf->SetXY(20,60);
 $pdf->Cell(130,10,'Producto/Servicio:    '.$Nombre,0,0,'L');

 //empezamos a dibujar tablas

$pdf->cabeceraHorizontalAños($miCabeceraAños);
$pdf->cabeceraHorizontalTitulos($miCabeceraTitulos);

$pdf->cabeceraVerticalProducto($producto);
$pdf->cabeceraVerticalUnidades($unidades);

$pdf->cabeceraVerticalPorcentajes($porcentajes,74,84);
$pdf->cabeceraVerticalPorcentajes($porcentajes,128,84);
$pdf->cabeceraVerticalPorcentajes($porcentajes,182,84);
$pdf->cabeceraVerticalPorcentajes($porcentajes,236,84);
$pdf->cabeceraVerticalPorcentajes($porcentajes,290,84);

$pdf->cabeceraVerticalPorcentajes($costo,101,84);
$pdf->cabeceraVerticalPorcentajes($costo,155,84);
$pdf->cabeceraVerticalPorcentajes($costo,209,84);
$pdf->cabeceraVerticalPorcentajes($costo,263,84);
$pdf->cabeceraVerticalPorcentajes($costo,317,84);




//Métodos llamados con el objeto $pdf
//$pdf->cabeceraVertical($miCabecera);
//$pdf->cabeceraHorizontal($miCabecera);
 
$pdf->Output('Forma 13','I'); //Salida al navegador
?>