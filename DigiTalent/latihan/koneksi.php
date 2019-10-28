<?php
$server		= "localhost";
$user 		= "root";
$password	= "";
$db_name	= "db_siswa";

$db = mysqli_connect($server, $user, $password, $db_name);

echo "berhasil terkoneksi...";

if (!$db) {
	die("Gagal terhubung dengan database : ".mysqli_connect_error());
}
?>