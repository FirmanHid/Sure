<?php
date_default_timezone_set('Asia/Jakarta');
$tgl1 = "06-2-2016";
$tgl2 = "08-2-2016";
$selisih = strtotime($tgl2) -  strtotime($tgl1);
$hari = $selisih/(60*60*24);
echo "Selisih tanggal $tgl2 dan $tgl1 adalah $hari hari";
?>