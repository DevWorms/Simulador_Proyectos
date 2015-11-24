<?php
session_start();
error_reporting(0);

include('class/Connector.php');
$db = new Connector();

function notificacion($msj) {//Muestra un alert en JS para mostrar una notificacion
    /*
     * Ejemplo de uso
     * <?php notificacion($msj = "Registro"); ?>
     */
    echo "
        <script>alert('" . $msj . "');</script>";
}

function checkEmail($email) { // Valida un email, si es valido
    $cnx = new Connector();
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        notificacion($msj = "Ingrese un email valido");
        return false;
    } else {
        return true;
    }
}

function checkPass($pass1, $pass2) { //Valida que las contrasenias sean iguales
    if ($pass1 != $pass2) {
        notificacion($msj = "Las contraseñas no coinciden");
    } else {
        return true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simulador de Proyectos de Inversión</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/grayscale.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-play-circle"></i> Simulador de Proyectos de Inversión

                    </a>

                </div>
                <div style="text-align:right;">
                    <a href="#" style="margin-left:15px;" class="navbar-btn btn btn-default btn-plus dropdown-toggle" data-toggle="modal" data-target="#RegistroAlumno">Registrarse</a>

                </div>
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div id="notificacion" class="col-md-12">

                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <!-- Trigger the modal with a button -->
                            <?php 
                            if (!empty($_SESSION['Id']) && !empty($_SESSION['Nombre'])) {
                                echo '<a href="panel/" type="button" class="btn btn-info btn-lg">Panel de Control</a>
                                <br><br>';   
                            }
                            ?>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ModalProfesores">Acceso Profesores</button>
                            <br><br>
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ModalAlumnos">Acceso Alumnos</button>
                            <br><br>

                            <a href="#about" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <div style="padding-top:60px;">
            <h1 style="text-align:center;">Departamento de Economía y Negocios</h1>
        </div>

        <!-- About Section -->
        <section id="about" class="container content-section text-center" style="padding-top: 100px;">
            <div class="row"><hr>
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 style="color:#5BC0DE">ACERCA DEL SIMULADOR</h2>
                    <p style="color:#5CB85C">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum ex, fringilla sed cursus id, eleifend quis dui. Nulla a erat auctor, pretium sem sagittis, fermentum lacus. Etiam mi dui, interdum nec dictum condimentum, malesuada nec libero. Fusce accumsan sem ut arcu volutpat, porttitor luctus lacus pulvinar. Nunc sit amet aliquam elit. Cras eget dolor gravida, posuere dui et, volutpat urna. Nam nunc metus, condimentum et rutrum faucibus, imperdiet sit amet orci. Sed pulvinar tortor eget diam gravida sagittis id a augue. Proin sit amet elementum dui, nec vestibulum elit.</p>
                </div>
            </div>
        </section>
        <br><br><br>

        <!-- Footer -->
        <footer>
            <div class="container text-center">
                <hr>
                <p style="color:#545B60">Copyright &copy; <a href="index.php">Universidad del Caribe</a> 2015</p>
            </div>
        </footer>

        <!-- Login Profesores -->
        <div class="modal fade" id="ModalProfesores" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="text-align: center; color:#000">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Acceso Profesores</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action='' name="login_form">
                            <p><input type="email" class="form-control input-lg" name="p_email_login" id="email" placeholder="Email" required="required"></p>
                            <p><input type="password" class="form-control input-lg" name="p_pass_login" placeholder="Password" required="required"></p>
                            <p>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary" name="p_enviar_login" value="Acceder">
                            <hr />
                            <a href="class/recpass.php?tipo=prof">¿Olvidaste tu Contraseña?</a> | <a href="#" data-toggle="modal" data-target="#RegistroProfesor">Registrarse</a>
                            </p>
                        </form>
                        <?php
                        if (isset($_POST['p_enviar_login'])) {
                            // Recibe los valores y los filtra
                            $login_email = $db->sec($_POST['p_email_login']);
                            $login_pass = $db->sec($_POST['p_pass_login']);
                            // Valida que no esten vacios
                            if ($login_email == null || $login_pass == null) {
                                notificacion($msj = "Por favor complete todos los campos");
                            } else {
                                $consulta = "SELECT * FROM profesor WHERE email = '" . $login_email . "' AND Password = '" . $login_pass . "';";
                                $db->execute($consulta);
                                /*
                                 * Ejecuta la consulta
                                 * Si devulve solo un valor
                                 * Crea la session y asigna su nombre e id
                                 * Redirecciona al admin
                                 */
                                if ($result->num_rows == 1) {
                                    while ($resultado = $result->fetch_assoc()) {
                                        session_start();
                                        $_SESSION["Nombre"] = $resultado['Nombre'];
                                        $_SESSION["Id"] = $resultado['ID_prof'];
                                        $_SESSION["Tipo_Usuario"] = "profesor";
                                        session_write_close();
                                    }
                                    echo "<script language='javascript'>
                                        alert('Bienvenido ".$_SESSION['Nombre']."');
                                        window.location.href = 'panel/';
                                    </script>";
                                } else {
                                    notificacion($msj = "El usuario o contraseña son incorrectos, vuelve a intentar.");
                                }
                            }
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Alumnos -->
        <div class="modal fade" id="ModalAlumnos" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="text-align: center; color:#000">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Acceso Alumnos</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action=''>
                            <p><input type="email" class="form-control input-lg" name="a_email_login" id="email" placeholder="Email"></p>
                            <p><input type="password" class="form-control input-lg" name="a_pass_login" placeholder="Password"></p>
                            <p><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary" name="a_enviar_login" value="Acceder">
                            <hr />
                            <a href="WebMaster.html">¿Olvidaste tu Contraseña?</a> | <a href="#" data-toggle="modal" data-target="#RegistroAlumno">Registrarse</a>
                            </p>
                        </form>
                        <?php
                        if (isset($_POST['a_enviar_login'])) {
                            $login_email = $db->sec($_POST['a_email_login']);
                            $login_pass = $db->sec($_POST['a_pass_login']);

                            if ($login_email == null || $login_pass == null) {
                                notificacion($msj = "Por favor complete todos los campos");
                            } else {
                                $consulta = "SELECT Nombre, ID_alumno FROM alumno WHERE email = '" . $login_email . "' AND Password = '" . $login_pass . "';";
                                $db->execute($consulta);
                                if ($result->num_rows == 1) {
                                    while ($resultado = $result->fetch_assoc()) {
                                        session_start();
                                        $_SESSION["Nombre"] = $resultado['Nombre'];
                                        $_SESSION["Id"] = $resultado['ID_alumno'];
                                        $_SESSION["Tipo_Usuario"] = "alumno";
                                        session_write_close();
                                    }
                                    echo "<script language='javascript'>
                                        alert('Bienvenido ".$_SESSION['Nombre']."');
                                        window.location.href = 'panel/';
                                    </script>";
                                } else {
                                    notificacion($msj = "El usuario o contraseña son incorrectos, vuelve a intentar.");
                                }
                            }
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>

            </div>
        </div>

        <!-- Registro de Profesores -->
        <div class="modal fade" id="RegistroProfesor" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="text-align: center; color:#000">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Registro de Profesor</h4>
                    </div>
                    <!-- Formulario -->
                    <form class="center-block" action="?signup=profesor" method="POST">
                        <div class="modal-body">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name='p_email' class="form-control input-lg" placeholder="coreo@ejemplo.com" required="required">
                                    <input type="password" name='p_pass' class="form-control input-lg" placeholder="Contraseña" required="required">
                                    <input type="password" name='p_pass2' class="form-control input-lg" placeholder="Confirmar contraseña" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='p_nombre' class="form-control input-lg" placeholder="Nombre(s)" required="required">
                                    <input type="text" name='p_apellidoP' class="form-control input-lg" placeholder="Apellido Paterno" required="required">
                                    <input type="text" name='p_apellidoM' class="form-control input-lg" placeholder="Apellido Materno">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='p_materia' class="form-control input-lg" placeholder="Materia">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="p_genero" class="form-control input-lg">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <select name="p_edad" class="form-control input-lg">
                                        <?php
                                        for ($i = 13; $i < 110; $i ++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>\n';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name='p_tel' class="form-control input-lg" placeholder="Tel (55 555 555)">
                                    <input type="text" name='p_cel' class="form-control input-lg" placeholder="Cel (044 55 555 555)">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='p_domicilio' class="form-control input-lg" placeholder="Domicilio">
                                    <input type="text" name='p_cp' class="form-control input-lg" placeholder="Código Postal">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <input type="submit" name='p_enviar' class="btn btn-info" value="Registro">
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['p_enviar'])) {
                        $password1 = $db->sec($_POST['p_pass']);
                        $password2 = $db->sec($_POST['p_pass2']);
                        if (checkPass($password1, $password2)) { //Valida que las contrasenias sean iguales
                            $email = $db->sec($_POST['p_email']);
                            if (checkEmail($email)) { 
                                /*
                                 * Valida que el email sea correcto
                                 * Revisa que el email no este registrado previamente
                                 */
                                if ($db->execute("SELECT email FROM profesor WHERE email = '" . $email . "'")) {
                                    if ($result->num_rows > 0) {
                                        notificacion($msj = "El email ya esta registrado");
                                    } else {
                                        $nombre = $db->sec($_POST['p_nombre']);
                                        $apellidoP = $db->sec($_POST['p_apellidoP']);
                                        $apellidoM = $db->sec($_POST['p_apellidoM']);
                                        $genero = $db->sec($_POST['p_genero']);
                                        $edad = $db->sec($_POST['p_edad']);
                                        $telefono = $db->sec($_POST['p_tel']);
                                        $celular = $db->sec($_POST['p_cel']);
                                        $direccion = $db->sec($_POST['p_domicilio']);
                                        $cp = $db->sec($_POST['p_cp']);
                                        $materia = $db->sec($_POST['p_materia']);
                                        $query = "INSERT INTO profesor (Nombre, Ap_pat, Ap_mat, Edad, Sexo, Telefono, Celular, email, Domicilio, CP, Password, Materia) VALUES ('" . $nombre . "', '" . $apellidoP . "', '" . $apellidoM . "', '" . $edad . "', '" . $genero . "', '" . $telefono . "', '" . $celular . "', '" . $email . "', '" . $direccion . "', '" . $cp . "', '" . $password1 . "', '" . $materia . "');";

                                        /*
                                         * Inserta el nuevo usuario
                                         */
                                        if ($db->execute($query)) {
                                            notificacion($msj = "Su cuenta fue creada exitosamente");
                                        } else {
                                            notificacion($msj = "Ocurrio un error al crear la cuenta, Intente nuevamente.");
                                        }
                                    }
                                } else {
                                    notificacion($msj = "No se pudo verificar el email");
                                }
                            }
                        }
                    }
                    ?>
                </div>

            </div>
        </div>

        <!-- Registro de Alumnos -->
        <div class="modal fade" id="RegistroAlumno" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="text-align: center; color:#000">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Registro de Alumno</h4>
                    </div>
                    <!-- Formulario -->
                    <form class="center-block" action="?signup=alumno" method="POST">
                        <div class="modal-body">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name='a_email' class="form-control input-lg" placeholder="coreo@ejemplo.com" required="required">
                                    <input type="password" name='a_pass' class="form-control input-lg" placeholder="Contraseña" required="required">
                                    <input type="password" name='a_pass2' class="form-control input-lg" placeholder="Confirmar contraseña" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='a_nombre' class="form-control input-lg" placeholder="Nombre(s)" required="required">
                                    <input type="text" name='a_apellidoP' class="form-control input-lg" placeholder="Apellido Paterno" required="required">
                                    <input type="text" name='a_apellidoM' class="form-control input-lg" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="a_genero" class="form-control input-lg">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <select name="a_edad" class="form-control input-lg">
                                        <?php
                                        for ($i = 13; $i < 110; $i ++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>\n';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name='a_tel' class="form-control input-lg" placeholder="Tel (55 555 555)">
                                    <input type="text" name='a_cel' class="form-control input-lg" placeholder="Cel (044 55 555 555)">
                                </div>
                                <div class="form-group">
                                    <input type="text" name='a_domicilio' class="form-control input-lg" placeholder="Domicilio">
                                    <input type="text" name='a_cp' class="form-control input-lg" placeholder="Código Postal">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <input type="submit" name='a_enviar' class="btn btn-info" value="Registro">

                        </div>
                    </form>
                    <?php
                    if (isset($_POST['a_enviar'])) {
                        $password1 = $db->sec($_POST['a_pass']);
                        $password2 = $db->sec($_POST['a_pass2']);
                        if (checkPass($password1, $password2)) {
                            $email = $db->sec($_POST['a_email']);
                            if (checkEmail($email)) {
                                if ($db->execute("SELECT email FROM alumno WHERE email = '" . $email . "'")) {
                                    if ($result->num_rows > 0) {
                                        notificacion($msj = "El email ya esta registrado");
                                    } else {
                                        $nombre = $db->sec($_POST['a_nombre']);
                                        $apellidoP = $db->sec($_POST['a_apellidoP']);
                                        $apellidoM = $db->sec($_POST['a_apellidoM']);
                                        $genero = $db->sec($_POST['a_genero']);
                                        $edad = $db->sec($_POST['a_edad']);
                                        $telefono = $db->sec($_POST['a_tel']);
                                        $celular = $db->sec($_POST['a_cel']);
                                        $direccion = $db->sec($_POST['a_domicilio']);
                                        $cp = $db->sec($_POST['a_cp']);
                                        $query = "INSERT INTO alumno (Nombre, Ap_pat, Ap_mat, Edad, Sexo, Telefono, Celular, email, Domicilio, CP, Password) VALUES ('" . $nombre . "', '" . $apellidoP . "', '" . $apellidoM . "', '" . $edad . "', '" . $genero . "', '" . $telefono . "', '" . $celular . "', '" . $email . "', '" . $direccion . "', '" . $cp . "', '" . $password1 . "');";

                                        if ($db->execute($query)) {
                                            notificacion($msj = "Su cuenta fue creada exitosamente");
                                        } else {
                                            notificacion($msj = "Ocurrio un error al crear la cuenta, Intente nuevamente.");
                                        }
                                    }
                                } else {
                                    notificacion($msj = "No se pudo verificar el email");
                                }
                            }
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
        <script src="js/grayscale.js"></script>

    </body>

</html>
