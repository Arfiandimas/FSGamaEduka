@extends('layout.admin')

@section('title','Program')

@section('halaman','Program')

@section('content')

    <div class="container">

        <div class="tambah-program mx-auto">
            <a href="{{ route('program.create') }}"><img src="/img/plus.png" class="logo-programtambah" alt="">
            <h5 class="new-program">Tambah Program</h5></a>
        </div>

        @foreach ($programs as $program)
        <div class="section2wadah mx-auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/program/'.$program->gambar) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h5 class="section2judulprogram">{{ $program->name }}</h5>
                        <span class="section2clock">
                            <i class="far fa-clock"></i>
                            <p class="section2pertemuan">{{ $program->pertemuan }} Pertemuan</p>
                        </span>
                        <p>{!! Str::limit($program->deskripsi, 600, '...') !!}</p>
                    </div>
                </div>
            </div>
            <div class="optionprogram">
                <div class="wadahoptionprogram mx-auto">
                    <a href="{{ route('editprogram.edit', $program) }}" style="margin-right:20px;"><i class="fas fa-edit"></i></a>
                    <a href="{{ route('hapusprogram.destroy', $program) }}"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
        @endforeach
        {{$programs->appends(['programsdelete' => $programsdelete->currentPage()])->links()}} 
    </div>

    <div class="container">

        <h3 style="color:red;">Program Yang Telah Dihapus</h3>

        @foreach ($programsdelete as $progdel)
        <div class="section2wadah mx-auto" style="border-color:red;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/program/'.$progdel->gambar) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h5 class="section2judulprogram">{{ $progdel->name }}</h5>
                        <span class="section2clock">
                            <i class="far fa-clock"></i>
                            <p class="section2pertemuan">{{ $progdel->pertemuan }} Pertemuan</p>
                        </span>
                        <p>{!! Str::limit($progdel->deskripsi, 600, '...') !!}</p>
                    </div>
                </div>
            </div>
            <div class="optionprogram" style="border-color:red;">
                <div class="wadahoptionprogram mx-auto" style="width: 25px;">
                    <a href="{{ route('restoreprogram.restore', $progdel) }}"><i class="fas fa-trash-restore"></i></a>
                </div>
            </div>
        </div>
        @endforeach
        {{$programsdelete->appends(['programs' => $programs->currentPage()])->links()}} 
    </div>


@endsection