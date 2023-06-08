<?php
session_start();
require ('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($koneksi, "SELECT * from user WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query)==true) {
    header('Location:../app');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = 'superadmin';
}else if($username == ''  || $password == '') {
    header('Location:../index.php?error=2');
}
else {
    header('Location:../index.php?error=1');
}

?>  