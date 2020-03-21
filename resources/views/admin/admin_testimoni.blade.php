@extends('layout.admin')

@section('title','Testimoni')

@section('halaman','Testimoni')

@section('content')

<div class="container">

    <div class="tambah-program mx-auto">
        <a href="{{ route('tambah_testimoni.create') }}"><img src="/img/plus.png" class="logo-programtambah" alt="">
        <h5 class="new-program">Tambah Testimoni</h5></a>
    </div>

    <h5 class="section5h5judul">Testimoni Siswa Gama Eduka</h5>
    <div class="section5rowdesk">
        <div class="row section5rowcard">
            
            @foreach ($testimoni as $test)
            <div class="col-md-4">
                <div class="card mx-auto section5card" style="width: 100%;">
                    <img src="{{ asset('storage/testimoni/'.$test->foto) }}" class="section5fotomuka rounded-circle mx-auto">
                    <p class="section5nama">{{ $test->name }}</p>
                    <p class="section5program">{{ $test->program->name }}</p>
                        <div class="container section5wadahkesan">
                            <span class="section5kesan">{!! Str::limit($test->kesan, 250, '...') !!}</span>
                            {{-- <p class="section5kesan">{!! Str::limit($test->kesan, 250, '...') !!}</p> --}}
                        </div>
                        <div class="optionprogram">
                            <div class="wadahoptionprogram mx-auto">
                                <a href="{{ route('edit_testimoni.edit', $test) }}" style="margin-right:20px;"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('delete_testimoni.destroy', $test) }}"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>



    <div class="section5rowmobile">
        <div class="row">

            @foreach ($testimoni as $test)
            <div class="col-12">
                <div class="card mx-auto section5card" style="width: 100%;">
                    <img src="{{ asset('storage/testimoni/'.$test->foto) }}" class="section5fotomuka rounded-circle mx-auto">
                    <p class="section5nama">{{ $test->name }}</p>
                    <p class="section5program">{{ $test->program->name }}</p>
                        <div class="container">
                            <span class="section5kesan">{!! Str::limit($test->kesan, 250, '...') !!}</span>
                            {{-- <p class="section5kesan">{!! Str::limit($test->kesan, 250, '...') !!}</p> --}}
                        </div>
                        <div class="optionprogram">
                            <div class="wadahoptionprogram mx-auto">
                                <a href="{{ route('edit_testimoni.edit', $test) }}" style="margin-right:20px;"><i class="fas fa-edit"></i></a>
                                <a href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    {{ $testimoni->links() }}
</div>
@endsection