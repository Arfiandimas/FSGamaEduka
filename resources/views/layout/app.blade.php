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
    
    @yield('navbar')

    @yield('content')

    @yield('footer')

    <script src="/js/jquery-3.4.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/gambar.js"></script>
</body>

</html>