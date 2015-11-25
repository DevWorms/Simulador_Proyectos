<?php
require_once '../class/session.php';
include_once '../class/Connector.php';

$db = new Connector();
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
              <li><a href="index.php"><i class="glyphicon glyphicon-dashboard" style="color:#0000aa;"></i> Panel</li>
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
                  <ul class="nav nav-tabs">
                  <li class="active"><a href="#A" data-toggle="tab">A. Definición del Producto / Servicio</a></li>
                  <li class="disabled"><a href="#B" data-toggle="tab">B. Definición del Mercado Potencial</a></li>
                  <li class="disabled"><a href="#C" data-toggle="tab">C. Proyección del precio de mercado</a></li>
                  <li class="disabled"><a href="#A" data-toggle="tab">D. Proyección de la Demanda Esperada</a></li>
                </ul>
                <div class="tabbable">
                  <div class="tab-content">
                    <div class="tab-pane active" id="A">
                      <div class="well well-sm">I'm in Section A.</div>
                    </div>
                    <div class="tab-pane" id="B">
                      <div class="well well-sm">Howdy, I'm in Section B.</div>
                    </div>
                    <div class="tab-pane" id="C">
                      <div class="well well-sm">I've decided that I like wells.</div>
                    </div>
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
    <div class="col-md-12 text-center"><p>
<p style="color:#545B60">Copyright &copy; <a href="index.php">Universidad del Caribe</a> 2015</p>
    </p></div>
    <hr>
    
  </div>
</div>

  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
  </body>
</html>