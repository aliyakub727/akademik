<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = "jurusan";
    protected $primaryKey = "id_jurusan";
    protected $allowedFields = ['jurusan'];

    public function getjurusan($jurusan = false)
    {
        if ($jurusan == false) {
            return $this->findAll();
        }
        return $this->where(['jurusan' => $jurusan])->first();
    }
    public function updatejurusan($data, $id_jurusan)
    {
        $query = $this->db->table('jurusan')->update($data, array('id_jurusan' => $id_jurusan));
        return $query;
    }
    public function deletejurusan($id_jurusan)
    {
        $query = $this->db->table('jurusan')->delete(array('id_jurusan' => $id_jurusan));
        return $query;
    }
}
