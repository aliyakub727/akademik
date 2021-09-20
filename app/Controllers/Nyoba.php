<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SUZURAN | ABOUT'
        ];
        return view('about', $data);
    }
}
