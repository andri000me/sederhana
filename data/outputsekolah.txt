<?php
include 'koneksi.php';

echo '<center><table border=1 valign=top>';
echo "<tr><td colspan=4><center>Daftar Sekolah</center></td></tr><tr><td>Id Sekolah</td><td>Nama Sekolah</td><td>Alamat</td><td>No. Telepon</td></tr>";

$sql=mysql_query("select*from sekolah");

while($jum=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td>'.$jum[0].'</td>';
echo '<td>'.$jum[1].'</td>';
echo '<td>'.$jum[2].'</td>';
echo '<td>'.$jum[3].'</td>';


echo '</tr>';
}

echo '</table></center>';

?>