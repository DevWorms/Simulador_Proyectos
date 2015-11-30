


<?php
require('fpdf/fpdf.php');
include('../class/Connector.php');



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
    //$proyecto=$_SESSION['ID_proyecto'];
        
    $consulta = mysqli_query($con, "SELECT Total,Concepto FROM inv_activos05a Where ID_proyecto=1");

        if (mysqli_num_rows($consulta) > 0)
        {
          $query = "SELECT Total,Concepto FROM inv_activos05a Where ID_proyecto=1";
          $result = $con->query($query);
          
          while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

           $rows[]=$row;
          }


          $query2 = "SELECT ID_proyecto,Periodo,Monto_admon FROM costos_gastos12 WHERE ID_proyecto = 1";
          $result2 = $con->query($query2);
          
          while($row2=mysqli_fetch_array($result2,MYSQLI_NUM)){

           $rows2[]=$row2;
          }


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

                        $Vanoi1=array('$'.$rows[3][0],
                                      '$'.$rows[1][0],
                                      '$'.$rows[0][0],
                                      '$'.$rows[2][0],
                                      '$'.$rows[5][0],
                                      '',
                                      '',
                                      '$'.$rows[6][0],
                                      '$'.$rows2[0][2]*.20,
                                      '$'.$rows2[0][2]*.0,
                                      '');

                        $costo1 = array('$'.$rows[3][0]*.10,
                                        '$'.$rows[1][0]*.25,
                                        '$'.$rows[0][0]*.30,
                                        '$'.$rows[2][0]*.20,
                                        '$'.$rows[5][0]*.05,
                                        '$'.(($rows[3][0]*.10)+($rows[1][0]*.25)+($rows[0][0]*.30)+($rows[2][0]*.20)+($rows[5][0]*.05)),
                                        '',
                                        '$'.$rows[6][0]*.05,
                                        '$'.$rows2[0][2]*.2,
                                        '$'.$rows2[0][2]*0,
                                        '$'.(($rows[6][0]*.05)+($rows2[0][2]*.20)+($rows2[0][2]*0)));

                        $costo_a=array($rows[3][0]*.10,
                                       $rows[1][0]*.25,
                                       $rows[0][0]*.30,
                                       $rows[2][0]*.20,
                                       $rows[5][0]*.05,
                                       $rows[6][0]*.05,
                                       $rows2[0][2]*.2,
                                       $rows2[0][2]*0,
                                       );


                        //-------------------------------------------------------------------------

                        $Valorneto1=array((($rows[3][0])-($rows[3][0]*.10)),
                                            (($rows[1][0])-($rows[1][0]*.25)),
                                            (($rows[0][0])-($rows[0][0]*.30)),
                                            (($rows[2][0])-($rows[2][0]*.20)),
                                            (($rows[5][0])-($rows[5][0]*.05)),
                                            (($rows[6][0])-($rows[6][0]*.05)),
                                            $rows2[0][2]*.20,
                                            $rows2[0][2]*.0
                                           );

                        




                        $Vanoi2=array('$'.$Valorneto1[0],
                                      '$'.$Valorneto1[1],
                                      '$'.$Valorneto1[2],
                                      '$'.$Valorneto1[3],
                                      '$'.$Valorneto1[4],
                                      '',
                                      '',
                                      '$'.$Valorneto1[5],
                                      '$'.$Valorneto1[6],
                                      '$'.$Valorneto1[7],
                                      '');




                        //-------------------------------------------------------------------------------------

                        $Valorneto2=array(
                                          $Valorneto1[0]-$costo_a[0],
                                          $Valorneto1[1]-$costo_a[1],
                                          $Valorneto1[2]-$costo_a[2],
                                          $Valorneto1[3]-$costo_a[3],
                                          $Valorneto1[4]-$costo_a[4],
                                          $Valorneto1[5]-$costo_a[5],
                                          $Valorneto1[6],
                                          $Valorneto1[7],
                                         );

                        




                        $Vanoi3=array('$'.$Valorneto2[0],
                                      '$'.$Valorneto2[1],
                                      '$'.$Valorneto2[2],
                                      '$'.$Valorneto2[3],
                                      '$'.$Valorneto2[4],
                                      '',
                                      '',
                                      '$'.$Valorneto2[5],
                                      '$'.$Valorneto2[6],
                                      '$'.$Valorneto2[7],
                                      '');

                        


                       

                        //------------------------------------------------------------
                        $Valorneto3=array(
                                          $Valorneto2[0]-$costo_a[0],
                                          $Valorneto2[1]-$costo_a[1],
                                          $Valorneto2[2]-$costo_a[2],
                                          $Valorneto2[3]-$costo_a[3],
                                          $Valorneto2[4]-$costo_a[4],
                                          $Valorneto2[5]-$costo_a[5],
                                          $Valorneto2[6],
                                          $Valorneto2[7],
                                         );

                        $Vanoi4=array('$'.$Valorneto3[0],
                                      '$'.$Valorneto3[1],
                                      '$'.$Valorneto3[2],
                                      '$'.$Valorneto3[3],
                                      '$'.$Valorneto3[4],
                                      '',
                                      '',
                                      '$'.$Valorneto3[5],
                                      '$'.$Valorneto3[6],
                                      '$'.$Valorneto3[7],
                                      '');

                        //_------------------------------------------------------------

                        $Valorneto4=array(
                                          $Valorneto3[0]-$costo_a[0],
                                          $Valorneto3[1]-$costo_a[1],
                                          $Valorneto3[2]-$costo_a[2],
                                          $Valorneto3[3]-$costo_a[3],
                                          $Valorneto3[4]-$costo_a[4],
                                          $Valorneto3[5]-$costo_a[5],
                                          $Valorneto3[6],
                                          $Valorneto3[7],
                                         );

                        $Vanoi5=array('$'.$Valorneto4[0],
                                      '$'.$Valorneto4[1],
                                      '$'.$Valorneto4[2],
                                      '$'.$Valorneto4[3],
                                      '$'.$Valorneto4[4],
                                      '',
                                      '',
                                      '$'.$Valorneto4[5],
                                      '$'.$Valorneto4[6],
                                      '$'.$Valorneto4[7],
                                      '');





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

                        $pdf->cabeceraVerticalPorcentajes($Vanoi1,74,84);
                        $pdf->cabeceraVerticalPorcentajes($Vanoi2,128,84);
                        $pdf->cabeceraVerticalPorcentajes($Vanoi3,182,84);
                        $pdf->cabeceraVerticalPorcentajes($Vanoi4,236,84);
                        $pdf->cabeceraVerticalPorcentajes($Vanoi5,290,84);

                        $pdf->cabeceraVerticalPorcentajes($costo1,101,84);
                        $pdf->cabeceraVerticalPorcentajes($costo1,155,84);
                        $pdf->cabeceraVerticalPorcentajes($costo1,209,84);
                        $pdf->cabeceraVerticalPorcentajes($costo1,263,84);
                        $pdf->cabeceraVerticalPorcentajes($costo1,317,84);




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