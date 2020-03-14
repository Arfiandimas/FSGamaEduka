@extends('layout.admin')

@section('title','Tambah Testimoni')

@section('halaman','Tambah Testimoni')

@section('content')
<div class="container">
    <form action="{{ route('tambah_testimoni.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h6>Nama Siswa</h6>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" required>
        </div>

        <h6>Foto</h6>
        <div class="logoContainer">
            <img src="/img/photo.png">
        </div>
        <div class="fileContainer sprite">
            <input type="file" value="Choose File" id="foto" name="foto" required>
        </div>
        <br>

        <h6>Program</h6>
        <div class="input-group mb-3">
            <select class="form-control" id="exampleFormControlSelect1" name="program_id">
                @foreach ($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                @endforeach
            </select>
        </div>

        <h6>Kesan</h6>
        <div class="input-group mb-3">
            <textarea class="form-control" rows="3" id="kesan" name="kesan" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>


<script>
    CKEDITOR.replace( 'kesan' , {
        width: 1120,
        height: 300,
    });
</script>
@endsection