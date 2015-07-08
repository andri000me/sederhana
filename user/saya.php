<?php
include 'firstl.php';
include 'koneksi.php';
echo "Username		: ".$cookie_user."<BR>";
$data="select nama_lengkap, email, gender, ulang_tahun from member where username='$cookie_user'";
$yoi =mysql_query($data);
while($baris=mysql_fetch_array($yoi))
{echo "Nama Lengkap	: ".$baris[0]."<br>";
echo "E-Mail		: ".$baris[1]."<br>";
echo "Jenis Kelamin	: ".$baris[2]."<br>";
echo "Tanggal Lahir	: ".$baris[3]."<br>";}
echo "Status		: User";
include 'last.php';

?>