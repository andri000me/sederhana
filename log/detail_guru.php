<?php
$koneksi =mysql_connect("localhost","root","");
$db = mysql_select_db("sekolah");
$nuptk = $_GET['nuptk'];
$qry=mysql_query("select * from guru where nuptk='$nuptk'");
$data = mysql_fetch_array($qry);
echo '<table border=0>';
echo '<tr><td colspan=3 align=center>';
echo '<img src="gambar.php?nuptk='.$data['nuptk'].'" width="150"><hr>';
echo '</td></tr>';
echo '<tr><td>NUPTK</td><td>:</td><td>'.$data['nuptk'].'</td></tr>';
echo '<tr><td>Nama</td><td>:</td><td>'.$data['nama'].'</td></tr>';
echo '<tr><td>Alamat</td><td>:</td><td>'.$data['alamat'].'</td></tr>';
echo '<tr><td>Agama</td><td>:</td><td>'.$data['agama'].'</td></tr>';
echo '<tr><td>Mata Pelajaran</td><td>:</td><td>'.$data['mat_pel'].'</td></tr>';
echo '</table>';
?>