<html>
 <head>
 <title>Form pemesanan kereta api</title>
 </head>
 <body>
 <form action="inputkamar.php" method="post">
 <table align="center">
 <tr>
 	<td>Nama</td>
 	<td>:</td>
 	<td><input type="text" name="txtNama" /></td>
 </tr>
 <tr>
 	<td>Alamat</td>
 	<td>:</td>
 	<td><input type="text" name="txtAlamat" /></td>
 </tr>
 <tr>
 	<td>No. Hp</td>
 	<td>:</td>
 	<td><input type="text" name="txtHp" /></td>
 </tr>
 <tr>
 	<td>Tanggal check in</td>
 	<td>:</td>
 	<td><input type="date" value="now"name="txtIn" /></td>
 </tr>
 <tr>
 	<td>Tanggal check out</td>
 	<td>:</td>
 	<td><input type="date" name="txtOut" /></td>
 </tr>
 <tr>
 	<td colspan="3" align="center">
 		<input type="submit" value="Submit" /></td>
 	<td></td>
 	<td></td>
 </tr>
</table>
 </form>
 </body