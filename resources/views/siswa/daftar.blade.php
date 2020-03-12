@extends('layout.app')

@section('title','Daftar Gama Eduka')

@section('content')
    <div class="container">
        <h4 style="text-align: center;">Form Pendaftaran Gama Eduka</h4>
        <h5 style="margin-top: 20px;">Silahkan Isi Data Diri Dengan Benar Dan Lengkap</h5>
        <form action="" method="POST" style="margin-bottom:20px;">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="pendidikanterakhir">Pendidikan Terakhir</label>
                <input type="text" class="form-control" id="pendidikanterakhir" name="pendidikan_terakhir" placeholder="Masukkan pendidikan terakhir" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea class="form-control" rows="3" id="alamat" name="alamat_lengkap" placeholder="Masukkan alamat lengkap" required></textarea>
            </div>
            <div class="form-group">
                <label for="no_telp">Nomor Telepon / WhatsApp</label>
                <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan nomor telepon atau whatsapp" required>
            </div>
            <div class="form-group">
                <label for="email">Email (opsional)</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email">
            </div>

            <div class="form-group">
                <label for="program">Program Yang Dipilih</label>
                <select class="form-control" id="program" name="program_id">
                    @foreach ($programs as $program)
                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
@endsection