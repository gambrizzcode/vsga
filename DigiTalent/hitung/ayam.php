<?php

$jumlah = 5;

echo 'tek kotek kotek kotek <br>';
echo 'anak ayam turun berkotek <br><br>';

$anak = "anak ayam turunnya ";
$induk = "mati satu induknya ";

for ($i=$jumlah; $i >= 1 ; $i--) { 
	echo $anak.$i."<br>";
	$a = $i-1;

	if ($a == 0) {
		echo "mati satu tinggal induknya";
	}else{
		echo $induk.$a."<br><br>";
	}

}

?>