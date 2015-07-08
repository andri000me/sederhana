<?php
mysql_connect("localhost","root","") or die ("Gagal Terhubung Ke Database");
mysql_select_db("forum") or die ("Database Tidak Ditemukan");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$simpan = mysql_query("insert into sekolah (nama_sekolah,alamat,no_telp) values('$nama','$alamat','$telp')");

if($simpan)
 echo "<script>alert('Data berhasil disimpan');parent.location='http://127.0.0.1/forum/sekolah.php';</script>";
else
 echo "<script>alert('Data gagal disimpan');parent.location='http://127.0.0.1/forum/sekolah.php';</script>";

?>