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
                                                    Definición del Mercado Potencial
                                                    <!-- Formulario -->
                                                    
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
                                                    A. Inversión Inicial Activos
                                                    <!-- Formulario -->

                                                    <!-- -->
                                                    B. Inversión Inicial Capital de Trabajo
                                                    <!-- Formulario -->

                                                    <!-- -->
                                                    C. Inversión Inicial
                                                    <!-- Formulario -->

                                                    <!-- -->
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script src="js/multistep.js"></script>
        <script src="../js/PostFormularios.js"></script>
    </body>
</html>