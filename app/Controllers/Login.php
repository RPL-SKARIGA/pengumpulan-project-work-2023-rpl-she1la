<?php

namespace App\Controllers;

use App\Models\M_login;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function __construct()
    {
        $this->M_login = new M_login();
    }

    public function proses()
    {
        if ($this->validate([
            'email' => [
                'label'  => 'Email',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->M_login->login($email, $password);
            if ($cek) {
                //data sesuai
                session()->set('log', true);
                session()->set('id_pelanggan', $cek['id_pelanggan']);
                session()->set('nama', $cek['nama']);
                session()->set('telepon', $cek['telepon']);
                session()->set('nik', $cek['nik']);
                session()->set('usia', $cek['usia']);
                session()->set('alamat', $cek['alamat']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                session()->set('statusLogin', true);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('pesan', 'Login Gagal !!!, Email atau Password Salah !!!');
                return redirect()->to(base_url('Login'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Login'));
        }
    }
    function logout()
    {
        session()->set('statusLogin', false);
        return redirect()->to('home');
    }
}
