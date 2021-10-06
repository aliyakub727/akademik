<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
<?php

namespace App\Models;

use CodeIgniter\Model;

class TahunajaranModel extends Model
{
    protected $table = "tahunajaran";
<<<<<<< Updated upstream
    protected $primaryKey = "id_tahun";

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_tahun', 'tahunajaran', 'status'];

    public function gettahun($tahunajaran = false)
    {
        if ($tahunajaran == false) {
            return $this->findAll();
        }
        return $this->where(['tahunajaran' => $tahunajaran])->first();
    }
    public function updatetahun($data, $id_tahun)
    {
        $query = $this->db->table('tahunajaran')->update($data, array('id_tahun' => $id_tahun));
        return $query;
    }
    public function deletetahun($id_tahun)
    {
        $query = $this->db->table('tahunajaran')->delete(array('id_tahun' => $id_tahun));
=======
    protected $allowedFields = ['id', 'tahunajaran', 'status'];

    public function gettahun($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function updateTahun($data, $id)
    {
        $query = $this->db->table('tahunajaran')->update($data, array('id' => $id));
        return $query;
    }
    public function deleteTahun($id)
    {
        $query = $this->db->table('tahunajaran')->delete(array('id' => $id));
>>>>>>> Stashed changes
        return $query;
    }
}
