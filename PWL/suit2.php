
<?php

$com = mt_rand(1, 100);

if ($com < 30) {
 $com = "gajah" ;
} 
 else if($com >=31 && $com <=60) {
 $com = 'orang';
}
 else($com >=61 && $com <=100){
 $com = 'semut'
};

$hasil ='';
if ($_GET['txtNama'] == $com) {
  $hasil='seri';
}else if ($_GET['txtNama'] == 'gajah') {
	$hasil = ($com == 'orang')? 'menang' : 'kalah';
}else if($_GET['txtNama'] == 'orang'){
    $hasil = ($com == 'gajah')? 'kalah' : 'menang';
} else if($_GET['txtNama'] == 'semut'){
    $hasil = ($com == 'orang') ? 'kalah' : 'menang';
}else{
    $hasil = 'masukan salah';
};

echo 'komputer : '.$com ;
echo '<br/>';
echo 'kamu : '.$_GET['txtNama'];
echo '<br/>';
echo 'hasil : '.$hasil;
?>