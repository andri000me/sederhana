<?php
mysql_connect("localhost","root","") or die ("Gagal Terhubung Ke Database");
mysql_select_db("forum") or die ("Database Tidak Ditemukan");
$ket= $_POST['ket'];
$judul= $_POST['judul'];
$sql= mysql_query("insert into kategori (judul_kategori,ket) values('$judul','$ket')");

if($sql)
 echo "<script>alert('Data berhasil disimpan');parent.location='http://127.0.0.1/forum/kategorii.php';</script>";
else
 echo "<script>alert('Data gagal disimpan');parent.location='http://127.0.0.1/forum/kategorii.php';</script>";

?>