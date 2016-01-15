<?php
error_reporting(0);
session_start();
if (empty($_SESSION['Id_admin']) || $_SESSION['Id_admin'] == "") {
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
                        if (isset($_GET['delete'])) {
                            $id = $db->sec($_GET['id']);
                            if (!empty($id) && is_numeric($id)) {
                                $querys = array("DELETE FROM proyectodef_01 WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM def_merc02 WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM proy_merc03 WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM proy_dem04 WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM inv_activos05a WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM inv_cap05b WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM inv_inic05c WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM financiemiento08 WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM tabla_deuda09 WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM impustos_10 WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM tasa_11 WHERE ID_proyecto = '" . $id . "';",
                                    "DELETE FROM costos_gastos12 WHERE ID_proyecto = '" . $id . "';");
                                foreach ($querys as $query) {
                                    $db->execute($query);
                                }
                                echo '<div class="alert alert-info"> Proyecto eliminado correctamente. </div>';
                            }
                        }
                        ?>
                        <h3>Proyectos</h3>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Tipo</th>
                                    <th>Status</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if ($db->execute("SELECT Tipo, Descripcion, Nombre, ID_proyecto FROM  `proyectodef_01`;")) {
                                    if ($result->num_rows == 0) {
                                        echo "<tr><th>Aún no hay proyectos creados.<th></tr>";
                                    } else {
                                        while ($resultado = $result->fetch_assoc()) {
                                            /*
                                             * Filtra y muestra solo los proyectos Terminados
                                             * Si un proyecto no esta terminado no se mostrara
                                             */
                                            $query = "SELECT proyectodef_01.ID_proyecto, costos_gastos12.ID_proyecto FROM proyectodef_01
                                    LEFT JOIN costos_gastos12
                                    ON proyectodef_01.ID_proyecto = costos_gastos12.ID_proyecto
                                    where proyectodef_01.ID_proyecto = " . $resultado["ID_proyecto"] . ";";
                                            /*
                                             * Requiere una nueva conexion a BBDD
                                             */
                                            $conn2 = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                            if ($resultado2 = $conn2->query($query)) {
                                                while ($resultado3 = $resultado2->fetch_array()) {
                                                    if ($resultado3[0] == $resultado3[1]) {
                                                        echo '
                      					<tr>
                      					<td >' . $resultado["Nombre"] . '</td>
                      					<td >' . $resultado["Descripcion"] . '</td>
                      					<td >' . $resultado["Tipo"] . '</td>
                                                            <td class="alert alert-info" >Completado</td>
                      					<td ><a href="?ver=proyecto&id=' . $resultado["ID_proyecto"] . '">Ver</a></td>
                      					</tr>
                      					';
                                                    } else {
                                                        echo '
                      					<tr>
                      					<td >' . $resultado["Nombre"] . '</td>
                      					<td >' . $resultado["Descripcion"] . '</td>
                      					<td >' . $resultado["Tipo"] . '</td>
                                                            <td class="alert alert-warning" >Incmpleto</td>
                      					<td ><a href="?delete=proyecto&id=' . $resultado["ID_proyecto"] . '" onClick="return confirm(\' Deseas eliminar el Proyecto ' . $resultado['Nombre'] . ' \');">Eliminar</a></td>
                      					</tr>
                      					';
                                                    }
                                                }
                                            }
                                        }
                                    }
                                } else {
                                    echo '<tr><th>Ocurrio un error al ejecutar la consulta. Intente nuevamente.<th></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
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