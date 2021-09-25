<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
    protected $gurumodel;
    public function __construct()
    {
        $this->gurumodel = new GuruModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Akademik | Administrator',
            'siswa' => $this->gurumodel->getguru()
        ];
        return view('data_guru/index', $data);
    }

    // tambah
    public function tambahguru()
    {
        $this->gurumodel->save([
            'id_mapel' => $this->request->getVar('id_mapel'),
            'nama_guru' => $this->request->getVar('nama_guru'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp')

        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/guru');
    }
      public function updateguru()
    {
        $model = new GuruModel();
        $id = $this->request->getPost('id_guru');
        $data = array(
             'id_mapel' => $this->request->getVar('id_mapel'),
            'nama_guru' => $this->request->getVar('nama_guru'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp')
            
        );
         $model->updateGuru($data, $id);

         session()->setFlashdata('Pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/guru');
    }
     public function deleteguru()
    {
        $model = new GuruModel();
        $id_guru = $this->request->getPost('id_guru');
        $model->deleteGuru($id_guru);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/guru');

    }
}
