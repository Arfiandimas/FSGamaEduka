@extends('layout.admin')

@section('title','Tambah Program')

@section('halaman','Tambah Program')

@section('content')
    <div class="container">
        <form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h6>Nama Program</h6>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="name">
            </div>

            <h6>Jumlah Pertemuan</h6>
            <div class="input-group mb-3">
                <input type="number" class="form-control" aria-describedby="basic-addon1" name="pertemuan">
            </div>

            <h6>Deskripsi Program</h6>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi"></textarea>
            </div>

            <h6>Gambar</h6>
            <div style="margin-bottom:30px;">
                <input type="file" id="gambar" name = "gambar">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>


    <script>
        CKEDITOR.replace( 'deskripsi' , {
            width: 1120,
            height: 300,
        });
    </script>
@endsection