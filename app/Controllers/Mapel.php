<?php

namespace App\Controllers;

use App\Models\MapelModel;

class Mapel extends BaseController
{
    protected $mapelmodel;
    public function __construct()
    {
        $this->mapelmodel = new MapelModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Akademik | Administrator',
            'mapel' => $this->mapelmodel->getmapel()
        ];
        return view('data_mapel/index', $data);
    }

    // tambah
    public function tambahmapel()
    {
        $this->mapelmodel->save([
            'nama_mapel' => $this->request->getVar('nama_mapel')
        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/mapel');
    }

    //update
    public function update()
    {

        $id_mapel = $this->request->getPost('id_mapel');
        $data = array(
            'nama_mapel' => $this->request->getPost('nama_mapel')
        );
        $this->mapelmodel->updatemapel($data, $id_mapel);

        session()->setFlashdata('Pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/mapel');
    }

    public function delete()
    {
        $id_mapel = $this->request->getPost('id_mapel');
        $this->mapelmodel->deletemapel($id_mapel);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/mapel');
    }
}
