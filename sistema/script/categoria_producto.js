			$(document).ready(function(){
				limpiar();
				guardar_categoria()

		});
	function guardar_categoria(){	//inicia guardar_Producto
		$( "#guardar_categoria_producto" ).submit(function( event ) {
		  $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "controlador/controladorcategoriaproducto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados_ajax_categoria_productos").html("Mensaje: Cargando...");

					  },
					success: function(datos){
					$("#resultados_ajax_categoria_productos").html(datos);
					$('#guardar_datos').attr("disabled", false);
					limpiar();
				  }
			});
		  event.preventDefault();
		})//Finaliza guardar_cliente
		}
	function limpiar(){
		$('#categoria_producto').val('');
		}