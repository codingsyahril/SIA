<?php 
include "../../conf/koneksi.php";

$penerima = $_POST['penerima'];
// $pemberi  = $_POST['pemberi'];
$keluar   = $_POST['keluar'];
$rincian  = $_POST['rincian'];
$tanggal  = $_POST['tanggal'];

$query = mysqli_query($koneksi,"INSERT INTO kas (id, penerima, pemberi, jumlah, rincian, tgl, jenis, keluar) VALUES ('', '$penerima','',0,'$rincian','$tanggal', 'keluar', '$keluar')");
header ('Location:../kas_keluar.php');
?>