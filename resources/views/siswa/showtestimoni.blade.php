@extends('layout.app')

@section('title','Kabar Kami')

@section('content')

    <div class="container">
        <h5 class="section5h5judul">Testimoni Siswa Gama Eduka</h5>
        <div class="section5rowdesk">
            <div class="row section5rowcard">
                
                @foreach ($testimoni as $test)
                <div class="col-md-4">
                    <div class="card mx-auto section5card" style="width: 100%;">
                    <img src="{{ asset('storage/testimoni/'.$test->foto) }}" class="section5fotomuka rounded-circle mx-auto">
                    <p class="section5nama">{{ $test->name }}</p>
                    <p class="section5program">{{ $test->program->name }}</p>
                        <div class="container">
                            <p class="section5kesan">{!! Str::limit($test->kesan, 250, '...') !!}</p>
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
                            <p class="section5kesan">{!! Str::limit($test->kesan, 250, '...') !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        {{ $testimoni->links() }}
    </div>
@endsection