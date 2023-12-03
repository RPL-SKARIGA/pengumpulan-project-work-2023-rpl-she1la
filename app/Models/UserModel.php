<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class UserModel extends Model 
    {
        protected $table = 'pelanggan';

        protected $primaryKey = 'id_pelanggan';
        protected $useTimestamps = false;   

        protected $allowedFields = ['nama','telpon','nik','usia','alamat','email','password'];

        public function getUser ($id_pelanggan = false)
        {
            if($id_pelanggan == false){
                return $this->findAll();
            }
            return $this->where(['id_pelanggan' => $id_pelanggan])->first();
        }

        public function search($keyword)
            {
                return $this->table('pelanggan')->like('nama', $keyword)->orLike('alamat', $keyword);
            }

        public function add($data)
        {
            $this->db->table('pelanggan')->insert($data);
        }
    }

?> 
