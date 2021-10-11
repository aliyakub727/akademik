<?php

namespace App\Controllers;

use App\Models\InnerJoinModel;
use Myth\Auth\Models\UserModel;

class Acoount extends BaseController
{
    protected $usermodel;
    protected $innerjoin;
    protected $db, $builder;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->innerjoin = new InnerJoinModel();
        $this->db = \config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data = [
            'judul' => 'SUZURAN | ACCOUNT-GURU',
            'users' => $query->getResultArray()
        ];
        return view('admin/listdata', $data);
    }

    public function detail($id)
    {
        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, description, password_hash');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $data = [
            'judul' => 'SUZURAN | ACCOUNT-GURU',
            'users' => $query->getRow()
        ];
        return view('admin/detailakun', $data);
    }
    public function createakun()
    {

        $data = [
            'judul' => 'SUZURAN | ACCOUNT-GURU',
            'users' => $this->innerjoin->getguru()

        ];
        return view('admin/createakun', $data);
    }

    public function deleteakun($username)
    {
        $this->usermodel->delete($username);
        session()->setFlashdata('Pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/admin/');
    }
}
