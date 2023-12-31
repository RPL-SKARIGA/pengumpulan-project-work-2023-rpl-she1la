<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class WisataModel extends Model 
    {
        protected $table = 'tbl_jasa';
        protected $useTimestamps = true;    

        protected $allowedFields = ['nama_jasa', 'lokasi', 'harga', 'kategori', 'img', 'ket', 'slug', 'img2', 'img3'];


        public function getWisata ($slug = false)
        {
            if($slug == false){
                return $this->findAll();
            }
            return $this->where(['slug' => $slug])->first();
        }

        public function search($keyword)
            {
                return $this->table('tbl_jasa')->like('nama_jasa', $keyword)->orLike('harga', $keyword);
            }

        public function add($data)
        {
            $this->db->table('tbl_jasa')->insert($data);
        }
    }

?> 