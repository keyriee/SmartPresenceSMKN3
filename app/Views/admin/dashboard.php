<?= $this->extend('layout/admin'); ?>
<?= $this->section('content'); ?>
<?= $this->include('layout/sidebar-admin'); ?>
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

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12">

                    <!-- Dashboard header start -->
                    <div class="dashboard-header">
                        <div class="dashboard-header-content">

                            <!-- Top User Name -->
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn"><i class="icon-user"></i> <span>Admin</span></a>
                            </div>

                            <!-- Welcome Title -->
                            <div class="welcome-title">
                                <h1>Welcome to <span>SMKN 3 SAMPIT</span>
                                </h1>
                            </div>

                            <!-- Sales Tiles COntainer -->
                            <div class="sales-tile-container">
                                <div class="sales-tile">
                                    <h1>1</h1>
                                    <h6>Admin</h6>
                                </div>
                                <div class="sales-tile">
                                    <h1><?= count($pegawai); ?></h1>
                                    <h6>Pegawai</h6>
                                </div>
                                <div class="sales-tile">
                                    <h1><?= count($jabatan); ?></h1>
                                    <h6>Jabatan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard header end -->

                </div>
            </div>
            <!-- Row end -->

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