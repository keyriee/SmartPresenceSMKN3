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

            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <h5 class="m-0">Setting Absen</h5>

                    <!-- banner start -->
                    <div class="consulting-banner">
                        <div class="consulting-banner-bg"></div>
                        <div class="consulting-body">
                            <div class="consulting-content">
                                <h4>Pengaturan Jadwal Absensi</h4>
                                <p>Atur Jadwal Jam Masuk & Jam Keluar<br />Atur Lokasi Kantor.</p>
                            </div>
                        </div>
                    </div>
                    <!-- banner end -->

                </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('admin/setting_absen_'); ?>" method="post">
                                <div class="row gutters">

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="hidden" name="id_pengaturan_absen" value="<?= $pengaturan->id_pengaturan_absen; ?>">
                                            <input class="form-control" type="time" name="jam_masuk" value="<?= $pengaturan->jam_masuk; ?>">
                                            <div class="field-placeholder">Jam Masuk <span class="text-danger">*</span></div>
                                            <div class="form-text">
                                                Jam Masuk Kerja
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="time" name="jam_keluar" value="<?= $pengaturan->jam_keluar; ?>">
                                            <div class="field-placeholder">Jam Keluar <span class="text-danger">*</span></div>
                                            <div class="form-text">
                                                Jam Keluar / Pulang Kerja
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="latitude_longitude" value="<?= $pengaturan->latitude; ?>, <?= $pengaturan->longitude; ?>">
                                            <div class="field-placeholder">Garis Lintang-Bujur <span class="text-danger">*</span></div>
                                            <div class="form-text">
                                                Latitude Longitude / Garis Lintang - Bujur
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="batas_jarak" value="<?= $pengaturan->batas_jarak; ?>">
                                            <div class="field-placeholder">Batas Jarak <span class="text-danger">*</span></div>
                                            <div class="form-text">
                                                jarak tersimpan dalam satuan Meter
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Row end -->

            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card" style="height: 400px;">
                        <div class="card-body">
                            <iframe style="width: 100%; height: 100%;" src="https://www.google.com/maps?q=<?= $pengaturan->latitude; ?>,<?= $pengaturan->longitude; ?>&hl=es;z=14&output=embed"></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-info stripes-btn" style="width: 100%;"> Jam Masuk <?= $pengaturan->jam_masuk; ?></button>
                            <button type="button" class="btn btn-info stripes-btn mt-3" style="width: 100%;"> Jam Keluar <?= $pengaturan->jam_keluar; ?></button>
                        </div>
                    </div>
                </div>
            </div>


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
<?= $this->endSection(); ?>