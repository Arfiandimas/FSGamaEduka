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
                    <form action="{{ route('adminarticle.search') }}" method="GET">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search" id="search">
                        <img src="/img/search.png" class="logo-search-admin" alt="">
                    </form>
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
                        <img src="{{ asset('storage/thumbnail/'.$article->gambar) }}" class="gambar-card" alt="">
                    </div>
                    <div class="col-sm-7 card-kanan">
                        <h6>{{ $article->judul }}</h6>
                        <p class="paragraf-konten">{{ Str::limit($article->deskripsi, 250, '...') }}</p>
                        <div class="row kategori-waktu">
                            <div class="col-md-6">
                                <p class="kategori-admin">{{ $article->category->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <span>{{$article->created_at->format('M d, Y')}}</span>
                            </div>
                        </div>
                        <hr class=" hr">
                        <div class="card-img-kanan mx-auto">
                            <a href="{{ route('artikel.show', $article->slug) }}"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('tambahartikel.edit', $article) }}" style="margin-right:20px; margin-left:20px;"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('hapusartikel.destroy', $article) }}"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{$articles->links()}}  

        </div>

    </div>
    <!-- End Content -->

@endsection