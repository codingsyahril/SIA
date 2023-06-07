<?php 
include "../../conf/koneksi.php";

$id = $_GET['id'];
$penerima =  $_GET['penerima'];
// $pemberi =  $_GET['pemberi'];
$keluar =  $_GET['keluar'];
$rincian = $_GET['rincian'];
$tanggal = $_GET['tanggal'];

$query = mysqli_query($koneksi,"UPDATE kas SET penerima='$penerima', jumlah=0, rincian='$rincian', jenis='keluar', keluar='$keluar' tgl='$tanggal'  WHERE id='$id' ");
header ('Location:../kas_keluar.php');
?>