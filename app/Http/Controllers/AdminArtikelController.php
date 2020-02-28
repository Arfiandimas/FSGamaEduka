<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;
use App\Category;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin.admin_artikel', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.tambah_artikel', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('adminartikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::find($id);
        $categories = Category::all();

        return view('admin.edit_artikel', compact('articles', 'categories'));
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
        $articles = Article::find($id);
        $articles->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);


        return redirect()->route('adminartikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Article::find($id);

        $articles->delete();

        return redirect()->route('adminartikel.index');
    }
}
