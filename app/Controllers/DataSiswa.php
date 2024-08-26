<?php

namespace App\Controllers;

use App\Models\ModelDataSiswa;

class DataSiswa extends BaseController
{
    public function __construct()
    {
        $this->ModelDataSiswa = new ModelDataSiswa();
    }

    public function index(): string
    {
        $data= [
            'title'         => 'Data Siswa',
            'data_siswa'    => $this->ModelDataSiswa->allData(),
            'isi'           => 'teknisi/v_datasiswa'
        ];
        return view('layout/v_wrapper', $data);
    }
}
