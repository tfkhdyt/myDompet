<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['user'];
$password = $_POST['pass'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from user where user='$username' and pass='$password'");
$d = mysqli_fetch_array($data);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0) {
  $_SESSION['id'] = $d['user_id'];
  $_SESSION['user'] = $username;
  $_SESSION['status'] = "login";
  header("location:../index.php?pesan=login");
}else{
  header("location:login.php?pesan=gagal");
}
?>