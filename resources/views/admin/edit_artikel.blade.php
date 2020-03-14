@extends('layout.admin')

@section('title','Tambah Artikel')

@section('halaman','Edit Artikel')

@section('content')

    <!-- Content -->
    <div class="container">
        <form action="{{ route('tambahartikel.update', $articles) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h6>Judul</h6>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="judul" value="{{ $articles->judul }}">
            </div>

            <h6>Gambar</h6>
            <div class="logoContainer">
                <img src="{{ asset('storage/thumbnail/'.$articles->gambar) }}">
            </div>
            <div class="fileContainer sprite">
                <input type="file"  value="Choose File" id="gambar" name="gambar">
            </div>
            <br>
            <br>

            <h6>Kategori</h6>
            <div class="input-group mb-3">
                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option 
                            value="{{ $category->id }}"
                            @if ($category->id === $articles->category_id)
                                selected
                            @endif
                            >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <h6>Deskripsi</h6>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="3" name="deskripsi">{{ $articles->deskripsi }}</textarea>
            </div>

            <h6>Konten</h6>
            <div class="input-group mb-3">
                <textarea class="form-control" style="height: 600px;" rows="3" name="konten" id="konten">{{ $articles->konten }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
        
    <script>
        CKEDITOR.replace( 'konten' , {
            width: 1120,
            height: 600,
        });
    </script>
    <!-- End Content -->
@endsection