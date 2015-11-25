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
                          <th>Concepto</th>
                          <th>Descripcion</th>
                          <th>Nombbre</th>
                          <th>Ver</th>
                        </tr>
                        </thead>
                        <tbody>
                      	<?php
                      	if ($db->execute("SELECT Concepto, Descripcion, Nombre, ID_proyecto FROM  `proyectodef_01` WHERE ID_alumno = ".$_SESSION['Id'])) {
                      		if ($result->num_rows == 0) {
                      			echo "<tr><th>No se encontraron proyectos.<th></tr>";
                      		} else {
                      			while ($resultado = $result->fetch_assoc()) {
                      					echo '
                      					<tr>
                      					<td >'.$resultado["Concepto"].'</td>
                      					<td >'.$resultado["Descripcion"].'</td>
                      					<td >'.$resultado["Nombre"].'</td>
                      					<td ><a href="?ver=proyecto&id='.$resultado["ID_proyecto"].'">Ver</a></td>
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
                  </div>
                  <div>
                  	<a href="?new=proyecto" class="btn btn-info btn-lg">Nuevo Proyecto</a>
                  </div>
                  </div>
                </div> <!-- /tabbable -->