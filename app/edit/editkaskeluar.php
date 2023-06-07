<?php 
include "../../conf/koneksi.php";

$id = $_POST['id'];
$penerima =  $_POST['penerima'];
$keluar =  $_POST['keluars'];
$rincian = $_POST['rincian'];
$tanggal = $_POST['tanggal'];

  
// $query = mysqli_query($koneksi,"INSERT INTO kas_masuk (id, penerima, pemberi, jumlah, rincian, tgl) VALUES ('', '$penerima','$pemberi','$jumlah','$rincian','$tanggal')");
//afalfa


if(!empty($id)) {
    $query1 = mysqli_query($koneksi, "SELECT * FROM kas WHERE id='$id'");
    $query = mysqli_query($koneksi,"UPDATE kas SET penerima='$penerima', keluar='$keluar', rincian='$rincian', tanggal ='$tanggal', jenis ='keluar',jumlah=0 where id ='$id'");
    header ('Location:../kas_keluar.php');

}
?>