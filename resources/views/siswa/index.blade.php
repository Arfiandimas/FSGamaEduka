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
    <div class="container-fluid mb-5 position-fixed" style="width:100%; bottom: 0; z-index:100;">
        <a href="" class="float-right">
            <img src="/img/whatsappfixed.png" class="float-right mr-3 mb-3" style="width:10%;" alt="whatsapp">
        </a>
    </div>
    {{-- Logo Mobile --}}
    <img src="/img/logo.png" class="img-fluid logo-mobile" alt="logo gama eduka">
    {{-- End Logo Mobile --}}
    
    {{-- Section 1 --}}
    <section class="section1">
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

                <div class="section1bagiandesk">
                    <div class="container">
                        <div class="row">
                            <div class="col-7 offset-3">
                                <div class="divgambar">
                                    <div class="wadahgambarsection1" class="mx-auto">
                                        <img class="gambarsection1" src="/img/gambar section 1.svg" alt="">
                                    </div>
                                    <div class="divtulisan ">
                                        <h1 class="section1h1">Gama Eduka</h1>
                                        <p class="section1p1">Let's Join Us, Upgrade</p>
                                        <p class="section1p2">Your Skill</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section1bagianmobile">
                    <div class="container">
                        <div class="divgambarmobile">
                            <div class="wadahgambarmobile mx-auto">
                                <img class="gambarsection1mobile" src="/img/gambar section 1.svg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="divtulisanmobile">
                        <div class="wadahtulisanmobile mx-auto">
                            <h1 class="section1h1mobile">Gama Eduka</h1>
                            <p class="section1p1mobile">Let's Join Us, Upgrade</p>
                            <p class="section1p2mobile">Your Skill</p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid bungkussection1baten">
                    <div class="row">
                        <div class="col-8">
                            <a href="#bergabung" type="button" class="section1baten section1batenkanan">Bergabung</a>
                            <a href="#testimoni" type="button" class="section1baten">Testimoni</a>
                            <a href="#kabar" type="button" class="section1baten">Kabar Kami</a>
                            <a href="#service" type="button" class="section1baten">Service</a>
                            <a href="#program" type="button" class="section1baten">Program</a>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>

                <a href="#palingbawah">
                    <img src="/img/downdirection.png" alt="" class="downdirection">
                </a>
    </div>
    {{-- <div class="section2kanan">

    </div> --}}
    </section>
    {{-- End Section 1 --}}



    {{-- Section 2 --}}
        <div class="section2" id="program">
            <div class="container">
                <h5 class="section2h5">Program Kami</h5>
                <div class="section2wadah mx-auto">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            @foreach ($programs as $key => $program)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">    
                                <div class="container-fluid pt-3 pb-3">
                                    <div class="row">
                                        <div class="col-md-5 offset-1 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('storage/program/'.$program->gambar) }}" alt="" class="img-fluid section2gambarasset" style="width:100%; height:auto;">
                                        </div>
                                        <div class="col-md-5 text-justify">
                                            <h5 class="section2judulprogram">{{ $program->name }}</h5>
                                            <span class="section2clock">
                                                <i class="far fa-clock"></i>
                                                <p class="section2pertemuan">{{ $program->pertemuan }} Pertemuan</p>
                                            </span>
                                            <p>{!! Str::limit($program->deskripsi, 600, '...') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="fas fa-chevron-left" style="color: black;" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="fas fa-chevron-right" style="color: black;" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                </div>
            </div>
        </div>
    {{-- End Section 2 --}}



    {{-- Section 3 --}}
    <section class="section3 section3kiri" id="service">
        <div class="container">
            <h5>Kenapa Harus Memilih Kami</h5>
            <div class="kotakkuning mx-auto">
                <div class="container">

                    {{-- Row Desktop --}}
                    <div class="row section3rowdesk">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card section3cardkiri">
                                        <img src="/img/teacher.png" class="section3wadahcardimg mx-auto rounded-circle">
                                        <b>Tenaga Pengajar Handal</b>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card section3cardkanan">
                                        <img src="/img/mind.png" class="section3wadahcardimg mx-auto rounded-circle">
                                        <b>Ilmu Praktis</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card section3cardkiri">
                                        <img src="/img/library.png" class="section3wadahcardimg mx-auto rounded-circle">
                                        <b>Fasilitas Lengkap</b>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card section3cardkanan">
                                        <img src="/img/kerja.png" class="section3wadahcardimg mx-auto rounded-circle">
                                        <b>Langsung Diterima Di Dunia Kerja</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h4 class="section3h4">Service Terbaik Kami</h4>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eaque iusto delectus rerum, maiores, nostrum iure iste minima aspernatur at illum, explicabo quos rem. Placeat obcaecati rem necessitatibus veniam odit cumque esse tenetur eum officia nesciunt consectetur praesentium voluptates, ut tempore.</p>
                        </div>
                    </div>
                    {{-- End Row Desktop --}}

                    <div class="row section3rowmobile">
                        <div class="col-6">
                            <div class="card section3cardkiri">
                                <img src="/img/teacher.png" class="section3wadahcardimg mx-auto rounded-circle">
                                <b>Tenaga Pengajar Handal</b>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card section3cardkanan">
                                <img src="/img/mind.png" class="section3wadahcardimg mx-auto rounded-circle">
                                <b>Ilmu Praktis</b>
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="card section3cardkiri">
                                <img src="/img/library.png" class="section3wadahcardimg mx-auto rounded-circle">
                                <b>Fasilitas Lengkap</b>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card section3cardkanan">
                                <img src="/img/kerja.png" class="section3wadahcardimg mx-auto rounded-circle">
                                <b>Langsung Diterima Di Dunia Kerja</b>
                            </div>
                        </div>
                    </div>

                    <div class="section3rowmobile">
                        <h4 class="section3h4mobile">Service Terbaik Kami</h4>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eaque iusto delectus rerum, maiores, nostrum iure iste minima aspernatur at illum, explicabo quos rem. Placeat obcaecati rem necessitatibus veniam odit cumque esse tenetur eum officia nesciunt consectetur praesentium voluptates, ut tempore. lorem20</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- End Section 3 --}}


    {{-- Section 4 --}}
    <div class="section4" id="kabar">
        <div class="container">
            <h5 class="section4h5">Kabar Terbaru</h5>
            <div class="row section4rowdesk" style="margin-top:25px;">
                
                @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card mx-auto section4card">
                        <img src="{{ asset('storage/thumbnail/'.$article->gambar) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">{{ $article->judul }}</h6>
                        <p class="card-text">{{ Str::limit($article->deskripsi, 150, '...') }}</p>   
                        <div class="section4keterangan">
                            <p class="tgl">{{$article->created_at->format('M d, Y')}}</p>
                            <a href="{{ route('artikel.show', $article->slug) }}" class="arrow"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
                
            </div>

            <div class="row section4rowmobile" style="margin-top:25px;">
                
                @foreach ($articles as $article)
                <div class="col-md-6">
                    <div class="card mx-auto section4card">
                        <img src="{{ asset('storage/thumbnail/'.$article->gambar) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">{{ $article->judul }}</h6>
                        <p class="card-text">{{ Str::limit($article->deskripsi, 150, '...') }}</p>   
                        <div class="section4keterangan">
                            <p class="tgl">{{$article->created_at->format('M d, Y')}}</p>
                            <a href="{{ route('artikel.show', $article->slug) }}" class="arrow"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach

            </div>
            <a href="{{ route('artikel.index') }}"><p class="section4showall">Show All</p></a>
        </div>
    </div>
    {{-- End Section 4 --}}


    {{-- Section 5 --}}
    <div class="section5 section5kiri" id="testimoni">
        <div class="container">
            <h5 class="section5h5">Kata Mereka</h5>
            <h5 class="section5h5judul">Testimoni Siswa Gama Eduka</h5>

            <div class="row section5rowdesk">

                @foreach ($testimoni as $test)
                <div class="col-md-4">
                    <div class="card mx-auto section5card" style="width: 100%;">
                    <img src="{{ asset('storage/testimoni/'.$test->foto) }}" class="section5fotomuka rounded-circle mx-auto">
                    <p class="section5nama">{{ $test->name }}</p>
                    <p class="section5program">{{ $test->program->name }}</p>
                        <div class="container">
                            <span class="section5kesan">{!! $test->kesan !!}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="row section5rowmobile">

                @foreach ($testimoni as $test)
                    <div class="col-12">
                        <div class="card mx-auto section5card" style="width: 100%;">
                        <img src="{{ asset('storage/testimoni/'.$test->foto) }}" class="section5fotomuka rounded-circle mx-auto">
                        <p class="section5nama">{{ $test->name }}</p>
                        <p class="section5program">{{ $test->program->name }}</p>
                            <div class="container">
                                <span class="section5kesan">{!! $test->kesan !!}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <a href="{{ route('utama.testimoni') }}"><p class="section4showall">Show All</p></a>
        </div>
    </div>
    {{-- End Section 5 --}}


    {{-- Section 6 --}}
    <div class="section6" id="bergabung">
        <div class="container">
            <h5 class="section6h5">Bergabung</h5>
            <div class="row section6container">
                <div class="col-6">
                    <img src="/img/bergabung.svg" alt="">
                </div>
                <div class="col-6">
                    <h1 class="section6h1">Let's Join Us</h1>
                    <a href="{{ route('daftar.create') }}" class="btn btn-primary section6button">Daftar !</a>
                </div>
            </div>

            <h5 class="section6temukan">Temukan Kami</h5>

            <iframe class="section6maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15810.361392119143!2d110.2517644!3d-7.8331065!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x507ed87f3d4179a9!2sgama%20eduka!5e0!3m2!1sid!2sid!4v1585153382996!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
        </div>
    </div>
    {{-- End Section 6 --}}


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
    <footer id="palingbawah">
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
                    @foreach ($programs as $program)
                    <button type="button" class="baten-footer2">{{ $program->name }}</button>
                    @endforeach
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