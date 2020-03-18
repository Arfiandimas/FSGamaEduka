@extends('layout.admin')

@section('title','Artikel')

@section('halaman','Artikel')

@section('content')
    <!-- Search -->
    <div class="container">

        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Kategori</h3>
                    <a href="" class="float-right" data-toggle="modal" data-target="#exampleModal"><span><i class="fas fa-plus-square"></i></span> Tambah Kategori</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table class="table table-bordered">
                        <thead>   
                        <tr>
                            <th>Kategori Artikel</th>
                            <th style="width: 40px">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td><a href="{{ route('hapuscategory.hapuscategory', $category) }}" class="btn btn-danger btn-sm">Hapus</button></td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                    <ul class="float-right" style="height:20px">
                        {{ $categories->links() }}
                    </ul>
                    </div>
                </div>
                <!-- /.card -->
                </div>
        </div>

        <div class="row mx-auto">
            <div class="col-sm-6">
                <div class="tambah-artikel">
                    <a href="{{ route('tambahartikel.create') }}"><img src="/img/plus.png" class="logo-plus" alt="">
                    <h5 class="new-artikel">Tambah Artikel</h5></a>
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

            @foreach ($articles as $article)
            <div class="card card-admin">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="{{ asset('storage/thumbnail/'.$article->gambar) }}" class="gambar-card" alt="">
                    </div>
                    <div class="col-sm-7 card-kanan">
                        <h6>{{ $article->judul }}</h6>
                        {{-- <p>{{ $article->deskripsi }}</p> --}}
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
            {{ $articles->links() }}

        </div>


        {{-- Modal Kategori Artikel --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('tambahcategory.tambahcategory') }}" method="post">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Nama Kategori</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Modal Kategori Artikel --}}
    </div>
    <!-- End Content -->

@endsection