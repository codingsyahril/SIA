<?php 

include "../conf/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM kas");
$total_keluar= "";
$total_masuk = $total_masuk ?? 'default-value';
$total;
while($data=mysqli_fetch_array($sql)) {

    $jml = $data['jumlah'];
    $total_masuk = floatval($total_masuk)+floatval($jml);

    $jml_keluar = $data['keluar'];
    $total_keluar = floatval($total_keluar)+floatval($jml_keluar);

    $total = $total_masuk-$total_keluar;
}
?>
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-stats-bars"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pemasukan</span>
                  <span class="info-box-number"><?php echo "Rp. " . number_format($total_masuk); ?>,-</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pengeluaran</span>
                  <span class="info-box-number"><?php echo "Rp. " . number_format($total_keluar); ?>,-</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-pie-graph"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Saldo</span>
                  <span class="info-box-number"><?php echo "Rp. " . number_format($total); ?>,-</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div>
            
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="callout callout-info">
            <h4>Announcement!!</h4>
            <p><b>Aplikasi Kas Kita bersifat open source dan gratis. tidak dibenarkan untuk diperjual belikan !! </b><br>Developer: <a href="https://chanofficial.github.io/fajar" target="blank"> Fajar Rivaldi Chan</a> | Powered By: <a href="http://chanofficial.my.id" target="blank">chan official</a></p>
          </div> -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-6">
          <!-- Info Boxes Style 2 -->
          <!-- Donut chart -->
              <div class="box box-success box-solid">
    <!-- <div class="box-header with-border"> -->
          <!-- <h3 class="box-title">Petunjuk Penggunaan</h3> -->
        <!-- </div> -->
        <!-- /.box-header -->
        <!-- <div class="box-body">
          <dl> -->
            <!--<dt>Aturan Penggunaan</dt>
                <dd>
                  <ol>
                    <li>aplikasi ini tidak untuk diperjual belikan, Tetapi anda diperbolehkan untuk mengambil keuntungan dari jasa proses instalasi, konsultasi dan lain sebagainya yang berkaitan dengan Aplikasi  <b>kas kita</b></li>
                    <li>tidak menghapus petunjuk penggunaan ini dan Tidak mengubah footer yang menunjukkan alamat website Aplikasi ini</li>
                    
                  </ol>
                </dd>-->
            <!-- <dt>FUNGSI</dt>
                <dd>
                  Aplikasi ini memiliki beberpa fungsi, antara lain:
                  <ol>
                    <li>input data pemasukan dan pengeluaran dana</li>
                    <li>list data pemasukan dan pengeluaran dana</li>
                    <li>rekapitulasi dana</li>
                  </ol>
                </dd>
                <dt>catatan Penggunaan</dt>
                <dd>
                  Untuk menginput data jumlah dana yang dimasukan atau di keluarkan, tidak menggunakan tanda "." (titik) dan tidak menggunakan Rp. (contoh: "100000")
                <dt>Info</dt>
                <dd>
                  <ol>
                    <li>PHP V.7.x</li>
                    <li>Theme By: AdminLte v.2.1</li> 
                  </ol>
                   Info lebih lanjut mengenai aplikasi:
                    <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=62895611025559" target="blank"><i class="fa fa-whatsapp"></i> : 0895611024559</a></li>
                        <li><a href="mailto:fajarrivaldi2015@gmail.com"><i class="fa fa-envelope-o"></i> : fajarrivaldi2015@gmail.com</a></li>
                    </ul>
                    <p style="text-align: center">~<i> Fajar Rivaldi Chan </i><i class="fa fa-smile-o"></i>  ~</p>
                </dd>
            </dl> -->
        <!-- </div> -->
        <!-- /.box-body -->
    <!-- </div> -->
    <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="col-md-12">
         <div class="box box-primary">
                <div class="box-body no-padding">
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
