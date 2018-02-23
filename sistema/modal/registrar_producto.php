<?php
 include('../modelo/conexion.php');
 if (isset($conexion)) {
   ?>
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
                    <form name="guardar_producto"  id="guardar_producto" name="guardar_producto">
                      <div id="resultados_ajax_productos">                       
                      </div>
                      <div class="modal-body row">                
                    <div class="col-xs-4">                
                      <label>Proveedores</label>
                      <select  name="proveedor" class="form-control col-md-7 col-xs-12">
                        <?php
                     include('../modelo/conexion.php');   
                    $sql_proveedor=mysqli_query($conexion,"SELECT nombres,id_proveedor FROM proveedor , persona_rs WHERE proveedor.id_persona = persona_rs.id_persona");
                    while ($rw=mysqli_fetch_array($sql_proveedor)){
                      $id_proveedor=$rw["id_proveedor"];
                      $nombre_proveedor=$rw["nombres"];
                      if ($id_proveedor==$rw["id_proveedor"]){
                        ?>
                          <option value="<?php echo $id_proveedor;?>" > <?php echo $nombre_proveedor;?></option>
                     
                     <?php } else { ?>
                       
                       <option>Error</option>
                     <?php 
                      }            
                     
                    }
                  ?>           
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
                          <?php
                            include('../modelo/conexion.php');
                            $sql_categoria=mysqli_query($conexion,"SELECT * FROM categoria");
                            while ($rw=mysqli_fetch_array($sql_categoria)){
                            $id_categoria=$rw["id_categoria"];
                            $nombre_categoria=$rw["categoria"];
                            if ($id_categoria==$rw["id_categoria"]){
                            ?>
                              <option value="<?php echo $id_categoria;?>" > <?php echo $nombre_categoria;?></option>
                     
                            <?php
                             } else {
                             ?>                       
                       <option>Error</option>
                            <?php 
                              }            
                     
                             }
                            ?>           
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
                          <input type="text" id="modelo" name="color" class="form-control" placeholder="Color">
                        </div>  
                        <div class="col-xs-2">
                          <label for="costo">Costo</label>
                          <input type="text" class="form-control cantidades" id="costo" name="costo" placeholder="Costo" data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" required>                    
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

<?php 
}
 ?>