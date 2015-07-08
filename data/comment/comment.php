<form action="data/poli/notif.php" method="post">
<tr> <td>ID</TD>
<td> : </TD> <td> <input type="text" name="kd_po" maxlength=6></TD> </TR> 
<tr> <td> NAMA POLIKLINIK</TD>
<td> : </TD> <td> <input type="text" name="nama"></TD> </TR> 
<tr> <td> LANTAI</TD>
<td> : </TD> <td> <select name='lantai'>
<?php

for($i=1;$i<=10;$i++)
{
  echo "<option value=$i>$i</option>";
date_default_timezone_set('Asia/Jakarta');
$join=date("d-M-Y");
echo '$join';
}

?>
</select>
</td>
<tr><td colspan=3>
<center><input type=submit name="kirim" value="SIMPAN"> 
<input type=reset name="reset" value="BATAL"> </td> </CENTER></table>
</td>

