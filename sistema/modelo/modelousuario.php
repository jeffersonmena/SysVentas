<?php 

/**
* 
*/
class ClassName 
{
	
public	function __construct(){
	}
public function guardar($nombre,$usuario,$clave,$estado){
	global $conexion;

$query="Insert into login(nombre,usuario,clave,estado)
values('$nombre','$usuario','$clave','$estado')";
$result=$conexion->query($query);
return $result;
	}
}



 ?>