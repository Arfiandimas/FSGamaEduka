<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;
use App\Category;

use Image;
use File;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(12);

        return view('admin.admin_artikel', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'DESC')->get();

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

        $this->validate($request, [
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'konten' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);

        $image = $request->file('gambar');

        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = storage_path('app/public/thumbnail');

        $resize_image = Image::make($image->getRealPath());

        $resize_image->resize(1152, 800, function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $image_name);


        Article::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'gambar' => $image_name,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('adminartikel.index')->with('success', 'Artikel Berhasil Ditambahkan!');
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
        $categories = Category::orderBy('id', 'DESC')->get();

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

        $this->validate($request, [
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);

        if($request->hasFile('gambar'))
        {
            $usersImage = storage_path("app/public/thumbnail/{$articles->gambar}"); // get previous image from folder
            if (File::exists($usersImage)) { // unlink or remove previous image from folder
                unlink($usersImage);
            }
        }
        
        if( $request->file('gambar')){
            $image = $request->file('gambar');

            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = storage_path('app/public/thumbnail');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(1152, 800, function($constraint){
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $image_name);
        }

        $articles->judul = $request->judul?$request->judul : $articles->judul;
        $articles->slug = Str::slug($request->judul);
        $articles->deskripsi = $request->deskripsi?$request->deskripsi : $articles->deskripsi;
        $articles->konten = $request->konten?$request->konten : $articles->konten;
        $articles->category_id = $request->category_id?$request->category_id : $articles->category_id;
        $articles->user_id = auth()->user()->id;
        $articles->gambar = $request->file('gambar')?$image_name : $articles->gambar;
        $articles->update();

        return redirect()->route('adminartikel.index')->withInfo('Artikel Berhasil Diedit!');
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
        unlink(storage_path("app/public/thumbnail/{$articles->gambar}"));

        $articles->delete();

        return redirect()->route('adminartikel.index')->withDanger('Artikel Berhasil Dihapus!!!');
    }

    public function category()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(5);

        return view('admin.category', compact('categories'));
    }

    public function tambahcategory(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->route('categories.category')->with('success', 'Kategori Berhasil Ditambahkan!');
    }

    public function hapuscategory($id)
    {
        $categories = Category::find($id);

        $categories->delete();

        return redirect()->route('categories.category')->withDanger('Kategori Berhasil Dihapus!!!');
    }

    public function search(Request $request)
    {
        $cari = $request->search;

        $articles = Article::search($cari)->orderBy('id', 'DESC')->paginate(12);
        $articles->appends($request->only('search'));

        return view('admin.admin_artikel', compact('articles'));
    }

}
