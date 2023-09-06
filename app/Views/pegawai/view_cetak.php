<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/presensi-abdul/css/bootstrap.min.css">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/presensi-abdul/fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/template/presensi-abdul/css/main.css">

    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/modernizr.js"></script>
    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/moment.js"></script>
    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/vendor/swal/sweetalert2.all.js"></script>

    <style>
        @media print {
            hr {
                border-top: 2px solid black;
            }
        }
    </style>
</head>

<body>
    <img src="<?= base_url(); ?>/assets/img/pegawai/logo_cetak.png" alt="" width="180" height="180" style="float: left;">
    <div class="row">
        <center><label for="">PEMERINTAH PROVINSI KALIMANTAN TENGAH</label></center>
        <center><label for="">DINAS PENDIDIKAN</label></center>
        <center><label for=""><strong>SEKOLAH MENENGAH KEJURUAN (SMK) NEGERI 3 SAMPIT</strong></label></center>
        <center><label for="" style="font-size: 10px">(Bidang Keahlian : Seni Kerajinan dan Pariwisata, Teknologi Informasi dan Komunikasi,Bisnis dan Manajemen, Teknologi dan Rekayasa) 3. Teknik Komputer dan Informatika 4. Keuangan 5. Teknik Otomotif;Program Keahlian : 1. Tata Boga; 2.Tata Busana <br> Terakreditasi "A" <br> Alamat : Jalan Ir.H. Juanda, Desa Telaga Baru, Kec. MB Ketapang, Kab. Kotim Kode Pos: 74325 <br> Website : smkn3-spt.sch.id E-mail : smk3_sampit@rocketmail.com</label></center>
        <!-- <center><label for="" style="font-size: 10px">Alamat : Jalan Ir.H. Juanda, Desa Telaga Baru, Kec. MB Ketapang, Kab. Kotim Kode Pos: 74325</label></center> -->
        <!-- <center><label for="" style="font-size: 10px">Website : smkn3-spt.sch.id E-mail : smk3_sampit@rocketmail.com</label></center> -->
    </div>
    <br>
    <hr width="100%" size="5%" color="black">

    <div class="row">
        <div class="col-md-6">Dicetak Oleh : <strong><?= $pegawai->nama_pegawai ?></strong> <span style="float:right;">Jabatan : <strong><?= $pegawai->nama_jabatan ?></strong></span></div>
    </div>

    <br>

    <table class="table table-riwayat text-nowrap" id="table-riwayat-absen">
        <thead>
            <tr>
                <td>Tanggal</td>
                <td>Jam Masuk</td>
                <td>Jam Keluar</td>
                <td>Scan Masuk</td>
                <td>Scan Keluar</td>
                <td>Lembur</td>
                <td>Izin</td>
                <td>Sakit</td>
                <td>Dinas Luar</td>
            </tr>
        </thead>
        <tbody>
            <?php if ($riwayat_absensi != null) : ?>
                <?php foreach ($riwayat_absensi as $ra) : ?>
                    <?php if ($ra->tgl_absen != date('d-M-Y', time())) : ?>
                        <tr class="text-nowrap">
                            <td class="text-nowrap">
                                <?= $ra->tgl_absen; ?>
                            </td>
                            <td class="text-nowrap"><?= $set_absen->jam_masuk ?>
                            </td>
                            <td class="text-nowrap">
                                <?= $set_absen->jam_keluar ?>
                            </td>
                            <td class="text-nowrap">
                                <?php if ($ra->izin == null && $ra->sakit == null && $ra->dinas_luar == null) : ?>
                                    <?php if ($ra->absen_masuk == 0) : ?>
                                        Belum Absen
                                    <?php else : ?>
                                        <?php if ($ra->status_masuk == 0) : ?>
                                            <?= date('H : i', $ra->absen_masuk); ?>
                                        <?php else : ?>
                                            <?= date('H : i', $ra->absen_masuk); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php elseif ($ra->izin != null) : ?>
                                    IZIN
                                <?php elseif ($ra->sakit != null) : ?>
                                    SAKIT
                                <?php elseif ($ra->dinas_luar != null) : ?>
                                    DINAS LUAR
                                <?php endif; ?>
                            </td>
                            <td class="text-nowrap">
                                <?php if ($ra->izin == null && $ra->sakit == null && $ra->dinas_luar == null) : ?>
                                    <?php if ($ra->absen_keluar == 0) : ?>
                                        Belum Absen
                                    <?php else : ?>
                                        <?= date('H : i', $ra->absen_keluar); ?>
                                    <?php endif; ?>
                                <?php elseif ($ra->izin != null) : ?>
                                    IZIN
                                <?php elseif ($ra->sakit != null) : ?>
                                    SAKIT
                                <?php elseif ($ra->dinas_luar != null) : ?>
                                    DINAS LUAR
                                <?php endif; ?>
                            </td>
                            <td class="text-nowrap">
                                <?php
                                // Menghitung selisih
                                $timeA = date('H:i', $ra->absen_keluar);
                                $selisih = strtotime($timeA) - strtotime($set_absen->jam_keluar);

                                // Mengubah selisih menjadi format yang lebih mudah dibaca
                                $jam = floor($selisih / (60 * 60));
                                $menit = floor(($selisih % (60 * 60)) / 60);

                                if ($jam < 10) {
                                    $jam = '0' . $jam;
                                }

                                if ($menit < 10) {
                                    $menit = '0' . $menit;
                                }
                                ?>
                                <?php if ($ra->izin != null) : ?>
                                    IZIN
                                <?php elseif ($ra->sakit != null) : ?>
                                    SAKIT
                                <?php elseif ($ra->dinas_luar != null) : ?>
                                    DINAS LUAR
                                <?php elseif ($ra->absen_keluar == 0 || $ra->absen_keluar == null) : ?>
                                    Belum Absen
                                <?php else : ?>
                                    <?= $jam . ' : ' . $menit ?>
                                <?php endif; ?>
                            </td>
                            <td class="text-nowrap">
                                <?php if ($ra->izin == 0) : ?>
                                    Tidak Izin
                                <?php else : ?>
                                    <?php if ($ra->status_izin == 0) : ?>
                                        Tunggu Persetujuan
                                    <?php else : ?>
                                        Di Izinkan
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>
                            <td class="text-nowrap">
                                <?php if ($ra->sakit == 0) : ?>
                                    Tidak Sakit
                                <?php else : ?>
                                    <?php if ($ra->status_sakit == 0) : ?>
                                        Tunggu Persetujuan
                                    <?php else : ?>
                                        Di Setujui
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>
                            <td class="text-nowrap">
                                <?php if ($ra->dinas_luar == 0) : ?>
                                    Tidak Dinas Luar
                                <?php else : ?>
                                    <?php if ($ra->status_dinas_luar == 0) : ?>
                                        Tunggu Persetujuan
                                    <?php else : ?>
                                        Di Setujui
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>




    <!-- Slimscroll JS -->
    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/vendor/slimscroll/slimscroll.min.js"></script>
    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Main Js Required -->
    <script src="<?= base_url(); ?>/assets/template/presensi-abdul/js/main.js"></script>

    <script>
        window.print();
    </script>
</body>

</html>