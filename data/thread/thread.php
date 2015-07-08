<form action="data/thread/notift.php" method="post">
<table border=0 bordercolor=green>

<tr> <td>Kategori</TD>
<td> : </TD> <td> <select name='id_kategori'>
<?php
mysql_connect("localhost","root","") or die ("Gagal Terhubung Ke Database");
mysql_select_db("forum") or die ("Database Tidak Ditemukan");
$sql=mysql_query("select judul_kategori from kategori");

while($jum=mysql_fetch_array($sql))
{
echo "<option value=$jum[0]>$jum[0]</option>";
}
date_default_timezone_set('Asia/Jakarta');
$join=date("d-M-Y");
echo '$join';

?>
</TD> </TR> 
<tr> <td> JUDUL</TD>
<td> : </TD> <td> <input type="text" name="judul"></TD> </TR> 
<tr> <td>ISI</TD>
<td> : </TD> <td> <textarea name="isi" width=100% height=30% ></textarea></TD> </TR> 
<tr><td colspan=3><center>
<input type=submit name="kirim" value="SIMPAN"> 
<input type=reset name="reset" value="BATAL"> </td> </CENTER></table>
</tr>