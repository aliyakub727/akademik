<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SUZURAN | HOME'
        ];
        return view('welcome_message', $data);
    }
}
