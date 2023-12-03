<?php

namespace App\Controllers;



use App\Models\UserModel;
use App\Models\WisataModel;

class User extends BaseController{

    protected $userModel;
    protected $wisataModel;
   
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
        $this->userModel = new UserModel();
        
    }

    public function index()
    {
        if(!session()->has('logAd')){
            redirect()->to('A_Login');
        }
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/index', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/index', $data);
    }



    public function User()
    {
        $keyword = $this->request->getVar('keyword');
        if($keyword){
           $user= $this->userModel->search($keyword);
        }else{
            $user = $this->userModel;
        }
        //$wisata = $this->wisataModel->findAll();

        $currentPage = $this->request->getVar('page_wisata') ? $this->request->getVar('page_wisata'):
        1;  

        $data = [
            'title' => 'Daftar User',
            // 'wisatas' => $wisatas,
            'user' => $user->paginate(10,'user'),
            'pager' => $this->userModel->pager,
            'currentPage' => $currentPage
        ];

        //$wisataModel = new WisataModel();

        return view('admin/user', $data);
    }

    public function detailUser($id_pelanggan)
    {
        $data = [
            'title' => 'Detail User',
            'user' => $this->userModel->getUser($id_pelanggan) 
        ];

        //jika komik tid_pelangganak ada di tabel
        if(empty($data['user'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User ' .$id_pelanggan. ' tidak ditemukan.');
        }

        return view('admin/detailUser',$data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Data',
            'validation' =>\Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function add()
    {
        // validasi inpun
        if (!$this->validate(
            ['img' => [
                'rules' => 'uploaded[img]|max_size[img,4096]|mime_in[img,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'max_size' => 'Ukuran File Maksimal 4 MB',
                    'ext_in' => 'Format File Harus Jpg/Jpeg/Png'
                    ]
                ],
            'img2' => [
                'rules' => 'uploaded[img2]|max_size[img2,4096]|mime_in[img2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'max_size' => 'Ukuran File Maksimal 4 MB',
                    'ext_in' => 'Format File Harus Jpg/Jpeg/Png'
                    ]
                ],
            'img3' => [
                'rules' => 'uploaded[img3]|max_size[img3,4096]|mime_in[img3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'max_size' => 'Ukuran File Maksimal 4 MB',
                    'ext_in' => 'Format File Harus Jpg/Jpeg/Png'
                    ]
                ],
            ]))
            {
                session()->setFlashdata('error', 'Gagal Menambahkan Data !!!<br>Cek Kembali Pada Format File yang Di Upload ');
                //ambil pesan kesalahan
                // var_dump($this->request->getFile('img')->getName());
                // var_dump($this->request->getFile('img2')->getName());
                // var_dump($this->request->getFile('img3')->getName());
                return redirect()->to('/admin/create')->withInput();
            }

            $input = new WisataModel();

            //ambil file                
            $fileImg = $this->request->getFile('img');
            $fileImg2 = $this->request->getFile('img2');
            $fileImg3 = $this->request->getFile('img3');
                                //ada yang di up ga?
                        // if($fileImg->getError()==4){
                        //     $namaImg = 'def.jpg';
                        //     $namaImg2 = 'def.jpg';
                        //     $namaImg3 = 'def.jpg';
                        // }else{
                                
            //nama random
            $namaImg = $fileImg->getRandomName();
            $namaImg2 = $fileImg2->getRandomName();
            $namaImg3 = $fileImg3->getRandomName();
            $slug = url_title($this->request->getvar('nama_jasa'),'-', true);
            
            //insert data
            $wisata = [
                'nama_jasa' => $this->request->getPost('nama_jasa'),
                'lokasi' =>$this->request->getPost('lokasi'),
                'harga' =>$this->request->getPost('harga'),
                'kategori' =>$this->request->getPost('kategori'),
                'ket' =>$this->request->getPost('ket'),
                'img' =>$namaImg,
                
                'slug' =>$slug,
                'img2' =>$namaImg2,
                'img3' =>$namaImg3
            ];
            $input->add($wisata);
            //pindah folder
            $fileImg->move('img/wisata', $namaImg);
            $fileImg2->move('img/wisata', $namaImg2);
            $fileImg3->move('img/wisata', $namaImg3);
                    
            session()->setFlashdata('pesan' , 'Data berhasil ditambahkan.');
            return redirect()->to('/admin/wisata');
    }


    public function delete($id_pelanggan)
    {
        //cari gmbar berdasarkan id_pelanggan
        $user = $this->userModel->find($id_pelanggan);

        //cek jika file gambarnya def.jpg
       

        $this->userModel->delete($id_pelanggan);
        session()->setFlashdata('pesan' , 'Data berhasil dihapus.');
        return redirect()->to('/User/user');
    } 


    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Data',
            'validation' =>\Config\Services::validation(),
            'wisata' => $this->wisataModel->getWisata($slug)
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        //cek nama_jasa
        $wisataLama = $this->wisataModel->getWisata($this->request->getVar('slug'));
        if($wisataLama['nama_jasa'] == $this->request->getVar('nama_jasa')){
            $rule_nama = 'required';
        }else{
            $rule_nama = 'required|is_unique[tbl_jasa.nama_jasa]';
        }

        if (!$this->validate(
            ['nama_jasa' => ['rules' => $rule_nama],
                'img' => [
                'rules' => 'uploaded[img]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload'                    
                    ]
                ],
            'img2' => [
                'rules' => 'uploaded[img2]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload'
                    
                    ]
                ],
            'img3' => [
                'rules' => 'uploaded[img3]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload'
                    ]
                ],
            ]))
        {
            $validation = \Config\Services::validation();
            session()->setFlashdata('nama_jasa', $validation->getError('nama_jasa'));
            session()->setFlashdata('img', $validation->getError('img'));
            session()->setFlashdata('img2', $validation->getError('img2'));
            session()->setFlashdata('img3', $validation->getError('img3'));
            
            return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput();
        }

        //ambil gmbar
        $fileImg = $this->request->getFile('img');
        $fileImg2 = $this->request->getFile('img2');
        $fileImg3 = $this->request->getFile('img3');

       //cek gambar
       if ($fileImg->getError() == 4 || $fileImg2->getError() == 4 ||$fileImg3->getError() == 4 ) {
        $namaImg = $this->request->getVar('imgLama');
        $namaImg2 = $this->request->getVar('imgLama2');
        $namaImg3 = $this->request->getVar('imgLama3');
       }else{
        //file random
        $namaImg = $fileImg->getRandomName();
        $namaImg2 = $fileImg2->getRandomName();
        $namaImg3 = $fileImg3->getRandomName();

        //pindahkan (move)
        $fileImg->move('img/wisata', $namaImg);
        $fileImg2->move('img/wisata', $namaImg2);
        $fileImg3->move('img/wisata', $namaImg3);

        //hpus yg lama
        unlink('img/wisata/' . $this->request->getVar('imgLama'));
       }

        $slug = url_title($this->request->getVar('nama_jasa'), '-', true);
        
        $data = [
            'id' => $id,
            'nama_jasa' => $this->request->getVar('nama_jasa'),
            'lokasi' =>$this->request->getVar('lokasi'),
            'harga' =>$this->request->getVar('harga'),
            'kategori' =>$this->request->getVar('kategori'),
            'ket' =>$this->request->getVar('ket'),
            'img' => $namaImg,
            'slug' =>$slug,
            'img2' =>$namaImg2,
            'img3' =>$namaImg3
        ];
        $this->wisataModel->save($data);
        // var_dump($data);
        session()->setFlashdata('pesan' , 'Data berhasil diubah.');

        return redirect()->to('/admin/wisata');
    }
  
} 



// edit 19.38