<?php
//pada setiap awal halaman meload file koneksi
include 'koneksi.php';
//memulai session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	<title>Data Karyawan</title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<br>
			<h2 align="center">Data Karyawan</h2>
			<hr>

			<div class="row">
				<div class="col-md-6">
					<form method="post">
						<?php
						// menangkap cari
						if (isset($_POST['cari'])) { // jika sudah ada
							$cari = $_POST['cari']; // buat variabel yang bernama cari
						}else{ // jika tidak ada
							$cari = ""; // variabel cari kosong
						}
						?>
						<input type="text" class="form-control col-6" style="float: left;" placeholder="Cari NIK dan Nama . . ." size="40" name="cari" value="<?=$cari;?>">
						<input type="submit" name="submit" style="margin-left: 20px" value="Cari" class="btn btn-success col-2">
					</form>
				</div>
				<div class="col-md-6" align="right">
					<button type="button" name="tambah" class="btn btn-primary col-3" onclick="location='inputan.php'">Tambah Data</button>
				</div>
			</div>

			<div align="right"></div>

			<br>

			<?php 
			//pesan jika terdapat penyimpanan atau update yang berhasil atau gagal
			if(isset($_SESSION['pesan'])){
				if($_SESSION['pesan'] != ""){
					echo "
						<div class='alert alert-".$_SESSION['jenis']."'>".$_SESSION['pesan']."</div>
					";
					// menghapus semua session
					session_destroy();
				}	
			}
			?>

			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Gender</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>Gaji</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// memulai urutan angka
					$no = 1;
					// cek apakah ada permintaan untuk cari
					if (isset($_POST['cari'])) { // jika ada
						// simpan ke variabel
						// query untuk menampilkan data pencarian berdasarkan nik dan nama
						$mhs = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE nik LIKE '%$cari%' OR nama LIKE '%$cari%'");
					}else{
						// query untuk mengambil data karyawan
						$mhs = mysqli_query($koneksi,"SELECT * FROM karyawan");
					}
					// perintah menampilkan hasil query data karyawan
					foreach ($mhs as $row) {
						$jk = $row['gender'] == 'P' ? 'Perempuan' : 'Laki-laki';
					?>
					<tr>
						<td><?=$no++;?></td>
						<td><?=$row['nik']?></td>
						<td><?=$row['nama']?></td>
						<td><?=$jk?></td>
						<td><?=$row['agama']?></td>
						<td><?=$row['alamat']?></td>
						<td><?= number_format($row['gaji'],0,",",".");?></td>
						<td>
							<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modaledit<?php echo $row['nik'];?>">EDIT</button>

							<div class="modal fade" id="modaledit<?php echo $row['nik'];?>" tabindex="-1" role="dialog" aria-hidden="true">
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

												<a href="editan.php?nik=<?=$row['nik']?>" class="btn btn-warning btn-block">EDIT</a> 
												<button type="button" class="btn btn-outline-secondary btn-block" data-dismiss="modal" aria-label="close">CANCEL</button>
											</center>
										</div>
									</div>
								</div>
							</div>

							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalhapus<?php echo $row['nik'];?>">HAPUS</button>

							<div class="modal fade" id="modalhapus<?php echo $row['nik'];?>" tabindex="-1" role="dialog" aria-hidden="true">
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

												<a href="hapus.php?nik=<?=$row['nik']?>" class="btn btn-danger btn-block">HAPUS</a> 
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

<script src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
</body>
</html>