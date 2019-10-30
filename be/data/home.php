<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION['nama'])) {
	// echo $_SESSION['nama'];
}else{
	header("location:logout.php");
}

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
		<div class="col-md-12">

			<br>
			<h2 align="center">Data Mahasiswa</h2>
			<hr>

			<p style="float: left;">
				<b>USER : <?php echo $_SESSION['nama']; ?></b> &nbsp;
				<button type="button" class="btn btn-outline-secondary" onclick="location='logout.php'">Log Out</button>
			</p>
			<div align="right"><button type="button" name="tambah" style="width: 10%" class="btn btn-primary" onclick="location='inputan.php'">Tambah Data</button></div>

			<br>

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
						<th>Agama</th>
						<th>Alamat</th>
						<th>Jurusan</th>
						<th>Sekolah Asal</th>
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
						<td><?=$row['agama']?></td>
						<td><?=$row['alamat']?></td>
						<td><?=$row['jurusan']?></td>
						<td><?=$row['sekolah_asal']?></td>
						<td>
							<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modaledit<?php echo $row['id_mhs'];?>">EDIT</button>

							<div class="modal fade" id="modaledit<?php echo $row['id_mhs'];?>" tabindex="-1" role="dialog" aria-hidden="true">
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
												<h2>Yakin Edit Data Ini ?</h2> <br>

												<a href="editan.php?id_mhs=<?=$row['id_mhs']?>" class="btn btn-warning btn-block">EDIT</a> 
												<button type="button" class="btn btn-outline-secondary btn-block" data-dismiss="modal" aria-label="close">CANCEL</button>
											</center>
										</div>
									</div>
								</div>
							</div>

							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalhapus<?php echo $row['id_mhs'];?>">HAPUS</button>

							<div class="modal fade" id="modalhapus<?php echo $row['id_mhs'];?>" tabindex="-1" role="dialog" aria-hidden="true">
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
												<h2>Yakin Hapus Data Ini ?</h2> <br>

												<a href="hapus.php?id_mhs=<?=$row['id_mhs']?>" class="btn btn-danger btn-block">HAPUS</a> 
												<button type="button" class="btn btn-outline-secondary btn-block" data-dismiss="modal" aria-label="close">CANCEL</button>
											</center>
										</div>
									</div>
								</div>
							</div>

						</td>
					</tr>

					<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</div>

<script src="../../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../bootstrap/js/popper.min.js"></script>
</body>
</html>