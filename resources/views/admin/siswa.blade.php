@extends('layout.admin')

@section('title','Siswa')

@section('halaman','Siswa')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="container-fluid">    
                        {{-- <div class="card-header">
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0 pt-2">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                    <tr>
                                    <th>Nama</th>
                                    <th>Pendidikan</th>
                                    <th>Umur</th>
                                    <th>Foto</th>
                                    <th>Program Dipilih</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Email</th>
                                    <th>Tgl Daftar</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
                processing:true,
                serverSide:true,
                dom: 'lBfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                ajax:"{{ route('getdatasiswa.getdatasiswa') }}",
                columns:[
                    {data:'name', name:'name'},
                    {data:'pendidikan_terakhir', name:'pendidikan_terakhir'},
                    {data:'umur', name:'umur'},
                    {data:'foto', name:'foto',
                        render: function( data, type, full, meta ) {
                            return "<img src=\"/storage/foto/" + data + "\" width=\"100\"/>";
                        }
                    },
                    {data:'program_id', name:'program_id'},
                    {data:'alamat_lengkap', name:'alamat_lengkap'},
                    {data:'no_telp', name:'no_telp'},
                    {data:'email', name:'email'},
                    {data:'created_at', name:'created_at'},
                    {data:'aksi', name:'aksi', orderable:false, searchable:false},
                ],
                order: [[ 0, "desc" ]],
            });
        } );
    </script>
@endsection