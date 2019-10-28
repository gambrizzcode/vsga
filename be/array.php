<?php

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan  mengisi indeks tertentu
$anggota[1] = "Komang";
$anggota[2] = "Medi";
$anggota[0] = "Usman";

echo "<pre>";
print_r($buah);
echo "<br>";
print_r($hobi);
echo "<br>";
print_r($minuman);
echo "<br>";
print_r($makanan);
echo "<br>";
print_r($anggota);
echo "</pre>";

echo "<hr>";

$barang = ["Buku Tulis", "Penghapus", "Spidol", "Kertas", "Bolpion"];

for ($i=0; $i < count($barang); $i++) { 
	echo $barang[$i]."<br>";
}

echo "<hr>";

foreach ($barang as $isi) {
	echo $isi."<br>";
}

echo "<hr>";

$i = 0;
while ($i < count($barang)) {
	echo $barang[$i]."<br>";
	$i++;
}

echo "<hr>";

$hewan = ["Burung", "Kucing", "Ikan"];

// menghapus kucing
unset($hewan[1]);

echo $hewan[0]."<br>";
echo $hewan[1]."<br>";
echo $hewan[2]."<br>";
echo "<hr>";
echo "<pre>";
print_r($hewan);
echo "</pre>";

echo "<hr>";

$hobi 	 = ["Membaca", "Menulis", "Ngeblog"];
$hobi[3] = "Coding";
$hobi[]  = "Olahraga";

foreach ($hobi as $hobiku) {
	echo $hobiku."<br>";
}

echo "<hr>";

$user = ["Komang", "Medi", "Usman"];
$user[1] = "Evans";

echo "<pre>";
print_r($user);
echo "</pre>";

echo "<hr>";

$artikel = [
	"judul" => "Belajar Pemrograman PHP",
	"penulis" => "Digital Talent",
	"view" => 128
];

echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>oleh : ".$artikel["penulis"]."</p>";
echo "<p>view : ".$artikel["view"]."</p>";

echo "<hr>";

$email["subjek"] 	= "Apa Kabar ?";
$email["pengirim"] 	= "komang@digitaltalent.com";
$email["isi"] 		= "Apa Kabar ? sudah lama tidak berjumpa";

echo "<pre>";
print_r($email);
echo "</pre>";

echo "<hr>";

$matrik = [
	[2,3,4],
	[7,5,0],
	[4,3,8]
];

echo $matrik[1][0]; // output 7

echo "<hr>";

$ensiklopedi = [
	[
		"judul" => "Belajar PHP dan MySQL untuk pemula",
		"penulis" => "Digital Talent"
	],
	[
		"judul" => "Tutorial PHP dari nol hingga mahir",
		"penulis" => "Digital Talent"
	],
	[
		"judul" => "Membuat Aplikasi Web Dengan PHP",
		"penulis" => "Digital Talent"
	]
];

foreach ($ensiklopedi as $post) {
	echo "<h2>".$post["judul"]."</h2>";
	echo "<p>".$post["penulis"]."</p>";
	echo "<hr>";
}