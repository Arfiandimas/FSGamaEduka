<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Siswa;

use Image;

class PendaftaranSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::orderBy('id', 'DESC')->paginate(10);

        return view('admin.siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::all();

        return view('siswa.daftar', compact('programs'));
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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);

        $image = $request->file('foto');

        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = storage_path('app/public/foto');

        $resize_image = Image::make($image->getRealPath());

        $resize_image->resize(1152, 800, function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $image_name);


        Siswa::create([
            'name' => $request->name,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'umur' => $request->umur,
            'alamat_lengkap' => $request->alamat_lengkap,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'foto' => $image_name,
            'program_id' => $request->program_id
        ]);

        return view('siswa.infopendaftaran');
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
}
