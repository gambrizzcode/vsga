<?php
function hitungUmur($thn_lahir,$thn_sekarang){
	$umur = $thn_sekarang-$thn_lahir;
	return $umur;
}

function perkenalan($nama,$salam="Selamat Datang"){
	echo $salam.", ";
	echo "Perkenalkan, Nama Saya ".$nama."<br>";
	echo "Saya Berusia ".hitungUmur(1999,2019)." tahun";
	echo "Senang Berkenalan Dengan Anda <br>";
}

perkenalan("Syaikhu", "Selamat Siang");

echo "<hr>";

$saya = "Rizal";
$ucapanSalam = "Haloooo";

perkenalan($saya,$ucapanSalam);

echo "<hr>";

perkenalan($saya);

echo "<hr>";

echo "umur saya adalah ".hitungUmur(1999,2019)." tahun";

echo "<hr>";

function faktorial($angka){
	if ($angka<2) {
		return 1;
	}else{
		return ($angka*faktorial($angka-1));
	}
}

echo "Faktorial 5 adalah ".faktorial(5);

?>