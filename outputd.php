<?php
$koneksi= mysql_connect("localhost","root","");
$db = mysql_select_db("rumkit");
echo '<center><table border=1 valign=top>';
echo "<tr><td colspan=10><img src='data/dokter/do.jpg' width=100%></img></td></tr><tr><td>KODE DOKTER</td><td>NAMA DOKTER</td><td>KODE POLI</td><td>SIP</td><td>TEMPAT LAHIR</td><td>TANGGAL LAHIR</td><td>NO. HP</td><TD>ALAMAT</TD><TD>USERNAME</TD></tr>";

$sql=mysql_query("select*from dokter");

while($jum=mysql_fetch_array($sql))
{
echo '<tr>';
echo '<td>'.$jum[0].'</td>';
echo '<td>'.$jum[1].'</td>';
echo '<td>'.$jum[2].'</td>';
echo '<td>'.$jum[3].'</td>';
echo '<td>'.$jum[4].'</td>';
echo '<td>'.$jum[5].'</td>';
echo '<td>'.$jum[6].'</td>';
echo '<td>'.$jum[7].'</td>';
echo '<td>'.$jum[8].'</td>';

echo '</tr>';
}

echo '</table></center>';

?>