<?php
error_reporting(0);
session_start();
if (empty($_SESSION['Id_admin'] ) || $_SESSION['Id_admin']  == "") {
    header("Location: login.php");
}
include_once '../class/Connector.php';

$db = new Connector();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Administración</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="../panel/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-fixed-top header" id="subnav">
            <div class="col-md-12">
                <div class="navbar-header">

                    <a href="#" style="margin-left:15px;" class="navbar-btn btn btn-default btn-plus dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['Nombre']; ?></a>
                    <ul class="nav dropdown-menu">
                        <li><a href="index.php"><i class="glyphicon glyphicon-dashboard" style="color:#0000aa;"></i> Panel</li></a>
                        <li><a href="add.php"><i class="glyphicon glyphicon-dashboard" style="color:#0000aa;"></i> Crear Usuario</a></li>
                        <li><a href="proyectos.php"><i class="glyphicon glyphicon-dashboard" style="color:#0000aa;"></i> Proyectos</a></li>
                        <li><a href="../panel/logout.php">Cerrar Sesión</a></li>
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
                <div class="col-md-12"></div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                            if (isset($_GET['eliminar'])) {
                                $id = $db->sec($_GET['id']);
                                $tipo = $db->sec($_GET['eliminar']);

                                if ($tipo == "alumno") {
                                    $tabla = "alumno";
                                    $id_col = "ID_alumno";
                                }
                                elseif ($tipo == "profesor") {
                                    $tabla = "profesor";
                                    $id_col = "ID_prof";
                                }
                                elseif ($tipo == "admin") {
                                    $tabla = "administrador";
                                    $id_col = "ID_admin";
                                    if ($_SESSION['Id_admin'] == $id) {
                                        $tipo = null;
                                        $id = null;
                                        echo '<div class="alert alert-warning"> Este usuario no puede ser eliminado. </div>';
                                    }
                                }

                                if (!empty($tipo) && !empty($id)) {
                                    if ($db->execute("DELETE FROM ".$tabla." WHERE ".$id_col." = '".$id."';")) {
                                        echo '<div class="alert alert-info"> Se elimino el usuario correctamente. </div>';    
                                    } else {
                                        echo '<div class="alert alert-warning"> Ocurrio un error al procesar su solicitud. </div>';
                                    }
                                }
                            }
                            ?>
                            <form method="POST">
                                <h3>Usuarios</h3>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Tipo</th>
                                            <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($db->execute("SELECT ID_alumno, Nombre, Ap_pat, email FROM  alumno;")) {
                        if ($result->num_rows == 0) {
                            echo "<tr><th>No hay alumnos registrados.<th></tr>";
                        } else {
                            while ($resultado = $result->fetch_assoc()) {
                                            echo '
                                        <tr>
                                        <td >' . $resultado["Nombre"] . ' ' . $resultado["Ap_pat"] . '</td>
                                        <td >' . $resultado["email"] . '</td>
                                        <td >Alumno</td>
                                        <td ><a href="user.php?ver=alumno&id=' . $resultado["ID_alumno"] . '">Ver</a></td>
                                        <td ><a href="?eliminar=alumno&id=' . $resultado["ID_alumno"] . '" onClick="return confirm(\'Deseas eliminar el usuario ' . $resultado["Nombre"] . ' ' . $resultado["Ap_pat"] . '\');">Eliminar</a></td>
                                        </tr>
                                        ';
                                        
                                    
                                
                            }
                        }
                    } else {
                        echo '<tr><th>Ocurrio un error al ejecutar la consulta. Intente nuevamente.<th></tr>';
                    }
                    if ($db->execute("SELECT ID_prof, Nombre, Ap_pat, email FROM  profesor;")) {
                        if ($result->num_rows == 0) {
                            echo "<tr><th>No hay profesores registrados.<th></tr>";
                        } else {
                            while ($resultado = $result->fetch_assoc()) {
                                            echo '
                                        <tr>
                                        <td >' . $resultado["Nombre"] . ' ' . $resultado["Ap_pat"] . '</td>
                                        <td >' . $resultado["email"] . '</td>
                                        <td >Profesor</td>
                                        <td ><a href="user.php?ver=profesor&id=' . $resultado["ID_prof"] . '">Ver</a></td>
                                        <td ><a href="?eliminar=profesor&id=' . $resultado["ID_prof"] . '" onClick="return confirm(\'Deseas eliminar el usuario ' . $resultado["Nombre"] . ' ' . $resultado["Ap_pat"] . '\');">Eliminar</a></td>
                                        </tr>
                                        ';
                                        
                                    
                                
                            }
                        }
                    } else {
                        echo '<tr><th>Ocurrio un error al ejecutar la consulta. Intente nuevamente.<th></tr>';
                    }
                    ?>
                </tbody>
            </table>
            <h3>Administradores</h3>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($db->execute("SELECT ID_admin, Nombre, Ap_pat, email FROM  administrador;")) {
                        if ($result->num_rows == 0) {
                            echo "<tr><th>No hay alumnos registrados.<th></tr>";
                        } else {
                            while ($resultado = $result->fetch_assoc()) {
                                            echo '
                                        <tr>
                                        <td >' . $resultado["Nombre"] . ' ' . $resultado["Ap_pat"] . '</td>
                                        <td >' . $resultado["email"] . '</td>
                                        <td ><a href="user.php?ver=admin&id=' . $resultado["ID_admin"] . '">Ver</a></td>
                                        <td ><a href="?eliminar=admin&id=' . $resultado["ID_admin"] . '" onClick="return confirm(\'Deseas eliminar el usuario ' . $resultado["Nombre"] . ' ' . $resultado["Ap_pat"] . '\');">Eliminar</a></td>
                                        </tr>
                                        ';
                                        
                                    
                                
                            }
                        }
                    } else {
                        echo '<tr><th>Ocurrio un error al ejecutar la consulta. Intente nuevamente.<th></tr>';
                    }
                    ?>
                </tbody>
                </table>
                            </form>
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
    </body>
</html>

























<!--
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            
                           DEVELOPED BY U-DEV TEAM & devworms.com                            

                           >    LALO LEON
                           >    LANDO ESGA
                           >    ANDREW ALAN GM
                           >    RICARDO OSORIO
                           >    DIEGO RODRÍGUEZ
                           >    RICHARD VELRO

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->