<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("rumkit");
$kd_d= $_POST['kd_d'];
$nama= $_POST['nama'];
$kd_po= $_POST['kd_po'];
$sip= $_POST['sip'];
$tl= $_POST['tl'];
$t= $_POST['t'];
$b=$_POST['b'];
$th= $_POST['th'];
$telp=$_POST['telp'];
$alamat= $_POST['alamat'];
$cookie_user = $_COOKIE['cookie_user'];
$tanggal=$th."-".$b."-".$t;
$sql= mysql_query("insert into dokter values('$kd_d','$nama','$kd_po','$sip','$tl','$tanggal','$telp','$alamat','$cookie_user')");

if($sql)
 echo "<script>alert('Data berhasil disimpan');parent.location='http://127.0.0.1/full/indok.php';</script>";
else
 echo "<script>alert('Data gagal disimpan');parent.location='http://127.0.0.1/full/indok.php';</script>";

?>