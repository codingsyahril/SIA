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
                <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg"><li class="fa fa-plus"></li>
                  Tambah Data 
                </button> -->




              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Penerima</th>
                    <th>Pemberi</th>
                    <th>Rincian</th>
                    <th>Saldo Masuk</th>
                    <th>Jenis</th>
                    <th>Tanggal </th>
                    <th>Saldo Keluar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no=0;
                  $query = mysqli_query($koneksi, "SELECT * FROM kas ");
                  while($m = mysqli_fetch_array($query)){
                    $no++;
                  ?>
                  
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $m['penerima']; ?></td>
                    <td><?php echo $m['pemberi']; ?></td>
                    <td><?php echo $m['rincian']; ?></td>
                    <td  style="text-align: right;">Rp.<?php echo number_format($m['jumlah']).",-"; ?></td>
                    <td><?php echo $m['jenis']; ?></td>
                    <td><?php echo date('d F Y', strtotime($m['tgl'])); ?></td>
                    <td  style="text-align: right;">Rp.<?php echo number_format($m['keluar']).",-"; ?></td>
                    
                  </tr>
                  <?php ini_set("display_errors","Off");
                         $total_masuk = $total_masuk+$m['jumlah'];
                         $total_keluar = $total_keluar+$m['keluar'];
                         $saldo_akhir = $total_masuk - $total_keluar; 
                         } ?>
                          <tr>
                      <td colspan="7" style="text-align: left; font-size: 16px; color: maroon;">Total Kas Keluar :</td>
                       <td style="font-size: 16px; text-align: right; "><font style="color: red;"><?php echo " Rp." . number_format($total_keluar).",-"; ?></font></td>
                     </tr>
                  <tr>
                      <td colspan="7" style="text-align: left; font-size: 16px; color: maroon;">Total Kas Masuk :</td>
                       <td style="font-size: 16px; text-align: right; "><font style="color: green;"><?php echo " Rp." . number_format($total_masuk).",-"; ?></font></td>
                </tr>
               
                     <tr>
                      <td colspan="7" style="text-align: left; font-size: 16px; color: maroon;">Saldo Akhir:</td>
                       <td style="font-size: 16px; text-align: right; "><font style="color: blue;"><?php echo " Rp." . number_format($saldo_akhir).",-"; ?></font></td>
                     </tr>
                  </tbody>
                 
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Penerima</th>
                    <th>Pemberi</th>
                    <th>Rincian</th>
                    <th>Saldo Masuk</th>
                    <th>Jenis</th>
                    <th>Tanggal </th>
                    <th>Saldo Keluar</th>
                  </tr>
                  </tfoot>
                </table>
                
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