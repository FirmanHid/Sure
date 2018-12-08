<?php
$input = $_POST["txtInput"];
echo "bilangan ganjil antara 1 sampai ".$input."<br>";
for ($ganjil = 1; $ganjil <= $input; $ganjil++) {
if ($ganjil % 2 == 1) {
 echo $ganjil."<br>" ;
 }
}
?>