<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>


<home>
<head>
<title>FORJAR</title>
<body>
<body background='gambar/back.jpg'>
<center>
<table border=2 bordercolor='green' width=90%>
<tr><td colspan=3><img src="gambar/tabfor.png" width=100%>
</img>
</td>
</tr>
<tr><td colspan=3><?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y",  $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<b>, Selamat Pagi !!</b>";
}
else if(($a>11) && ($a<=15))
{
echo ", Selamat Siang !!";}
else if (($a>15) && ($a<=18)){
echo ", Selamat Sore !!";}
else { echo ", <b> Selamat Malam </b>";}
?>
</tr>

<tr>
<td width =10%><img src='gambar/menu.jpg' width=100%>
</img>
</td>
<td width=45%><a href='saya.php'><img src='gambar/profil.jpg' width=100%></a>
</td>
<td width=45%><a href='post.php'><img src='gambar/post.jpg' width=100%></a>
</td>
</tr>
<tr>
<td width =10%><a href='about.php'><img src='gambar/about.jpg' width=100%>
</img></a><td rowspan=6 colspan=2 bgcolor='#FFFF66' width=80%>


<?php
$thread =mysql_query("select id_thread, judul from thread");
echo "<table border=1 width=100%><tr><td>No.</td><td>Judul Thread</td><td> </td></tr>";
while($data=mysql_fetch_array($thread))
{
echo "<tr>";
echo "<td>".$data['id_thread']."</td>";
echo "<td>".$data['judul']."</td>";
echo "<td><form action='lihatisi.php' method='get'><input type='submit' value='Lihat Detail'></td>";
echo '</tr>' ;
$id_thread=$data['id_thread'];
}

?>


</table>

</td>
</tr>
<tr>
<td width =10%><a href='tambah.php'><img src='gambar/tambah.png' width=100%></a>
</img>
</td>
</tr>
<tr>
<td width =10%><a href='data.php'><img src='gambar/data.png' width=100%>
</img></a>
</td>
</tr>
<tr>
<td width =10%><a href='logout.php'><img src='gambar/logout.jpg' width=100%></a>
</img>
</td>
</tr>
</table>
</center>
</body></html>