<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = "jurusan";
    protected $allowedFields = ['jurusan'];

    public function getjurusan($jurusan = false)
    {
        if ($jurusan == false) {
            return $this->findAll();
        }
        return $this->where(['jurusan' => $jurusan])->first();
    }
}
