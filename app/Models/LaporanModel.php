<?php

namespace App\Models;

use CodeIgniter\Model;

class laporanModel extends Model
{
    public function getTahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM peminjaman GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) ASC");

        return $query->getResult();
    }


    function filterbytanggal($tanggalawal, $tanggalakhir)
    {

        $query = $this->db->query("SELECT * FROM peminjaman WHERE tanggal BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal ASC ");

        return $query->getResult();
    }
}
