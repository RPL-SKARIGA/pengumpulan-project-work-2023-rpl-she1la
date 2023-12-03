<?php

namespace App\Controllers;

use App\Models\M_register;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function __construct()
    {
        $this->M_register = new M_register();
    }

    public function tambah_aksi()
    {
        $res = array();
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'telepon' => $this->request->getPost('telepon'),
            'nik' => $this->request->getPost('nik'),
            'usia' => $this->request->getPost('usia'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        );
        $regis = $this->M_register->add($data);
        if ($regis) {
            $res = [
                'success' => 1,
            ];
        } else {
            $res = [
                'success' => 0,
            ];
        }
        echo json_encode($res);
    }
}
