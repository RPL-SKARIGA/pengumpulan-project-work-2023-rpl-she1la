<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => "Wisata"
        ];
        return view('index.php', $data);
    }
}