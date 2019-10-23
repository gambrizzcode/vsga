<?php
ini_set("display_errors","off");

$nim 		= $_POST["nim"];
if ($nim == "") {
	$qnim = "nim=kosong";
	// header("location:isian.php?nim=kosong");
}else{
	$qnim = "";
}

$nama 		= $_POST["nama"];
if ($nama == "") {
	$qnama = "&nama=kosong";
	// header("location:isian.php?nama=kosong");
}else{
	$qnama = "";
}

$prodi 		= $_POST["prodi"];
if ($prodi == "") {
	$qprodi = "&prodi=kosong";
}else{
	$qprodi = "";
}

$tgl_lahir 	= $_POST["tgl_lahir"];
if ($tgl_lahir == "") {
	$qtgl_lahir = "&tgl_lahir=kosong";
}else{
	$qtgl_lahir = "";
}

$jk 		= $_POST["jk"];
if ($jk == "") {
	$qjk = "&jk=kosong";
}else{
	$qjk = "";
}

$agama 		= $_POST["agama"];
if ($agama == "") {
	$qagama = "&agama=kosong";
}else{
	$qagama = "";
}

$status 	= $_POST["status"];
if ($status == "") {
	$qstatus = "&status=kosong";
}else{
	$qstatus = "";
}

$alamat 	= $_POST["alamat"];
if ($alamat == "") {
	$qalamat = "&alamat=kosong";
}else{
	$qalamat = "";
}

if ($nim == "" || $nama == "") {
	header("location:isian.php?".$qnim.$qnama.$qprodi.$qtgl_lahir.$qjk.$qagama.$qstatus.$qalamat);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	<title>Tampil Data Mahasiswa</title>
</head>

<br>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2>Data Mahasiswa</h2>

			<hr>

			<form class="form-horizontal" name="form_mahasiswa">

				<div class="form-group row">
					<label class="control-label col-md-2 col sm-4">NIM</label>
					<div class="col-md-4 col-sm-8">
						<?php echo $nim; ?>
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2 col sm-4">Nama</label>
					<div class="col-md-4 col-sm-8">
						<?php echo $nama; ?>
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2 col sm-4">Program Studi</label>
					<div class="col-md-4 col-sm-8">
						<?php echo $prodi; ?>
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2 col sm-4">Tanggal Lahir</label>
					<div class="col-md-4 col-sm-8">
						<?php echo date('d - m - Y',strtotime($tgl_lahir)); ?>
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2 col sm-4">Jenis Kelamin</label>
					<div class="col-md-4 col-sm-8">
						<?php echo $jk; ?>
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2 col sm-4">Agama</label>
					<div class="col-md-4 col-sm-8">
						<?php echo $agama; ?>
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2 col sm-4">Status Pernikahan</label>
					<div class="col-md-4 col-sm-8">
						<?php echo $status; ?>
					</div>
				</div>

				<div class="form-group row">
					<label class="control-label col-md-2 col sm-4">Alamat</label>
					<div class="col-md-4 col-sm-8">
						<?php echo $alamat; ?>
					</div>
				</div>

				<button type="button" class="btn btn-secondary" onclick="location='isian.php'">Kembali</button>

			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/popper.min.js"></script>
</body>
</html>