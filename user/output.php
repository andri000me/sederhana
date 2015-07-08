<?php
include 'koneksi.php';

echo '<center><table border=2 valign=top width=100%>';
echo "<tr><td colspan=11><center>Daftar User</center></td></tr><tr><td>Username</td><td>Nama Lengkap</td><td>Email</td><td>Password</td><td>Jenis Kelamin</td><td>Sekolah/Universitas</td><td>Jawaban</td><td>Pertanyaan</td><td>join</td><td>Ulang tahun</td><td>Status</td></tr>";

$sql=mysql_query("select * from member");

while($jum=mysql_fetch_array($sql))
{
echo '<tr><td>'.$jum[0].'</td>';
echo '<td>'.$jum[1].'</td>';
echo '<td>'.$jum[2].'</td>';
echo '<td>'.$jum[3].'</td>';
echo '<td>'.$jum[4].'</td>';
echo '<td>'.$jum[5].'</td>';
echo '<td>'.$jum[6].'</td>';
echo '<td>'.$jum[7].'</td>';
echo '<td>'.$jum[8].'</td>';
echo '<td>'.$jum[9].'</td>';
echo '<td>'.$jum[10].'</td>';

echo '</tr>';
}

echo '</table></center>';

?>