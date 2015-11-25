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
    <title>Panel de Control</title>
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

     <div class="col-md-4 col-sm-6">
      <div class="panel panel-default">
        <div class="panel-body">
              <div class="well well-sm">
                <div class="media">
                  <p class="humbnail pull-left glyphicon glyphicon-user">
                  </p>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $_SESSION['Nombre']; ?></h4>
                    <p><span class="label label-primary"><?php echo $_SESSION['Tipo_Usuario']; ?></span></p>
                        <p>
                          <form action="?update=info" method="POST">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" name='email' class="form-control input-sm" value="<?php echo $_SESSION['email']; ?>" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='nombre' class="form-control input-sm" value="<?php echo $_SESSION['Nombre']; ?>" required="required">
                                    <input type="text" name='apellidoP' class="form-control input-sm" value="<?php echo $_SESSION['Ap_pat']; ?>" required="required">
                                    <input type="text" name='apellidoM' class="form-control input-sm" value="<?php echo $_SESSION['Ap_mat']; ?>" placeholder="Apellido Materno">
                                </div>
                            <div class="form-group">
                                    <select name="genero" class="form-control input-sm">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <select name="edad" class="form-control input-sm">
                                      <option value="<?php echo $_SESSION['Edad']; ?>"><?php echo $_SESSION['Edad']; ?></option>
                                        <?php
                                        for ($i = 13; $i < 110; $i ++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>\n';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name='tel' class="form-control input-sm" value="<?php echo $_SESSION['Telefono']; ?>" placeholder="Tel (55 555 555)">
                                    <input type="text" name='cel' class="form-control input-sm" value="<?php echo $_SESSION['Celular']; ?>" placeholder="Cel (044 55 555 555)">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='domicilio' class="form-control input-sm" value="<?php echo $_SESSION['Domicilio']; ?>" placeholder="Domicilio">
                                    <input type="text" name='cp' class="form-control input-sm" value="<?php echo $_SESSION['CP']; ?>" placeholder="Código Postal">
                                </div>
                                <input type="submit" name="update" class="btn btn-sm btn-default" value="Actualizar">
                            </div>
                          </form>
                          <?php 
                          if (isset($_POST['update'])) {
                              $tabla = null;
                              $var_id = null;
                              if ($_SESSION['Tipo_Usuario'] == "alumno") {
                                $tabla = "alumno";
                                $var_id = "ID_alumno";
                              } elseif ($_SESSION['Tipo_Usuario'] == "profesor") {
                                $tabla = "profesor";
                                $var_id = "ID_prof";
                              }
                              if ($db->execute("UPDATE ".$tabla." set 
                                Nombre = '".$db->sec($_POST['nombre'])."',
                                Ap_pat = '".$db->sec($_POST['apellidoP'])."',
                                Ap_mat = '".$db->sec($_POST['apellidoM'])."',
                                Edad = '".$db->sec($_POST['edad'])."',
                                Sexo = '".$db->sec($_POST['genero'])."',
                                Telefono = '".$db->sec($_POST['tel'])."',
                                Celular = '".$db->sec($_POST['cel'])."',
                                email = '".$db->sec($_POST['email'])."',
                                Domicilio = '".$db->sec($_POST['domicilio'])."',
                                CP = '".$db->sec($_POST['cp'])."' 
                                WHERE ".$var_id." = '".$_SESSION['Id']."' ;")) {
                                echo '<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              Información actualizada correctamente. Vuelva a iniciar Sesión para visualizar los cambios.
          </div>';
                              } else {
                              echo '<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              Ocurrio un error, intente nuevamente.
          </div>';
                            }
                          }
                          ?>
                        </p>
                    </div>
                </div>
               </div>
            </div>
         </div> 
    </div>
       <div class="col-md-8">
           <div class="panel panel-default">
        <div class="panel-body">
              <?php
              //Include
              if ($_SESSION['Tipo_Usuario'] == "profesor") {
                Include '../class/panel_profesores.php';
              }
              elseif ($_SESSION['Tipo_Usuario'] == "alumno") {
                Include '../class/panel_alumnos.php';
              }
              ?>
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