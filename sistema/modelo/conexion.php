<?php 
/*
function Conectar(){
	$conn = null;
	$host = 'localhost';
	$db = 'credicel';
	$user = 'root';
	$pwd = '';
	try {
		$conn = new PDO('mysql:host='.$host.';bdname='.$db, $user, $pwd);	
	}catch(PDOException $e) {
		echo '(Error al conectar con la base de datos'.$e;
		exit;
	}
	return $conn
}

*/




$host="localhost";
$usuario="root"; 
$clave="";
$bd="credicel";

$conexion= new mysqli($host,$usuario,$clave,$bd);

 if(mysqli_connect_errno($conexion))
 {
	 echo "existe un error en la conexion".mysqli_connect_errno();
 }
else
{
 // echo 'conexios establecida a la base de datos';	
}

 ?>