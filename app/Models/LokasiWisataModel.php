<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiWisataModel extends Model
{
    protected $table = 'lokasi_wisata';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'deskripsi', 'alamat', 'gambar'];
}
