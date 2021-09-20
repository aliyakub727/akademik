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

    //update
    public function update()
    {

        $id_jurusan = $this->request->getPost('id_jurusan');
        $data = array(
            'jurusan' => $this->request->getPost('jurusan')
        );
        $this->jurusanmodel->updatejurusan($data, $id_jurusan);

        session()->setFlashdata('Pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/jurusan');
    }

    public function delete()
    {
        $id_jurusan = $this->request->getPost('id_jurusan');
        $this->jurusanmodel->deletejurusan($id_jurusan);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/jurusan');
    }
}
