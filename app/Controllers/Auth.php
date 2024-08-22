<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth=new ModelAuth;
    }

    public function index(): string
    {
        $data= [
            'title' => 'Login',
            'isi' => 'v_login'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function cek_login()
    {

        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'reruired'=> '{field} Wajib Di isi']
            ],
            'Akses Sebagai' => [
                'label' => 'Hak Akses',
                'rules' => 'required',
                'errors' => [
                    'reruired'=> '{field} Wajib Di isi'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'reruired'=> '{field} Wajib Di isi'
                ]
            ],
        ])) {
            //jika valid
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth'));
        }

        $hak_akses = $this->request->getPost('Akses Sebagai');

        if ($hak_akses == 1) {
            echo 'Teknisi';
        } elseif ($hak_akses == 2) {
            echo 'Guru';
        } elseif ($hak_akses == 3) {
            echo 'Siswa';
        }
    }
}
