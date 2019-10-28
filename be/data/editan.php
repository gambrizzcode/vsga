<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

	<title>Input Data Mahasiswa</title>
</head>
<body>

<?php
$id_mhs = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id_mhs = '$id_mhs'");
$row = mysqli_fetch_array($mahasiswa);

$jurusan = array('TEKNIK INFORMATIKA','TEKNIK KOMPUTER','MANAJEMEN INFORMATIKA');

function active_radio_button($value,$input){
	$result = $value==$input ? 'checked' : '';
	return $result;
}
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="post" action="update.php">

				<br>
				<h2 align="center">Edit Data Mahasiswa</h2>
				<hr>

				<input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']; ?>">
				
				<div class="form-group row">
					<label class="col-md-2 offset-md-2">NIM</label>
					<div class="col-md-6">
						<input type="text" name="nim" class="form-control" value="<?php echo $row['nim']; ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Nama Lengkap</label>
					<div class="col-md-6">
						<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Jenis Kelamin</label>
					<div class="col-md-6">
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline4" name="jk" class="custom-control-input" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']); ?>>
							<label class="custom-control-label" for="customRadioInline4">Laki - Laki</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline5" name="jk" class="custom-control-input" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']); ?>>
							<label class="custom-control-label" for="customRadioInline5">Perempuan</label>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Jurusan</label>
					<div class="col-md-6">
						<select name="jurusan" class="form-control">
							<option <?php if($row['jurusan'] == "TEKNOLOGI INFORMASI"){echo "selected";}else{} ?> value="TEKNOLOGI INFORMASI">TEKNOLOGI INFORMASI</option>
							<option <?php if($row['jurusan'] == "KESEHATAN"){echo "selected";}else{} ?> value="KESEHATAN">KESEHATAN</option>
							<option <?php if($row['jurusan'] == "TEKNIK"){echo "selected";}else{} ?> value="TEKNIK">TEKNIK</option>
							<option <?php if($row['jurusan'] == "PRODUKSI PERTANIAN"){echo "selected";}else{} ?> value="PRODUKSI PERTANIAN">PRODUKSI PERTANIAN</option>
							<option <?php if($row['jurusan'] == "TEKNOLOGI PERTANIAN"){echo "selected";}else{} ?> value="TEKNOLOGI PERTANIAN">TEKNOLOGI PERTANIAN</option>
							<option <?php if($row['jurusan'] == "PETERNAKAN"){echo "selected";}else{} ?> value="PETERNAKAN">PETERNAKAN</option>
							<option <?php if($row['jurusan'] == "MANAJEMEN AGROBISNIS"){echo "selected";}else{} ?> value="MANAJEMEN AGROBISNIS">MANAJEMEN AGROBISNIS</option>
							<option <?php if($row['jurusan'] == "BAHASA, KOMUNIKASIM, DAN PARIWISATA"){echo "selected";}else{} ?> value="BAHASA, KOMUNIKASI, DAN PARIWISATA">BAHASA, KOMUNIKASI, DAN PARIWISATA</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Alamat</label>
					<div class="col-md-6">
						<textarea name="alamat" class="form-control"><?php echo $row['alamat']; ?></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2"></label>
					<div class="col-md-3">
						<input type="submit" name="submit" class="btn btn-primary btn-block" value="Update"> 
						
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2"></label>
					<div class="col-md-6">
						<input type="reset" name="reset" class="btn btn-secondary" value="Ulangi">
						<button type="button" name="kembali" class="btn btn-secondary" onclick="location='index.php'">Kembali</button>
					</div>
				</div>

			</form>

		</div>
	</div>
</div>

<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>