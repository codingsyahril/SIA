<?php 
include "../../conf/koneksi.php";

$id = $_POST['id'];
$penerima =  $_POST['penerima'];
$pemberi =  $_POST['pemberi'];
$jumlah =  $_POST['jumlah'];
$rincian = $_POST['rincian'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($koneksi,"UPDATE kas_masuk SET penerima='$penerima', pemberi='$pemberi', jumlah='$jumlah',rincian='$rincian', tanggal ='$tanggal'");
header ('Location:../kas_masuk.php');
?>