<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'NIM     : 2141762025, Nama  : Nevi Marita Rimadhani';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan Id '.$id;
    }
}
