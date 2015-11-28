<?php
require_once '../class/session.php';
include_once '../class/Connector.php';

$db = new Connector();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Crear Proyecto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-fixed-top header" id="subnav">
            <div class="col-md-12">
                <div class="navbar-header">

                    <a href="#" style="margin-left:15px;" class="navbar-btn btn btn-default btn-plus dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['Nombre']; ?></a>
                    <ul class="nav dropdown-menu">
                        <li><a href="index.php"><i class="glyphicon glyphicon-dashboard" style="color:#0000aa;"></i> Panel</a></li>
                        <?php
                        if ($_SESSION['Tipo_Usuario'] == "alumno") {
                            echo '<li><a href="proyecto.php"><i class="glyphicon glyphicon-dashboard" style="color:#0000aa;"></i> Crear Proyecto</a></li>';
                        }
                        ?>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                    </ul>


                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
            </div> 
        </div>

        <!--main-->
        <div class="container" id="main">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="well well-sm">
                                <div class="media">
                                    <div class="tabbable">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="A">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <div class="step well">
                                                    <h2>Definición del Producto / Servicio</h2>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <br>Nombre del Proyecto<input type="text" id="nombre_proyectodef01" class="form-control"><br>
                                                            Tipo <select id="tipo_proyectodef01" class="form-control">
                                                                <option value="Producto">Producto</option>
                                                                <option value="Servicio">Servicio</option>
                                                            </select><br>
                                                            Unidad de medida<input type="text" id="unidadmedida_proyectodef01" class="form-control">
                                                        </div>
                                                        <div class="col-md-5">
                                                            <br>
                                                            <br>Descripci&oacute;n<textarea id="descripcion_proyecto_def01" class="form-control"></textarea><br>
                                                            Caracte&iacute;sticas<textarea id="caracteristicas_proyecto_def01" class="form-control"></textarea><br>
                                                            <button class="btn btn-success" id="btnDefinirProy"> LISTO </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step well">
                                                    <H2>Definición del Mercado Potencial</H2>
                                                    <!-- Formulario -->
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <br>Tipo de mercado <br>
                                                            Local<input id="defmerc_local" type="checkbox" class="form-control"/><br>
                                                            Regional<input id="defmerc_regional" type="checkbox" class="form-control"/><br>
                                                            Nacional<input id="defmerc_nacional" type="checkbox" class="form-control"/><br>
                                                            Extranjero<input id="defmerc_extranjero" type="checkbox" class="form-control"/><br>
                                                        </div>

                                                        <div class="col-md-4">
                                                            NSE <br>
                                                            <select id="defmerc_nse" class="form-control">
                                                                <option value="AB">AB</option>
                                                                <option value="C+">C+</option>
                                                                <option value="C">C</option>
                                                                <option value="D+">D+</option>
                                                                <option value="D">D</option>
                                                                <option value="E">E</option>
                                                            </select><br>
                                                            Escolaridad
                                                            <select id="defmerc_escolaridad" class="form-control">
                                                                <option value="Ninguna">Ninguna</option>
                                                                <option value="Primnaria">Primnaria</option>
                                                                <option value="Secundaria">Secundaria</option>
                                                                <option value="Bachillerato">Bachillerato</option>
                                                                <option value="Licenciatura">Licenciatura</option>
                                                                <option value="Posgrado">Posgrado</option>
                                                            </select><br>
                                                            Rango de edad
                                                            <select id="defmerc_rangoedad" class="form-control">
                                                                <option value="0-4">0-4</option>
                                                                <option value="5-12">5-12</option>
                                                                <option value="12-17">12-17</option>
                                                                <option value="18-22">18-22</option>
                                                                <option value="23-30">23-30</option>
                                                                <option value="30-45">30-45</option>
                                                                <option value="45-60">45-60</option>
                                                                <option value="60+">60+</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            Descripci&oacute;n <br>
                                                            <textarea id="defmerc_descripcion" class="form-control"></textarea><br>
                                                            <button class="btn btn-success" id="btnDefMerc">LISTO</button>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                                <div class="step well">
                                                    Proyección del precio de mercado ( por producto )
                                                    <!-- Formulario -->

                                                    <!-- -->
                                                </div>
                                                <div class="step well">
                                                    Proyección de la Demanda Esperada (ventas esperadas)
                                                    <!-- Formulario -->

                                                    <!-- -->
                                                </div>
                                                
                                                <div class="step well">
                                                    <h2>A. Inversión Inicial Activos</h2>
                                                    <!-- Formulario -->
                                                    <div class="row">
                                                        <div class="col-md-3"> 
                                                            <div class="form-group">
                                                                <input name="invAct_Concepto1" id="invAct_Concepto1" type="text" class="form-control" disabled="disabled" value="Compra de Mobiliario">
                                                                <input name="invAct_Concepto2" id="invAct_Concepto2" type="text" class="form-control" disabled="disabled" value="Compra de Equipo de transporte">
                                                                <input name="invAct_Concepto3" id="invAct_Concepto3" type="text" class="form-control" disabled="disabled" value="Compra de Equipo de computo">
                                                                <input name="invAct_Concepto4" id="invAct_Concepto4" type="text" class="form-control" disabled="disabled" value="Compra de Maquinaria y Herramienta">
                                                                <input name="invAct_Concepto5" id="invAct_Concepto5" type="text" class="form-control" disabled="disabled" value="Constuccion / Edificacion">
                                                                <input name="invAct_Concepto6" id="invAct_Concepto6" type="text" class="form-control" disabled="disabled" value="Compra de Terreno">
                                                                <input name="invAct_Concepto7" id="invAct_Concepto7" type="text" class="form-control" disabled="disabled" value="Gastos de Instalación">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3"> 
                                                            <div class="form-group">
                                                                <input name="invAct_Unidad1" id="invAct_Unidad1" type="text" class="form-control" disabled="disabled" value="mueble">
                                                                <input name="invAct_Unidad2" id="invAct_Unidad2" type="text" class="form-control" disabled="disabled" value="Vehículo">
                                                                <input name="invAct_Unidad3" id="invAct_Unidad3" type="text" class="form-control" disabled="disabled" value="equipo">
                                                                <input name="invAct_Unidad4" id="invAct_Unidad4" type="text" class="form-control" disabled="disabled" value="equipo">
                                                                <input name="invAct_Unidad5" id="invAct_Unidad5" type="text" class="form-control" disabled="disabled" value="m2">
                                                                <input name="invAct_Unidad6" id="invAct_Unidad6" type="text" class="form-control" disabled="disabled" value="m2">
                                                                <input name="invAct_Unidad7" id="invAct_Unidad7" type="text" class="form-control" disabled="disabled" value="m2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2"> 
                                                            <div class="form-group">
                                                                <input name="invAct_Cantidad1" id="invAct_Cantidad1" type="text" class="form-control" placeholder="Cantidad">
                                                                <input name="invAct_Cantidad2" id="invAct_Cantidad2" type="text" class="form-control" placeholder="Cantidad">
                                                                <input name="invAct_Cantidad3" id="invAct_Cantidad3" type="text" class="form-control" placeholder="Cantidad">
                                                                <input name="invAct_Cantidad4" id="invAct_Cantidad4" type="text" class="form-control" placeholder="Cantidad">
                                                                <input name="invAct_Cantidad5" id="invAct_Cantidad5" type="text" class="form-control" placeholder="Cantidad">
                                                                <input name="invAct_Cantidad6" id="invAct_Cantidad6" type="text" class="form-control" placeholder="Cantidad">
                                                                <input name="invAct_Cantidad7" id="invAct_Cantidad7" type="text" class="form-control" placeholder="Cantidad">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2"> 
                                                            <div class="form-group">
                                                                <input name="invAct_Precio1" id="invAct_Precio1" type="text" class="form-control" placeholder="Precio">
                                                                <input name="invAct_Precio2" id="invAct_Precio2" type="text" class="form-control" placeholder="Precio">
                                                                <input name="invAct_Precio3" id="invAct_Precio3" type="text" class="form-control" placeholder="Precio">
                                                                <input name="invAct_Precio4" id="invAct_Precio4" type="text" class="form-control" placeholder="Precio">
                                                                <input name="invAct_Precio5" id="invAct_Precio5" type="text" class="form-control" placeholder="Precio">
                                                                <input name="invAct_Precio6" id="invAct_Precio6" type="text" class="form-control" placeholder="Precio">
                                                                <input name="invAct_Precio7" id="invAct_Precio7" type="text" class="form-control" placeholder="Precio">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2"> 
                                                            <div class="form-group">                                                              
                                                                <input name="invAct_Total1" id="invAct_Total1" type="text" class="form-control" placeholder="Total $0.00" value="" disabled="disabled">
                                                                <input name="invAct_Total2" id="invAct_Total2" type="text" class="form-control" placeholder="Total $0.00" value="" disabled="disabled">
                                                                <input name="invAct_Total3" id="invAct_Total3" type="text" class="form-control" placeholder="Total $0.00" value="" disabled="disabled">
                                                                <input name="invAct_Total4" id="invAct_Total4" type="text" class="form-control" placeholder="Total $0.00" value="" disabled="disabled">
                                                                <input name="invAct_Total5" id="invAct_Total5" type="text" class="form-control" placeholder="Total $0.00" value="" disabled="disabled">
                                                                <input name="invAct_Total6" id="invAct_Total6" type="text" class="form-control" placeholder="Total $0.00" value="" disabled="disabled">
                                                                <input name="invAct_Total7" id="invAct_Total7" type="text" class="form-control" placeholder="Total $0.00" value="" disabled="disabled">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="invAct_Total8" id="invAct_Total8" type="text" class="form-control" placeholder="Total: $0.00" value="" disabled="disabled">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                    <h2>B. Inversión Inicial Capital de Trabajo</h2>
                                                    <!-- Formulario -->
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <input name="invActb_Concepto1" id="invActb_Concepto1" type="text" class="form-control" disabled="disabled" value="Materia Prima">
                                                                <input name="invActb_Concepto2" id="invActb_Concepto2" type="text" class="form-control" disabled="disabled" value="Mano de Obra">
                                                                <input name="invActb_Concepto3" id="invActb_Concepto3" type="text" class="form-control" disabled="disabled" value="Gastos Preoperativos">
                                                                <input name="invActb_Concepto4" id="invActb_Concepto4" type="text" class="form-control" disabled="disabled" value="Total Cap. De Trab.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4"> 
                                                            <div class="form-group">
                                                                <input name="invActb_Monto1" id="invActb_Monto1" type="text" class="form-control" placeholder="Mnoto: $0.00" value="">
                                                                <input name="invActb_Monto2" id="invActb_Monto2" type="text" class="form-control" placeholder="Mnoto: $0.00" value="">
                                                                <input name="invActb_Monto3" id="invActb_Monto3" type="text" class="form-control" placeholder="Mnoto: $0.00" value="">
                                                                <input name="invActb_Monto4" id="invActb_Monto4" type="text" class="form-control" disabled="disabled" placeholder="Total: $0.00" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                    <h2>C. Inversión Inicial</h2>
                                                    <!-- Formulario -->
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="5">Composición de Inversión</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Inversión Activos</th>
                                                                        <th colspan="2">Capital Propio</th>
                                                                        <th colspan="2">Financiamiento</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Capital de Trabajo</th>
                                                                        <th>%</th>
                                                                        <th>Monto</th>
                                                                        <th>%</th>
                                                                        <th>Monto</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input name="invActc_Capital" id="invActc_Capital" type="text" class="form-control" disabled="disabled" placeholder="Total: $0.00" value=""></td>
                                                                        <td><input name="invActc_pocentaje1" id="invActc_pocentaje1" type="text" class="form-control" placeholder="Porcentaje" value=""></td>
                                                                        <td><input name="invActc_Monto1" id="invActc_Monto1" type="text" class="form-control" disabled="disabled" placeholder="Total: $0.00" value=""></td>
                                                                        <td><input name="invActc_pocentaje2" id="invActc_pocentaje2" type="text" class="form-control" placeholder="Porcentaje" value=""></td>
                                                                        <td><input name="invActc_Monto2" id="invActc_Monto2" type="text" class="form-control" disabled="disabled" placeholder="Total: $0.00" value=""></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                    <hr>
                                                    <button class="btn btn-success" id="btninvAct"> LISTO </button>
                                                </div>

                                                <div class="step well">
                                                    CAPITAL INICIAL PROPIO 
                                                    <!-- Formulario -->

                                                    <!-- -->
                                                </div>
                                                <div class="step well">
                                                    CAPITAL A FINANCIAR
                                                    <!-- Formulario -->

                                                    <!-- -->
                                                </div>
                                                <div class="step well">
                                                    FINANCIAMIENTO
                                                    <!-- Formulario -->

                                                    <!-- -->
                                                </div>

                                                <button class="action next btn btn-info" id="btnSiguiente" style="display:none">Siguiente</button>
                                                <!-- <button class="action submit btn btn-success">Enviar</button>-->
                                            </div>
                                        </div> <!-- /tabbable -->
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div><!--/row--> 
                <hr>

                <div class="row">

                    <div class="clearfix"></div>

                    <hr>
                    <div class="col-md-12 text-center">
                        <p>
                        <p style="color:#545B60">Copyright &copy; <a href="index.php">Universidad del Caribe</a> 2015</p>
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <!-- script references -->
        <script src="js/jquery.min.js"></script>
        <script src="js/calcularTotal.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="js/multistep.js"></script>
        <script src="../js/PostFormularios.js"></script>
    </body>
</html>