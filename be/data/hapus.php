<?php

include 'koneksi.php';
session_start();

$id_mhs = $_GET['id_mhs'];

$qu = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mhs = '$id_mhs'");

if ($qu == true) {
	$_SESSION['pesan'] = 'Data Berhasil di Hapus !';
	$_SESSION['jenis'] = 'success';

	header("location:index.php");
}else{
	$_SESSION['pesan'] = 'Gagal !';
	$_SESSION['jenis'] = 'danger';
}