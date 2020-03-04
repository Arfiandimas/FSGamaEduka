<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GantiPasswordController extends Controller
{
    public function index()
    {
        return view('admin.ganti_password');
    }
}
