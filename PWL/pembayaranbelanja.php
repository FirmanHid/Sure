<?php
$beli = $_POST["txtTgl"];
$nama = $_POST["txtNama"];
$jumlah = $_POST["txtJml"];
$harga = $_POST["txtHarga"];

function hitungbayar ()
{
	$jumlah = $_POST["txtJml"];
	$harga = $_POST["txtHarga"];
	$bayar = $jumlah * $harga;
   	return $bayar;

}
/*echo "Nama 		: ".$nama."<br>";
echo "Alamat 	: ".$alamat."<br>";
echo "Hp 		: ".$hp."<br>";
echo "Check in 	: ".$tglin."<br>";
echo "Check put : ".$tglout."<br>";
echo "lama tinggal : ".hitungtinggal()." hari"."<br>";
echo "yang harus dibayar : Rp ".hitungtinggal()*50000;*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slip pembayaran barang</title>
</head>
<body>
	<h3 align="center">Slip pembayaran hotel</h3>
	<table align="center">
<tr>
<td> Tanggal beli </td>
<td>:</td>
<td><?php echo "".$beli?></td>
</tr>
<tr>
<td> Nama barang </td>
<td>:</td>
<td><?php echo "".$nama ?></td>
</tr>
<tr>
<td> Jumlah barang </td>
<td>:</td>
<td><?php echo "".$jumlah ?>  </td>
</tr>
<tr>
<td> Harga barang </td>
<td>:</td>
<td> Rp <?php echo "".$harga ?>  </td>
</tr>
<tr>
<td> Jumlah yang harus dibayar </td>
<td>:</td>
<td> Rp <?php echo "".hitungbayar() ?>  </td>
</tr>
</table>
</div>
</body>
</html>
