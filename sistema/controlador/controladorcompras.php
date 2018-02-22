<?php
//include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor
codigo
cantidad
detalle
precio
total*/
	if (empty($_POST['codigo'])) {
           $errors[] = "Código vacío";
        } else if (empty($_POST['cantidad'])){
			$errors[] = "cantidad del producto vacío";
		} else if (empty($_POST['detalle']){
			$errors[] = "detalle del producto vacio";
		} else if (empty($_POST['precio'])){
			$errors[] = "Precio de compra vacío";
		}else if (empty($_POST['total'])){
			$errors[] = "total de compra vacío";
		} else if (
			!empty($_POST['codigo']) &&
			!empty($_POST['cantidad']) &&
			!empty($_POST['detalle']) &&
			!empty($_POST['precio']) &&
			!empty($_POST['total']) 

		){
		/* Connect To Database*/
		//require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once("../modelo/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$codigo=mysqli_real_escape_string($conexion,(strip_tags($_POST["codigo"],ENT_QUOTES)));
		$cantidad=mysqli_real_escape_string($conexion,(strip_tags($_POST["cantidad"],ENT_QUOTES)));
		$detalle=mysqli_real_escape_string($conexion,(strip_tags($_POST["detalle"],ENT_QUOTES)));
		$precio_compra=floatval($_POST['precio']);
		$date_added=date("Y-m-d H:i:s");
		$sql="INSERT INTO products (codigo_producto, nombre_producto, status_producto, date_added, precio_producto) VALUES ('$codigo','$nombre','$estado','$date_added','$precio_venta')";
		$query_new_insert = mysqli_query($conexion,$sql);
			if ($query_new_insert){
				$messages[] = "Producto ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>