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
            <h1>KAS KELUAR</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">KAS KELUAR</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class ="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->
            
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
              
              
              <!-- /.card-header -->
              
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg"><li class="fa fa-plus"></li>
                  Tambah Data 
                </button>
                <br></br>
                
                  <thead>
                  <tr>
                    <th>No</th>
                    <!-- <th>Pemberi</th> -->
                    <th>Penerima</th>
                    <th>Rincian</th>
                    <th>Tgl Diterima</th>
                    <th>Saldo</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  include "../conf/koneksi.php";
                    $no = 0;
                    
                    $admin = mysqli_query($koneksi,"SELECT * FROM kas where jenis='keluar'");
                    while($m=mysqli_fetch_array($admin)){
                      $no++;
                      ?>
    
                    
                 <tr>
                  <td><?php echo $no; ?></td>
                    <td><?php echo $m['penerima']; ?></td>
                    <td><?php echo $m['rincian']; ?></td>
                    <th><?php echo $m['tgl'] ?></th>
                    <td style="text-align: right;">Rp.<?php echo number_format($m['keluar']).",-"; ?>
                         </td>
                    
                    <th>
                      <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href ="hapus/hapuskaskeluar.php?id=<?php  echo $m['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"> </i></a> 
                      <a  class="btn btn-sm btn-warning" href ="editkaskeluar.php?id=<?php  echo $m['id']?>"> <i class="fa fa-pen"></i></a> 
                    </th>
                  </tr>
                  </tbody>
                  <?php 
                         ini_set("display_errors","Off");
                         $total = $total+$m['keluar'];
                         } 
                        ?>
                  <tfoot>
                  <!-- <tr>
                    <th>No</th>
                    <th>Pemberi</th>
                    <th>Penerima</th>
                    <th>Saldo</th>
                    <th>Rincian</th>
                    <th>Tgl Diterima</th>
                    <th>action</th>
                  </tr>                -->
                  </tfoot>
                  <tr>
                      <td colspan="4" style="text-align: left; font-size: 17px; color: maroon;">Total Kas Keluar :</td>
                       <td style="font-size: 17px; text-align: right; "><font style="color: green;"><?php echo " Rp." . number_format($total).",-"; ?></font></td>
                     </tr>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
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
              <h4 class="modal-title">TAMBAH KAS KELUAR</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method = "POST" action = "add/tambahkaskeluar.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="penerima" name="penerima">
                </div>
                <!-- <div class="col">
                  <input type="text" class="form-control" placeholder="pemberi" name ="pemberi">
                </div> -->
                <div class="col">
                  <input type="text" class="form-control" placeholder="Saldo" name = "keluar"> 
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
              <button type="submit" class="btn bg-purple">Save changes</button>
            </div>
          </div>
          
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</html>