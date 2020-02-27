@extends('layout.app')

@section('title','Artikel')

@section('navbar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-satu" href="#">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-dua" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-tiga" href="#">Siswa Baru</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
@endsection

@section('content')
    <!-- Search -->
    <div class="container">
        <div class="row mx-auto">
            <div class="col-sm-6">
                <div class="tambah-artikel">
                    <img src="/img/plus.png" class="logo-plus" alt="">
                    <h5 class="new-artikel">Tambah Artikel</h5>
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
            <div class="card card-admin">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="/img/computer.jpg" class="gambar-card" alt="">
                    </div>
                    <div class="col-sm-7 card-kanan">
                        <h6>Judul Artikel</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi ad dolorem excepturi
                            necessitatibus dolor reprehenderit eligendi culpa quidem officia laboriosam libero quia,
                            quod
                            asperiores distinctio, repudiandae quis, amet aspernatur error?</p>
                        <div class="row kategori-waktu">
                            <div class="col-md-6">
                                <p class="kategori-admin">Komputer Dasar</p>
                            </div>
                            <div class="col-md-6">
                                <span>Feb 16, 2020</span>
                            </div>
                        </div>
                        <hr class=" hr">
                        <div class="card-img-kanan mx-auto">
                            <img src="/img/eye.png" alt="">
                            <img src="/img/edit.png" alt="">
                            <img src="/img/delete.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-admin">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="/img/computer.jpg" class="gambar-card" alt="">
                    </div>
                    <div class="col-sm-7 card-kanan">
                        <h6>Judul Artikel</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi ad dolorem excepturi
                            necessitatibus dolor reprehenderit eligendi culpa quidem officia laboriosam libero quia,
                            quod
                            asperiores distinctio, repudiandae quis, amet aspernatur error?</p>
                        <div class="row kategori-waktu">
                            <div class="col-md-6">
                                <p class="kategori-admin">Komputer Dasar</p>
                            </div>
                            <div class="col-md-6">
                                <span>Feb 16, 2020</span>
                            </div>
                        </div>
                        <hr class=" hr">
                        <div class="card-img-kanan mx-auto">
                            <img src="/img/eye.png" alt="">
                            <img src="/img/edit.png" alt="">
                            <img src="/img/delete.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection