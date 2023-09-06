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
            <!-- ROW -->
            <div class="row">
                <?php if ($absensi->absen_masuk == null) : ?>
                    <h4>Absen Masuk</h4>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <?= session()->getFlashdata('jarak'); ?>
                                <center>
                                    <div id="my_camera"></div>
                                </center>
                                <button type="button" class="btn btn-success mt-2" onclick="take_picture();">Ambil Gambar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Hasil Gambar</h5>
                                <form class="myForm text-center" action="<?= base_url('pegawai/absen_masuk'); ?>" method="post" enctype="multipart/form-data">
                                    <p>Jarak Sekarang <br><strong><span id="jarak-sekarang"></span></strong> Meter Dari Kantor</p>
                                    <input type="hidden" name="latitude">
                                    <input type="hidden" name="longitude">
                                    <input type="hidden" name="image_tag" class="image-tag">
                                    <input type="hidden" name="kode_absensi" value="<?= $absensi->kode_absensi; ?>">
                                    <div id="result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($absensi->absen_masuk != null) : ?>
                    <h4>Absen Pulang</h4>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if (strtotime(date('H:i', time())) >= strtotime($pengaturan->jam_keluar)) : ?>
                                    <?= session()->getFlashdata('jarak'); ?>
                                    <center>
                                        <div id="my_camera"></div>
                                    </center>
                                    <button type="button" class="btn btn-success mt-2" onclick="take_picture();">Ambil Gambar</button>
                                <?php else : ?>
                                    <div class="alert alert-danger">Belum saatnya absen pulang</div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Hasil Gambar</h5>
                                <form class="myForm text-center" action="<?= base_url('pegawai/absen_pulang'); ?>" method="post" enctype="multipart/form-data">
                                    <p>Jarak Sekarang <br><strong><span id="jarak-sekarang"></span></strong> Meter Dari Kantor</p>
                                    <input type="hidden" name="latitude">
                                    <input type="hidden" name="longitude">
                                    <input type="hidden" name="image_tag" class="image-tag">
                                    <input type="hidden" name="kode_absensi" value="<?= $absensi->kode_absensi; ?>">
                                    <div id="result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- ROW -->

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
    function distance(t, a, h, M, n) {
        if (t == h && a == M) return 0;
        t = Math.PI * t / 180, h = Math.PI * h / 180, M = a - M, M = Math.PI * M / 180, M = Math.sin(t) * Math.sin(h) + Math.cos(t) * Math.cos(h) * Math.cos(M);
        return 1 < M && (M = 1), M = 60 * (M = 180 * (M = Math.acos(M)) / Math.PI) * 1.1515, "K" == n && (M *= 1.609344), "N" == n && (M *= .8684), M
    }
    <?php if ($absensi->absen_masuk == null) : ?>

        function take_picture() {
            Webcam.snap(function(t) {
                $(".image-tag").val(t);
                t = '<img src="' + t + '"/><br><button type="submit" class="btn btn-primary stripes-btn mt-2">Kirim Absen</button>';
                $("#result").html(t)
            })
        }

        function getLocation() {
            navigator.geolocation && navigator.geolocation.getCurrentPosition(showPosition, showError)
        }

        function showPosition(t) {
            document.querySelector('.myForm input[name="latitude"]').value = t.coords.latitude, document.querySelector('.myForm input[name="longitude"]').value = t.coords.longitude
        }

        function showError(t) {
            t.code === t.PERMISSION_DENIED && Swal.fire("Error!", "Kamu harus mengizinkan Akses Lokasi!", "error")
        }
        Webcam.set({
            width: 220,
            height: 300,
            flip_horiz: !0,
            image_format: "png",
            png_quality: 100
        }), Webcam.attach("#my_camera"), setInterval(() => {
            getLocation()
        }, 1e3), setInterval(() => {
            var t = $("input[name=latitude]").val(),
                e = $("input[name=longitude]").val(),
                e = 1e3 * distance("<?= $pengaturan->latitude ?>", "<?= $pengaturan->longitude ?>", t, e, "K"),
                e = Math.round(e);
            $("#jarak-sekarang").html(e)
        }, 1e3);
    <?php endif; ?>

    <?php if ($absensi->absen_masuk != null) : ?>
        <?php if (strtotime(date('H:i', time())) >= strtotime($pengaturan->jam_keluar)) : ?>

            function take_picture() {
                Webcam.snap(function(t) {
                    $(".image-tag").val(t);
                    t = '<img src="' + t + '"/><br><button type="submit" class="btn btn-primary stripes-btn mt-2">Kirim Absen</button>';
                    $("#result").html(t)
                })
            }

            function getLocation() {
                navigator.geolocation && navigator.geolocation.getCurrentPosition(showPosition, showError)
            }

            function showPosition(t) {
                document.querySelector('.myForm input[name="latitude"]').value = t.coords.latitude, document.querySelector('.myForm input[name="longitude"]').value = t.coords.longitude
            }

            function showError(t) {
                t.code === t.PERMISSION_DENIED && Swal.fire("Error!", "Kamu harus mengizinkan Akses Lokasi!", "error")
            }
            Webcam.set({
                width: 220,
                height: 300,
                flip_horiz: !0,
                image_format: "png",
                png_quality: 100
            }), Webcam.attach("#my_camera"), setInterval(() => {
                getLocation()
            }, 1e3), setInterval(() => {
                var t = $("input[name=latitude]").val(),
                    e = $("input[name=longitude]").val(),
                    e = 1e3 * distance("<?= $pengaturan->latitude ?>", "<?= $pengaturan->longitude ?>", t, e, "K"),
                    e = Math.round(e);
                $("#jarak-sekarang").html(e)
            }, 1e3);
        <?php endif; ?>
    <?php endif; ?>
</script>

<?= $this->endSection(); ?>