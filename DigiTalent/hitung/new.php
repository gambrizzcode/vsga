<?php

// create function with an exception
function checkNum($number){
	if ($number > 1) {
		throw new Exception('Nilai Harus 1 atau dibawahnya');
	}

	return true;
}

// trigger exception in a "try" block
try {
	checkNum(2);
	// If the exception is thrown, this text will not bee shown
	echo 'Jika ini muncul, berarti angka adalah 1 atau dibawahnya';
}

// catch exception
catch (Exception $e) {
	echo 'Pesan : ' . $e->getMessage();
}