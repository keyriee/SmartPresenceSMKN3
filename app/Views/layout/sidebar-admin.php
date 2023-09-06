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
            <a class="nav-link <?= $menu['tab_master']; ?>" id="master-tab" data-bs-toggle="tab" href="#tab-master" role="tab" aria-controls="tab-master" aria-selected="true">
                <i class="icon-database"></i>
                <span class="nav-link-text">Master Data</span>
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
                                <a href="<?= base_url('admin'); ?>" class="<?= $menu['dashboard']; ?>">
                                    <i class="icon-laptop"></i> Dashboard
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->
                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile blue">
                        <i class="icon-user"></i> Admin
                    </div>
                </div>
                <!-- Sidebar actions ends -->
            </div>

            <!-- Master Data Tab -->
            <div class="tab-pane fade <?= $menu['tab_master']; ?>" id="tab-master" role="tabpanel" aria-labelledby="master-tab">
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
                                <a href="<?= base_url('admin/pegawai'); ?>" class="<?= $menu['pegawai']; ?>">
                                    <i class="icon-users"></i> Pegawai
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/jabatan'); ?>" class="<?= $menu['jabatan']; ?>">
                                    <i class="icon-briefcase"></i> Jabatan
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/absensi'); ?>" class="<?= $menu['absensi']; ?>">
                                    <i class="icon-date_range"></i> Data Absen
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/pengaturan_absen'); ?>" class="<?= $menu['pengaturan_absen']; ?>">
                                    <i class="icon-settings1"></i> Atur Absen
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->
                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile blue">
                        <i class="icon-user"></i> Admin
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