<?php
session_start();
require_once 'session.php';
include_once 'Connector.php';

$db = new Connector();
?>
<ul class="nav nav-tabs">
    Proyectos de la materia <strong><?php echo $_SESSION["Materia"]; ?></strong>
</ul>
            
        
<div class="tabbable">
    <div class="tab-content">
        <input type="text" id="search" class="input-sm" placeholder="Buscar..." />
        <div class="table-responsive">
            <table id="table" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Alumno</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                    if ($alumnos = $conn->query("SELECT historial_clase.ID_alumno, alumno.Ap_pat, alumno.Ap_mat, alumno.Nombre
FROM historial_clase
INNER JOIN alumno
ON alumno.ID_alumno=historial_clase.ID_alumno
WHERE historial_clase.ID_prof = " . $_SESSION['Id'] . ";")) {
                        while ($alumno = $alumnos->fetch_assoc()) {
                            if ($proyectos = $conn->query("SELECT Concepto, Descripcion, Nombre, ID_proyecto FROM `proyectodef_01` WHERE ID_alumno = " . $alumno['ID_alumno'] . ";")) {
                                while ($proyecto = $proyectos->fetch_assoc()) {
                                    if ($resultados = $conn->query("SELECT proyectodef_01.ID_proyecto, costos_gastos12.ID_proyecto FROM proyectodef_01
                                    LEFT JOIN costos_gastos12
                                    ON proyectodef_01.ID_proyecto = costos_gastos12.ID_proyecto
                                    where proyectodef_01.ID_proyecto = " . $proyecto["ID_proyecto"] . ";")) {
                                        while ($resultado = $resultados->fetch_array()) {
                                            if ($resultado[0] == $resultado[1]) {
                                                echo '
                      					<tr>
                      					<td >' . $alumno['Ap_pat'] . ' ' . $alumno['Ap_mat'] .  ' ' . $alumno['Nombre'] . '</td>
                      					<td >' . $proyecto["Nombre"] . '</td>
                      					<td >' . $proyecto["Descripcion"] . '</td>
                      					<td ><a href="?ver=proyecto&id=' . $proyecto["ID_proyecto"] . '">Ver</a></td>
                      					</tr>
                      					';
                                            }
                                        }
                                    } else {
                                        echo "error";
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
    </div>
</div> <!-- /tabbable -->