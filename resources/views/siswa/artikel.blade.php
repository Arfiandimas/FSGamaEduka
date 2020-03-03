@extends('layout.app')

@section('title','Kabar Kami')

@section('content')
    <!-- Search -->
    <div class="search  mx-auto">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <img src="img/search.png" class="logo-search" alt="">
    </div>
    <!-- End Search -->

    <!-- Kategori -->
    <div class="container">
        <div class="row justify-content-md-center">
            <span class="col-md-10">

                <a href="" type="button" class="btn baten">All</a>
                @foreach ($categories as $category)
                    <a href="{{ route('artikel.bycategory', $category->id) }}" type="button" class="btn baten">{{ $category->name }}</a>
                @endforeach

            </span>
        </div>
    </div>
    <!-- End Kategori -->

    <!-- Content -->
    <div class="container con-content">
        <div class="row justify-content-md-center">

            @foreach ($articles as $article)
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
                <div class="card">
                    <img src="{{ asset('storage/thumbnail/'.$article->gambar) }}" class="card-img-top img-fluid image-article" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">{{ $article->judul }}</h6>
                        <p class="card-text">{{ Str::limit($article->deskripsi, 150, '...') }}</p>
                    </div>
                    <p class="tgl">Feb 16, 2020</p>
                    <a href="" class="arrow"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- End Content -->
    @endsection