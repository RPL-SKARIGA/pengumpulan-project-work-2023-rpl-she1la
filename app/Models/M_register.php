<?php

namespace App\Models;

use CodeIgniter\Model;

class M_register extends Model
{
    public function add($data)
    {
        $this->db->table('pelanggan')->insert($data);
    }
}
