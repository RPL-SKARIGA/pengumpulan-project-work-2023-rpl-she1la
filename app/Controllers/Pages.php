<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pages extends BaseController
{

    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function index(): string
    {
        if(!session()->has('log')){
            redirect()->to('Login');
        }
        $data = [
            'title' => 'Home|FunnPlay'
        ];

        return view('index', $data);
    }
}
