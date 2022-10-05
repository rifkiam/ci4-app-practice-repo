<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Kiamu',
            'angka' => ['satu', 'dua', 'tiga'],
        ];
        echo view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Kiamu'
        ];
        echo view('pages/about', $data);
        //bisa pakai return jika hanya satu view
    }
    public function contacts() 
    {
        $data = [
            'title' => 'Contacts | Kiamu',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Jalan',
                    'kota' => 'Gresik',
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Gede',
                    'kota' => 'Rembang',
                ]
            ]
        ];
        echo view('pages/contacts', $data);
    }
}
