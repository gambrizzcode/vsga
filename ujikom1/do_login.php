<?php

session_start();
include 'koneksi.php';

$nik  = $_POST['nik'];
$pass = md5($_POST['password']);

$qnik = mysqli_query($conn,"SELECT * FROM login WHERE nik = '$nik'");
$rnik = mysqli_num_rows($qnik);

if ($rnik == 1) {
	$qpass = mysqli_query($conn,"SELECT * FROM login WHERE password = '$pass' AND nik = '$nik'");
	$rpass = mysqli_num_rows($qpass);

	if ($rpass == 1) {
		$data = mysqli_fetch_array($qpass);

		if ($data['status'] == 1 || $data['status'] == '1') {
			$_SESSION['nik'] = $data['nik'];
			header('location:dashboard.php');
		}else{
			header('location:index.php');
		}
	}else{
		header('location:index.php');
	}
}else{
	header('location:index.php');
}