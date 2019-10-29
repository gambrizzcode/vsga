
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>Mari Berkenalan Dulu</h2>
    <p class="lead">Mari kita ngobrol dulu sejenak sebelum kita masuk ke inti permasalahan di hidup anda. Ingat, tak kenal maka tak sayang. Pepatah itu selalu kami pegang teguh agar kami bisa menyayangi kalian dengan sepenuh hati. eaaaa.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Waktu Mood Terbaik</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Pagi Hari</h6>
            <small class="text-muted">Setelah Sarapan Pastinya</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Menjelang Siang</h6>
            <small class="text-muted">Asalkan Anda Bawa Camilan</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Mau Tidur Siang Bareng ?</h6>
            <small class="text-muted">Yuk..</small>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Senja Menjelang Malam</h6>
            <small>Ahh.. Indahnya Hidup..</small>
          </div>
        </li>
      </ul>

      <div align="right">
        <a href="index.php" class="btn btn-dark">Home</a>
      </div>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Data Diri</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nama Depan</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Nama Depan Tidak Valid.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Nama Belakang</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Nama Belakang Tidak Valid.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="date">Tanggal Lahir </label>
          <input type="date" class="form-control" id="date">
          <div class="invalid-feedback">
            Tanggal Lahir Tidak Valid.
          </div>
        </div>

        <div class="mb-3">
          <label for="jk">Jenis Kelamin </label>
          <div class="custom-control custom-radio">
            <input id0="L" name="jk" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="L">Laki-Laki</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="P" name="jk" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="P">Perempuan</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Email Tidak Valid.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Alamat</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Alamat Tidak Valid.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Alamat 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Negara</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Pilih...</option>
              <option>Indonesia</option>
            </select>
            <div class="invalid-feedback">
              Negara Tidak Ditemukan.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Provinsi</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Pilih...</option>
              <option>Jakarta</option>
            </select>
            <div class="invalid-feedback">
              Provinsi Tidak Ditemukan.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Kode Pos</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Kode Pos Tidak Ditemukan.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Menyetujui untuk berkenalan dengan kami</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Menyimpan informasi ini untuk kami kelola</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Metode Kenalan</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Intim</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Semi Mesra</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">Biasa Saja</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Nomor Handphone</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Telp / WA</small>
            <div class="invalid-feedback">
              Nomor Handphone Harus Ada.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Nomor Telepon / Fax</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Nomor Handphone Harus Ada.
            </div>
          </div>
        </div>
       
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Lanjutkan Berkenalan</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Prudenciol</p>
  </footer>
</div>
<script src="../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="../bootstrap/js/jquery-slim.min.js"><\/script>')</script><script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/form-validation.js"></script></body>
</html>
