<?php

namespace App\Controllers;

use App\Models\GaleriModel;

class Galeri extends BaseController
{

    protected  $galeriModel;
    public function __construct(){
        $this->galeriModel = new GaleriModel();
    }
    
    public function galeri()
    {
        $galeri = $this->galeriModel->findAll();

        $data = [
            'title' => 'Daftar Wisata',
            'galeri' => $galeri
        ];

        //$wisataModel = new WisataModel();

        return view('galeri', $data);
    }

}




