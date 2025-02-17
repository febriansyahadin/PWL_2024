<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    // Menampilkan Nama dan NIM
    public function about()
    {
        return 'Nama: John Doe <br> NIM: 123456789';
    }

    // Menampilkan halaman artikel dinamis berdasarkan ID
    public function articles($id)
    {
        return "Halaman Artikel dengan ID " . $id;
    }
}
