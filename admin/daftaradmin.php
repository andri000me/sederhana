<center><table border=0>
<form action='signup/proses_daftar.php' method='post'>
<tr>
<td colspan=3><center><font size=5>PENDAFTARAN ADMIN</font></center></td>
</tr>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>:</td><td><input type="text" name="fn" placeholder='Nama Depan'> <input type="text" name="ln" placeholder='Nama Belakang'></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input type="text" name="email"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td>Jenis kelamin</td><td>:</td><td><select name='jk'>
	<option value='Laki-Laki'>Laki-Laki</option>
	<option value='Perempuan'>Perempuan</option>
</select>
</td>
</tr>
<tr> <td>Sekolah/Universitas</TD>
<td> : </TD> <td> <select name='id_kategori'>
<?php
mysql_connect("localhost","root","") or die ("Gagal Terhubung Ke Database");
mysql_select_db("forum") or die ("Database Tidak Ditemukan");
$sql=mysql_query("select nama_sekolah from sekolah");

while($jum=mysql_fetch_array($sql))
{
echo "<option value=$jum[0]>$jum[0]</option>";
echo "<option value=$jum[1]>$jum[1]</option>";
echo "<option value=$jum[2]>$jum[2]</option>";

}
?></td></tr>
<tr>
<td>Pertanyaan</td><td>:</td><td><select name='per'>
	<option value='Siapa anak Tukang bakso?'>Siapa anak Tukang bakso?</option>
<option value='Siapa Ayah Anda ?'>Siapa Ayah Anda ?</option>
<option value='Kapan Anda Berhenti Menyusui?'>Kapan Anda Berhenti Menyusui?</option>
<option value='Siapakah Nama Bibi Anda ?'>Siapakah Nama Bibi Anda ? </option>
<option value='Siapakah Nama Teman Masa Kecil Anda?'>Siapakah Nama Teman Masa Kecil Anda /</option>
<option value='Siapakah Nama Paman Anda?'>Siapakah Nama Paman Anda ?</option>
<option value='Berapakah Jumlah Saudara Kandung Anda ?'>Berapakah Jumlah Saudara Kandung Anda ?</option>
<option value='Apakah Makanan Favorit Anda?'>Apakah Makanan Favorit Anda ?</option>
<option value='Di Kota Mana Sekarang Anda Tinggal?'>Di Kota Mana Sekarang Anda Tinggal ?</option>
<option value='Siapakah Nama Ibu Anda?'>Siapakah Nama Ibu Anda ?</option>
<option value='Siapakah Artis Favorit Anda?'>Siapakah Artis Favorit Anda ?</option>

</select>

</td>
</tr>
<tr>
<td>Jawaban</td><td>:</td><td><textarea name="jawaban"> </textarea></td>
</tr>
<tr>
<td>Tanggal lahir</td><td>:</td><td>TANGGAL : <select name="t">
<?php

for($i=1;$i<=31;$i++)
{
  echo "<option value=$i>$i</option>";
}

?>
</select>
BULAN : <select name="b">
<?php

for($i=1;$i<=12;$i++)
{
  echo "<option value=$i>$i</option>";
}

?>
</select>
TAHUN : <select name="th">
<?php

for($i=1990;$i<=2014;$i++)
{
  echo "<option value=$i>$i</option>";
}
date_default_timezone_set('Asia/Jakarta');
$join=date("d-M-Y");
echo '$join';
?>
</select></td></tr>
<tr>
<td colspan=2></td>
<td><input type="submit" name="submit" value="DAFTAR"></td>
</tr>
</form>
</table>
</center>
</td>
