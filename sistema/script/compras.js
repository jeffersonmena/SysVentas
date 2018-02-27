			$(document).ready(function(){
				limpiar();
				guardar_Producto()

		});
	function guardar_Producto(){	//inicia guardar_Producto
		$( "#guardar_producto" ).submit(function( event ) {
		  $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "controlador/controladorcompras.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados_ajax_productos").html("Mensaje: Cargando...");

					  },
					success: function(datos){
					$("#resultados_ajax_productos").html(datos);
					$('#guardar_datos').attr("disabled", false);
					limpiar();
				  }
			});
		  event.preventDefault();
		})//Finaliza guardar_cliente
		}
	function limpiar(){
		$('#proveedor').val('');
		$('#datepicker').val('');
		$('#factura').val('');
		$('#categoria').val('');
		$('#marca').val('');
		$('#modelo').val('');
		$('#serie').val('');
		$('#color').val('');
		$('#costo').val('');
		}