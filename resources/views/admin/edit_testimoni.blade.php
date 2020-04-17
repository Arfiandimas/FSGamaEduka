@extends('layout.admin')

@section('title','Edit Testimoni')

@section('halaman','Edit Testimoni')

@section('content')
<div class="container mb-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('update_testimoni.update', $testimoni) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h6>Nama Siswa</h6>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" value="{{ $testimoni->name }}">
        </div>

        <h6>Foto</h6>
        <div class="logoContainer">
            <img src="{{ asset('storage/testimoni/'.$testimoni->foto) }}">
        </div>
        <div class="fileContainer sprite">
            <input type="file"  value="Choose File" id="foto" name="foto">
        </div>
        <br>

        <h6>Program</h6>
        <div class="input-group mb-3">
            <select name="program_id" class="form-control">
                @foreach ($programs as $program)
                    <option 
                        value="{{ $program->id }}"
                        @if ($program->id === $testimoni->program_id)
                            selected
                        @endif
                        >
                        {{ $program->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <h6>Kesan</h6>
        <div class="input-group mb-3">
            <textarea class="form-control" rows="3" id="kesan" name="kesan">{{ $testimoni->kesan }}</textarea>
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