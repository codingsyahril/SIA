<?php 
include "../../conf/koneksi.php";

$penerima =  $_POST['penerima'];
$pemberi =  $_POST['pemberi'];
$jumlah =  $_POST['jumlah'];
$rincian = $_POST['rincian'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($koneksi,"INSERT INTO kas_masuk (id, penerima, pemberi, jumlah, rincian, tgl) VALUES ('', '$penerima','$pemberi','$jumlah','$rincian','$tanggal')");
header ('Location:../kas_masuk.php');
?>