@extends('layout.app')

@section('title','Kabar Kami')

@section('content')
    <div class="container">
        <p>Kabar > {{ $artikel->category->name }} > {{ $artikel->judul }}</p>
        <h3 style="text-align:center;">{{ $artikel->judul }}</h3>
        <div class="imgshowartikel mx-auto">
            <img src="{{ asset('storage/thumbnail/'.$artikel->gambar) }}" class="img-fluid rounded-lg " alt="{{ $artikel->judul }}">
        </div>
        <div class="showkontenartikel">
            {!! $artikel->konten !!}
        </div>
    </div>
@endsection 