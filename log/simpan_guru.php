<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sekolah");
$nuptk = $_POST['nuptk'];
$nama = $_POST['nama'];
$mat_pel = $_POST['mat_pel'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];

if($_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] ==0)
{
	$filename = $_FILES['gambar']['name'];
	$mimetype = $_FILES['gambar']['type'];
	$tmpfile = fopen($_FILES['gambar']['tmp_name'],'rb');
	$filedata = fread($tmpfile, filesize($_FILES['gambar']['tmp_name']));
	$filedata = addslashes($filedata);
}
$sql = mysql_query("insert into guru(nuptk,nama,mat_pel,alamat,agama,file_name,mime_type,file_data)
values('$nuptk','$nama','$mat_pel','$alamat','$agama','$filename','$mimetype','$filedata')");
if($sql)
	echo 'Data Succes in Storage<p><a href = "masukan1.php">Hasil</a>';
else
	echo 'Data failed in Storage';
?>