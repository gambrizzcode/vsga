<?php

// buat variabel untuk koneksi
$host	= 'localhost';
$user 	= 'root';
$pass 	= '';
$db 	= 'ujikom2';

// buat koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);

// fungsi untuk menyimpan data karyawan
function simpan_karyawan($nik,$nama,$gender,$agama,$alamat,$gaji){
	// menjadikan variabel koneksi menjadi global 
	// sehingga bisa diakses melalui fungsi
	global $koneksi;
	// query untuk menyimpan data
	$data = mysqli_query($koneksi,"INSERT INTO karyawan VALUES('$nik','$nama','$gender','$agama','$alamat','$gaji')");
	return $data;
}

function update_karyawan($nik,$nama,$gender,$agama,$alamat,$gaji){
	global $koneksi;
	// query untuk update data
	$da = mysqli_query($koneksi,"UPDATE karyawan SET nama='$nama', gender='$gender', alamat='$alamat', agama='$agama', gaji='$gaji' WHERE nik = '$nik'");
	return $da;
}

function hapus_karyawan($nik){
	global $koneksi;
	// query untuk menghapus data
	$dat = mysqli_query($koneksi, "DELETE FROM karyawan WHERE nik = '$nik'");
	return $dat;
}