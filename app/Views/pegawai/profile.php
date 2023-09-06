<?php

use App\Models\AbsenDetailModel;

$AbsenDetailModel = new AbsenDetailModel();
?>
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
                                <img src="<?= base_url(); ?>/assets/img/pegawai/<?= $pegawai->gambar; ?>" alt="User Avatar">
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

            <div class="row gutters">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header-lg">
                            <h4>Account Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row gutters">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <img src="<?= base_url(); ?>/assets/img/pegawai/<?= $pegawai->gambar; ?>" class="img-fluid change-img-avatar" alt="Image">
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                            <form action="<?= base_url('pegawai/profile_'); ?>" method="post" enctype="multipart/form-data">
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input type="text" name="nama" class="form-control" value="<?= $pegawai->nama_pegawai; ?>" required>
                                                    <div class="field-placeholder">Nama</div>
                                                </div>
                                                <!-- Field wrapper end -->
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input type="hidden" class="form-control" name="gambar_lama" value="<?= $pegawai->gambar; ?>">
                                                    <input type="file" class="form-control" name="gambar">
                                                    <div class="field-placeholder">Profile</div>
                                                </div>
                                                <!-- Field wrapper end -->

                                                <button class="btn btn-primary mb-3">Save Settings</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header-lg">
                            <h4>Password Settings</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('pegawai/password'); ?>" method="post">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="password" name="current_password" class="form-control" required>
                                    <div class="field-placeholder">Password</div>
                                </div>
                                <!-- Field wrapper end -->
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input type="password" name="new_password" class="form-control" required>
                                    <div class="field-placeholder">New Password</div>
                                </div>
                                <!-- Field wrapper end -->

                                <button class="btn btn-primary mb-3">Save Settings</button>
                            </form>
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