@extends('layout.app')

@section('title','Tambah Artikel')

@section('content')
    <h4 class="header mx-auto">Tambah Artikel</h4>

    <!-- Content -->
    <div class="container">
        <h6>Judul</h6>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <h6>Slug</h6>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <h6>Gambar</h6>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp">
                </span>
            </span>
            <input type="text" class="nama-gambar" readonly>
        </div>
        <img id='img-upload' />

        <h6>Kategori</h6>
        <div class="input-group mb-3">
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <h6>Deskripsi</h6>
        <div class="input-group mb-3">
            <textarea class="form-control" rows="3"></textarea>
        </div>

        <h6>Konten</h6>
        <div class="input-group mb-3">
            <textarea class="form-control" style="height: 600px;" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary">Simpan</button>
    </div>
    <!-- End Content -->
@endsection