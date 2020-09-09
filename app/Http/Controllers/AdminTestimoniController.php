<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Testimoni;

use Image;
use File;

class AdminTestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::orderBy('id', 'DESC')->paginate(12);

        return view('admin.admin_testimoni', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();

        return view('admin.tambah_testimoni', compact('programs'));
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
            'name' => 'required|max:255',
            'kesan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);

        $image = $request->file('foto');

        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = storage_path('app/public/testimoni');

        if ($image->getClientOriginalExtension() != 'svg') {
            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(1152, 800, function($constraint){
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $image_name);
        } else {
            $image->move($destinationPath, $image_name);
        }

        Testimoni::create([
            'name' => $request->name,
            'foto' => $image_name,
            'program_id' => $request->program_id,
            'kesan' => $request->kesan
        ]);

        return redirect()->route('admin_testimoni.index')->with('success', 'Testimoni Berhasil Ditambahkan!');
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
        $testimoni = Testimoni::find($id);
        $programs = Program::all();

        return view('admin.edit_testimoni', compact('testimoni', 'programs'));
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
        $testimoni = Testimoni::find($id);

        $this->validate($request, [
            'name' => 'required|max:255',
            'kesan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);

        if($request->hasFile('foto'))
        {
            $usersImage = storage_path("app/public/testimoni/{$testimoni->foto}"); // get previous image from folder
            if (File::exists($usersImage)) { // unlink or remove previous image from folder
                unlink($usersImage);
            }
        }

        if($request->file('foto')){
            $image = $request->file('foto');

            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = storage_path('app/public/testimoni');

            if ($image->getClientOriginalExtension() != 'svg') {
                $resize_image = Image::make($image->getRealPath());

                $resize_image->resize(1152, 800, function($constraint){
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $image_name);
            } else {
                $image->move($destinationPath, $image_name);
            }
        }
        
        $testimoni->name = $request->name?$request->name : $testimoni->name;
        $testimoni->foto = $request->file('foto')?$image_name : $testimoni->foto;
        $testimoni->program_id = $request->program_id?$request->program_id : $testimoni->program_id;
        $testimoni->kesan = $request->kesan?$request->kesan : $testimoni->kesan;
        $testimoni->update();



        return redirect()->route('admin_testimoni.index')->withInfo('Testimoni Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);
        unlink(storage_path("app/public/testimoni/{$testimoni->foto}"));
        $testimoni->delete();

        return redirect()->route('admin_testimoni.index')->withDanger('Testimoni Berhasil Dihapus!!!');
    }
}
