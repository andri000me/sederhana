<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y")."</b> ";
date_default_timezone_set('Asia/Jakarta');
$join=date("d-M-Y");
echo $join;

?>