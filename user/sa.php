<?php
include "koneksi.php";

$status=mysql_query("select * status from member where username like '%tsaninashrullah%'");

echo $status;
?>