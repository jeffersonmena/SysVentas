<?php 

/*
$id_login=$_POST['id_login'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$estado=$_POST['estado'];

if (empty($id_login)) {
		$registrar= $objUsuario->guardar($nombre,$usuario,$clave,$estado);
	header ("location:../vista_login.html");
}
else
{
	header("location: ../vista_registro.html ");
}*/
$usu=$_POST['usuario'];
$pwd=$_POST['clave'];

session_start();
include '../modelo/conexion.php';
$validar = $conexion->query("SELECT * FROM login WHERE usuario='$usu' AND clave='$pwd'");
if ($result = mysqli_fetch_array($validar)) {
//	$query=$conexion->query("SELECT nombre FROM login WHERE usuario='$usu' AND clave='$pwd'");
	$_SESSION['u_usu'] = $usu;
	header("location: ../vista/compras.php");
}else{
	header("location: ../login.php");
}




?>