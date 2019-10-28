<?php

include 'koneksi.php';
session_start();

$nama_merek = $_POST['nama_merek'];
$warna	 	= $_POST['warna'];
$jumlah 	= $_POST['jumlah'];

$q = mysqli_query($conn,"INSERT INTO printer VALUES('0','$nama_merek','$warna','$jumlah')");

if ($q == true) {
	$_SESSION['pesan'] = 'Data Berhasil di Entry !';
	$_SESSION['jenis'] = 'success';
}else{
	$_SESSION['pesan'] = 'Gagal !';
	$_SESSION['jenis'] = 'danger';
}

header("location:index.php");