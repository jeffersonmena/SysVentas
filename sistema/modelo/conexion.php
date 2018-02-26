<?php 
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