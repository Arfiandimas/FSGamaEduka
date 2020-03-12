<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/artikel.css">
    <link rel="stylesheet" href="/css/add_artikel.css">
    <link rel="stylesheet" href="/css/program.css">
    <link rel="stylesheet" href="/css/showtestimoni.css">

    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <script src="https://kit.fontawesome.com/f45723ccd1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <title>@yield('title')</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
  
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
  
      </nav>
      <!-- /.navbar -->
  
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('adminartikel.index') }}" class="brand-link">
          <span class="brand-text font-weight-light">Dashboaard Admin</span>
        </a>
  
        <!-- Sidebar -->
          <!-- Sidebar user panel (optional) -->
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('adminartikel.index') }}" class="nav-link">
                  <i class="far fa-newspaper"></i>
                  <p>
                    Artikel
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('program.index') }}" class="nav-link">
                  <i class="far fa-calendar"></i>
                  <p>
                    Program
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin_testimoni.index') }}" class="nav-link">
                  <i class="fas fa-comments"></i>
                  <p>
                    Testimoni
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('password.index') }}" class="nav-link">
                  <i class="fas fa-key"></i>
                  <p>
                    Ganti Password
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>
                    Logout
                  </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        <!-- /.sidebar -->
      </aside>
  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">@yield('halaman')</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
  
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">

        @yield('content')


            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
      <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </div>

    <script src="/js/jquery-3.4.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    {{-- <script src="/js/gambar.js"></script> --}}
    <script src="/js/adminlte.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>