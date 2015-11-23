<?php
error_reporting(0);
session_start();
$host="localhost";
$usuario="???";
$pass="???";
$database="????";
$con = new mysqli($host, $usuario, $pass, $database);
if ($con->connect_errno)
{
       
       
       echo "<script language='javascript'>
alert('Error en la conexion.');
window.location.href = 'index.html';
</script>";

       exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");
if ($_POST['username'] == null || $_POST['password'] == null)
{
    echo '<span>Por favor complete todos los campos.</span>';
}
else
{
    $user = $_POST['username'];
    $pass = $_POST['password']; 
    $tabla=$_POST['tabla'];
    $consulta = mysqli_query($con, "SELECT Nombre, Password FROM usuario WHERE Nombre = '$user' AND Password = '$pass'");//la tabla "usuario" cambia según sea el tipo de 
    if (mysqli_num_rows($consulta) > 0)
    {
       
        $_SESSION["Nombre"]=$user;
        $_SESSION["PASSWORD"]=$pass;
        echo '<script>location.href = "paginadestino.php"</script>';//colocar el nombre de la página destino
        mysqli_close($con);
    }
    else
    {
        echo "<script language='javascript'>
alert('El usuario o contraseña son incorrectos $user$pass, vuelve a intentar.');
window.location.href = 'login.php';
</script>";
        mysqli_close($con);
    }
    
}
?>