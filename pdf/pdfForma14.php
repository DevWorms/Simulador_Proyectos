


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
        $this->Cell(100,10,utf8_decode('Proyección Gastos de Venta'),1,0,'C');//mas nombre del alumno
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
        $this->SetXY(74,150); //Seleccionamos posición
        $this->SetFont('Arial','',8); //Fuente, Negrita, tamaño
 
        foreach($cabecera as $columna)
        {
            //Parámetro con valor 2, cabecera vertical
            $this->Cell(27,7, $columna,1, 0 , 'C' );
        }
    }
} // FIN Class PDF

 $host="www.devworms.com";
    $usuario="rootuc";
    $pass="toor5";
    $database="simuladoruc";
    $con = new mysqli($host, $usuario, $pass, $database);
    if ($con->connect_errno)
    {
           
           exit();
    }
    @mysqli_query($con, "SET NAMES 'utf8'");
    $proyecto=$_POST['proyecto_id'];
        
    $consulta = mysqli_query($con, "SELECT ID_proyecto,Periodo,Monto_ventas FROM costos_gastos12 WHERE ID_proyecto = '$proyecto'");

        if (mysqli_num_rows($consulta) > 0)
        {
          $query = "SELECT ID_proyecto,Periodo,Monto_ventas FROM costos_gastos12 WHERE ID_proyecto = '$proyecto'";
          $result = $con->query($query);
          
          while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

           $rows[]=$row;
          }


                        $pdf = new PDF('L','mm',array(216,356));
                         
                        $pdf->AddPage();
                         
                        //Títulos que llevará la cabecera
                        $miCabeceraAños = array('', 'Año 1', 'Año 2', 'Año 3', 'Año 4', 'Año 5');
                        $miCabeceraTitulos = array('Producto',
                                                    'Unidades',
                                                    '%Total Cto. Ventas',
                                                    'Costo',
                                                    '%Total Cto. Ventas',
                                                    'Costo',
                                                    '%Total Cto. Ventas',
                                                    'Costo',
                                                    '%Total Cto. Ventas',
                                                    'Costo',
                                                    '%Total Cto. Ventas',
                                                    'Costo');
                        $producto = array('Sueldos y Salarios',
                                          'Comisiones',
                                          'Gastos viaje y rep.',
                                          'Servicios post venta',
                                          '',
                                          'Publicidad y prom',
                                          'atención a clientes',
                                          'Gastos ferias/expo');
                        $unidades = array('Salario/h',
                                          'Porcentaje',
                                          'Sevicios',
                                          'Hora/h',
                                          '',
                                          'Renta',
                                          'Hora/h',
                                          'Servicio');
                        $porcentajes=array(10,53,0,10,'',35,10,0);



                        //Poner la rutina para llenar los campos

                        $Anio1 = array('$'.$rows[0][2]*.10,
                                       '$'.$rows[0][2]*.53,
                                       '$'.$rows[0][2]*.0,
                                       '$'.$rows[0][2]*.10,
                                       '',
                                       '$'.$rows[0][2]*.35,
                                       '$'.$rows[0][2]*.10,
                                       '$'.$rows[0][2]*.0);

                        $Anio2 = array('$'.$rows[1][2]*.10,
                                       '$'.$rows[1][2]*.53,
                                       '$'.$rows[1][2]*.0,
                                       '$'.$rows[1][2]*.10,
                                       '',
                                       '$'.$rows[1][2]*.35,
                                       '$'.$rows[1][2]*.10,
                                       '$'.$rows[1][2]*.0);

                        $Anio3 =array('$'.$rows[2][2]*.10,
                                       '$'.$rows[2][2]*.53,
                                       '$'.$rows[2][2]*.0,
                                       '$'.$rows[2][2]*.10,
                                       '',
                                       '$'.$rows[2][2]*.35,
                                       '$'.$rows[2][2]*.10,
                                       '$'.$rows[2][2]*.0);

                        $Anio4 = array('$'.$rows[3][2]*.10,
                                       '$'.$rows[3][2]*.53,
                                       '$'.$rows[3][2]*.0,
                                       '$'.$rows[3][2]*.10,
                                       '',
                                       '$'.$rows[3][2]*.35,
                                       '$'.$rows[3][2]*.10,
                                       '$'.$rows[3][2]*.0);

                        $Anio5 = array('$'.$rows[4][2]*.10,
                                       '$'.$rows[4][2]*.53,
                                       '$'.$rows[4][2]*.0,
                                       '$'.$rows[4][2]*.10,
                                       '',
                                       '$'.$rows[4][2]*.35,
                                       '$'.$rows[4][2]*.10,
                                       '$'.$rows[4][2]*.0);
                        //fin de la rutina de los campos


                        //Totales
                        $total = array('Total Cto. Ventas',
                                '$'.$rows[0][2],
                                '',
                                '$'.$rows[1][2],
                                '',
                                '$'.$rows[2][2],
                                '',
                                '$'.$rows[3][2],
                                '',
                                '$'.$rows[4][2]);


                        $unitario = array('Cto. unit fijo admon','','','','','','','','','');
                        //fintotales
                        $pdf->SetFont('Arial','B',16);

                        $pdf->SetXY(170,30);
                         
                         $pdf->Cell(30,10,'Forma 14',0,0,'C');

                         
                         $pdf->SetFont('Arial','',12);
                         $pdf->SetXY(20,45);
                         $pdf->Cell(130,10,'Proyecto:____________________',0,0,'L');
                         $pdf->SetXY(160,45);
                         $pdf->Cell(130,10, utf8_decode('Producción:___________________'),0,0,'L');

                         $pdf->SetXY(20,60);
                         $pdf->Cell(130,10,'Producto/Servicio:_____________',0,0,'L');

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

                        $pdf->cabeceraVerticalCalculos($Anio1,101,84);
                        $pdf->cabeceraVerticalCalculos($Anio2,155,84);
                        $pdf->cabeceraVerticalCalculos($Anio3,209,84);
                        $pdf->cabeceraVerticalCalculos($Anio4,263,84);
                        $pdf->cabeceraVerticalCalculos($Anio5,317,84);

                        $pdf->cabeceraHorizontalTotales($total);
                        //$pdf->cabeceraHorizontalUnitario($unitario);



                        //Métodos llamados con el objeto $pdf
                        //$pdf->cabeceraVertical($miCabecera);
                        //$pdf->cabeceraHorizontal($miCabecera);
                         
                        $pdf->Output('Forma 13','I'); //Salida al navegador
                        $result->close();
        
        $con->close();

            }else{
              echo "error";
              /* liberar la serie de resultados */
        $con->close();

/* cerrar la conexión */
        
    }
?>