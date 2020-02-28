<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/artikel.css">
    <link rel="stylesheet" href="/css/add_artikel.css">
    <title>@yield('title')</title>
</head>

<body>
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

    @yield('content')

    <script src="/js/jquery-3.4.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/gambar.js"></script>
</body>

</html>