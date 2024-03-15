<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'selamat datang | website anda'
        ];
        return view('pages,about', $data);
    }

    public function about()
    {
        $data =[
            'title' => 'tentang kami | unipdu pres'
        ];
        return view('pages/home', $data);
    }
}