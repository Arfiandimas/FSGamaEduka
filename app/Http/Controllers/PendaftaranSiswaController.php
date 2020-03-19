<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Siswa;

use Image;
use File;

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
            'name' => 'required|max:255',
            'pendidikan_terakhir' => 'required|max:255',
            'umur' => 'required',
            'alamat_lengkap' => 'required',
            'no_telp' => 'required|max:15',
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
        $siswa = Siswa::find($id);
        $programs = Program::all();

        return view('admin.edit_siswa', compact('siswa', 'programs'));
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
        $siswa = Siswa::find($id);

        $this->validate($request, [
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048'
        ]);

        if($request->file('foto')){
            $image = $request->file('foto');

            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = storage_path('app/public/foto');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(1152, 800, function($constraint){
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $image_name);
        }

        $siswa->name = $request->name?$request->name : $siswa->name;
        $siswa->pendidikan_terakhir = $request->pendidikan_terakhir?$request->pendidikan_terakhir : $siswa->pendidikan_terakhir;
        $siswa->umur = $request->umur?$request->umur : $siswa->umur;
        $siswa->alamat_lengkap = $request->alamat_lengkap?$request->alamat_lengkap : $siswa->alamat_lengkap;
        $siswa->no_telp = $request->no_telp?$request->no_telp : $siswa->no_telp;
        $siswa->email = $request->email?$request->email : $siswa->email;
        $siswa->foto = $request->file('foto')?$image_name : $siswa->foto;
        $siswa->program_id = $request->program_id?$request->program_id : $siswa->program_id;
        $siswa->update();

        return redirect()->route('siswa.index')->withInfo('Data Siswa Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        unlink(storage_path("app/public/foto/{$siswa->foto}"));
        $siswa->delete();

        return redirect()->route('siswa.index')->withDanger('Siswa Berhasil Dihapus!!!');
    }

    public function getdatasiswa()
    {
        $siswa = Siswa::select('siswas.*');

        return \DataTables::of($siswa)
        ->editColumn('created_at', function ($user) {
            return $user->created_at->format('M d, Y');
        })
        ->editColumn('program_id', function ($program) {
            return $program->program->name;
        })
        ->addColumn('aksi', function($data){
            $button = '<a href="/admin/siswa/'. $data->id .'/edit" class="edit btn btn-warning btn-sm">Edit</a>';
            $button .= '&nbsp;&nbsp;&nbsp;<a href="/admin/siswa/'. $data->id .'/delete" class="hapus btn btn-danger btn-sm">Hapus</a>';
            $button .= '&nbsp;&nbsp;&nbsp;<a href="/admin/siswa/'. $data->foto .'/download" class="hapus btn btn-secondary btn-sm"><i class="fas fa-download"></i></a>';
            return $button;
        })
        ->orderColumn('name', 'id $1')
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function downloadFoto($foto)
    {
        return response()->download(storage_path("app/public/foto/{$foto}"));
    }
}
