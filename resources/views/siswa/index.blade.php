<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/landing.css">
    <script src="https://kit.fontawesome.com/f45723ccd1.js" crossorigin="anonymous"></script>
    <title>Gama Eduka</title>
</head>

<body>
    {{-- Logo Mobile --}}
    <img src="/img/logo.png" class="img-fluid logo-mobile" alt="logo gama eduka">
    {{-- End Logo Mobile --}}
    
    {{-- Section 2 --}}
    <section>
    <div class="section1kiri">

                <div class="nav-desktop">
                <img src="/img/logo.png" class="logo-gama img-fluid" alt="logo gama eduka">
                    <div class="container container-a">
                        <div class="row">
                            <div class="col-2 offset-2">
                                <a href="/">Home</a>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('artikel.index') }}">Kabar</a>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('utama.about') }}">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-7 offset-3">
                            <div style="width:700px; height:450px; margin-top:100px; border: 5px solid #F8C470; position:relative; z-index:5;">
                                <div style="width:600px;" class="mx-auto">
                                    <img src="/img/gambar section 1.svg" alt="" style="width:600px; height: 400px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-left: 300px; width:400px; position: absolute;">
                    <h1 class="section1h1">Gama Eduka</h1>
                    <p class="section1p1">Let's Join Us, Upgrade</p>
                    <p class="section1p1">Your Skill</p>
                </div>

    </div>
    {{-- <div class="section2kanan">

    </div> --}}
    </section>
    {{-- End Section 2 --}}




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
            <hr style="color:white;">
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

    <script src="/js/jquery-3.4.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>