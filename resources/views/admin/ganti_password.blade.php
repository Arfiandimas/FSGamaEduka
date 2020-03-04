@extends('layout.admin')

@section('title','Ganti Password')

@section('halaman','Ganti Password')

@section('content')
    <div class="container">
        <form action="" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="current_password">Password Sekarang</label>
                <input type="password" class="form-control" id="current_password" name="current_password">
            </div>

            <div class="form-group">
                <label for="new_password">Password Baru</label>
                <input type="password" class="form-control" id="new_password" name="new_password">
            </div>

            <div class="form-group">
                <label for="new_password_confirmation">Ulangi Password Baru</label>
                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
@endsection