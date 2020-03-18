<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;
use App\Category;

use Image;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(10);
        $categories = Category::orderBy('id', 'DESC')->paginate(5);

        return view('admin.admin_artikel', compact('articles', 'categories'));
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

        $this->validate($request, [
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

        $this->validate($request, [
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);
        
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

    public function tambahcategory(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->judul)
        ]);

        return redirect()->route('adminartikel.index');
    }

    public function hapuscategory($id)
    {
        $categories = Category::find($id);

        $categories->delete();

        return redirect()->route('adminartikel.index');
    }

}
