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
            'tahunajaran' => $this->tahunmodel->gettahun()
        ];
        return view('tahun_ajaran/index', $data);
    }

    // tambah
    public function tambahtahun()
    {
        $this->tahunmodel->save([
            'id_tahun' => $this->request->getVar('id_tahun'),
            'tahunajaran' => $this->request->getVar('tahunajaran'),
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

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
    }
}
