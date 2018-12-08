
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	Masukan Angka : <input type="text" name="txtangka">
	<input type="submit" name="submit">
</form>
</body>
</html>
<?php
 $t=$_POST['txtangka'];
	for ($i=1; $i <=$t ; $i++) { 
		$a=0;
		for ($j=1; $j<=$i; $j++) { 
			if ($i%$j == 0) {
				$a++;
			}
		}
		if ($a==2) {
			echo $i.' ';
		}
	}
?>
