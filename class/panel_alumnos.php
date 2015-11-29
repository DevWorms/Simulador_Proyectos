<?php
session_start();
require_once 'session.php';
include_once 'Connector.php';

$db = new Connector();
?>
<ul class="nav nav-tabs">
    Mis proyectos
</ul>
<div class="tabbable">
    <div class="tab-content">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($db->execute("SELECT Tipo, Descripcion, Nombre, ID_proyecto FROM  `proyectodef_01` WHERE ID_alumno = " . $_SESSION['Id'])) {
                        if ($result->num_rows == 0) {
                            echo "<tr><th>Aún no tienes proyectos creados.<th></tr>";
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
                      					<td ><a href="?ver=proyecto&id=' . $resultado["ID_proyecto"] . '">Ver</a></td>
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
        <div>
            <a href="proyecto.php?crear=new" class="btn btn-info btn-lg">Nuevo Proyecto</a>
        </div>
    </div>
</div> <!-- /tabbable -->