<?php

namespace App\Controllers;

class Teknisi extends BaseController
{
    public function index(): string
    {
        $data= [
            'title' => 'Teknisi',
            'isi' => 'v_teknisi'
        ];
        return view('layout/v_wrapper', $data);
    }
}
