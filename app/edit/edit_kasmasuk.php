<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM kas WHERE id='$id'");
$e = mysqli_fetch_array($query);

?>

<section class="content">
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="GET" action="update/update_masuk.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penerima</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Penerima" name="penerima" value="<?php echo $e['penerima'];?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Penerima" name="id" value="<?php echo $e['id'];?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pemberi</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pemberi" name="pemberi"value="<?php echo $e['pemberi'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rincian</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Rincian" name="rincian" value="<?php echo $e['rincian'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Saldo Masuk</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Saldo Masuk" name="jumlah" value="<?php echo $e['jumlah'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" class="form-control col-sm-4" id="exampleInputPassword1" placeholder="Pemberi" name="tanggal" value="<?php echo $e['tgl'];?>">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </section>