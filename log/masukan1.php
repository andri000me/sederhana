<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sekolah");
echo '<table border = 7 cellpadding=2 cellspacing=2  bordercolor=magenta bgcolor=lightgreen >';
echo '<tr><th colspan=4>data guru</th></tr>';
echo'<tr><th><b>NUPTK</b></th><th><b>Nama</b></th><th><b>Pelajaran</b></th><th><b>Detail </b></th> ';
$sql = mysql_query("SELECT * FROM guru");
while($data = mysql_fetch_array($sql))
{
	echo '<tr>' ;
	echo '<td>' .$data['nuptk'].'</td>';
	echo '<td>' .$data['nama'].'</td>';
	echo '<td>' .$data['alamat'].'</td>';
	echo '<td><a href =detail_guru.php?nuptk='.$data['nuptk'].'>lihat detail</a></td>';
	echo '</tr>' ;
}
echo '</table>';
?>