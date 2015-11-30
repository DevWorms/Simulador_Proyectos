


<?php
require('fpdf/fpdf.php');
error_reporting(0);




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
        
    $consulta = mysqli_query($con, "SELECT ID_proyecto,Periodo,Monto_prod FROM costos_gastos12 WHERE ID_proyecto = 1");

        if (mysqli_num_rows($consulta) > 0)
        {
          $query = "SELECT ID_proyecto,Periodo,Monto_prod FROM costos_gastos12 WHERE ID_proyecto =1";
          $result = $con->query($query);
          
          while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

           $rows[]=$row;
          }

           
          




                    $pdf = new PDF('L','mm',array(216,356));
                     
                    $pdf->AddPage();


                    //Totales
                    $total = array('Total Cto. prod','$'.$rows[0][2],'','$'.$rows[1][2],'','$'.$rows[2][2],'','$'.$rows[3][2],'','$'.$rows[4][2]);
                     
                    //Títulos que llevará la cabecera
                    $miCabeceraAños = array('', 'Año 1', 'Año 2', 'Año 3', 'Año 4', 'Año 5');
                    $miCabeceraTitulos = array('Producto','Unidades','%Total Cto. Prod','Costo','%Total Cto. Prod','Costo','%Total Cto. Prod','Costo','%Total Cto. Prod','Costo','%Total Cto. Prod','Costo');
                    $producto = array('Materia prima','Mano de obra dir.','Servicios','Almacenaje','Suministros','','Mantenimiento','Otros');
                    $unidades = array('pza','hora/h','renta','m2','','','cto','');
                    $porcentajes=array(30,50,10,5,0,'',5,0);



                    //Poner la rutina para llenar los campos anios

                    $Anio1 = array('$'.(($rows[0][2])*0.30),
                                   '$'.(($rows[0][2])*0.50),
                                   '$'.(($rows[0][2])*0.10),
                                   '$'.(($rows[0][2])*0.05),
                                   '$'.(($rows[0][2])*0),'',
                                   '$'.(($rows[0][2])*0.05),
                                   '$'.(($rows[0][2])*0));
                    $Anio2 = array('$'.(($rows[1][2])*0.30),
                                   '$'.(($rows[1][2])*0.50),
                                   '$'.(($rows[1][2])*0.10),
                                   '$'.(($rows[1][2])*0.05),
                                   '$'.(($rows[1][2])*0),'',
                                   '$'.(($rows[1][2])*0.05),
                                   '$'.(($rows[1][2])*0));                    
                    $Anio3 = array('$'.(($rows[2][2])*0.30),
                                   '$'.(($rows[2][2])*0.50),
                                   '$'.(($rows[2][2])*0.10),
                                   '$'.(($rows[2][2])*0.05),
                                   '$'.(($rows[2][2])*0),'',
                                   '$'.(($rows[2][2])*0.05),
                                   '$'.(($rows[2][2])*0));
                    $Anio4 = array('$'.(($rows[3][2])*0.30),
                                   '$'.(($rows[3][2])*0.50),
                                   '$'.(($rows[3][2])*0.10),
                                   '$'.(($rows[3][2])*0.05),
                                   '$'.(($rows[3][2])*0),'',
                                   '$'.(($rows[3][2])*0.05),
                                   '$'.(($rows[3][2])*0));
                    $Anio5 = array('$'.(($rows[4][2])*0.30),
                                   '$'.(($rows[4][2])*0.50),
                                   '$'.(($rows[4][2])*0.10),
                                   '$'.(($rows[4][2])*0.05),
                                   '$'.(($rows[4][2])*0),'',
                                   '$'.(($rows[4][2])*0.05),
                                   '$'.(($rows[4][2])*0));

                    //fin de la rutina de los campos


                    //Costos unitarios consulta
                    $query2 = "SELECT ID_proyecto,ID_perido,Ventas_pza from proy_dem04 Where ID_proyecto=1";
                      $result2 = $con->query($query2);
                      
                      while($row2=mysqli_fetch_array($result2,MYSQLI_NUM)){

                       $rows2[]=$row2;
                      }



                    $unitario = array('Cto. unitario',
                                      '$'.round((($rows[0][2])/($rows2[0][2])),2),
                                      '',
                                      '$'.round((($rows[1][2])/($rows2[1][2])),2),
                                      '',
                                      '$'.round((($rows[2][2])/($rows2[2][2])),2),
                                      '',
                                      '$'.round((($rows[3][2])/($rows2[3][2])),2),
                                      '',
                                      '$'.round((($rows[4][2])/($rows2[4][2])),2));
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

                    $pdf->cabeceraVerticalCalculos($Anio1,101,84);
                    $pdf->cabeceraVerticalCalculos($Anio2,155,84);
                    $pdf->cabeceraVerticalCalculos($Anio3,209,84);
                    $pdf->cabeceraVerticalCalculos($Anio4,263,84);
                    $pdf->cabeceraVerticalCalculos($Anio5,317,84);

                    $pdf->cabeceraHorizontalTotales($total);
                    $pdf->cabeceraHorizontalUnitario($unitario);



                    //Métodos llamados con el objeto $pdf
                    //$pdf->cabeceraVertical($miCabecera);
                    //$pdf->cabeceraHorizontal($miCabecera);
                     
                    $pdf->Output(); //Salida al navegador

        $rows=null;
        $rows2=null;
        /* liberar la serie de resultados */
        $result->close();
        $result2->close();
        $con->close();

            }else{
              echo "error";
              /* liberar la serie de resultados */
        $con->close();

/* cerrar la conexión */
        
    }

?>