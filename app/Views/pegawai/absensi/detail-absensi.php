<?= $this->extend('layout/pegawai'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/sidebar-pegawai'); ?>
<?= session()->getFlashdata('pesan'); ?>
<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header starts -->
    <div class="page-header">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                <!-- Search container start -->
                <div class="search-container">

                    <!-- Toggle sidebar start -->
                    <div class="toggle-sidebar" id="toggle-sidebar">
                        <i class="icon-menu"></i>
                    </div>
                    <!-- Toggle sidebar end -->

                    <!-- Mega Menu Start -->
                    <div class="cd-dropdown-wrapper" style="opacity: 0;">
                    </div>
                    <!-- Mega Menu End -->

                    <!-- Search input group start -->
                    <div class="ui fluid category search" style="opacity: 0;">
                    </div>
                    <!-- Search input group end -->

                </div>
                <!-- Search container end -->

            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

                <!-- Header actions start -->
                <ul class="header-actions">
                    <li class="dropdown">
                    </li>
                    <li class="dropdown">
                    </li>
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <span class="avatar">
                                <img src="<?= base_url(); ?>/assets/img/pegawai/<?= $admin->gambar; ?>" alt="User Avatar">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                            <div class="header-profile-actions">
                                <a href="<?= base_url('pegawai/profile'); ?>"><i class="icon-user1"></i>Profile</a>
                                <a href="<?= base_url('auth/logout'); ?>"><i class="icon-log-out1"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Header actions end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Page header ends -->

    <!-- Content wrapper scroll start -->
    <div class="content-wrapper-scroll">
        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- DETAIL ABSEN -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <a href="<?= base_url('pegawai/absensi_admin'); ?>" class="btn btn-danger"><i class="icon-arrow-left"></i>Kembali</a>
                            </div>
                            <h5 class="card-title">DETAIL ABSENSI <?= ($absensi->tgl_absen == date('d-M-Y')) ? 'HARI INI' : $absensi->tgl_absen; ?></h5>
                            <div class="table-responsive">
                                <table id="datatable2" class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Pegawai</th>
                                            <th>Absen Masuk</th>
                                            <th>Absen Pulang</th>
                                            <th>Izin</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($detail_absensi != null) : ?>
                                            <?php
                                            foreach ($detail_absensi as $absen) : ?>
                                                <tr>
                                                    <td>
                                                        <div class="media-box">
                                                            <img src="<?= base_url('assets/img/pegawai'); ?>/<?= $absen->gambar; ?>" class="media-avatar" alt="Customer">
                                                            <div class="media-box-body">
                                                                <a href="#"><?= $absen->nama_pegawai; ?></a>
                                                                <p>NIP: #<?= $absen->nip; ?></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php if ($absen->izin == null) : ?>
                                                            <?php if ($absen->absen_masuk == 0) : ?>
                                                                <span class="badge bg-warning">Belum Absen</span>
                                                            <?php else : ?>
                                                                <?php if ($absen->status_masuk == 1) : ?>
                                                                    <span class="badge bg-danger"><?= date('H : i', $absen->absen_masuk); ?></span>
                                                                <?php else : ?>
                                                                    <?= date('H : i', $absen->absen_masuk); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        <?php else : ?>
                                                            IZIN
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($absen->izin == null) : ?>
                                                            <?php if ($absen->absen_keluar == 0) : ?>
                                                                <span class="badge bg-warning">Belum Absen</span>
                                                            <?php else : ?>
                                                                <?= date('H : i', $absen->absen_keluar); ?>
                                                            <?php endif; ?>
                                                        <?php else : ?>
                                                            IZIN
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($absen->izin == null) : ?>
                                                            <span class="badge bg-primary">Tidak</span>
                                                        <?php else : ?>
                                                            <?php if ($absen->status_izin == 0) : ?>
                                                                <span class="badge bg-warning">Pending</span>
                                                            <?php else : ?>
                                                                <span class="badge bg-success">Di Izinkan</span>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="actions">
                                                            <?php if ($absen->izin == null) : ?>
                                                                <a href="<?= base_url('pegawai/absen_pegawai'); ?>/<?= $absen->kode_absensi; ?>/<?= $absen->pegawai; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                    <i class="icon-external-link text-info"></i>
                                                                </a>
                                                            <?php else : ?>
                                                                <a href="<?= base_url('pegawai/izin_pegawai'); ?>/<?= $absen->kode_absensi; ?>/<?= $absen->pegawai; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                    <i class="icon-external-link text-info"></i>
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- end DETAIL ABSEN -->

        </div>
        <!-- Content wrapper end -->

        <!-- App Footer start -->
        <div class="app-footer">© Presensi Pegawai By Keyrie Eleison</div>
        <!-- App footer end -->

    </div>
    <!-- Content wrapper scroll end -->

</div>
<!-- *************
				************ Main container end *************
			************* -->
<script>
    $("#datatable2").DataTable({
        ordering: !0,
        lengthMenu: [
            [-1, 5, 10, 25, 50],
            ["All", 5, 10, 25, 50]
        ],
        dom: "Bfrtip",
        buttons: ["excelHtml5", "csvHtml5", "pdfHtml5", "print"]
    });
</script>
<?= $this->endSection(); ?>