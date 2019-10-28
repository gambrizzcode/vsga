<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	<title>Entry Data</title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="post" action="masuk.php">

				<br>
				<h2 align="center">Entry Data Printer</h2>
				<hr>
				
				<!-- <div class="form-group row">
					<label class="col-md-2 offset-md-2">No Printer</label>
					<div class="col-md-6">
						<input type="text" name="no" class="form-control">
					</div>
				</div> -->

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Nama Merek</label>
					<div class="col-md-6">
						<input type="text" name="nama_merek" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Warna</label>
					<div class="col-md-6">
						<select name="warna" class="form-control">
							<?php
							$que = mysqli_query($conn,"SELECT * FROM warna");
							while ($ro = mysqli_fetch_array($que)) { ?>
								<option value="<?=$ro['id']?>"><?=$ro['warna']?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2">Jumlah</label>
					<div class="col-md-6">
						<input type="text" name="jumlah" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-2 offset-md-2"></label>
					<div class="col-md-3">
						<input type="submit" name="submit" class="btn btn-primary btn-block" value="Simpan"> 
						
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

<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>