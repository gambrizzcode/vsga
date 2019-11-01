<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	<title>Input Data Karyawan</title>
</head>
<body>

<?php
$nik = $_GET['nik'];
$mahasiswa = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE nik = '$nik'");
$row = mysqli_fetch_array($mahasiswa);

// $jurusan = array('TEKNIK INFORMATIKA','TEKNIK KOMPUTER','MANAJEMEN INFORMATIKA');

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
				<h2 align="center">Edit Data Karyawan</h2>
				<hr>
				
				<div class="form-group row">
					<label class="col-md-2 offset-md-2">NIK</label>
					<div class="col-md-6">
						<input type="hidden" name="nik" value="<?php echo $row['nik']; ?>">
						<label class="control-label"><?php echo $row['nik']; ?></label>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Nama Lengkap</label>
					<div class="col-md-6">
						<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>"> <br>
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
					<label class="col-md-2 offset-md-2">Jenis Kelamin</label>
					<div class="col-md-6">
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline4" name="gender" class="custom-control-input" value="L" <?php echo active_radio_button("L", $row['gender']); ?>>
							<label class="custom-control-label" for="customRadioInline4">Laki - Laki</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline5" name="gender" class="custom-control-input" value="P" <?php echo active_radio_button("P", $row['gender']); ?>>
							<label class="custom-control-label" for="customRadioInline5">Perempuan</label>
						</div> <br><br>
						<?php 
							if(isset($_GET['gender'])){
								if($_GET['gender'] == "kosong"){		
									echo "
										<div class='alert alert-danger'>Gender Belum Di Pilih !</div>
									";
								}	
							}
						?>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Agama</label>
					<div class="col-md-6">
						<select name="agama" class="form-control">
							<option <?php if($row['agama'] == "ISLAM"){echo "selected";}else{} ?> value="ISLAM">ISLAM</option>
							<option <?php if($row['agama'] == "KATHOLIK"){echo "selected";}else{} ?> value="KATHOLIK">KATHOLIK</option>
							<option <?php if($row['agama'] == "PROTESTAN"){echo "selected";}else{} ?> value="PROTESTAN">PROTESTAN</option>
							<option <?php if($row['agama'] == "HINDU"){echo "selected";}else{} ?> value="HINDU">HINDU</option>
							<option <?php if($row['agama'] == "BUDDHA"){echo "selected";}else{} ?> value="BUDDHA">BUDDHA</option>
							<option <?php if($row['agama'] == "KONG HU CU"){echo "selected";}else{} ?> value="KONG HU CU">KONG HU CU</option>
						</select> <br>
						<?php 
							if(isset($_GET['agama'])){
								if($_GET['agama'] == "kosong"){	
									echo "
										<div class='alert alert-danger'>Agama Belum Di Pilih !</div>
									";
								}	
							}
						?>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Alamat</label>
					<div class="col-md-6">
						<textarea name="alamat" class="form-control"><?php echo $row['alamat']; ?></textarea> <br>
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

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Gaji</label>
					<div class="col-md-6">
						<input type="text" name="gaji" class="form-control" value="<?php echo $row['gaji']; ?>"> <br>
						<?php 
							if(isset($_GET['gaji'])){
								if($_GET['gaji'] == "kosong"){	
									echo "
										<div class='alert alert-danger'>Gaji Belum Di Masukkan !</div>
									";
								}	
							}
						?>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2"></label>
					<div class="col-md-3">
						<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#modalupdate">Update</button>

						<div class="modal fade" id="modalupdate" tabindex="-1" role="dialog" aria-hidden="true">
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
											<h2>Yakin Update Data Ini ?</h2> <br>

											<input type="submit" name="submit" class="btn btn-warning btn-block" value="Update">  
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
						<input type="reset" name="reset" class="btn btn-secondary" value="Ulangi">
						<button type="button" name="kembali" class="btn btn-secondary" onclick="location='index.php'">Kembali</button>
					</div>
				</div>

			</form>

		</div>
	</div>
</div>

<script src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>