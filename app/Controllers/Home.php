<?php

namespace App\Controllers;
use App\Models\models;

class Home extends BaseController
{
    public function index()
    {
        $model = new models();
        $data = [
            'nama' => $model->getNama(),
            'nim' => $model->getNim()
        ];
        return view('home/home', $data);
    }

    public function profil()
    {
        $model = new models();
        $data = [
            'namaLengkap' => 'Putri Oktavianti', 
            'nim' => '2110817120006', 
            'prodi' => 'Teknologi Informasi', 
            'hobi' => 'Membaca Komik, Mendengarkan music', 
            'skill' => 'Menggambar (Berkurang karena jarang menggambar)', 
            'informasiLainnya' => 'Saat ini sedang fokus untuk belajar front end developer' 
        ];
        return view('home/profile', $data);
    }
}