<?php 
include "../../conf/koneksi.php";

$id= $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM kas_masuk where id = '$id' ");
header ('Location:../kas_masuk.php');
?>