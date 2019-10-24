<?php
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];
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

if ($bangun == 1) {
	echo "Luas persegi panjang adalah : ".persegi($angka1,$angka2);
}elseif ($bangun == 2) {
	echo "Luas segitiga adalah : ".segitiga($angka1,$angka2);
}else{
	echo "Luas belah ketupat adalah : ".belah_ketupat($angka1,$angka2);
}
// tes
?>