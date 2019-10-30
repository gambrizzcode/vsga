<?php

include 'koneksi.php';
session_start();

$id_mhs 		= $_POST['id_mhs'];
$nim 			= $_POST['nim'];
$nama 			= $_POST['nama'];
$jk 			= $_POST['jk'];
$jurusan 		= $_POST['jurusan'];
$alamat 		= $_POST['alamat'];
$agama 			= $_POST['agama'];
$sekolah_asal 	= $_POST['sekolah_asal'];

$query = mysqli_query($koneksi,"UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jk', jurusan='$jurusan', alamat='$alamat', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id_mhs = '$id_mhs'");

if ($query == true) {
	$_SESSION['pesan'] = 'Data Berhasil di Update !';
	$_SESSION['jenis'] = 'success';

	header("location:index.php");
}else{
	$_SESSION['pesan'] = 'Gagal !';
	$_SESSION['jenis'] = 'danger';
}