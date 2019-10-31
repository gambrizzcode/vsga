<?php

session_start();
include 'koneksi.php';

$nik 			= $_POST['nik'];
$nama 			= $_POST['nama'];
$tempat_lahir 	= $_POST['tempat_lahir'];
$tgl_lahir 		= $_POST['tgl_lahir'];
$alamat 		= $_POST['alamat'];
$provinsi 		= $_POST['provinsi'];
$email 			= $_POST['email'];
$password 		= $_POST['password'];
$konpass 		= $_POST['konpass'];
$pass 			= md5($password);

$qins1 = mysqli_query($conn,"INSERT INTO pengguna VALUES('$nik','$nama','$tempat_lahir','$tgl_lahir','$alamat','$provinsi','$email','4')");

if ($qins1) {
	$qins2 = mysqli_query($conn,"INSERT INTO login VALUES('$nik','$pass','0')");

	if ($qins2) {
		$_SESSION['notif'] = 'Registrasi Berhasil. <br>Silahkan Tunggu Notifikasi Selanjutnya.';

		header('location:register.php');
	}else{
		$_SESSION['notif'] = 'Gagal !';

		header('location:register.php');
	}
}else{
	$_SESSION['notif'] = 'Gagal !';

	header('location:register.php');
}