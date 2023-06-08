<?php 
include "../../conf/koneksi.php";

$penerima = $_POST['penerima'];
$pemberi  = $_POST['pemberi'];
$jumlah   = $_POST['jumlah'];
$rincian  = $_POST['rincian'];
$tanggal  = $_POST['tanggal'];

$query = mysqli_query($koneksi,"INSERT INTO kas (id, penerima, pemberi, jumlah, rincian, tgl, jenis, keluar) VALUES ('', '$penerima','$pemberi','$jumlah','$rincian','$tanggal', 'masuk', 0)");
header ('Location:../index.php?page=kas-masuk');
?>