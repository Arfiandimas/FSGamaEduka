<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

use Image;
use File;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::orderBy('id', 'DESC')->paginate(3, ['*'], 'programs');
        $programsdelete = Program::onlyTrashed()->orderBy('id', 'DESC')->paginate(3, ['*'], 'programsdelete');

        return view('admin.program', compact('programs', 'programsdelete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah_program');
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
            'pertemuan' => 'required|max:11',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);

        $image = $request->file('gambar');

        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = storage_path('app/public/program');

        if ($image->getClientOriginalExtension() != 'svg') {
            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(1152, 800, function($constraint){
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $image_name);
        } else {
            $image->move($destinationPath, $image_name);
        }

        Program::create([
            'name' => $request->name,
            'pertemuan' => $request->pertemuan,
            'deskripsi' => $request->deskripsi,
            'gambar' => $image_name
        ]);

        return redirect()->route('program.index')->with('success', 'Program Berhasil Ditambahkan!');
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
        $programs = Program::find($id);

        return view('admin.edit_program', compact('programs'));
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
        $programs = Program::find($id);
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'pertemuan' => 'required|max:11',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);

        if($request->hasFile('gambar'))
        {
            $usersImage = storage_path("app/public/program/{$programs->gambar}"); // get previous image from folder
            if (File::exists($usersImage)) { // unlink or remove previous image from folder
                unlink($usersImage);
            }
        }

        if( $request->file('gambar')){
            $image = $request->file('gambar');

            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = storage_path('app/public/program');

            if ($image->getClientOriginalExtension() != 'svg') {
                $resize_image = Image::make($image->getRealPath());

                $resize_image->resize(1152, 800, function($constraint){
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $image_name);
            } else {
                $image->move($destinationPath, $image_name);
            }
        }

        $programs->name = $request->name?$request->name : $programs->name;
        $programs->pertemuan = $request->pertemuan?$request->pertemuan : $programs->pertemuan;
        $programs->deskripsi = $request->deskripsi?$request->deskripsi : $programs->deskripsi;
        $programs->gambar = $request->file('gambar')?$image_name : $programs->gambar;
        $programs->update();

        return redirect()->route('program.index')->withInfo('Program Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();

        return redirect()->route('program.index')->withDanger('Program Berhasil Dihapus!!!');
    }

    public function restore($id)
    {
        $program = Program::onlyTrashed()->where('id',$id);
        $program->restore();
        return redirect()->route('program.index')->with('success', 'Program Berhasil Direstore!');
    }
}
