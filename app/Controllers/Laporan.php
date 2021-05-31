<?php

namespace App\Controllers;

use App\Models\laporanModel;


class Laporan extends BaseController
{

    public function __construct()
    {
        $this->laporanModel = new laporanModel();
    }

    public function index()
    {

        $data = [
            'tahun' => $this->laporanModel->getTahun()
        ];

        return view('laporan/laporan_peminjaman', $data);
    }

    public function filter()
    {

        $tanggalawal = $this->request->getVar('tanggalawal');
        $tanggalakhir = $this->request->getVar('tanggalakhir');
        $nilaifilter = $this->request->getVar('nilaifilter');


        if ($nilaifilter == 1) {

            $data = [
                'title' => "Laporan Peminjaman By Tanggal",
                'subtitle' => "Dari tanggal : " . $tanggalawal . ' Sampai tanggal : ' . $tanggalakhir,
                'datafilter' => $this->laporanModel->filterbytanggal($tanggalawal, $tanggalakhir)
            ];

            return view('laporan/print_laporan', $data);
        } else {
            return view('laporan/print_laporan', $data);
        }
    }
}
