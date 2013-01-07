<?php
	$host ="localhost";
	$user = "root";
	$pass = "";
	$drv = mysql_connect($host,$user,$pass);
	mysql_select_db("peminjaman_kunci")
	or die ("Koneksi Batang : ".mysql_error());
?>
