<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table            = 'pegawai';
    protected $primaryKey       = 'id_pegawai';
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pegawai', 'nip', 'nama_pegawai', 'jenis_kelamin', 'jabatan', 'email', 'password', 'gambar', 'is_active', 'role', 'tgl_update'];

    public function getAll()
    {
        return $this
            ->join('jabatan', 'jabatan.id_jabatan=pegawai.jabatan')
            ->get()->getResultObject();
    }

    public function getByNip($nip)
    {
        return $this
            ->join('jabatan', 'jabatan.id_jabatan=pegawai.jabatan')
            ->where('pegawai.nip', $nip)
            ->get()->getRowObject();
    }

    public function getByEmail($email)
    {
        return $this
            ->join('jabatan', 'jabatan.id_jabatan=pegawai.jabatan')
            ->where('pegawai.email', $email)
            ->get()->getRowObject();
    }

    public function getByID($id)
    {
        return $this
            ->join('jabatan', 'jabatan.id_jabatan=pegawai.jabatan')
            ->where('pegawai.id_pegawai', $id)
            ->get()->getRowObject();
    }
}
