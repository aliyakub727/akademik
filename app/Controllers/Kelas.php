<?php

namespace App\Controllers;

use App\Models\KelasModel;

class Kelas extends BaseController
{
    protected $kelasmodel;
    public function __construct()
    {
        $this->kelasmodel = new KelasModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Akademik | Administrator',
            'kelas' => $this->kelasmodel->getkelas()
        ];
        return view('data_kelas/index', $data);
    }

    // tambah
    public function tambahkelas()
    {
        $this->kelasmodel->save([
            'kelas' => $this->request->getVar('kelas')

        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/kelas');
    }
    public function updatekelas()
    {
        $model = new KelasModel();
        $id = $this->request->getPost('id');
        $data = array(
            'kelas' => $this->request->getVar('kelas'),
        );
         $model->updateKelas($data, $id);

         session()->setFlashdata('Pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/kelas');
    }
    public function deletekelas()
    {
        $model = new KelasModel();
        $id = $this->request->getPost('id');
        $model->deleteKelas($id);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/kelas');

    }
}
