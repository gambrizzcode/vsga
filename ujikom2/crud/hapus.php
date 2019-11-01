<?php
// load file koneksi
include 'koneksi.php';
// memulai session
session_start();

// deklarasi variabel inisialisasi
$nik = $_GET['nik'];

// menggunakan function yang sudah ada
$quer = hapus_karyawan($nik);

// validasi apakah penyimpanan berhasil atau tidak
if ($quer == true) { // jika berhasil
	// kirim pesan sukses
	$_SESSION['pesan'] = 'Data Berhasil di Hapus !';
	$_SESSION['jenis'] = 'success';
}else{ // jika gagal
	// kirim pesan error
	$_SESSION['pesan'] = 'Gagal !';
	$_SESSION['jenis'] = 'danger';

	// menampilkan pesan error
	echo mysqli_error($koneksi);
}

// kembali ke halaman index
header("location:index.php");