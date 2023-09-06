<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">

    <!-- Sidebar content start -->
    <div class="sidebar-tabs">

        <!-- Tabs nav start -->
        <div class="nav" role="tablist" aria-orientation="vertical">
            <a href="#" class="logo">
                <img src="<?= base_url(); ?>/assets/template/presensi-abdul/img/logo.jpg" alt="Uni Pro Admin">
            </a>
            <a class="nav-link <?= $menu['tab_home']; ?>" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">
                <i class="icon-home2"></i>
                <span class="nav-link-text">Dashboards</span>
            </a>
        </div>
        <!-- Tabs nav end -->

        <!-- Tabs content start -->
        <div class="tab-content">

            <!-- Home tab -->
            <div class="tab-pane fade <?= $menu['tab_home']; ?>" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    <!-- Judul Halaman -->
                    <?= $judul_sidebar; ?>
                </div>
                <!-- Tab content header end -->
                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul class="tile-menu">
                            <li>
                                <a href="<?= base_url('pegawai'); ?>" class="<?= $menu['dashboard']; ?>">
                                    <i class="icon-laptop"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('pegawai/absensi'); ?>" class="<?= $menu['absensi']; ?>">
                                    <i class="icon-date_range"></i> Data Absen
                                </a>
                            </li>
                            <?php if (session()->get('jabatan') == 1) : ?>
                            <li>
                                <a href="<?= base_url('pegawai/absensi_admin'); ?>" class="<?= $menu['absensi_admin']; ?>">
                                    <i class="icon-date_range"></i> Data Absen <br> <span class="text-center">Admin</span>
                                </a>
                            </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->
                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile blue">
                        <i class="icon-user1"></i> Pegawai
                    </div>
                </div>
                <!-- Sidebar actions ends -->
            </div>
        </div>
        <!-- Tabs content end -->
    </div>
    <!-- Sidebar content end -->

</nav>
<!-- Sidebar wrapper end -->