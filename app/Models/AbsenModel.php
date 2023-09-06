<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenModel extends Model
{
    protected $table            = 'absensi';
    protected $primaryKey       = 'id_absensi';
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_absensi', 'jumlah_pegawai', 'jumlah_absen_masuk', 'jumlah_absen_keluar', 'jumlah_izin', 'total_pegawai', 'tgl_absen'];

    public function getByTanggal($tgl_absen)
    {
        return $this
            ->where('tgl_absen', $tgl_absen)
            ->get()->getRowObject();
    }
    public function getByKode($kode_absensi)
    {
        return $this
            ->where('kode_absensi', $kode_absensi)
            ->get()->getRowObject();
    }
}
