<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    protected $table = "pelanggan";
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function login($email, $password)
    {
        return $this->builder
            ->where('email', $email)
            ->where('password', $password)
            ->get()->getRowArray();
    }
}
