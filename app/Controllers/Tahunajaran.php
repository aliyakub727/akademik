<?php

namespace App\Controllers;

use App\Models\TahunajaranModel;

class Tahunajaran extends BaseController
{
    protected $tahunmodel;
    public function __construct()
    {
        $this->tahunmodel = new TahunajaranModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Akademik | Administrator',
<<<<<<< Updated upstream
            'tahunajaran' => $this->tahunmodel->gettahun()
=======
            'tahun' => $this->tahunmodel->gettahun()
>>>>>>> Stashed changes
        ];
        return view('data_tahunajaran/index', $data);
    }

    // tambah
    public function tambahtahun()
    {
        $this->tahunmodel->save([
<<<<<<< Updated upstream
            'id_tahun' => $this->request->getVar('id_tahun'),
            'tahunajaran' => $this->request->getVar('tahunajaran'),
            'status' => $this->request->getVar('status')
=======
            'id' => $this->request->getVar('id'),
            'tahunajaran' => $this->request->getVar('tahunajaran'),
            'status' => $this->request->getVar('status'),

>>>>>>> Stashed changes
        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

<<<<<<< Updated upstream
        return redirect()->to('/tahunajaran');
    }

    //update
    public function update()
    {

        $id_tahun = $this->request->getPost('id_tahun');
        $data = array(
            'tahunajaran' => $this->request->getPost('tahunajaran'),
            'status' => $this->request->getPost('status')
        );
        $this->tahunmodel->updatetahun($data, $id_tahun);

        session()->setFlashdata('Pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/tahunajaran');
    }

    public function delete()
    {
        $id_tahun = $this->request->getPost('id_tahun');
        $this->tahunmodel->deletetahun($id_tahun);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/tahunajaran');
=======
        return redirect()->to('/siswa');
    }
    public function updatetahun()
    {
        $model = new TahunajaranModel();
        $id = $this->request->getPost('id');
        $data = array(
            'id' => $this->request->getPost('id'),
            'tahunajaran' => $this->request->getPost('tahunajaran'),
            'status' => $this->request->getPost('status'),
        );
        $model->updatetahun($data, $id);

        session()->setFlashdata('Pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/siswa');
    }
    public function deletetahun()
    {
        $model = new TahunajaranModel();
        $id = $this->request->getPost('id');
        $model->deletetahun($id);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/siswa');
>>>>>>> Stashed changes
    }
}
