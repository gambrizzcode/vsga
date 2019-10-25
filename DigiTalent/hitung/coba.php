<?php

// $awal = microtime(true);
// $i = 0;
// while ($i < 1000) {
// 	$tmp[] = "";
// 	++$i;
// }

// $akhir = microtime(true);
// $waktu = $akhir-$awal;

// echo 'Membutuhkan waktu ' . $waktu . ' detik';

$awal = microtime(true);
$arrA = array(1,2,3,4,5,6,7,8,9);
$len = count($arrA);
for ($i=0; $i < $len; $i++) { 
	echo $len;
}
// for ($i=0; $i < count($arrA); $i++) { 
	// echo count($arrA);
// }
$akhir = microtime(true);
$waktu = $akhir-$awal;

echo '<br>Membutuhkan waktu ' . $waktu . ' detik';