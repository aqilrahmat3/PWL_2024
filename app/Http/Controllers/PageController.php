<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Aqil Rahmat Alifiandi <br>
        NIM: 2341760099';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
