@extends('layout.admin')

@section('title','Artikel')

@section('halaman','Artikel')

@section('content')
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
                    {{$categories->links()}}  
                </ul>
                </div>
            </div>
            <!-- /.card -->
            </div>
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
                            <input type="text" class="form-control" name="name" id="name" required>
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
@endsection