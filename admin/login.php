<?php
error_reporting(0);
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
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="email@example.com" required>
                                    <input type="password" id="pass" class="form-control" name="pass" placeholder="Contraseña" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="ingresar" class="btn btn-primary" value="Ingresar" >
                                </div>
                            </form>
                            <?php 
                            if (isset($_POST['ingresar'])) {
                                $email = $db->sec($_POST['email']);
                                $password = $db->sec($_POST['pass']);

                                if (!empty($email) && !empty($password)) {
                                    $db->execute("SELECT ID_admin, Nombre FROM administrador WHERE email = '".$email."' AND Password = '".$password."';");
                                    if ($result->num_rows == 1) {
                                        while ($admins = $result->fetch_assoc()) {
                                            session_start();
                                            $_SESSION['Id_admin'] = $admins['ID_admin'];
                                            $_SESSION['Nombre'] = $admins['Nombre'];
                                            session_write_close();
                                            echo "<script>window.location.href = 'index.php';</script>";
                                        }
                                    } else {
                                        echo '<div class="alert alert-info"> El email o contraseña no coinciden. </div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-info"> Complete todos los datos </div>';
                                }
                            }
                            ?>
                        </div>
                    </div> 
                </div>
                <div class="col-md-4"></div>
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