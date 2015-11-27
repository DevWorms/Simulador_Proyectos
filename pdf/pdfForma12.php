


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
        $this->SetXY(140,15);
        // Título
        $this->Cell(100,10,utf8_decode('Proyectos de costos de producción'),1,0,'C');//mas nombre del alumno
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
            $this->Cell(27,7, utf8_decode($columna),1, 2 , 'C' );
        }
    }
    function cabeceraVerticalPorcentajes($cabecera,$coordX,$coordY)
    {
        $this->SetXY($coordX, $coordY); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, $columna."%",1, 2 , 'C' );
        }
    }

    function cabeceraVerticalCalculos($cabecera,$coordX,$coordY)
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
        $this->SetXY(74,140); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, $columna,1, 0 , 'C' );
        }
    }

    function cabeceraHorizontalUnitario($cabecera)
    {
        $this->SetXY(74,157); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, $columna,1, 0 , 'C' );
        }
    }
} // FIN Class PDF

$pdf = new PDF('L','mm',array(216,356));
 
$pdf->AddPage();
 
//Títulos que llevará la cabecera
$miCabeceraAños = array('', 'Año 1', 'Año 2', 'Año 3', 'Año 4', 'Año 5');
$miCabeceraTitulos = array('Producto','Unidades','%Total Cto. Prod','Costo','%Total Cto. Prod','Costo','%Total Cto. Prod','Costo','%Total Cto. Prod','Costo','%Total Cto. Prod','Costo');
$producto = array('Materia prima','Mano de obra dir.','Servicios','Almacenaje','Suministros','','Mantenimiento','Otros');
$unidades = array('pza','hora/h','renta','m2','','','cto','');
$porcentajes=array(30,50,10,5,0,'',5,0);



//Poner la rutina para llenar los campos

$costo = array('','','','','','','','');

//fin de la rutina de los campos


//Totales
$total = array('Total Cto. prod','','','','','','','','','');


$unitario = array('Cto. unitario','','','','','','','','','');
//fintotales
$pdf->SetFont('Arial','B',16);

$pdf->SetXY(170,30);
 
 $pdf->Cell(30,10,'Forma 12',0,0,'C');

 
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

$pdf->cabeceraVerticalCalculos($costo,101,84);
$pdf->cabeceraVerticalCalculos($costo,155,84);
$pdf->cabeceraVerticalCalculos($costo,209,84);
$pdf->cabeceraVerticalCalculos($costo,263,84);
$pdf->cabeceraVerticalCalculos($costo,317,84);

$pdf->cabeceraHorizontalTotales($total);
$pdf->cabeceraHorizontalUnitario($unitario);



//Métodos llamados con el objeto $pdf
//$pdf->cabeceraVertical($miCabecera);
//$pdf->cabeceraHorizontal($miCabecera);
 
$pdf->Output(); //Salida al navegador
?>