
             <!--Ingresa los productos de compra  -->
              <div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg"  role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                          <i class='glyphicon glyphicon-edit'>                            
                          </i> Agregar nuevo producto
                        </h4>
                    </div>                    
                      <!--Inicio de form para agregar productos--> 
                    <form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
                      <div id="resultados_ajax_productos">                       
                      </div>
                      <div class="modal-body row">                
                    <div class="col-xs-4">                
                      <label for="proveedores">Proveedores</label>
                      <select type="text" id="proveedores" name="estado" class="form-control col-md-7 col-xs-12">
                          <option value="activo">
                            proveedor 1
                          </option>
                          <option value="baja">
                            proveedor 2
                          </option>
                      </select>
                    </div>
                    <div class="col-xs-4">
                      <label>Fecha Compra</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="fechaCompra" class="form-control pull-right" id="datepicker">
                      </div>
                    </div>  
                    <div class="col-xs-4">
                      <label for="factura">N° de Factura</label>
                      <input type="text" id="factura" name="Nfactura" class="form-control" placeholder="Factura">
                    </div>                        
                      </div>
                      <div class="modal-body row"> 
                        <div class="col-xs-4">                
                          <label for="categoria">Categoria</label>
                          <select type="text" id="categoria" name="categoria" class="form-control col-md-7 col-xs-12">
                              <option value="activo">
                                categoria 1
                              </option>
                              <option value="baja">
                                categoria 2
                              </option>
                          </select>
                        </div>
                        <div class="col-xs-4">
                          <label for="marca">Marca</label>
                          <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca">
                        </div>
                        <div class="col-xs-4">
                          <label for="modelo">Modelo</label>
                          <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo">
                        </div>                                                                     
                      </div>
                      <div class="modal-body row ">
                        <div class="col-xs-4">
                          <label for="serie">Serie</label>
                          <input type="text" id="serie" name="serie" class="form-control" placeholder="Serie">
                        </div>  
                        <div class="col-xs-4">
                          <label for="modelo">Color</label>
                          <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Color">
                        </div>                                                  
                      </div>
                      <div class="modal-body row">
                        <div class="col-xs-2">
                          <label for="codigo" >Código</label>
                          <input type="text" class="form-control cantidades" id="codigo" name="codigo" placeholder="#" data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" required>    
                        </div> 
                        <div class="col-xs-2"><!--Falta agregar Ajax "JavaScript" MV y crear BD-->
                          <label for="cantidad" >Cantidad</label>
                          <input type="text" class="form-control cantidades" id="cantidad" name="cantidad" placeholder="Cantidad" data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" required>                   
                        </div>                    
                        <div class="col-xs-2">
                          <label for="costo">Costo</label>
                          <input type="text" class="form-control cantidades" id="costo" name="costo" placeholder="Costo" data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" required>                    
                        </div> 
                        <div class="col-xs-2">
                          <label for="total">Total</label>
                          <input type="text" class="form-control cantidades" id="total" name="total" placeholder="Total" data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" required>
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
