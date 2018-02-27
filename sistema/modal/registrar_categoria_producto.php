        <!--Ingresa los productos de compra  -->
              <div class="modal fade" id="nuevaCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg"  role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                          <i class='glyphicon glyphicon-edit'>                            
                          </i> Agregar nueva categoria de producto
                        </h4>
                    </div>                    
                      <!--Inicio de form para agregar productos--> 
                    <form name="guardar_categoria_producto"  id="guardar_categoria_producto" name="guardar_categoria_producto">
                      <div id="resultados_ajax_categoria_productos">
                      </div>
                      <div class="modal-body row">              
                    <div class="col-xs-4">
                      <label for="categoria_producto">Nueva Categoria</label>
                      <input type="text" id="categoria_producto" name="categoria_producto" class="form-control" placeholder="Categoria de Producto">
                    </div>                        
                      </div>
                      <div class="row"> 
                        <div class="col-sm-12 right"> 
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
                        </div>
                        </div>
                      </div>                     
                    </form><!--termina de form para agregar productos-->                 
                  </div>
                </div>
              </div><!--Termina codigo de ingreso de productos de compra -->

