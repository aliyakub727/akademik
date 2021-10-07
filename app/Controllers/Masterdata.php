<?php

namespace App\Controllers;

use App\Models\MasterdataModel;
use App\Models\JurusanModel;
use App\Models\GuruModel;
use App\Models\SiswaModel;
use App\Models\KelasModel;

class Masterdata extends BaseController
{
    protected $masterdata;
    protected $gurumodel;
    protected $jurusanmodel;
    protected $siswamodel;
    protected $kelasmodel;
    public function __construct()
    {
        $this->masterdata = new MasterdataModel();
        $this->jurusanmodel = new JurusanModel();
        $this->gurumodel = new GuruModel();
        $this->siswamodel = new SiswaModel();
        $this->kelasmodel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'SUZURAN | Admin',
            'masterdata' => $this->masterdata->getmasterdata(),
            'guru' => $this->gurumodel->getguru(),
            'jurusan' => $this->jurusanmodel->getjurusan(),
            'nis' => $this->siswamodel->getsiswa(),
            'kelas' => $this->kelasmodel->getkelas()
        ];
        return view('/masterdata/masterdata', $data);
    }
    

    // tambah
    public function tambah()
    {
        $data = [
            'judul' => 'SUZURAN | Admin',
            'masterdata' => $this->masterdata->getmasterdata(),
            'guru' => $this->gurumodel->getguru(),
            'jurusan' => $this->jurusanmodel->getjurusan(),
            'nis' => $this->siswamodel->getsiswa(),
            'kelas' => $this->kelasmodel->getkelas()
        ];
        return view('/masterdata/add', $data);
    }
    public function savedata()
    {
        $this->masterdata->save([
            'tahun_ajaran' => $this->request->getVar('tahun_ajaran'),
            'nis' => $this->request->getVar('nis'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'kelas' => $this->request->getVar('kelas'),
            'jurusan' => $this->request->getVar('jurusan'),
            'nama_walikelas' => $this->request->getVar('nama_walikelas')
        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/masterdata');
    }

    //update
    public function update()
    {
        $id = $this->request->getPost('id');
        $data = array(
            'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
            'nis' => $this->request->getPost('nis'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
            'nama_walikelas' => $this->request->getPost('nama_walikelas')
        );
        $this->masterdata->update_data($data, $id);

        session()->setFlashdata('Pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/masterdata');
    }

    public function delete()
    {
        $id = $this->request->getPost('id');
        $this->masterdata->delete_data($id);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/masterdata');
    }
}
