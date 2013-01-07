<?php 
include("koneksi.php");
	if($_GET['do'] == "kirim"){
	$a = $_POST['a'];
    $b = $_POST['b'];
	$sql = "UPDATE peminjaman SET tanggal_pengembalian='".$a."' WHERE id_peminjaman='".$b."'";
	$arc = mysql_query($sql, $drv);
	}
?>
<html>
<form method="POST" action="pengembalian.php?do=kirim">
	NO PEMINJAMAN:<input type="text" name="b">
	TANGGAL PENGEMBALIAN :<input type="text" name="a">
	<input type="submit" name="Submit" value="Kirim" />
	</form>
</html>
