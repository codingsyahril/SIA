<?php include('../conf/koneksi.php'); ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg"><li class="fa fa-plus"></li>
                  Tambah Data 
                </button>




              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <!-- <th>Pemberi</th> -->
                    <th>Penerima</th>
                    <th>Rincian</th>
                    <th>Saldo Keluar</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no=0;
                  $query = mysqli_query($koneksi, "SELECT * FROM kas WHERE jenis='keluar'");
                  while($m = mysqli_fetch_array($query)){
                    $no++;
                  ?>
                  
                  <tr>
                    <td><?php echo $no ?></td>
                    
                    <td><?php echo $m['penerima']; ?></td>
                    <td><?php echo $m['rincian']; ?></td>
                    <td  style="text-align: right;">Rp.<?php echo number_format($m['keluar']).",-"; ?></td>
                    <td><?php echo date('d F Y', strtotime($m['tgl'])); ?></td>
                    <td>
                      <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href ="hapus/hapuskaskeluar.php?id=<?php  echo $m['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"> </i></a> 
                      <a  class="btn btn-sm btn-warning" href ="index.php?page=edit-keluar&&id=<?php  echo $m['id']?>"> <i class="fa fa-pen"></i></a> 
                    </td>
                  </tr>
                  <?php ini_set("display_errors","Off");
                         $total = $total+$m['keluar'];} ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <!-- <th>Pemberi</th> -->
                    <th>Penerima</th>
                    <th>Rincian</th>
                    <th>Saldo Keluar</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                <tr>
                      <td colspan="12" style="text-align: center; font-size: 42px; color: maroon;">Total Kas Keluar :</td>
                       <td style="font-size: 42px; text-align: right; "><font style="color: green;"><?php echo " Rp." . number_format($total).",-"; ?></font></td>
                     </tr>
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
    
    <div class="modal fade" id="modal-lg">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">TAMBAH KAS MASUK</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form method = "POST" action = "add/tambah_masuk.php">
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
                                <button type="submit" class="btn bg-purple">Save changes</button>
                              </div>
                            </div>
                            
                            </form>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>