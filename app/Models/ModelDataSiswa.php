<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDataSiswa extends Model 
{
    public function allData()
    {
        return $this->db->table('tbl_siswa')
        ->orderBy('siswa_nis', 'DESC')
        ->get()->getResultArray();
    }
}