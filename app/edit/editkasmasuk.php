<?php 
include "../../conf/koneksi.php";

$id = $_POST['id'];
$penerima =  $_POST['penerima'];
$pemberi =  $_POST['pemberi'];
$jumlah =  $_POST['jumlah'];
$rincian = $_POST['rincian'];
$tanggal = $_POST['tanggal'];

  
// $query = mysqli_query($koneksi,"INSERT INTO kas_masuk (id, penerima, pemberi, jumlah, rincian, tgl) VALUES ('', '$penerima','$pemberi','$jumlah','$rincian','$tanggal')");



if(!empty($id)) {
    $query1 = mysqli_query($koneksi, "SELECT * FROM kas_masuk WHERE id='$id'");
    $query = mysqli_query($koneksi,"UPDATE kas_masuk SET penerima='$penerima', pemberi='$pemberi', jumlah='$jumlah',rincian='$rincian', tanggal ='$tanggal' where id ='$id'");
    header ('Location:../kas_masuk.php');

}
?>