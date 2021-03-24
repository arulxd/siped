<?php

namespace App\Models;

use CodeIgniter\Model;

class peminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $primarykey = 'id_peminjaman';
    protected $allowedFields = ['tanggal', 'no_rm', 'nama_pasien', 'nama_peminjam', 'status', 'keperluan', 'tanggal_kembali'];


    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_peminjaman' => $id])->first();
    }
}
