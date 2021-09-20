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
        $data = [
            'judul' => 'SUZURAN | ACCOUNT'
        ];
        return view('admin', $data);
    }
    public function guru()
    {

        $data = [
            $guru = '4',
            'judul' => 'SUZURAN | ACCOUNT-GURU',
            'users' => $this->innerjoin->getguru($guru)

        ];
        return view('admin/akunguru', $data);
    }
}
