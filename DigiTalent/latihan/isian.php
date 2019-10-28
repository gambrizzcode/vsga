<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

		<title>Data Mahasiswa</title>
	</head>
	<br>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2>Form Data Mahasiswa</h2>

					<hr>

					<form class="form-horizontal" name="form_mahasiswa" action="tampil.php" method="post">

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4">NIM</label>
							<div class="col-md-4 col-sm-8">
								<input type="text" name="nim" class="form-control"><br>
								<?php 
									if(isset($_GET['nim'])){
										if($_GET['nim'] == "kosong"){		
											echo "
												<div class='alert alert-danger'>NIM Belum Di Masukkan !</div>
											";
										}	
									}
								?>
							</div>
						</div>

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4">Nama Lengkap</label>
							<div class="col-md-4 col-sm-8">
								<input type="text" name="nama" class="form-control"><br>
								<?php 
									if(isset($_GET['nama'])){
										if($_GET['nama'] == "kosong"){		
											echo "
												<div class='alert alert-danger'>Nama Belum Di Masukkan !</div>
											";
										}	
									}
								?>
							</div>
								
						</div>

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4">Program Studi</label>
							<div class="col-md-4 col-sm-8">
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline1" name="prodi" class="custom-control-input" value="D4 - Teknik Informatika">
									<label class="custom-control-label" for="customRadioInline1">D4 - Teknik Informatika</label>
								</div>
								<br>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline2" name="prodi" class="custom-control-input" value="D3 - Manajemen Informatika">
									<label class="custom-control-label" for="customRadioInline2">D3 - Manajemen Informatika</label>
								</div>
								<br>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline3" name="prodi" class="custom-control-input" value="D3 - Teknik Komputer">
									<label class="custom-control-label" for="customRadioInline3">D3 - Teknik Komputer</label>
								</div> <br>
								<?php 
									if(isset($_GET['prodi'])){
										if($_GET['prodi'] == "kosong"){		
											echo "
												<div class='alert alert-danger'>Prodi Belum Di Masukkan !</div>
											";
										}	
									}
								?>
							</div>
						</div>

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4">Tanggal Lahir</label>
							<div class="col-md-4 col-sm-8">
								<input type="date" name="tgl_lahir" class="form-control"> <br>
								<?php 
									if(isset($_GET['tgl_lahir'])){
										if($_GET['tgl_lahir'] == "kosong"){		
											echo "
												<div class='alert alert-danger'>Tanggal Lahir Belum Di Masukkan !</div>
											";
										}	
									}
								?>
							</div>
						</div>

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4">Jenis Kelamin</label>
							<div class="col-md-4 col-sm-8">
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline4" name="jk" class="custom-control-input" value="Laki - Laki">
									<label class="custom-control-label" for="customRadioInline4">Laki - Laki</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline5" name="jk" class="custom-control-input" value="Perempuan">
									<label class="custom-control-label" for="customRadioInline5">Perempuan</label>
								</div> <br>
								<?php 
									if(isset($_GET['jk'])){
										if($_GET['jk'] == "kosong"){		
											echo "
												<div class='alert alert-danger'>Jenis Kelamin Belum Di Masukkan !</div>
											";
										}	
									}
								?>
							</div>
						</div>

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4">Agama</label>
							<div class="col-md-4 col-sm-8">
								<select class="form-control" name="agama">
									<option value="">--- Pilih Agama ---</option>
									<option value="Islam">Islam</option>
									<option value="Katholik">Katholik</option>
									<option value="Protestan">Protestan</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
									<option value="Kong Hu Cu">Kong Hu Cu</option>
								</select> <br>
								<?php 
									if(isset($_GET['agama'])){
										if($_GET['agama'] == "kosong"){		
											echo "
												<div class='alert alert-danger'>Agama Belum Di Masukkan !</div>
											";
										}	
									}
								?>
							</div>
						</div>

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4">Status</label>
							<div class="col-md-4 col-sm-8">
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline6" name="status" class="custom-control-input" value="Menikah">
									<label class="custom-control-label" for="customRadioInline6">Menikah</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline7" name="status" class="custom-control-input" value="Belum Menikah">
									<label class="custom-control-label" for="customRadioInline7">Belum Menikah</label>
								</div> <br>
								<?php 
									if(isset($_GET['status'])){
										if($_GET['status'] == "kosong"){		
											echo "
												<div class='alert alert-danger'>Status Belum Di Masukkan !</div>
											";
										}	
									}
								?>
							</div>
						</div>

						<!-- <div class="form-group row">
							<label class="control-label col-md-2 col sm-4">Hobi</label>
							<div class="col-md-4 col-sm-8">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1" name="hobi1">
									<label class="custom-control-label" for="customCheck1">Membaca</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck2" name="hobi2">
									<label class="custom-control-label" for="customCheck2">Menulis</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck3" name="hobi2">
									<label class="custom-control-label" for="customCheck3">Olahraga</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck4" name="hobi2">
									<label class="custom-control-label" for="customCheck4">Traveling</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck5" name="hobi2">
									<label class="custom-control-label" for="customCheck5">Lain - Lain</label>
								</div>
							</div>
						</div> -->

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4">Alamat</label>
							<div class="col-md-4 col-sm-8">
								<textarea class="form-control" name="alamat"></textarea> <br>
								<?php 
									if(isset($_GET['alamat'])){
										if($_GET['alamat'] == "kosong"){		
											echo "
												<div class='alert alert-danger'>Alamat Belum Di Masukkan !</div>
											";
										}	
									}
								?>
							</div>
						</div>

						<hr>

						<div class="modal fade" id="modal_submit">
							<div class="modal-dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Sudah Yakin ?</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<br>
											<button type="button" data-dismiss="modal" class="btn btn-secondary btn-block">Cancel</button>
											<button type="submit" name="submit" class="btn btn-primary btn-block"> Submit</button>
											<br>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<label class="control-label col-md-2 col sm-4"></label>
							<div class="col-md-4 col-sm-8">
								<button type="button" data-toggle="modal" data-target="#modal_submit" class="btn btn-primary">Submit</button>
								<input type="reset" name="reset" value="Reset" class="btn btn-secondary">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/popper.min.js"></script>
	</body>
</html>