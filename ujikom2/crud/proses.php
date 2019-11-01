<?php
// load file koneksi
include 'koneksi.php';
// memulai session
session_start();

// deklarasi variabel inisialisasi
$nik 			= $_POST['nik'];
$nama 			= $_POST['nama'];
$gender 		= $_POST['gender'];
$agama 			= $_POST['agama'];
$alamat 		= $_POST['alamat'];
$gaji 			= $_POST['gaji'];

// validasi apakah bernilai kosong atau tidak
$qnik 		= $nik 		== "" ? $qnik 		= "nik=kosong" 		: "";
$qnama 		= $nama 	== "" ? $qnama 		= "&nama=kosong" 	: "";
$qgender 	= $gender 	== "" ? $qgender 	= "&gender=kosong" 	: "";
$qagama 	= $agama 	== "" ? $qagama 	= "&agama=kosong" 	: "";
$qalamat 	= $alamat 	== "" ? $qalamat 	= "&alamat=kosong" 	: "";
$qgaji 		= $gaji 	== "" ? $qgaji 		= "&gaji=kosong" 	: "";

// jika masih ada yang bernilai "" maka tidak disimpan
if ($nik == "" || $nama == "" || $gender == "" || $agama == "" || $alamat == "" || $gaji == "") {
	header("location:inputan.php?".$qnik.$qnama.$qprodi.$qtgl_lahir.$qgender.$qagama.$qgaji.$qalamat);
}else{
	// menggunakan function yang sudah ada
	$quer = simpan_karyawan($nik,$nama,$gender,$agama,$alamat,$gaji);

	// validasi apakah penyimpanan berhasil atau tidak
	if ($quer == true) { // jika berhasil
		// kirim pesan sukses
		$_SESSION['pesan'] = 'Data Berhasil di Insert !';
		$_SESSION['jenis'] = 'success';

		// kembali ke halaman index
		header("location:index.php");
	}else{ // jika gagal
		// kirim pesan error
		$_SESSION['pesan'] = 'Gagal !';
		$_SESSION['jenis'] = 'danger';

		// menampilkan pesan error
		echo mysqli_error($koneksi);
	}
}