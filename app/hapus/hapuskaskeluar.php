<?php 
include "../../conf/koneksi.php";

$id= $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM kas where id = '$id' ");
header ('Location:../index.php?page=kas-keluar');
?>