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
            'kelas' => $this->kelasmodel->getkelas(),
            'validation' => \Config\Services::validation()
        ];
        return view('/masterdata/add', $data);
    }

    public function savedata()
    {
        //validasi
        if (!$this->validate([
            'tahun_ajaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Ajaran Harus diisi.',
                ]
            ],
            'nis' => [
                'rules' => 'required|is_unique[siswa.nis]',
                'errors' => [
                    'required' => 'Nomor induk siswa harus di isi',
                    'is_unique' => 'Nis sudah didaftarkan'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kelas Harus diisi.',
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jurusan Harus diisi.',
                ]
            ],
            'wali_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wali Kelas Harus diisi.',
                ]
            ],
        ])) {
            return redirect()->to('/masterdata/tambah')->withInput();
        }
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

    public function edit($id)
    {
        $data = [
            'judul' => 'SUZURAN | Admin',
            'masterdata' => $this->masterdata->getmasterdata($id),
            'guru' => $this->gurumodel->getguru(),
            'jurusan' => $this->jurusanmodel->getjurusan(),
            'nis' => $this->siswamodel->getsiswa(),
            'kelas' => $this->kelasmodel->getkelas()
        ];
        return view('/masterdata/update', $data);
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

    public function delete($id)
    {
        $this->masterdata->delete_data($id);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/masterdata');
    }
}
