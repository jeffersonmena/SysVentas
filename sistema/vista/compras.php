<?php session_start(); ?>  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inicio | Credicel</title>

<?php include('../vista/links.html'); ?>
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include("../vista/navbar.html") ?>

  <!-- Left side column. contains the logo and sidebar -->
<?php include("../vista/side.html") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ingreso de Mercaderia
        <small>Facturas de Compras</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="#">
            <i class="fa fa-dashboard">              
            </i> Home
          </a>
        </li>
        <li class="active">Compras
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">  
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Factura
          </h3>
        </div>
        <!-- form start -->
         <?php 
         require("../modal/registrar_producto.php");
          ?>
          <div class="box-body">
            <div class="row"> 
              <div class="col-sm-4 right"> 
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
                  <span class="glyphicon glyphicon-plus"></span> Nuevo producto
                </button>
              </div>                  
            </div>                                            
          </div>                 
          <div class="box-footer">
            <p style="font-family: Times New Roman, Times, serif; font-size:x-small;">Si el producto es de un nuevo PROVEEDOR u otra CATEGORIA deberà agregar nuevo PROVEEDOR Y CATEGORIA si es necesario</p>
            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Nueva Categoria</a>
             <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Nuevo Proveedor</a> 
          </div>
      </div>    
      <div class="panel panel-info">
        <div class="panel-heading">
          <h4><i class='glyphicon glyphicon-edit'></i> Nueva Factura</h4>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" id="datos_factura">
            <div class="form-group row">
              <label for="nombre_cliente" class="col-md-1 control-label">Cliente</label>
              <div class="col-md-3">
                <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" required>
                <input id="id_cliente" type='hidden'> 
              </div>
              <label for="tel1" class="col-md-1 control-label">Teléfono</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control input-sm" id="tel1" placeholder="Teléfono" readonly>
                  </div>
              <label for="mail" class="col-md-1 control-label">Email</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
                  </div>
             </div>
            <div class="form-group row">
              <label for="empresa" class="col-md-1 control-label">Vendedor</label>
              <div class="col-md-3">
                <select class="form-control input-sm" id="id_vendedor">
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from persona order by nombre");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_vendedor=$rw["user_id"];
                      $nombre_vendedor=$rw["firstname"]." ".$rw["lastname"];
                      if ($id_vendedor==$_SESSION['user_id']){
                        $selected="selected";
                      } else {
                        $selected="";
                      }
                      ?>
                      <option value="<?php echo $id_vendedor?>" <?php echo $selected;?>> <?php echo $nombre_vendedor?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>
              <label for="tel2" class="col-md-1 control-label">Fecha</label>
              <div class="col-md-2">
                <input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
              </div>
            </div>            
            <div class="col-md-12">
              <div class="pull-right">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
                 <span class="glyphicon glyphicon-plus"></span> Nuevo producto
                </button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
                 <span class="glyphicon glyphicon-user"></span> Nuevo cliente
                </button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                 <span class="glyphicon glyphicon-search"></span> Agregar productos
                </button>
                <button type="submit" class="btn btn-default">
                  <span class="glyphicon glyphicon-print"></span> Guardar
                </button>
              </div>  
            </div>
          </form>           
          <div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->      
        </div>
      </div>    
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("../Vista/footer.html") ?>
</div>
<!-- ./wrapper -->
<?php include('../vista/scripts.html'); ?>
</body>
</html>

