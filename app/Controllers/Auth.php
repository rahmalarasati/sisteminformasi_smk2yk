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
    if( $this->validate([
        'username' => [
            'label' => 'Username',
            'rules' => 'required',
            'errors' => [
                'required'=> '{field} Wajib Di isi']
        ],
        'hak_akses' => [
            'label' => 'Hak Akses',
            'rules' => 'required',
            'errors' => [
                'required'=> '{field} Wajib Di isi' ]
        ],
        'password' => [
            'label' => 'Password',
            'rules' => 'required',
            'errors' => [
                'required'=> '{field} Wajib Di isi' ]
        ],
    ])) {
        //jika valid
        $hak_akses = $this->request->getPost('hak_akses');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($hak_akses == 1) {
            $cek_user = $this->ModelAuth->login_user($username, $password);
            if ($cek_user) {
                // jika data cocok
                session()->set('log', true);
                session()->set('user_username', $cek_user['user_username']);
                session()->set('nama', $cek_user['user_nama']);
                session()->set('user_foto', $cek_user['user_foto']);
                session()->set('Hak Akses', $hak_akses);
                //login
                return redirect()->to(base_url('teknisi'));
            } else {
                // jika data tidak cocok
                session()->setFlashdata('pesan', 'Login Gagal!, Username Atau Password Salah !!');
                return redirect()->to(base_url('auth/index'));
            }
        } elseif ($hak_akses == 2) {
            echo 'Guru';
        } elseif ($hak_akses == 3) {
            echo 'Siswa';
        }
    } else {
        //jika tidak valid
        session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
        return redirect()->to(base_url('auth/index'));
    }
}

    public function logout()
    {
        session()->remove('log');
        session()->remove('user_username');
        session()->remove('nama');
        session()->remove('foto');
        session()->remove('Hak Akses');
        session()->setFlashdata('sukses', 'Logout Sukses!!');
        return redirect()->to(base_url('auth/index'));
    }

}
