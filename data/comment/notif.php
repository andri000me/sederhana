<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("rumkit");
$kd_o= $_POST['kd_po'];
$nama= $_POST['nama'];
$lantai=$_POST['lantai'];
$sql= mysql_query("insert into poliklinik values('$kd_o','$nama','$lantai')");

if($sql)
 echo "<script>alert('Data berhasil disimpan');parent.location='http://127.0.0.1/full/inpol.php';</script>";
else
 echo "<script>alert('Data gagal disimpan');parent.location='http://127.0.0.1/full/inpol.php';</script>";

?>