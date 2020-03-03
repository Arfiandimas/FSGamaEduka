<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function index()
    {
        return view('siswa.index');
    }

    public function about()
    {
        return view('siswa.about');
    }
}