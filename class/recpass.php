<?php
include 'Connector.php';
$db = new Connector();
session_start();

// Almacena el tipo de usuario
if (empty($_SESSION['tipo']) || $_SESSION['tipo'] == "") {
  if (empty($_GET['tipo'])) {
    session_start();
    $_SESSION['tipo'] = "alumno";
    session_write_close();
  } else {
    session_start();
    $_SESSION['tipo'] = $db->sec($_GET['tipo']);
    session_write_close();
  }
} else {
  session_destroy();
}

function generarLinkTemporal($idusuario, $username, $tipo) {
  $token = sha1($idusuario.$username.rand(1,9999999).date('Y-m-d'));
  $enlace = $_SERVER["SERVER_NAME"].'/class/restablecer.php?tipo='.$tipo.'&idusuario='.sha1($idusuario).'&token='.$token;
  $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  if ($tipo == "prof") {
    $query = "UPDATE profesor set token = '".$token."' WHERE ID_prof = '".$idusuario."' ;";
  } elseif ($_SESSION['tipo'] == "alumno") {
    $query = "UPDATE alumno set token = '".$token."' WHERE ID_alumno = '".$idusuario."' ;";
  }

  $db->query($query);
  return $enlace;
}

function enviarEmail( $email, $link ){
    $mensaje = '<html>
    <head>
      <title>Restablece tu contraseña</title>
    </head>
    <body>
      <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
      <p>Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>
      <p>
        <strong>Enlace para restablecer tu contraseña</strong><br>
        <a href="http://'.$link.'"> Restablecer contraseña </a>
      </p>
    </body>
    </html>';

    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'From: Codedrinks <mimail@codedrinks.com>' . "\r\n";
    
    echo $mensaje;
    mail($email, "Recuperar contraseña", $mensaje, $cabeceras);
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="denker">

    <title> Resetear contraseña </title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

  </head>

  <body>
    <div class="container" role="main">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form id="frmRestablecer" action="?tipo=<?php echo $_SESSION['tipo']; ?>" method="post">
          <div class="panel panel-default">
            <div class="panel-heading"> Restaurar contraseña </div>
            <div class="panel-body">
              <p></p>
              <div class="form-group">
                <label for="email"> Escribe el email asociado a tu cuenta para recuperar tu contraseña </label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                <input type="submit" name="recuperar" class="btn btn-primary" value="Recuperar contraseña" >
              </div>
            </div>
          </div>
        </form>
        <?php
        if (isset($_POST['recuperar'])) {
          //Contenido de validaremail.php
          //Valida que no este vacio el email
          $email = $db->sec($_POST['email']);
          if (!empty($email) || $email != "") {
            if ($_SESSION['tipo'] == "prof") {
              $sql = "SELECT * FROM profesor WHERE email = '".$email."' ;";
              $clave="ID_prof";
            } elseif ($_SESSION['tipo'] == "alumno") {
              $sql = "SELECT * FROM alumno WHERE email = '".$email."' ;";//aqui habia error
              $clave="ID_alumno";
            }
            $db->execute($sql);
            if ($result->num_rows == 1) {
              while ($resultado = $result->fetch_assoc()) {
                $linkTemporal = generarLinkTemporal( $resultado[$clave], $resultado['email'], $_SESSION['tipo'] );
                enviarEmail( $email, $linkTemporal );
                  echo '<div class="alert alert-info"> Un correo ha sido enviado a su cuenta de email con las instrucciones para restablecer la contraseña </div>';
              }
            } else {
              echo '<div class="alert alert-warning"> No existe una cuenta asociada a ese correo. </div>';
            }
          }
        }
        ?>
        <div id="mensaje">
          
        </div>
      </div>
      <div class="col-md-4"></div>

    </div> <!-- /container -->

    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>