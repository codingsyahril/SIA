<?php 
include "../../conf/koneksi.php";

$id = $_GET['id'];
$penerima = $_GET['penerima'];
$pemberi  = $_GET['pemberi'];
$jumlah   = $_GET['jumlah'];
$rincian  = $_GET['rincian'];
$tanggal  = $_GET['tanggal'];
$keluar = $_GET['keluar'];

$query = mysqli_query($koneksi,"UPDATE kas SET pemberi='$pemberi',penerima='$penerima',rincian='$rincian',jumlah='$jumlah',tgl='$tanggal' WHERE id='$id'");
header ('Location:../index.php?page=kas-masuk');
?>