<div class="row">
	<div class="col-md-3 col-md-offset-4">
		<h2>Lista de Productos</h2>
	</div>
</div>
 <div class="row">
 	<div class="col-md-6 col-md-offset-2"> 	
 		<table  class="table table-bordered table-hover">
 			<thead>
 			<tr>
 				<th>Categoria</th>
 				<th>Nombre</th>
 				<th>Serie</th>
 				<th>Color</th>
 				<th>Editar</th>
 				<th>Eliminar</th>
 			</tr>
			</thead>
 			<tbody>
 			<?php 
 				include('../modelo/conexion.php'); 
				$sql="SELECT categoria , CONCAT(marca, ',' ,modelo) as Nombre,serie,color FROM producto, categoria WHERE producto.id_categoria=categoria.id_categoria";
 				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_array($result)){ 

			 ?>
			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove"></button>
				</td>
			</tr>
			<?php 
				}
			 ?>
 				</tbody>
			 <tfoot>
 			<tr>
 				<th>Categoria</th>
 				<th>Nombre</th>
 				<th>Serie</th>
 				<th>Color</th>
 				<th>Editar</th>
 				<th>Eliminar</th>
 			</tr>
  			</tfoot>	
		</table>
 	</div>
 </div>
