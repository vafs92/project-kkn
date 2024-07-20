<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'RT', 'RW', 'umur', 'pekerjaan', 'jenis_kelamin'];

    // Tambahkan fungsi lain sesuai kebutuhan

}
