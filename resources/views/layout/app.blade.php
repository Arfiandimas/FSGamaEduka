<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/f45723ccd1.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>

<body>
    <!-- Navbar -->
    <img src="/img/logo.png" class="logo-navbar img-fluid logo-mobile" alt="logo gama eduka">
    <nav class="navbar navbar-expand-lg navbar-light nav-desktop">
        <img src="/img/logo.png" class="logo-navbar img-fluid" alt="logo gama eduka">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-satu" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-dua" href="{{ route('artikel.index') }}">Kabar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-tiga" href="{{ route('utama.about') }}">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->


    @yield('content')


    {{-- Navabar Mobile --}}
    <nav class="nav-mobile">
        <div class="navbar shadow-lg">
            <a href="/" style="margin-left:10px;">
                <i class="fas fa-home fa-lg"></i>
                <p>Home</p>
            </a>
            <a href="{{ route('artikel.index') }}">
                <i class="fas fa-rss fa-lg" style="margin-left:12px;"></i>
                <p>Kabar</p>
            </a>
            <a href="{{ route('utama.about') }}" style="margin-right:10px;">
                <i class="far fa-address-card fa-lg" style="margin-left:22px;"></i>
                <p>About Us</p>
            </a>
        </div>
    </nav>
    {{-- End Navabar Mobile --}}

    <!-- Footer -->
    <footer>
        <img src="/img/logo.png" alt="logo gama eduka" class="image-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Kontak Kami</h4>
                    <h5>Alamat</h5>
                    <p>Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa
                        Yogyakarta 55281
                    </p>
                    <div class="footerwadahkontak">
                        <button type="button" class="baten-footer">Email</button>
                        <p class="footerparagraf">Gamaeduka@gmail.com</p>
                    </div>
                    <div class="footerwadahkontak">
                        <button type="button" class="baten-footer">Phone</button>
                        <p class="footerparagraf"> 0814-4353-2121</p>
                    </div>
                    <div class="footerwadahkontak">
                        <button type="button" class="baten-footer">WA</button>
                        <p class="footerparagraf">0873-4545-0000</p>
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
            <hr style="color:white;">
            <div class="sosialmedia mx-auto">
                <a href=""><img class="footerlogososlialmedia" src="/img/facebook.png" alt=""></a>
                <a href=""><img class="footerlogososlialmediatengah" src="/img/instagram.png" alt=""></a>
                <a href=""><img class="footerlogososlialmedia" src="/img/twitter.png" alt=""></a>
            </div>
            <div class="copyright mx-auto">
                <img src="/img/copyright.png" style="width: 25px;" alt="copyright">
                <span style="margin-left: 5px; color: white;">2020 Gama Eduka</span>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="/js/jquery-3.4.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>