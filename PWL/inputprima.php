<?php 
$input = $_POST["txtInput"];
echo "bilangan prima antara 1 sampai ".$input."<br>";
for($a=1;$a<=$input;$a++){ // perulangan 1 sampai 100
            $k = 0;
            for($j=1;$j<=$a;$j++){ // perulangan bilangan pembagi
                        if($a % $j == 0){ // modulus
                                    $k++;
                        }
            }
            if($k == 2){ // salah satu syarat 2 bukan merupakan bilangan prima

                    echo $a."<br>";
            }
}
?>