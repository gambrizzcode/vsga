<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Jumlah Angka</title>
</head>
<body>

<form method="post">
	<input type="number" name="angka" placeholder="Input Angka ...">
	<input type="submit" name="submit" value="SUBMIT">
</form>

<br>

</body>
</html>
<?php
if (isset($_POST['submit'])) {
	// menangkap  inputan
	$angka = $_POST['angka'];

	// koversi menjadi array
	$split = str_split($angka);

	// array diurutkan
	sort($split);

	// menghitung isi array yang sama
	// lalu dijadikan index
	// jumlah sama nya itu dijadikan isi
	$hitung = array_count_values($split);

	// menampilkan angka yang diinput
	echo 'Angka yang diinputkan : '.$angka.'<br>';

	// menampilkan tiap tiap isi array
	foreach ($hitung as $key => $value) {
	    // $key sebagai angkanya
	    // $values sebagai jumlah diulangnya
	    // lalu ditampilkan satu persatu
	    echo $key." : ".$value."<br>";
	}	
}