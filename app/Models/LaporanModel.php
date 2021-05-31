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


    public function filterbytanggal($tanggalawal, $tanggalakhir)
    {

        $query = $this->db->query("SELECT * FROM peminjaman WHERE status ='dikembalikan' and tanggal BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal ASC ");

        return $query->getResult();
    }

    public function filterbybulan($tahun1, $bulanawal, $bulanakhir)
    {

        $query = $this->db->query("SELECT * from peminjaman where  YEAR(tanggal) = '$tahun1' and MONTH(tanggal) BETWEEN '$bulanawal' and '$bulanakhir' and status ='dikembalikan' ORDER BY tanggal ASC ");

        return $query->getResult();
    }
}
