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
        // $siswa = Siswa::orderBy('id', 'DESC')->get();

        return view('admin.siswa');
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

    public function getdatasiswa()
    {
        $siswa = Siswa::select('siswas.*');

        return \DataTables::of($siswa)
        ->editColumn('created_at', function ($user) {
            return $user->created_at->format('M d, Y');
        })
        ->editColumn('foto', function ($foto) {
            return '<img style="width:80px;" src="{{ asset("storage/foto/".$foto->foto) }}" alt="">';
        })
        ->editColumn('program_id', function ($program) {
            return $program->program->name;
        })
        ->addColumn('aksi', function($s){
            return '<a href="#" class="btn btn-warning btn-sm">Edit</a> <a href="#" class="btn btn-danger btn-sm">Hapus</a>';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }
}
