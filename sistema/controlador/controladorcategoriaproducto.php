<?php 

	if (empty($_POST['categoria_producto'])) {
           $errors[] = "categoria producto vacío";
   		} else if (!empty($_POST['categoria_producto']) 			
		){
		include("../modelo/conexion.php");
		$categoria_producto=mysqli_real_escape_string($conexion,(strip_tags($_POST["categoria_producto"],ENT_QUOTES)));
		$sql="INSERT INTO categoria (categoria) VALUES ('$categoria_producto')";
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