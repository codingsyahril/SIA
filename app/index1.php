<?php
include "../conf/koneksi.php";
include "header.php";?> 

      
  <?php 
  include "sidebar.php";
  
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <?php 
    if(isset($_GET['page'])){
      if($_GET['page']=='dashboard'){
      include "dashboard.php";
    } elseif($_GET['page']=='kas-masuk'){
      include "kas_masuk.php";
    }elseif($_GET['page']=='editkasmasuk'){
      include "editkasmasuk.php";
    }else{
      
    }
  }
    ?>

<?php 
    if(isset($_GET['page'])){
      if($_GET['page']=='dashboard'){
      // include "dashboard.php";
    } elseif($_GET['page']=='kas-keluar'){
      include "kas_keluar.php";
    }elseif($_GET['page']=='editkaskeluar'){
      include "editkaskeluar.php";
    }else{
      
    }
  }
    ?>
    
    <!-- /.content -->
  </div>
 
<?php 
include "footer.php";

?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
