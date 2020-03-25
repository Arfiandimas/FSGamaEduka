<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Program;
use DB;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(12);
        $categories = Category::orderBy('id', 'DESC')->get();
        $programs = Program::orderBy('id', 'DESC')->get();

        return view('siswa.artikel', compact('articles', 'categories', 'programs'));
    }

    public function index_by_kategory($id)
    {
        $articles = Article::where('category_id',$id)->paginate(12);
        $categories = Category::orderBy('id', 'DESC')->get();
        $programs = Program::orderBy('id', 'DESC')->get();

        return view('siswa.artikel', compact('articles', 'categories', 'programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $artikel = Article::where('slug', $slug)->firstOrFail();
        $programs = Program::orderBy('id', 'DESC')->get();

        return view('siswa.showartikel', compact('artikel', 'programs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $cari = $request->search;

        $articles = Article::search($cari)->orderBy('id', 'DESC')->paginate(12);
        $categories = Category::orderBy('id', 'DESC')->get();
        $programs = Program::orderBy('id', 'DESC')->get();

        $articles->appends($request->only('search'));

        return view('siswa.artikel', compact('articles', 'categories', 'programs'));
    }
}
