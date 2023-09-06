<?php

use App\Models\JabatanModel;
use App\Models\PegawaiModel;
use App\Models\PengaturanModel;
use App\Models\AbsenModel;
use App\Models\AbsenDetailModel;

function absen_hari_ini()
{
    date_default_timezone_set('Asia/Jakarta');
    $PegawaiModel = new PegawaiModel();
    $AbsenModel = new AbsenModel();
    $AbsenDetailModel = new AbsenDetailModel();
    $kode_absen = random_string('alnum', 10);

    // CEK APAKAH ABSEN HARI INI SUDAH DIBUAT
    $absensi = $AbsenModel->getByTanggal(date('d-M-Y', time()));
    if ($absensi == null) {

        $pegawai = $PegawaiModel->asObject()->findAll();
        $kode_absen = random_string('alnum', 10);

        $data_absen = [
            'kode_absensi' => $kode_absen,
            'jumlah_pegawai' => count($pegawai),
            'jumlah_absen_masuk' => null,
            'jumlah_absen_keluar' => null,
            'jumlah_izin' => null,
            'total_pegawai' => null,
            'tgl_absen' => date('d-M-Y', time())
        ];

        $detail_absen = [];

        foreach ($pegawai as $p) {
            array_push($detail_absen, [
                'kode_absensi' => $kode_absen,
                'pegawai' => $p->id_pegawai
            ]);
        }

        $AbsenModel->save($data_absen);
        $AbsenDetailModel->insertBatch($detail_absen);
    }
}
