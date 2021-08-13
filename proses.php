<?php
session_start();
error_reporting(0);
include 'koneksi.php';
$income = 0;
$outcome = 0;
$tanggal = $_POST['tanggal'];
$user = $_SESSION['id'];

if (empty($_POST["saldo"])) {
  $saldo = 0;
}else{
  $saldo = $_POST["saldo"];
}
if (empty($_POST["income"])) {
  $income = 0;
}else{
  $income = $_POST["income"];
}
if (empty($_POST["outcome"])) {
  $outcome = 0;
}else{
  $outcome = $_POST["outcome"];
}

$inout = $income - $outcome;
$saldo = $saldo + $inout;

$query = "INSERT INTO dompet set tanggal='$tanggal', saldo='$saldo', income='$income', outcome='$outcome', user_id='$user'";
mysqli_query($koneksi, $query);

header("location:index.php?pesan=input");
?>