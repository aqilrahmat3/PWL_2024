<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return 'Nama: Aqil Rahmat Alifiandi <br>
        NIM: 2341760099';
    }
}
