<?php 
$usu=$_POST['usuario'];
$pwd=$_POST['clave'];

session_start();
include '../modelo/conexion.php';
$validar = $conexion->query("SELECT * FROM login WHERE usuario='$usu' AND clave='$pwd'");
if ($result = mysqli_fetch_array($validar)) {
//	$query=$conexion->query("SELECT nombre FROM login WHERE usuario='$usu' AND clave='$pwd'");
	$_SESSION['u_usu'] = $usu;
	header("location: ../Producto.php");
}else{
	header("location: ../login.php");
}
?>