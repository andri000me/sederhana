<?php
mysql_connect("localhost","root","") or die ("Gagal Terhubung Ke Database");
mysql_select_db("forum") or die ("Database Tidak Ditemukan");
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$id_kategori= $_POST['id_kategori'];
$cookie_user = $_COOKIE['cookie_user'];
date_default_timezone_set('Asia/Jakarta');
$join=date("d-M-Y");
$sql= mysql_query("insert into thread (id_kategori,judul,isi,tanggal_thread,username) values('$id_kategori','$judul','$isi','$join','$cookie_user')");

if($sql)
 echo "<script>alert('Data berhasil disimpan');
parent.location='http://127.0.0.1/forum/post.php';</script>";
else
 echo "<script>alert('Data gagal disimpan');
parent.location='http://127.0.0.1/forum/post.php';</script>";

?>