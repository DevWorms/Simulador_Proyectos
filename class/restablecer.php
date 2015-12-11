<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title> Restablecer contraseña </title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>

  <body>
<?php
error_reporting(0);
include 'Connector.php';
	$token = $_GET['token'];
	$idusuario = $_GET['idusuario'];
	$tipo = $_GET['tipo'];
  if (!empty($token) || !empty($idusuario) || !empty($ipo)) {
  if ($tipo == "prof") {
    $sql = "SELECT * FROM profesor WHERE token = '$token'";
    $clave = "ID_prof";
  } elseif ($tipo == "alumno") {
    $sql = "SELECT * FROM alumno WHERE token = '$token'";
    $clave = "ID_alumno";
  }

	$conexion = new Connector();
  $conexion->execute($sql);
	
	if( $result->num_rows == 1) {
    while ($usuario = $result->fetch_assoc()) {
		if( sha1($usuario[$clave]) == $idusuario ) {
?>

    <div class="container" role="main">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="?tipo=<?php echo $tipo; ?>&idusuario=<?php echo $idusuario; ?>&token=<?php echo $token; ?>" method="post">
          <div class="panel panel-default">
            <div class="panel-heading"> Restaurar contraseña </div>
            <div class="panel-body">
              <p></p>
              <div class="form-group">
                <label for="password"> Nueva contraseña </label>
                <input type="password" class="form-control" name="password1" required>
              </div>
              <div class="form-group">
                <label for="password2"> Confirmar contraseña </label>
                <input type="password" class="form-control" name="password2" required>
              </div>
              <div class="form-group">
                <input type="submit" name="restablecer" class="btn btn-primary" value="Recuperar contraseña" >
              </div>
            </div>
          </div>
        </form>  
        <?php
        if (isset($_POST['restablecer'])) {
          $password1 = $_POST['password1'];
          $password2 = $_POST['password2'];
          $id_tipo = $usuario[$clave];
          if ($password1 == $password2) {
            if($tipo == "prof") {
              $sql = "UPDATE profesor SET Password = '".$password1."', token = '' WHERE ID_prof = ".$id_tipo;
            } elseif ($tipo=="alumno") {
              $sql = "UPDATE alumno SET Password = '".$password1."', token = '' WHERE ID_alumno = ".$id_tipo;//Aquí habia error
            }
            $db = new Connector();
            if ($db->execute($sql)) {
              echo '<div class="alert alert-info"> Su contraseña se actualizo correctamente. </div>';
            } else {
              echo '<div class="alert alert-warning"> Ocurrio un error al actualizar su contraseña, intente nuevamente. </div>';
            }
          } else {
            echo '<div class="alert alert-warning"> Las contraseñas no coincide, intente nuevamente. </div>';
          }
        }
        ?>
      </div>
      <div class="col-md-4"></div>

    </div> <!-- /container -->

    <script src="../js/jquery-1.11.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<?php
    		}
    		else{
    			echo '<div class="alert alert-info"> Token invalido, revise su email, o <a href="recpass.php?tipo=alumno">intente nuevamente</a></div>';
        }
    	}
	
    } else{
      //header('Location:recpass.php?tipo=alumno');
      echo '<div class="alert alert-warning"> No existe una cuenta asociada a ese correo. </div>';
    }
  } else{
    //header('Location:recpass.php?tipo=alumno');
    echo '<div class="alert alert-warning"> <a href="recpass.php?tipo=alumno">Solicitar un token</a>. </div>';
}
?>
  </body>
</html>