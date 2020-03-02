@extends('layout.admin')

@section('title','Tambah Artikel')

@section('halaman','Tambah Artikel')

@section('content')

    <!-- Content -->
    <div class="container">
        <form action="{{ route('tambahartikel.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h6>Judul</h6>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="judul">
            </div>

            <h6>Gambar</h6>
            <input type="file" id="gambar" name = "gambar">
            {{-- <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                        Browse… <input type="file" id="imgInp">
                    </span>
                </span>
                <input type="text" class="nama-gambar" id="gambar" name="gambar">
            </div>
            <img id='img-upload' /> --}}

            <h6>Kategori</h6>
            <div class="input-group mb-3">
                <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <h6>Deskripsi</h6>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="3" name="deskripsi"></textarea>
            </div>

            <h6>Konten</h6>
            <div class="input-group mb-3">
                <textarea class="form-control" style="height: 600px;" rows="3" name="konten"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        CKEDITOR.replace( 'konten' );
    </script>
    <!-- End Content -->
@endsection