<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuTamuModel extends Model
{
    protected $table = 'bukutamu';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'nama', 'pesan', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
}