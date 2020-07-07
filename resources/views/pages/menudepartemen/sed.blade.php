@extends('layouts.default')
@section('content')

<body>
    <section class="slide">
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($slide_utama as $x=>$i)
                @if ($x == 0)
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @else
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                @endif
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($slide_utama as $x=>$i)
                @if ($x == 0)
                <div class="carousel-item active">
                    <img class="d-block img-fluid w-100" style="background-size:cover;"
                        src="{{asset($i -> slide_gambar)}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>{{$i -> main_judul}}</h1>
                        <h3>{{$i -> sub_judul}}</h3>
                    </div>
                </div>
                @else
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="{{asset($i -> slide_gambar)}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>{{$i -> main_judul}}</h1>
                        <h3>{{$i -> sub_judul}}</h3>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @if (session('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
        @endif
    </section>
    <section class="isi">
        <div class="container">
            <div class="row">
                <div class="offset-sm-4 col-sm-4 text-center">
                    <h2 class="main-page-title">SED</h2>
                </div>
            </div>
        </div>
        <section class="isi-berita">
            <div class="container">
                @foreach ($keterangan as $p)
                <div class="penjelasan">
                    {{ csrf_field() }}
                    <h2>{{$p->judul}}</h2>
                    <p>{!!$p->isi!!}</p>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-sm-12" style="text-align: justify">
                        @foreach ($berita as $p)
                        <article>
                            <div class="contoh-berita">
                                <div class="foto-berita">
                                    <a href="lihatberita/{{$p->id}}">
                                        <img class="img-berita" src="{{asset( $p->gambar )}}" alt="">
                                    </a>
                                </div>
                                <div class="tampilan-berita">
                                    <div class="p-berita">
                                        <a href="../lihatberita/{{$p->id}}">
                                            <h2>{{ $p->judul }}</h2>
                                        </a>
                                        <p>{{ $p->tanggal_berita }}</p>
                                        <p>
                                            {{ substr(strip_tags($p->isi),0,300)}}...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        {{ $berita->links() }}
                    </div>
                </div>
        </section>
    </section>
</body>
<script>
    $(".nav-link").each(function () {
        if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
            $(this).addClass('activeMenuItem');
        }
    });

    function switchdropdown() {
        if ($("#bs-example-navbar-collapse-1").is(':hidden')) {
            $("#bs-example-navbar-collapse-2").css("visibility", "visible");
        }
        if ($("#bs-example-navbar-collapse-2").is(':visible')) {
            $("#bs-example-navbar-collapse-2").css("visibility", "hidden");
        }
    }

    $(document).ready(function () {
        $('#bs-example-navbar-collapse-2').css("visibility", "hidden");
    });
</script>
@stop