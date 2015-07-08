<?php
include "koneksi.php";
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$per = $_POST['per'];
$jawaban = $_POST['jawaban'];
$t = $_POST['t'];
$b = $_POST['b'];
$th = $_POST['th'];
$jk=$_POST['jk'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$sekolah = $_POST['sekolah'];
$nama =$fn." ".$ln;
$tanggal=$th."-".$b."-".$t;
date_default_timezone_set('Asia/Jakarta');
$join=date("d-M-Y");
$status=0;

$daftar = mysql_query("INSERT INTO member values ('$username','$nama','$email','$password','$jk','$sekolah','$jawaban','$per','$join','$tanggal','$status')");
if($daftar)
 echo "<script>alert('Data berhasil disimpan');parent.location='http://127.0.0.1/forum/home.php';</script>";
else
 echo "<script>alert('Data gagal disimpan');parent.location='http://127.0.0.1/forum/home.php';</script>";

?>

