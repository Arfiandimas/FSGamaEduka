<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Program;

class UtamaController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->take(3)->get();
        $programs = Program::orderBy('id', 'DESC')->get();


        return view('siswa.index', compact('articles', 'programs'));
    }

    public function about()
    {
        return view('siswa.about');
    }

    public function testimoni(){
        return view('siswa.showtestimoni');
    }
}