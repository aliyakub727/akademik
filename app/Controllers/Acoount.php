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
            'judul' => 'SUZURAN | ACCOUNT-GURU',
            'users' => $this->innerjoin->getguru()
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
}
