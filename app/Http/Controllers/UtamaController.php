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
        $testimoni = Testimoni::inRandomOrder()->take(3)->get();
        $articles = Article::orderBy('id', 'DESC')->take(3)->get();
        $programs = Program::orderBy('id', 'DESC')->get();


        return view('siswa.index', compact('articles', 'programs', 'testimoni'));
    }

    public function about()
    {
        $programs = Program::orderBy('id', 'DESC')->get();

        return view('siswa.about', compact('programs'));
    }

    public function testimoni(){
        $testimoni = Testimoni::orderBy('id', 'DESC')->paginate(12);
        $programs = Program::orderBy('id', 'DESC')->get();

        return view('siswa.showtestimoni', compact('testimoni', 'programs'));
    }
}