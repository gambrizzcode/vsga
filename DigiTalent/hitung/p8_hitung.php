<?php
$angka1 = $_POST["angka1"] == "" ? 0 : $_POST["angka1"];
$angka2 = $_POST["angka2"] == "" ? 0 : $_POST["angka2"];
$bangun = $_POST["bangun"];

function persegi($angka1,$angka2){
	$luas = $angka1*$angka2;
	return $luas;
}

function segitiga($angka1,$angka2){
	$luas = 0.5*$angka1*$angka2;
	return $luas;
}

function belah_ketupat($angka1,$angka2){
	$luas = 0.5*$angka1*$angka2;
	return $luas;
}

echo "Angka Satu = ".$angka1."<br>";
echo "Angka Dua = ".$angka2."<br>";

if ($bangun == 1) {
	echo "Luas Persegi Panjang Adalah : ".persegi($angka1,$angka2);
}elseif ($bangun == 2) {
	echo "Luas Segitiga Adalah : ".segitiga($angka1,$angka2);
}else{
	echo "Luas Belah Ketupat Adalah : ".belah_ketupat($angka1,$angka2);
}
// tes
?>