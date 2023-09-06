<?php

use App\Models\AdminModel;

$adminModel = new AdminModel();
$admin = $adminModel->asObject()->first();


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Aplikasi Presensi Premium By Keyrie Eleison">
  <meta name="author" content="Keyrie Eleison">
  <link rel="shortcut icon" href="<?= base_url(); ?>/assets/template/presensi-abdul/img/logo.jpg">

  <!-- Title -->
  <title><?= $judul_halaman; ?></title>


  <!-- *************
			************ Common Css Files *************
		************ -->
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/presensi-abdul/css/bootstrap.min.css">

  <!-- Icomoon Font Icons css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/presensi-abdul/fonts/style.css">

  <!-- Main css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/presensi-abdul/css/main.css">


  <!-- *************
			************ Vendor Css Files *************
		************ -->

  <!-- Required jQuery first, then Bootstrap Bundle JS -->
  <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/modernizr.js"></script>
  <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/moment.js"></script>
  <script src="<?= base_url(); ?>/assets/template/presensi-abdul/vendor/swal/sweetalert2.all.js"></script>

  <!-- PLUGIN -->
  <?= $plugin; ?>

</head>

<body>

  <!-- Loading wrapper start -->
  <div id="loading-wrapper">
    <div class="spinner-border"></div>
    Loading...
  </div>
  <!-- Loading wrapper end -->

  <!-- Page wrapper start -->
  <div class="page-wrapper">
    <?= $this->renderSection('content'); ?>
  </div>
  <!-- Page wrapper end -->

  <!-- *************
			************ Required JavaScript Files *************
		************* -->
  <!-- *************
			************ Vendor Js Files *************
		************* -->

  <!-- Slimscroll JS -->
  <script src="<?= base_url(); ?>/assets/template/presensi-abdul/vendor/slimscroll/slimscroll.min.js"></script>
  <script src="<?= base_url(); ?>/assets/template/presensi-abdul/vendor/slimscroll/custom-scrollbar.js"></script>

  <!-- Main Js Required -->
  <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/main.js"></script>

  <script>
    $(document).ready(function() {
      $('.btn-hapus').click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
          title: 'Kamu Yakin?',
          text: "data yg di hapus tidak dapat kembali!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!',
          cancelButtonText: 'Tidak'
        }).then((result) => {
          if (result.isConfirmed) {

            document.location.href = href;

          }
        })

      })
    });
  </script>

</body>

</html>