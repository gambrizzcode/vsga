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

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="post" action="proses.php">

				<br>
				<h2 align="center">Input Data Mahasiswa</h2>
				<hr>
				
				<div class="form-group row">
					<label class="col-md-2 offset-md-2">NIM</label>
					<div class="col-md-6">
						<input type="text" name="nim" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Nama Lengkap</label>
					<div class="col-md-6">
						<input type="text" name="nama" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Jenis Kelamin</label>
					<div class="col-md-6">
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline4" name="jk" class="custom-control-input" value="L">
							<label class="custom-control-label" for="customRadioInline4">Laki - Laki</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline5" name="jk" class="custom-control-input" value="P">
							<label class="custom-control-label" for="customRadioInline5">Perempuan</label>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Agama</label>
					<div class="col-md-6">
						<select name="agama" class="form-control">
							<option value="ISLAM">ISLAM</option>
							<option value="KATHOLIK">KATHOLIK</option>
							<option value="PROTESTAN">PROTESTAN</option>
							<option value="HINDU">HINDU</option>
							<option value="BUDDHA">BUDDHA</option>
							<option value="KONG HU CU">KONG HU CU</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Alamat</label>
					<div class="col-md-6">
						<textarea name="alamat" class="form-control"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Jurusan</label>
					<div class="col-md-6">
						<select name="jurusan" class="form-control">
							<option value="TEKNOLOGI INFORMASI">TEKNOLOGI INFORMASI</option>
							<option value="KESEHATAN">KESEHATAN</option>
							<option value="TEKNIK">TEKNIK</option>
							<option value="PRODUKSI PERTANIAN">PRODUKSI PERTANIAN</option>
							<option value="TEKNOLOGI PERTANIAN">TEKNOLOGI PERTANIAN</option>
							<option value="PETERNAKAN">PETERNAKAN</option>
							<option value="MANAJEMEN AGROBISNIS">MANAJEMEN AGROBISNIS</option>
							<option value="BAHASA, KOMUNIKASI, DAN PARIWISATA">BAHASA, KOMUNIKASI, DAN PARIWISATA</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Sekolah Asal</label>
					<div class="col-md-6">
						<input type="text" name="sekolah_asal" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2"></label>
					<div class="col-md-3">
						<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalsimpan">Simpan</button>

						<div class="modal fade" id="modalsimpan" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<center>
											<h2>Yakin Simpan Data Ini ?</h2> <br>

											<input type="submit" name="submit" class="btn btn-primary btn-block" value="SIMPAN">  
											<button type="button" class="btn btn-outline-secondary btn-block" data-dismiss="modal" aria-label="close">CANCEL</button>
										</center>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2"></label>
					<div class="col-md-6">
						<input type="reset" name="reset" class="btn btn-outline-secondary" value="Ulangi">
						<button type="button" name="kembali" class="btn btn-outline-secondary" onclick="location='index.php'">Kembali</button>
					</div>
				</div>

			</form>

		</div>
	</div>
</div>

<script src="../../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../bootstrap/js/popper.min.js"></script>
</body>
</html>