<?php

include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$cek = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
$row = mysqli_num_rows($cek);

if ($row == 1) {
	$qpass = mysqli_query($koneksi,"SELECT * FROM user WHERE password = '$password' AND username = '$username'");
	$qroww = mysqli_num_rows($qpass);
	if ($qroww == 1) {
		$data = mysqli_fetch_array($qpass);
		$_SESSION['nama'] = $data['nama'];

		header("location:home.php");
	}else{
		header("location:index.php");
	}
}else{
	header("location:index.php");
}