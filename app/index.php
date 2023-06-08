<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('header.php');?>
<?php include('../conf/koneksi.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php'); ?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->  
    <?php include ('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <?php include('content_header.php'); ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
    if ($_GET['page']=='dashboard'){
    include('dashboard.php'); 
    }else if ($_GET['page']=='kas-masuk'){
      include('kas_masuk.php');
    }else if ($_GET['page']=='edit-masuk'){
      include('edit/edit_kasmasuk.php');
    }else if($_GET['page']=='kas-keluar') {
      include('kas_keluar.php');
    }else if ($_GET['page']=='edit-keluar'){
      include('edit/edit_kaskeluar.php');
    }else if ($_GET['page']=='rekap'){
      include('rekap.php');
    }
    else {
      include('dashboard.php');
    }
  }else {
    include('dashboard.php');
  }?>
      <!-- /.content -->
  </div>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('footer.php'); ?>
</body>
</html>
