<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenDetailModel extends Model
{
    protected $table            = 'detail_absensi';
    protected $primaryKey       = 'id_detail_absensi';
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_absensi', 'pegawai', 'absen_masuk', 'status_masuk', 'latitude_masuk', 'longitude_masuk', 'absen_keluar', 'status_keluar', 'latitude_keluar', 'longitude_keluar', 'izin', 'status_izin', 'alasan', 'sakit', 'status_sakit', 'alasan_sakit', 'dinas_luar', 'status_dinas_luar', 'keterangan_dinas_luar', 'bukti_izin', 'bukti_sakit', 'bukti_dinas_luar', 'bukti_masuk', 'bukti_keluar'];

    public function getAllByKodeAbsen($kode_absen)
    {
        return $this
            ->join('pegawai', 'pegawai.id_pegawai=detail_absensi.pegawai')
            ->where('detail_absensi.kode_absensi', $kode_absen)
            ->get()->getResultObject();
    }

    public function riwayatAbsen($id_pegawai)
    {
        return $this
            ->join('pegawai', 'pegawai.id_pegawai=detail_absensi.pegawai')
            ->join('absensi', 'absensi.kode_absensi=detail_absensi.kode_absensi')
            ->where('detail_absensi.pegawai', $id_pegawai)
            ->orderBy('detail_absensi.id_detail_absensi', 'DESC')
            ->get()->getResultObject();
    }

    public function riwayatAbsenNow($id_pegawai)
    {
        return $this
            ->join('pegawai', 'pegawai.id_pegawai=detail_absensi.pegawai')
            ->join('absensi', 'absensi.kode_absensi=detail_absensi.kode_absensi')
            ->where('detail_absensi.pegawai', $id_pegawai)
            ->where('STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y") >=', date('Y-m-d'))
            ->orderBy('detail_absensi.id_detail_absensi', 'DESC')
            ->get()->getResultObject();
    }

    public function riwayatAbsenFilter($id_pegawai, $tgl1, $tgl2)
    {
        return  $this
            ->join('pegawai', 'pegawai.id_pegawai=detail_absensi.pegawai')
            ->join('absensi', 'absensi.kode_absensi=detail_absensi.kode_absensi')
            ->where('detail_absensi.pegawai', $id_pegawai)
            ->where('STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y") >=', date('Y-m-d', strtotime($tgl1)))
            ->where('STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y") <=', date('Y-m-d', strtotime($tgl2)))
            // ->where('absensi.tgl_absen >=', date('d-M-Y', strtotime($tgl1)))
            // ->where('absensi.tgl_absen <=', date('d-M-Y', strtotime($tgl2)))
            ->orderBy('detail_absensi.id_detail_absensi', 'DESC')
            ->get()->getResultObject();
        // echo $this->getLastQuery();
        // var_dump($this->AbsenModel->getLastQuery()); die;
    }

    public function getByKodeAndIdPegawai($kode_absen, $id_pegawai)
    {
        return $this
            ->join('pegawai', 'pegawai.id_pegawai=detail_absensi.pegawai')
            ->join('absensi', 'absensi.kode_absensi=detail_absensi.kode_absensi')
            ->where('detail_absensi.kode_absensi', $kode_absen)
            ->where('detail_absensi.pegawai', $id_pegawai)
            ->get()->getRowObject();
    }

    public function getAllByMonth()
    {
        return $this
            ->select('detail_absensi.pegawai AS id, pegawai.nama_pegawai, pegawai.nip, pegawai.gambar, COUNT(detail_absensi.absen_keluar) AS hadir, COUNT(detail_absensi.izin) AS izin, COUNT(detail_absensi.sakit) AS sakit, COUNT(detail_absensi.dinas_luar) AS dinas_luar')
            ->join('pegawai', 'pegawai.id_pegawai=detail_absensi.pegawai')
            ->join('absensi', 'absensi.kode_absensi=detail_absensi.kode_absensi')
            ->where('MONTH(STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y"))', intval(date('m')))
            ->where('YEAR(STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y"))', intval(date('Y')))
            ->where('STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y") <>', date('Y-m-d'))
            ->groupBy('pegawai.nama_pegawai, pegawai.nip, pegawai.gambar, detail_absensi.pegawai')
            ->orderBy('pegawai.nama_pegawai', 'ASC')
            ->get()->getResultObject();
    }

    public function getAllByMonthFilter($bulan, $tahun)
    {
        return $this
            ->select('detail_absensi.pegawai AS id, pegawai.nama_pegawai, pegawai.nip, pegawai.gambar, COUNT(detail_absensi.absen_keluar) AS hadir, COUNT(detail_absensi.izin) AS izin, COUNT(detail_absensi.sakit) AS sakit, COUNT(detail_absensi.dinas_luar) AS dinas_luar')
            ->join('pegawai', 'pegawai.id_pegawai=detail_absensi.pegawai')
            ->join('absensi', 'absensi.kode_absensi=detail_absensi.kode_absensi')
            ->where('MONTH(STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y"))', $bulan)
            ->where('YEAR(STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y"))', $tahun)
            ->where('STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y") <>', date('Y-m-d'))
            ->groupBy('pegawai.nama_pegawai, pegawai.nip, pegawai.gambar, detail_absensi.pegawai')
            ->orderBy('pegawai.nama_pegawai', 'ASC')
            ->get()->getResultObject();
    }

    public function getAllByMonthByPegawai($id_pegawai, $bulan, $tahun)
    {
        return  $this
            ->join('pegawai', 'pegawai.id_pegawai=detail_absensi.pegawai')
            ->join('absensi', 'absensi.kode_absensi=detail_absensi.kode_absensi')
            ->where('MONTH(STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y"))', $bulan)
            ->where('YEAR(STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y"))', $tahun)
            ->where('STR_TO_DATE(absensi.tgl_absen, "%d-%b-%Y") <>', date('Y-m-d'))
            ->where('detail_absensi.pegawai', $id_pegawai)
            ->orderBy('absensi.tgl_absen', 'ASC')
            ->get()->getResultObject();
    }

    // public function jumlah_masuk($kode_absen)
    // {
    //     return $this
    //         ->where('kode_absensi', $kode_absen)
    //         ->where('absen_masuk !=', null)
    //         ->get()->getResultObject();
    // }

    // public function jumlah_keluar($kode_absen)
    // {
    //     return $this
    //         ->where('kode_absensi', $kode_absen)
    //         ->where('absen_keluar !=', null)
    //         ->get()->getResultObject();
    // }

    // public function jumlah_keluar($kode_absen)
    // {
    //     return $this
    //         ->where('kode_absensi', $kode_absen)
    //         ->where('absen_keluar !=', null)
    //         ->get()->getResultObject();
    // }
}
