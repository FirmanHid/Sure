<?php
function hitungGrade($value){
if($value >= 85 && $value <= 100){
$grade = "A";
} else if($value >= 70){
$grade = "B";
} else if($value >= 50){
$grade = "C";
} else if($value >= 30){
$grade = "D";
} else {
$grade = "E";
}
return $grade;
}
$nilai = 80;
echo "Nilai anda : ".$nilai;
echo "<br />";
echo "Grade anda : ".hitungGrade($nilai);
?>