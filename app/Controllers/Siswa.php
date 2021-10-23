<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $siswamodel;
    public function __construct()
    {
        $this->siswamodel = new SiswaModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Akademik | Administrator',
            'siswa' => $this->siswamodel->getsiswa()
        ];
        return view('data_siswa/index', $data);
    }

    // tambah
    public function tambahsiswa()
    {
        $this->siswamodel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'nis' => $this->request->getVar('nis'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'agama' => $this->request->getVar('agama'),
            'nama_orangtua' => $this->request->getVar('nama_orangtua'),
            'alamat_orangtua' => $this->request->getVar('alamat_orangtua'),
            'no_telp_orangtua' => $this->request->getVar('no_telp_orangtua'),
            'jurusan' => $this->request->getVar('jurusan')

        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/siswa');
    }

    public function formtambah() 
    {
        $data = [
            'judul' => 'dafit kontol',
            'validation' => \config\services::validation()
        ];
        return view('data_siswa/add', $data);
    }
     public function tambah1()
    {
        if (!$this->validate([
            'inama_lengkap'=>[
                'rules' => 'required|is_unique[nama_lengkap]',
                'errors' => [
                    'required' => 'Nama Harus Diisi',
                    'is_unique' => 'Nama Anda Sudah Terdaftar'
                ]
            ],
              'ijenis_kelamin'=>[
                'rules' => 'required|is_unique[jenis_kelamin]',
                'errors' => [
                    'required' => 'Harus Pilih salah 1',
                    'is_unique' => ' '
                ]
            ],
              

        ])){
            return redirect()->to('/siswa/tambahsiswa')->withInput();
            }
            $this->SiswaModel->save([
            $data = [
             'judul' => 'SUZURAN | Admin',
            'nama_lengkap' => $this->siswamodel->getsiswa('nama_lengkap'),
            'jenis_kelamin' => $this->siswamodel->getsiswa('jenis_kelamin'),
            'nis' => $this->siswamodel->getsiswa('nis'),
            'alamat' => $this->siswamodel->getsiswa('alamat'),
            'no_telp' => $this->siswamodel->getsiswa('no_telp'),
            'tgl_lahir' => $this->siswamodel->getsiswa('tgl_lahir'),
            'tempat_lahir' => $this->siswamodel->getsiswa('tempat_lahir'),
            'agama' => $this->siswamodel->getsiswa('agama'),
            'nama_orangtua' => $this->siswamodel->getsiswa('nama_orangtua'),
            'alamat_orangtua' => $this->siswamodel->getsiswa('alamat_orangtua'),
            'no_telp_orangtua' => $this->siswamodel->getsiswa('no_telp_orangtua'),
            'jurusan' => $this->siswamodel->getsiswa('jurusan')
            ]
        ]);
        return view('/data_siswa/add', $data);
    }
      public function updatesiswa()
    {
        $model = new SiswaModel();
        $id = $this->request->getPost('id');
        $data = array(
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nis' => $this->request->getPost('nis'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'agama' => $this->request->getPost('agama'),
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'alamat_orangtua' => $this->request->getPost('alamat_orangtua'),
            'no_telp_orangtua' => $this->request->getPost('no_telp_orangtua'),
            'jurusan' => $this->request->getPost('jurusan')
        );
         $model->updateSiswa($data, $id);

         session()->setFlashdata('Pesan', 'Data Berhasil Di Ubah.');

        return redirect()->to('/siswa');
    }
     public function deletesiswa()
    {
        $model = new SiswaModel();
        $id = $this->request->getPost('id');
        $model->deleteSiswa($id);
        session()->setFlashdata('Pesan', 'Data Berhasil Di Delete.');
        return redirect()->to('/siswa');

    }
}
