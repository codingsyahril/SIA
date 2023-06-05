<?php 
include "../../conf/koneksi.php";

$id = $_GET['id'];
$penerima =  $_GET['penerima'];
$pemberi =  $_GET['tpemberi'];
$jumlah =  $_GET['jumlah'];
$rincian = $_GET['rincian'];
$tanggal = $_GET['tanggal'];


// $query = mysqli_query($koneksi,"INSERT INTO kas_masuk (id, penerima, pemberi, jumlah, rincian, tgl) VALUES ('', '$penerima','$pemberi','$jumlah','$rincian','$tanggal')");
$query = mysqli_query($koneksi,"UPDATE kas_masuk SET penerima='$penerima', pemberi='$pemberi', jumlah='$jumlah',rincian='$rincian', tanggal ='$tanggal' where id ='$id'");
header ('Location:../kas_masuk.php');
?>