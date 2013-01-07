<?php 
include("koneksi.php");
	$sql = "select * from peminjaman";
	$arc = mysql_query($sql, $drv);
?>
<html>
<table id="table" border="1" height="60px" width="670px" align="center" bgcolor="white" >
	<th id="th">NO PEMINJAMAN</th>
	<th id="th">NAMA PEMINJAM</th>
	<th id="th">PERUSAHAAN PEMINJAM</th>
	<th id="th">TANGGAL PEMINJAMAN</th>
	<th id="th">TANGGAL PENGEMBALIAN</th>
	<th id="th">NO.HP</th>
	<th id="th">KUNCI</th>
	
	<?php
	$NO =1;
	
	while ($f = mysql_fetch_assoc($arc)){
	
	
	?>
	<tr>
		
		<td id="td"><?php echo $f["id_peminjaman"] ;?></td>
		<td id="td"><?php echo $f["nama_peminjam"] ;?></td>
		<td id="td"><?php echo $f["perusahaan_peminjam"] ;?></td>
		<td id="td"><?php echo $f["tanggal_peminjaman"] ;?></td>
		<td id="td"><?php echo $f["tanggal_pengembalian"] ;?></td>
		<td id="td"><?php echo $f["no_hp"] ;?></td>
		<td id="td"><?php echo $f["kunci"] ;?></td>	
	</tr>
	<?php
	}
	?>
	</table>
	<a href="pengembalian.php"><input type="submit" value="pengembalian"  /></a><br /></td></tr>
</html>
