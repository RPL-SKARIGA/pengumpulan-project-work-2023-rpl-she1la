<?php

namespace App\Controllers;

use App\Models\model_login;

class A_Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function __construct()
    {
        $this->model_login = new model_login();
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
            $cek = $this->model_login->login($email, $password);
            if ($cek) {
                //data sesuai
                session()->set('logAd', true);
                session()->set('id_admin', $cek['id_admin']);
                session()->set('username', $cek['username']);
                session()->set('nama', $cek['nama']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('pesan', 'Login Gagal !!!, Email atau Password Salah !!!');
                return redirect()->to(base_url('A_Login'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('A_Login'));
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('A_Login');
    }
}
