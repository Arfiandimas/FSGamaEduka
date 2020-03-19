@extends('layout.admin')

@section('title','Edit Siswa')

@section('halaman','Edit Siswa')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h4 style="text-align: center;">Form Pendaftaran Gama Eduka</h4>
    <br>
    <!-- general form elements -->
    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('update_siswa.update', $siswa) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$siswa->name}}">
                </div>
                <div class="form-group">
                    <label for="pendidikanterakhir">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{$siswa->pendidikan_terakhir}}">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" value="{{$siswa->umur}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea class="form-control" rows="3" id="alamat_lengkap" name="alamat_lengkap" >{{$siswa->alamat_lengkap}}</textarea>
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telepon / WhatsApp</label>
                    <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{$siswa->no_telp}}">
                </div>
                <div class="form-group">
                    <label for="email">Email (opsional)</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$siswa->email}}">
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <div class="logoContainer">
                        <img src="{{ asset('storage/foto/'.$siswa->foto) }}">
                    </div>
                    <div class="fileContainer sprite">
                        <input type="file" value="Choose File" id="foto" name="foto">
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="program">Program Yang Dipilih</label>
                    <select class="form-control" id="program" name="program_id">
                        @foreach ($programs as $program)
                            <option 
                                value="{{ $program->id }}"
                                @if ($program->id === $siswa->program_id)
                                    selected
                                @endif
                                >
                                {{ $program->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection