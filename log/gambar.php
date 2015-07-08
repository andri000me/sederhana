<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sekolah");
$nuptknya = $_GET['nuptk'];
$query =mysql_query("select * from guru where nuptk = '$nuptknya'");
$datagambar =mysql_fetch_array($query);
$filename=$datagambar['file_name'];
$mimetype=$datagambar['mime_type'];
$filedata=$datagambar['file_data'];
header("content-disposition: inline; filename=$filename");
header("content-type: $mimetype");
header("conten-length: ".strlen($filedata));
echo ($filedata);
?>