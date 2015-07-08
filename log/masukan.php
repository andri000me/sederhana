<?php
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("sekolah");
echo '<table border = 7>';
echo
'<tr><td><b>NUPTK</b></td><td><b>Nama</b></td><td><b>Pelajaran</b></td><td><b>Alamat </b></td> <td><b>Agama</b></td></tr>';
$sql = mysql_query("SELECT * FROM guru");
while($data = mysql_fetch_array($sql))
{
	echo '<tr>' ;
	echo '<td>' .$data[0].'</td>';
	echo '<td>' .$data[1].'</td>';
	echo '<td>' .$data[2].'</td>';
	echo '<td>' .$data[3].'</td>';
	echo '<td>' .$data[4].'</td>';
	echo '</tr>' ;
}
echo '</table>';
?>