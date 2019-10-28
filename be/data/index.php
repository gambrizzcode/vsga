<?php
include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

	<title>PHP dan MySQL</title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">

			<br>
			<h2 align="center">Data Mahasiswa</h2>
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
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Gender</th>
						<th>Jurusan</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$mhs = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
					foreach ($mhs as $row) {
						$jk = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
					?>
					<tr>
						<td><?=$row['id_mhs']?></td>
						<td><?=$row['nim']?></td>
						<td><?=$row['nama']?></td>
						<td><?=$jk?></td>
						<td><?=$row['jurusan']?></td>
						<td><?=$row['alamat']?></td>
						<td>
							<a href="editan.php?id_mhs=<?=$row['id_mhs']?>" class="btn btn-link">EDIT</a> | 
							<a href="hapus.php?id_mhs=<?=$row['id_mhs']?>" class="btn btn-link">HAPUS</a>
						</td>
					</tr>

					<?php } ?>
				</tbody>
			</table>

			<hr>

			<button type="button" name="tambah" class="btn btn-primary" onclick="location='inputan.php'">Tambah Data</button>

		</div>
	</div>
</div>

<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>