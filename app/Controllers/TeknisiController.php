<?php

namespace App\Controllers;

class TeknisiController extends BaseController
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
