<?php
include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	<title>Data Printer</title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">

			<br>
			<h2 align="center">Data Printer</h2>
			<hr>

			<?php 
			if(isset($_SESSION['pesan'])){
				if($_SESSION['pesan'] != ""){
					echo "
						<div class='alert alert-".$_SESSION['jenis']."'>".$_SESSION['pesan']."</div>
					";
					// header("location:index.php");
					session_destroy();
				}	
			}
			?>

			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th>No Printer</th>
						<th>Nama Merek</th>
						<th>Warna</th>
						<th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// printer.no, nama_merek, jumlah, warna.warna
					$query = mysqli_query($conn,"SELECT * FROM printer INNER JOIN warna ON printer.warna = warna.id");
					while ($row = mysqli_fetch_array($query)) { ?>

					<tr>
						<td><?=$row['no']?></td>
						<td><?=$row['nama_merek']?></td>
						<td><?=$row['warna']?></td>
						<td><?=$row['jumlah']?></td>
					</tr>

					<?php } ?>
				</tbody>
			</table>

			<hr>

			<button type="button" name="tambah" class="btn btn-primary" onclick="location='tambah.php'">Tambah Data</button>

		</div>
	</div>
</div>

<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>