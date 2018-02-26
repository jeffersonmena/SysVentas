<?php

	if (empty($_POST['categoria'])) {
           $errors[] = "categoria vacío";
   		} else if (empty($_POST['modelo'])){
			$errors[] = "modelo del producto vacio";
        } else if (empty($_POST['fechaCompra'])){
			$errors[] = "fechaCompra del producto vacío";
		} else if (empty($_POST['Nfactura'])){
			$errors[] = "Nfactura del producto vacio";
		} else if (empty($_POST['marca'])){
			$errors[] = "marca del producto vacio";
		} else if (empty($_POST['proveedor'])){
			$errors[] = "proveedor del producto vacio";	
		} else if (empty($_POST['serie'])){
			$errors[] = "serie del producto vacio";
		} else if (empty($_POST['color'])){
			$errors[] = "color del producto vacio";			
		} else if (empty($_POST['costo'])){
			$errors[] = "costo de compra vacío";
		} else if (
			!empty($_POST['proveedor']) &&
			!empty($_POST['categoria']) &&
			!empty($_POST['fechaCompra']) &&
			!empty($_POST['Nfactura']) &&
			!empty($_POST['marca']) &&
			!empty($_POST['modelo']) &&
			!empty($_POST['serie']) &&
			!empty($_POST['color']) &&
			!empty($_POST['costo']) 
		){
		/* Connect To Database*/
		//require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		include("../modelo/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$marca=mysqli_real_escape_string($conexion,(strip_tags($_POST["marca"],ENT_QUOTES)));
		$modelo=mysqli_real_escape_string($conexion,(strip_tags($_POST["modelo"],ENT_QUOTES)));
		$serie=mysqli_real_escape_string($conexion,(strip_tags($_POST["serie"],ENT_QUOTES)));
		$color=mysqli_real_escape_string($conexion,(strip_tags($_POST["color"],ENT_QUOTES)));
		$costo=floatval($_POST['costo']);
		$Nfactura=mysqli_real_escape_string($conexion,(strip_tags($_POST["Nfactura"],ENT_QUOTES)));		
		$fechaCompra=date("Y-m-d H:i:s");		
		$id_proveedor=mysqli_real_escape_string($conexion,(strip_tags($_POST["proveedor"],ENT_QUOTES)));
		$id_categoria=mysqli_real_escape_string($conexion,(strip_tags($_POST["categoria"],ENT_QUOTES)));	
		$sql="INSERT INTO producto (marca, modelo, serie, color, costo, nro_factura, fecha_compra, id_proveedor, id_categoria) VALUES ('$marca','$modelo','$serie','$color','$costo',' $Nfactura ',' $fechaCompra ',' $id_proveedor ',' $id_categoria ')";
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