<?php

include 'koneksi.php';
session_start();

$nim 		= $_POST['nim'];
$nama 		= $_POST['nama'];
$jk 		= $_POST['jk'];
$jurusan 	= $_POST['jurusan'];
$alamat 	= $_POST['alamat'];

$quer = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('0','$nim','$nama','$jk','$jurusan','$alamat')");

if ($quer == true) {
	$_SESSION['pesan'] = 'Data Berhasil di Insert !';
	$_SESSION['jenis'] = 'success';

	header("location:index.php");
}else{
	$_SESSION['pesan'] = 'Gagal !';
	$_SESSION['jenis'] = 'danger';
}