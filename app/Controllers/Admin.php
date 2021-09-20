<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SUZURAN | Admin'
        ];
        return view('admin', $data);
    }
}
