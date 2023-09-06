<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/sidebar-admin'); ?>
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
                                <a href="<?= base_url('admin/profile'); ?>"><i class="icon-user1"></i>Profile</a>
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
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">DETAIL DINAS LUAR <span style="text-transform: uppercase;"><?= $detail_absensi->nama_pegawai; ?></span></h5>

                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="doc-block" style="padding: 13px;">
                                        <div class="doc-icon">
                                            <img src="<?= base_url('assets/template/presensi-abdul'); ?>/img/docs/file.png" alt="Doc Icon">
                                        </div>
                                        <div class="doc-title">File Bukti Dinas Luar</div>
                                        <a href="<?= base_url('admin/download_izin'); ?>/<?= $detail_absensi->bukti_dinas_luar; ?>" class="btn btn-primary" target="_blank">Download</a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <h6 class="text-primary">Keterangan</h6>
                                    <p><?= $detail_absensi->keterangan_dinas_luar; ?></p>
                                    <p>Status Dinas Luar : <?= ($detail_absensi->status_dinas_luar == 0) ? '<span class="badge bg-warning">Pending</span>' : '<span class="badge bg-success">Di Setujui</span>'; ?></p>
                                    <?php if ($detail_absensi->status_dinas_luar == 0) : ?>
                                        <a href="<?= base_url('admin/setujuidinasluar'); ?>/<?= $detail_absensi->kode_absensi; ?>/<?= $detail_absensi->pegawai; ?>" class="btn btn-success stripes-btn mt-3 btn-izinkan">Setujui</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('admin/absen'); ?>/<?= $detail_absensi->kode_absensi; ?>" class="btn btn-danger stripes-btn mt-3"><i class="icon-arrow-left"></i>Kembali</a>
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
    $(".btn-izinkan").click(function(n) {
        n.preventDefault();
        var t = $(this).attr("href");
        Swal.fire({
            title: "Kamu Yakin?",
            text: "Pegawai akan di Setujui!",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Setujui!",
            cancelButtonText: "Tidak"
        }).then(n => {
            n.isConfirmed && (document.location.href = t)
        })
    });
</script>
<?= $this->endSection(); ?>