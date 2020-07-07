@extends('layouts.default')
@section('content')
<style>
    .jarak-navbar {
        margin-top: 100px;
        bottom: 0;
        margin-bottom: 100px;
    }

    .batas-cari {
        background-color: black;
    }
    .border-cari{
        border-right: 1px solid black;
    }
</style>
<div class="jarak-navbar">
    <div class="container">
        <div class="row">
            <div class="offset-sm-4 col-sm-4 text-center">
                <h2 class="main-page-title">HASIL PENCARIAN</h2>
            </div>
        </div>
    </div>
    <div class="container border-cari">
        @foreach ($berita as $p)
        <div class="container" style="text-align:justify">
            <article>
                <div class="contoh-berita">
                    <div class="foto-berita">
                        <a href="">
                            <img class="img-berita" src="{{ $p->gambar }}" alt="">
                        </a>
                    </div>
                    <div class="tampilan-berita">
                        <div class="p-berita">
                            <a href="lihatberita/{{$p->id}}">
                                <h2>{{ $p->judul }}</h2>
                            </a>
                            <p>{{ $p->tanggal_berita }}</p>
                            <p>
                                {{ substr(strip_tags($p->isi),0,500)}}...
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <hr class="batas-cari">
        </div>
        @endforeach
    </div>
    <br>
    <br>
    {{ $berita->links() }}
    <div class="container text-center">
        <a href="/" class="btn btn-primary">Kembali</a>
    </div>
</div>
@stop