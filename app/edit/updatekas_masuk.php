<?php 
include "../../conf/koneksi.php";

$id = $_GET['id'];
$penerima =  $_GET['penerima'];
$pemberi =  $_GET['pemberi'];
$jumlah =  $_GET['jumlah'];
$rincian = $_GET['rincian'];
$tanggal = $_GET['tanggal'];

$query = mysqli_query($koneksi,"UPDATE kas SET penerima='$penerima', pemberi='$pemberi',jumlah='$jumlah', rincian='$rincian', jenis='masuk', keluar=0  WHERE id='$id' ");
header ('Location:../kas_masuk.php');
?>