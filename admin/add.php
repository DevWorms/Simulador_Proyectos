<?php
error_reporting(0);
session_start();
if (empty($_SESSION['Id_admin']) || $_SESSION['Id_admin'] == "") {
    header("Location: login.php");
}
include_once '../class/Connector.php';

$db = new Connector();

function notif($msj, $tipo) {
    echo '<div class="alert alert-' . $tipo . '"> ' . $msj . ' </div>';
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
        <script type="text/javascript">
            function registrar() {
                if (document.getElementById("tipo").selectedIndex == 1) {
                    document.getElementById("registro").style.display = "";
                    document.getElementById("profesor").style.display = "";
                    document.getElementById("materia").style.display = "none";
                    document.getElementById("tipo_usuario").value = "alumno";
                }
                if (document.getElementById("tipo").selectedIndex == 2) {
                    document.getElementById("registro").style.display = "";
                    document.getElementById("materia").style.display = "";
                    document.getElementById("profesor").style.display = "none";
                    document.getElementById("tipo_usuario").value = "profesor";
                }
                if (document.getElementById("tipo").selectedIndex == 3) {
                    document.getElementById("registro").style.display = "";
                    document.getElementById("profesor").style.display = "none";
                    document.getElementById("materia").style.display = "none";
                    document.getElementById("tipo_usuario").value = "admin";
                }
                ;
            }
        </script>
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
                        <div class="col-md-4">
                            <select name="tipo" id="tipo" class="form-control input-lg" onchange="javascript:registrar()">
                                <option value="">Tipo de Usuario</option>
                                <option value="alumno">Alumno</option>
                                <option value="profesor">Profesor</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                        <form method="POST" id="registro" style="display: none;">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name='email' class="form-control input-lg" placeholder="email@example.com" required="required">
                                    <input type="password" name='pass' class="form-control input-lg" placeholder="Contraseña" required="required">
                                    <input type="password" name='pass2' class="form-control input-lg" placeholder="Confirmar contraseña" required="required">
                                    <input type="text" style="display: none;" name="materia" id="materia" class="form-control input-lg" placeholder="Materia" style="display: none;">
                                    <?php
                                    $conn = new Connector();
                                    $query = "SELECT ID_prof, Nombre, Ap_pat, Materia FROM profesor ORDER BY Materia ASC;";
                                    if ($conn->execute($query)) {
                                        echo '<select name="profesor" style="display: none;" id="profesor" class="form-control input-lg">'
                                        . '<option>Materia</option>';
                                        while ($profesor = $result->fetch_assoc()) {
                                            echo '<option value="' . $profesor['ID_prof'] . '"> ' . $profesor['Materia'] . ' - ' . $profesor['Nombre'] . ' ' . $profesor['Ap_pat'] . '</option>';
                                        }
                                        echo '</select>';
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name='nombre' class="form-control input-lg" placeholder="Nombre(s)" required="required">
                                    <input type="text" name='apellidoP' class="form-control input-lg" placeholder="Apellido Paterno" required="required">
                                    <input type="text" name='apellidoM' class="form-control input-lg" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="genero" class="form-control input-lg">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <select name="edad" alt="Edad" title="Edad" class="form-control input-lg">
                                        <?php
                                        for ($i = 13; $i < 110; $i ++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>\n';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name='tel' class="form-control input-lg" placeholder="Tel (55 555 555)">
                                    <input type="text" name='cel' class="form-control input-lg" placeholder="Cel (044 55 555 555)">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='domicilio' class="form-control input-lg" placeholder="Domicilio">
                                    <input type="text" name='cp' class="form-control input-lg" placeholder="Código Postal">
                                    <input type="text" id="tipo_usuario" name="tipo_usuario" style="display: none;" value="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name='enviar' class="btn btn-info" value="Registrar">
                                </div>
                        </form>
                    </div>
                    <?php
                    if (isset($_POST['enviar'])) {
                        $pass = $db->sec($_POST['pass']);
                        $pass2 = $db->sec($_POST['pass2']);
                        if (($pass == $pass2) && !empty($pass)) {
                            $email = $db->sec($_POST['email']);
                            $nombre = $db->sec($_POST['nombre']);
                            $apellidoP = $db->sec($_POST['apellidoP']);
                            if (!empty($email) && !empty($nombre) && !empty($apellidoP)) {
                                $tipo = $db->sec($_POST['tipo_usuario']);
                                
                                $apellidoM = $db->sec($_POST['apellidoM']);
                                $genero = $db->sec($_POST['genero']);
                                $edad = $db->sec($_POST['edad']);
                                $tel = $db->sec($_POST['tel']);
                                $cel = $db->sec($_POST['cel']);
                                $domicilio = $db->sec($_POST['domicilio']);
                                $cp = $db->sec($_POST['cp']);

                                if ($tipo == "profesor") {
                                    if ($db->execute("SELECT email FROM profesor WHERE email = '" . $email . "'")) {
                                        if ($result->num_rows > 0) {
                                            notif($msj = "El email ya esta registrado", "warning");
                                        } else {
                                            $conn = new Connector();
                                            $materia = $db->sec($_POST['materia']);
                                            if ($conn->execute("INSERT INTO profesor (
                                                    Nombre, Ap_pat, Ap_mat, Edad, Sexo, 
                                                    Telefono, Celular, email, Domicilio, 
                                                    CP, Password, Materia) VALUES (
                                                    '" . $nombre . "', '" . $apellidoP . "',
                                                     '" . $apellidoM . "', '" . $edad . "',
                                                      '" . $genero . "', '" . $tel . "',
                                                       '" . $cel . "', '" . $email . "',
                                                        '" . $domicilio . "', '" . $cp . "',
                                                         '" . $pass . "', '" . $materia . "');")) {
                                                notif(" El usuario se creo correctamente ", "info");
                                            } else {
                                                notif("Ocurrio un error al crear el usuario, vuelve a intentar", "warning");
                                            }
                                        }
                                    }
                                } elseif ($tipo == "alumno") {
                                    if ($db->execute("SELECT email FROM alumno WHERE email = '" . $email . "'")) {
                                        if ($result->num_rows > 0) {
                                            notif($msj = "El email ya esta registrado", "warning");
                                        } else {
                                            $conn = new Connector();
                                            $profesor = $db->sec($_POST['profesor']);
                                            if ($conn->execute("INSERT INTO alumno (
                                                    Nombre, Ap_pat, Ap_mat, Edad, Sexo, 
                                                    Telefono, Celular, email, Domicilio, CP, Password)
                                                     VALUES ('" . $nombre . "', '" . $apellidoP . "', 
                                                        '" . $apellidoM . "', '" . $edad . "', '" . $genero . "', 
                                                        '" . $tel . "', '" . $cel . "', '" . $email . "',
                                                        '" . $domicilio . "', '" . $cp . "', '" . $pass . "');")) {
                                                $db->execute("SELECT ID_alumno FROM alumno WHERE email = '" . $email . "';");
                                                $idAlumno = $result->fetch_array();
                                                $idA = $idAlumno[0];

                                                $query2 = "INSERT INTO historial_clase (ID_prof, ID_alumno) VALUES (" . $profesor . ", " . $idA . ");";
                                                $db->execute($query2);
                                                notif(' El usuario se creo correctamente ', "info");
                                            } else {
                                                notif("Ocurrio un error al crear el usuario, vuelve a intentar", "warning");
                                            }
                                        }
                                    }
                                } elseif ($tipo == "admin") {
                                    if ($db->execute("SELECT email FROM alumno WHERE email = '" . $email . "'")) {
                                        if ($result->num_rows > 0) {
                                            notif($msj = "El email ya esta registrado", "warning");
                                        } else {
                                            $conn = new Connector();
                                            if ($conn->execute("INSERT INTO administrador (
                                                    Nombre, Ap_pat, Ap_mat, Edad, Sexo, 
                                                    Telefono, Celular, email, Domicilio, 
                                                    CP, Password) VALUES (
                                                    '" . $nombre . "', '" . $apellidoP . "',
                                                     '" . $apellidoM . "', '" . $edad . "',
                                                      '" . $genero . "', '" . $tel . "',
                                                       '" . $cel . "', '" . $email . "',
                                                        '" . $domicilio . "', '" . $cp . "',
                                                         '" . $pass . "');")) {
                                                notif(" El usuario se creo correctamente ", "info");
                                            } else {
                                                notif("Ocurrio un error al crear el usuario, vuelve a intentar", "warning");
                                            }
                                        }
                                    }
                                }
                            } else {
                                notif("Completa los campos requeridos", "warning");
                            }
                        } else {
                            notif("Las contraseñas no coinciden", "warning");
                        }
                    }
                    ?>
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