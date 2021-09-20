<?php

namespace App\Controllers;

use App\Models\JurusanModel;

class Jurusan extends BaseController
{
    protected $jurusanmodel;
    public function __construct()
    {
        $this->jurusanmodel = new JurusanModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Akademik | Administrator',
            'jurusan' => $this->jurusanmodel->getjurusan()
        ];
        return view('data_jurusan/index', $data);
    }

    // tambah
    public function tambahjurusan()
    {
        $this->jurusanmodel->save([
            'jurusan' => $this->request->getVar('jurusan')

        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/jurusan');
    }
}
