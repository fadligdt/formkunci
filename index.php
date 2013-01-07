<?php 
include("koneksi.php");
	if($_GET['do'] == "kirim"){
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$d = $_POST['d'];
		$e = $_POST['e'];
		$f = $_POST['f'];
		$idp = $_POST['idp'];
		$q = sprintf("insert into peminjaman values('%s', '%s', '%s', '%s','%s','%s','%s')",$a ,$b ,$c ,$d ,$e ,$f ,$idp);			
		$arc = mysql_query($q,$drv) or die(mysql_error());
		}
?>
<html>
<form method="POST" action="index.php?do=kirim">
	<table border="0" height="100px" width="1000px" >
	<tr><td id="tdd">NAMA PEMINJAM</td><td id="tdd">:</td><td><input type="text" name="b"></td>
	</tr>
	<tr><td id="tdd">PERUSAHAAN PEMINJAM</td><td id="tdd">:</td><td><select name="c">
	<option value="bagian1" >bagian 1</option>
	<option value="bagian2">bagian 2</option>
	<option value="bagian3">bagian 3</option>
	<option value="bagian4">bagian 4</option>
	</select></td>
	</tr>
	<tr><td id="tdd">TANGGAL PEMINJAMAN </td><td id="tdd">:</td><td><input type="text" name="d"> *inputkan seperti ini : 2012-12-12</td>
	</tr>
	<tr><td id="tdd">NO.HP</td><td id="tdd">:</td><td><input type="text" name="f"></td>
	</tr>
	
	<tr>
	<td id="tdd">
	NO/NAMA_BTS 
	<td id="tdd">:</td><td><select name="idp">
	<?php
	$query = "SELECT * FROM kunci_bts";
	$arx = mysql_query($query,$drv);
	while($v = mysql_fetch_assoc($arx)){
	?>
    <option value="<?php echo $v['kunci']; ?>"><?php echo $v['kunci']; ?></option>  
<?php }?>	
	</select>
	</table>
	<br />
	<input type="submit" name="Submit" value="Kirim" /><br /></td></tr>
	</form>

</html>