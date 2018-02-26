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
     <?php 
        include("vista/vista_agregar_producto.html");
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
<!-- ./wrapper -->
<?php include("../sistema/vista/scripts.html"); ?>
</body>
</html>

<?php
}else{
  header('location: ../login.php');
}
?>