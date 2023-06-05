<?php 
include "header.php";
include '../conf/koneksi.php'; ?>


     
  
      
      <?php 
      include "sidebar.php";
      ?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>KAS MASUK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">KAS MASUK</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->
            
            <!-- Horizontal Form -->
            <?php 
                  include "../conf/koneksi.php";
                    
                    $id= $_GET['id'];
                    $admin = mysqli_query($koneksi,"SELECT * FROM kas_masuk where id='$id'");
                    $m = mysqli_fetch_array($admin);
                    // while($m=mysqli_fetch_array($admin)){
                      
                      ?>
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Edit Data Kas Masuk</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" method ="GET" action="edit/editkasmasuk.php">
    <div class="card-body">
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Penerima</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="penerima" placeholder="Perima" value="<?php echo $m['penerima'];?>">
          <input type="text" class="form-control" name="id" placeholder="Perima" value="<?php echo $m['id'];?>" hidden>  
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Pemberi</label>
        <div class="col-sm-10">
          <input  type="text" class="form-control" name="pemberi" placeholder="Pemberi" value=" <?php echo $m['pemberi'];?>">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Saldo</label>
        <div class="col-sm-10">
          <input  type="text" class="form-control" name="jumlah" placeholder="Saldo" value="<?php echo $m['jumlah']; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Rincian</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name = "rincian" placeholder="Rincian" value=" <?php echo $m['rincian'];?>">
        </div>
      </div>
        <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input  type="date" name="tanggal" class="form-control"  placeholder="Tanggal" value=" <?php echo $m['tanggal'];?>">
        </div>
        <div class="col-sm-"> 
        <button type="submit" href="edit/editkasmasuk.php" class="btn btn-info">Simpan</button>
<!-- aslja -->
        </div>
              </div>
                    <!-- </div> -->
      <!-- <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
          <input type="date" class="form-control"  placeholder="Tanggal">
        </div> -->
      
      <!-- </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">Remember me</label>
          </div>
        </div>
        <div class="card-footer">
      
      <button type="submit" class="btn btn-default float-right">Cancel</button>
    </div> -->
        
      </div>
      <!--  -->
    </div>
    <!-- /.card-body -->
   
    <!-- /.card-footer -->
  </form>
</div>
<!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  include "footer.php"
  ?> 

 <!-- Modal Tambah Data  -->
</body>

<div class="modal fade" id="modal-lg">

        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">TAMBAH KAS MASUK</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method = "POST" action = "add/tambahkasmasuk.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="penerima" name="penerima">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="pemberi" name ="pemberi">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Saldo" name = "jumlah"> 
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="rincian" name = "rincian"> 
                </div>
                <div class="col">
                  <input type="date" class="form-control" placeholder="tanggal masuk" name="tanggal">
                </div>
                <!-- <div class="col">
                  <input type="text" class="form-control" placeholder="Last name">
                </div> -->
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</html>