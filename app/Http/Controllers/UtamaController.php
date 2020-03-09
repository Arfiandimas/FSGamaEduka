<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class UtamaController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->take(3)->get();

        return view('siswa.index', compact('articles'));
    }

    public function about()
    {
        return view('siswa.about');
    }
}