@extends('layout.admin')

@section('title','Siswa')

@section('halaman','Siswa')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bisa dikasih filter</h3>

                    <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                        <th>Nama</th>
                        <th>Pendidikan</th>
                        <th>Umur</th>
                        <th>Program Dipilih</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Tgl Daftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $sis)
                        <tr>
                        <td>{{ $sis->name }}</td>
                        <td>{{ $sis->pendidikan_terakhir }}</td>
                        <td>{{ $sis->umur }}</td>
                        <td><span class="tag tag-success">{{ $sis->program->name }}</span></td>
                        <td>{{ $sis->alamat_lengkap }}</td>
                        <td>{{ $sis->no_telp }}</td>
                        <td>{{$sis->created_at->format('M d, Y')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            {{$siswa->links()}}
            </div>
        </div>
    </div>
@endsection