<?php
/*
* Valida si el usuario actual
* esta logueado, si no lo esta redirecciona al inicio
*/
session_start();

echo $_SESSION['Id'].$_SESSION['Nombre'];
if ((empty($_SESSION['Id']) && empty($_SESSION['Nombre'])) || ($_SESSION['Id'] == "" && $_SESSION['Nombre'] == "")) {
	header("Location: ../index.php");
}