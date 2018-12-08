<?php
$nama = $_POST["txtNama"];
$alamat = $_POST["txtAlamat"];
$hp = $_POST["txtHp"];
$tglin = $_POST["txtIn"];
$tglout = $_POST["txtOut"];

function hitungtinggal ()
{
	$tglin = $_POST["txtIn"];
	$tglout = $_POST["txtOut"];
	$selisih = strtotime($tglout) - strtotime($tglin);
	$hari = $selisih/(60*60*24);
   	return $hari;

}

$hari = hitungtinggal();
$lama = hitungtinggal() * 50000;

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
	<title>Slip pembayaran kereta api</title>
</head>
<body>
	<h3 align="center">Slip pembayaran kereta api</h3>
	<table align="center">
<tr>
<td> Nama </td>
<td>:</td>
<td><?php echo "".$nama?></td>
</tr>
<tr>
<td> Alamat </td>
<td>:</td>
<td><?php echo "".$alamat ?></td>
</tr>
<tr>
<td> Hp </td>
<td>:</td>
<td><?php echo "".$hp ?>  </td>
</tr>
<tr>
<td> Checkin </td>
<td>:</td>
<td><?php echo "".$tglin ?>  </td>
</tr>
<tr>
<td> Check out </td>
<td>:</td>
<td><?php echo "".$tglout ?>  </td>
</tr>
<tr>
<td> Lama tinggal </td>
<td>:</td>
<td><?php echo "".$hari ?>  </td>
</tr>
<tr>
<td> Yang harus dibayar </td>
<td>:</td>
<td> Rp <?php echo "".$lama ?>  </td>
</tr>
</table>
</div>
</body>
</html>
