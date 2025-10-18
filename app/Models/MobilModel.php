<?php

namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends Model
{
    protected $table            = 'list_mobil';
    protected $primaryKey       = 'id_mobil';
    protected $allowedFields    = ['nama_mobil', 'merk_mobil', 'tahun_mobil', 'jenis_mobil'];
}