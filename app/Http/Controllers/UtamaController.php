<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Program;
use App\Testimoni;

class UtamaController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::orderBy('id', 'DESC')->get();
        $articles = Article::orderBy('id', 'DESC')->take(3)->get();
        $programs = Program::orderBy('id', 'DESC')->get();


        return view('siswa.index', compact('articles', 'programs', 'testimoni'));
    }

    public function about()
    {
        return view('siswa.about');
    }

    public function testimoni(){
        return view('siswa.showtestimoni');
    }
}