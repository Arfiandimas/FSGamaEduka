@extends('layout.admin')

@section('title','Artikel')

@section('halaman','Artikel')

@section('content')
    <!-- Search -->
    <div class="container">
        <div class="row mx-auto">
            <div class="col-sm-6">
                <div class="tambah-artikel">
                    <a href="{{ route('tambahartikel.create') }}"><img src="/img/plus.png" class="logo-plus" alt="">
                    <h5 class="new-artikel">Tambah Artikel</h5></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="search-admin">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <img src="/img/search.png" class="logo-search-admin" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Search -->

    <!-- Content -->
    <div class="container">
        <div class="baris-card mx-auto">

            @foreach ($articles as $article)
            <div class="card card-admin">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="/img/{{ $article->gambar }}" class="gambar-card" alt="">
                    </div>
                    <div class="col-sm-7 card-kanan">
                        <h6>{{ $article->judul }}</h6>
                        {{-- <p>{{ $article->deskripsi }}</p> --}}
                        <p class="paragraf-konten">{{ Str::limit($article->konten, 250, '...') }}</p>
                        <div class="row kategori-waktu">
                            <div class="col-md-6">
                                <p class="kategori-admin">{{ $article->category->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <span>Feb 16, 2020</span>
                            </div>
                        </div>
                        <hr class=" hr">
                        <div class="card-img-kanan mx-auto">
                            <img src="/img/eye.png" alt="">
                            <a href="{{ route('tambahartikel.edit', $article) }}"><img src="/img/edit.png" alt=""></a>
                            <a type="submit" href="{{ route('hapusartikel.destroy', $article) }}"><img src="/img/delete.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- End Content -->
@endsection