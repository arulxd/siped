<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    public function cek_login($nama_user, $password)
    {
        return $this->db->table('user')->where(array('nama_user' => $nama_user, 'password' => $password))->get()->getRowArray();
    }
}
