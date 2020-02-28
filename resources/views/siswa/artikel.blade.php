@extends('layout.app')

@section('title','Kabar Kami')

@section('navbar')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="/img/logo.png" class="logo-navbar" alt="logo gama eduka">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-satu" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-dua" href="#">Kabar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-tiga" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
@endsection

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
                <button type="button" class="btn baten">Komputer Dasar</button>
                <button type="button" class="btn baten">Komputer</button>
                <button type="button" class="btn baten">Komputer</button>
                <button type="button" class="btn baten">Komputer Dasar</button>
                <button type="button" class="btn baten">Komputer</button>
                <button type="button" class="btn baten">Komputer Dasar</button>
                <button type="button" class="btn baten">Komputer</button>
                <button type="button" class="btn baten">Komputer Dasar</button>
                <button type="button" class="btn baten">Komputer</button>
                <button type="button" class="btn baten">Komputer</button>
                <button type="button" class="btn baten">Komputer</button>
                <button type="button" class="btn baten">Komputer</button>
                <button type="button" class="btn baten">Komputer Dasar</button>
                <button type="button" class="btn baten">Komputer Dasar</button>
                <button type="button" class="btn baten">Komputer Dasar</button>
                <button type="button" class="btn baten">Komputer Dasar</button>
                <button type="button" class="btn baten">Komputer Dasar</button>
            </span>
        </div>
    </div>
    <!-- End Kategori -->

    <!-- Content -->
    <div class="container con-content">
        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
                <div class="card" style="width: 18rem;">
                    <img src="img/nurse.jpg" class="card-img-top image-article" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Card title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's
                            content.</p>
                    </div>
                    <p class="tgl">Feb 16, 2020</p>
                    <img src="img/arrow.png" class="arrow" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
                <div class="card" style="width: 18rem;">
                    <img src="img/Cook.jpg" class="card-img-top image-article" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Card title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's
                            content.</p>
                    </div>
                    <p class="tgl">Feb 16, 2020</p>
                    <img src="img/arrow.png" class="arrow" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
                <div class="card" style="width: 18rem;">
                    <img src="img/mechanic.png" class="card-img-top image-article" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Card title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's
                            content.</p>
                    </div>
                    <p class="tgl">Feb 16, 2020</p>
                    <img src="img/arrow.png" class="arrow" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
                <div class="card" style="width: 18rem;">
                    <img src="img/computer.jpg" class="card-img-top image-article" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Card title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's
                            content.</p>
                    </div>
                    <p class="tgl">Feb 16, 2020</p>
                    <img src="img/arrow.png" class="arrow" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
                <div class="card" style="width: 18rem;">
                    <img src="img/nurse.jpg" class="card-img-top image-article" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Card title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's
                            content.</p>
                    </div>
                    <p class="tgl">Feb 16, 2020</p>
                    <img src="img/arrow.png" class="arrow" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
                <div class="card" style="width: 18rem;">
                    <img src="img/computer.jpg" class="card-img-top image-article" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Card title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the
                            card's
                            content.</p>
                    </div>
                    <p class="tgl">Feb 16, 2020</p>
                    <img src="img/arrow.png" class="arrow" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    @endsection

    @section('footer')
    <!-- Footer -->
    <footer>
        <img src="img/logo.png" alt="logo gama eduka" class="image-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Kontak Kami</h4>
                    <h5>Alamat</h5>
                    <p>Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa
                        Yogyakarta 55281
                    </p>
                    <div style="display: flex;">
                        <button type="button" class="baten-footer">Email</button>
                        <p style="margin-top: auto; margin-bottom: 11px; margin-left: 15px;">Gamaeduka@gmail.com</p>
                    </div>
                    <div style="display: flex; margin-top: 5px;">
                        <button type="button" class="baten-footer">Phone</button>
                        <p style="margin-top: auto; margin-bottom: 11px; margin-left: 15px;"> 0814-4353-2121</p>
                    </div>
                    <div style="display: flex; margin-top: 5px;">
                        <button type="button" class="baten-footer">WA</button>
                        <p style="margin-top: auto; margin-bottom: 11px; margin-left: 15px;">0873-4545-0000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Tentang Kami</h4>
                    <p>LPK gama eduka adalah Lembaga Pendidikan yang bergerak di bidang komputer dasar. Kami siap
                        membantu anda untuk dapat bersaing di era 4.0 saat ini
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>Program Kami</h4>
                    <br>
                    <button type="button" class="baten-footer2">Android Developer</button>
                    <button type="button" class="baten-footer2">Komputer Dasar</button>
                    <button type="button" class="baten-footer2">Microsoft Office</button>
                    <button type="button" class="baten-footer2">Komputer Jaringan</button>
                    <button type="button" class="baten-footer2">Bahasa Inggris</button>
                </div>
            </div>
            <br>
            <hr>
            <div class="sosialmedia mx-auto">
                <a href=""><img style="width: 35px;" src="/img/facebook.png" alt=""></a>
                <a href=""><img style="width: 35px; margin-left: 50px; margin-right: 50px;" src="/img/instagram.png" alt=""></a>
                <a href=""><img style="width: 35px;" src="/img/twitter.png" alt=""></a>
            </div>
            <div class="copyright mx-auto">
                <img src="/img/copyright.png" style="width: 25px;" alt="copyright">
                <span style="margin-left: 5px; color: white;">2020 Gama Eduka</span>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    @endsection