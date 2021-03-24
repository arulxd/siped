<?php

namespace App\Controllers;

use App\Models\peminjamanModel;

class Peminjaman extends BaseController
{
    // protected $peminjamanModel;
    public function __construct()
    {
        $this->peminjamanModel = new peminjamanModel();
    }


    public function index()
    {
        return view('peminjaman/create');
    }

    public function list()
    {

        $data = [
            'peminjaman' => $this->peminjamanModel->getDetail()
        ];
        // $peminjamanModel = new \App\Models\peminjamanModel();
        // $peminjamanModel = new peminjamanModel();
        //  $peminjaman = $peminjamanModel->findAll();
        //  dd($peminjaman);
        return view('peminjaman/list', $data);
    }

    public function detail($id)
    {

        $data = [
            'peminjaman' => $this->peminjamanModel->getDetail($id)
        ];
        return view('peminjaman/detail', $data);
    }

    public function delete($id_peminjaman)
    {

        $this->peminjamanModel->delete(['id_peminjaman' => $id_peminjaman]);
        return redirect()->to('/peminjaman');
    }

    public function save()
    {
        $this->peminjamanModel->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'no_rm' => $this->request->getVar('no_rm'),
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'nama_peminjam' => $this->request->getVar('nama_peminjam'),
            'keperluan' => $this->request->getVar('keperluan'),
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/peminjaman');
    }
}
