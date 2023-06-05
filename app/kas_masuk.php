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
            
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
              
              
              <!-- /.card-header -->
              
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data 
                </button>
                <br></br>
                
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Pemberi</th>
                    <th>Penerima</th>
                    <th>Saldo</th>
                    <th>Rincian</th>
                    <th>Tgl Diterima</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  include "../conf/koneksi.php";
                    $no = 0;
                    
                    $admin = mysqli_query($koneksi,"SELECT * FROM kas_masuk");
                    while($m=mysqli_fetch_array($admin)){
                      $no++;
                      ?>
    
                    
                 <tr>
                  <td><?php echo $no; ?></td>
                    <td><?php echo $m['pemberi']; ?></td>
                    <td><?php echo $m['penerima']; ?></td>
                    <td><?php echo $m['jumlah']; ?></td>
                    <td><?php echo $m['rincian']; ?></td>
                    <th><?php echo $m['tgl'] ?></th>
                    <th>
                      <a href ="hapus/hapuskasmasuk.php?id=<?php  echo $m['id']?>" class="btn btn-sm btn-danger">Hapus</a> 
                      <a  class="btn btn-sm btn-warning" href ="editkasmasuk.php?id=<?php  echo $m['id']?>">Edit</a> 
                      <!-- <button   type="button" class="btn btn-warning" >
                         Edit
                    </button> -->
                            <div class="modal fade" id="modal-ed">
                              <div class="modal-dialog modal-ed">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">EDIT KAS MASUK</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <form method ="POST" action = "edit/editkasmasuk.php">
                                  <div class="modal-body">
                                    <div class="form-row">
                                    <!-- <div class="col"> -->
                                        <input type="text" class="form-control" placeholder="penerima" value="<?php echo $m['penerima']; ?>">
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="pemberi" name ="editpemberi" value="<?php echo $m['pemberi']; ?>">
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="Saldo" name = "editjumlah" value="<?php echo $m['jumlah']; ?>"> 
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="rincian" name = "editrincian" value="<?php echo $m['rincian']; ?>"> 
                                      </div>
                                      <div class="col">
                                        <input type="date" class="form-control" placeholder="tanggal masuk" name="edittanggal" value="<?php echo $m['tanggal']; ?>">
                                      </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" >Save changes</button>
                                  </div>
                                </div>
                                
                                          </form>
                                          <?php 
                                          // if (isset($_POST['update'])){
                                          //   $penerima =  $_POST['editpenerima'];
                                          //   $pemberi =  $_POST['eidtpemberi'];
                                          //   $jumlah =  $_POST['editjumlah'];
                                          //   $rincian = $_POST['editrincian'];
                                          //   $tanggal = $_POST['edittanggal'];
                                          //   $sql = "UPDATE kas_masuk SET penerima='$penerima', pemberi='$pemberi', jumlah='$jumlah',rincian='$rincian', tanggal ='$tanggal'";
                                          // }
                                          
                                          ?>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                    </th>
                  </tr>
                      <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Pemberi</th>
                    <th>Penerima</th>
                    <th>Saldo</th>
                    <th>Rincian</th>
                    <th>Tgl Diterima</th>
                    <th>action</th>
                  </tr>               
                  </tfoot>
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