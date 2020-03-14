@extends('layout.admin')

@section('title','Edit Program')

@section('halaman','Edit Program')

@section('content')
<div class="container">
    <form action="{{ route('program.update', $programs) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h6>Nama Program</h6>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="{{ $programs->name }}">
        </div>

        <h6>Jumlah Pertemuan</h6>
        <div class="input-group mb-3">
            <input type="number" class="form-control" aria-describedby="basic-addon1" name="pertemuan" value="{{ $programs->pertemuan }}">
        </div>

        <h6>Deskripsi Program</h6>
        <div class="input-group mb-3">
            <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi">{{ $programs->deskripsi }}</textarea>
        </div>

        <h6>Gambar</h6>
        <div style="margin-bottom:30px;">
            <input type="file" id="gambar" name = "gambar">
        </div>
        <div>
            <img id="img-upload"  style="max-width:400px" src="{{ asset('storage/program/'.$programs->gambar) }}"/>
        </div>
        <br>
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
