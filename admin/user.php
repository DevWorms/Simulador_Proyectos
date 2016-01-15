<?php
error_reporting(0);
session_start();
if (empty($_SESSION['Id_admin'] ) || $_SESSION['Id_admin']  == "") {
    header("Location: login.php");
}
include_once '../class/Connector.php';

$db = new Connector();

$id = $db->sec($_GET['id']);
$tipo = $db->sec($_GET['ver']);

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
} else {
    header('Location: add.php');
}

if ($db->execute("SELECT * FROM ".$tabla." WHERE ".$id_col." = ".$id)) {
    $usuario = $result->fetch_assoc();
}

function notif($msj) {
    echo '<div class="alert alert-info"> '.$msj.' </div>';
}

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
                            <form method="POST">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name='email' class="form-control input-lg" value="<?php echo $usuario['email']; ?>" required="required">
                                    <input type="password" name='pass' class="form-control input-lg" placeholder="Contraseña" required="required">
                                    <input type="password" name='pass2' class="form-control input-lg" placeholder="Confirmar contraseña" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='nombre' class="form-control input-lg" value="<?php echo $usuario['Nombre']; ?>" required="required">
                                    <input type="text" name='apellidoP' class="form-control input-lg" value="<?php echo $usuario['Ap_pat']; ?>" required="required">
                                    <input type="text" name='apellidoM' class="form-control input-lg" placeholder="Apellido Materno" value="<?php echo $usuario['Ap_mat']; ?>">
                                </div>
                                <?php
                                if ($tipo == "profesor") {
                                    echo '<div class="form-group">
                                    <input type="text" name="materia" class="form-control input-lg" placeholder="Materia" value="'.$usuario["Materia"].'" required>
                                </div>';
                                }
                                ?>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="genero" class="form-control input-lg">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <select name="edad" alt="Edad" title="Edad" class="form-control input-lg">
                                        <?php
                                        echo '<option value="' . $usuario["Edad"] . '">' . $usuario["Edad"] . '</option>\n';
                                        for ($i = 13; $i < 110; $i ++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>\n';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name='tel' class="form-control input-lg" placeholder="Tel (55 555 555)" value="<?php echo $usuario['Telefono']; ?>">
                                    <input type="text" name='cel' class="form-control input-lg" placeholder="Cel (044 55 555 555)" value="<?php echo $usuario['Celular']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='domicilio' class="form-control input-lg" placeholder="Domicilio" value="<?php echo $usuario['Domicilio']; ?>">
                                    <input type="text" name='cp' class="form-control input-lg" placeholder="Código Postal" value="<?php echo $usuario['CP']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name='enviar' class="btn btn-info" value="Actualizar">
                                </div>
                            </form>
                            <?php
                                if (isset($_POST['enviar'])) {
                                    $pass = $db->sec($_POST['pass']);
                                    $pass2 = $db->sec($_POST['pass2']);
                                    if (($pass == $pass2) && !empty($pass)) {
                                        $email = $db->sec($_POST['email']);
                                        $nombre = $db->sec($_POST['nombre']);
                                        $apellidoP = $db->sec($_POST['apellidoP']);
                                        if (!empty($email) && !empty($nombre) && !empty($apellidoP)) {
                                            $conn = new Connector();

                                            $apellidoM = $db->sec($_POST['apellidoM']);
                                            $genero = $db->sec($_POST['genero']);
                                            $edad = $db->sec($_POST['edad']);
                                            $tel = $db->sec($_POST['tel']);
                                            $cel = $db->sec($_POST['cel']);
                                            $domicilio = $db->sec($_POST['domicilio']);
                                            $cp = $db->sec($_POST['cp']);

                                            if ($tipo == "profesor") {
                                                $materia = $db->sec($_POST['materia']);
                                                if ($conn->execute("UPDATE ".$tabla." SET Nombre = ".$nombre.", 
                                                    Ap_pat = ".$apellidoP.", Ap_mat = ".$apellidoM.", email = ".$email.", 
                                                    Sexo = ".$genero.", Edad = ".$edad.", Telefono = ".$tel.", 
                                                    Celular = ".$cel.", Domicilio = ".$domicilio.", CP = ".$cp.", 
                                                    Materia = ".$materia.", Password = ".$pass." WHERE ".$id_col." = ".$id)) {
                                                    echo '<div class="alert alert-info"> El usuario se actualizo correctamente </div>';
                                                } else {
                                                    notif("Ocurrio un error al actualizar, vuelve a intentar");
                                                }
                                            } else {
                                                if ($conn->execute("UPDATE ".$tabla." SET Nombre = ".$nombre.", 
                                                    Ap_pat = ".$apellidoP.", Ap_mat = ".$apellidoM.", email = ".$email.", 
                                                    Sexo = ".$genero.", Edad = ".$edad.", Telefono = ".$tel.", 
                                                    Celular = ".$cel.", Domicilio = ".$domicilio.", CP = ".$cp.", 
                                                    Password = ".$pass." WHERE ".$id_col." = ".$id)) {
                                                    echo '<div class="alert alert-info"> El usuario se actualizo correctamente </div>';
                                                } else {
                                                    notif("Ocurrio un error al actualizar, vuelve a intentar");
                                                }
                                            }
                                        } else {
                                            notif("Completa los campos requeridos");
                                        }
                                    } else {
                                        notif("Las contraseñas no coinciden");
                                    }
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