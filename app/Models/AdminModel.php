<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'id_admin';
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_admin', 'email', 'password', 'gambar', 'role'];

    public function getAdminByEmail($email)
    {
        return $this
            ->where('email', $email)
            ->get()->getRowObject();
    }
}
