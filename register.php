<?php
include 'koneksi.php';
$user = $_POST['user2'];
$pass = $_POST['pass2'];
mysqli_query($koneksi, "insert into user set user = '".$user."', pass = '".$pass."'");
header("location:login/login.php?pesan=register");
?>