<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaturanModel extends Model
{
    protected $table            = 'pengaturan_absen';
    protected $primaryKey       = 'id_pengaturan_absen';
    protected $protectFields    = true;
    protected $allowedFields    = ['jam_masuk', 'jam_keluar', 'latitude', 'longitude', 'batas_jarak'];
}
