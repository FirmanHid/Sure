<?php
$mtk = $_POST["txtMTK"];
$ipa = $_POST['txtIPA'];
$ips = $_POST['txtIPS'];
$value = ($mtk*0.4)+($ipa*0.3)+($ips*0.3);
function Nilai($mtk,$ipa,$ips){
	
	$value= ($mtk*0.4)+($ipa*0.3)+($ips*0.3);
	
	if (($value >=80) && ($value<=100)) {
		$grade = 'A';
	}
	elseif ( $value >=70) {
		$grade = 'B';
	}
	elseif ($value >=50) {
		$grade ='C';
	}
	elseif ($value>=30) {
		$grade= 'D';
	}
	else  {
		$grade = 'E';
	}
	return $grade;
}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<table width="400px" >
		<tr bgcolor="#45eh34" align="center">
			<td>Nama</td>
			<td>Kelas</td>
			<td>Nilai Akhir</td>
			<td>Grade</td>
		</tr>
		<tr align="center">
			<td> <?php echo "".$_POST['txtnama']; ?></td>
			<td><?php echo"".$_POST['txtkelas']; ?></td>
			<td align="center"><?php echo "".$value; ?></td>
			<td><?php echo "".Nilai($_POST['txtMTK'],$_POST['txtIPA'],$_POST['txtIPS']); ?></td>

		</tr>
	</table>
	</body>
	</html>	



