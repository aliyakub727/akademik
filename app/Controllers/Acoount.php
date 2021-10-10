<?php

namespace App\Controllers;

use App\Models\InnerJoinModel;
use Myth\Auth\Models\UserModel;

class Acoount extends BaseController
{
    protected $usermodel;
    protected $innerjoin;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->innerjoin = new InnerJoinModel();
    }

    public function index()
    {

        $db = \config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();
        $data = [
            'judul' => 'SUZURAN | ACCOUNT-GURU',
            'users' => $query->getResultArray()
        ];
        return view('admin/listdata', $data);
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
