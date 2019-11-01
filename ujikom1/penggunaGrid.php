<?php

session_start();
include 'koneksi.php';

if (isset($_SESSION['nik'])) {
  $nik = $_SESSION['nik'];
  $que = mysqli_query($conn,"SELECT * FROM pengguna WHERE nik = '$nik'");
  $rue = mysqli_num_rows($que);
  if ($rue == 1) {
    $fue = mysqli_fetch_array($que);
    $s_nik = $fue['nik'];
    $s_nama = $fue['nama'];
  }
}else{
  header('location:do_logout.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Pengguna</title>

  <?php include 'fhead.php'; ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <?php include 'fmenu.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'fheader.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Table Pengguna</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-hovered table-bordered" id="dataTabel" width="100%" cellspacing="0">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>NIK</th>
                     <th>Nama</th>
                     <th>Tempat, Tanggal Lahir</th>
                     <th>Email</th>
                     <th>Posisi</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody>
                  <tr>
                    
                  </tr>
                 </tbody>
               </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include 'ffooter.php'; ?>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#dataTabel').DataTable();
        });
      </script>
</body>

</html>
