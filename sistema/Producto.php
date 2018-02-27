<?php
session_start();
if(isset($_SESSION['u_usu'])){
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inicio | Credicel</title>

<?php include("../sistema/vista/links.html"); ?>
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include("vista/navbar.html") ?>

  <!-- Left side column. contains the logo and sidebar -->
<?php include("vista/side.html") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registro de Productos
        <small>Nuevo Producto</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="#">
            <i class="fa fa-dashboard">              
            </i> Productos
          </a>
        </li>
        <li class="active">Registar Producto
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">  
     <?php 
        include("vista/agregar_producto.html");
      ?>
 
      <?php
        include("modal/registrar_producto.php");
      ?>

    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("Vista/footer.html") ?>
</div>

  <script src="../librerias/jquery-3.2.1.min.js"></script>
<script  src="script/compras.js"></script>
<!-- ./wrapper -->
<?php include("../sistema/vista/scripts.html"); ?>

<script type="text/javascript">
  $(document).ready(function(){
    $('#listar_productos').load('listas/listar_producto.php');

  });
</script>
</body>
</html>

<?php
}else{
  header('location: ../login.php');
}
?>