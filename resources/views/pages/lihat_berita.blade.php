@extends('layouts.default')
@section('content')
<body>
    <section>
        <div class="latar-lihat-berita container-fluid">
            <div class="row">
                <div class="lihat-berita container">
                    @foreach ($berita as $p)
                    <div class="img-lihat text-center">
                        {{-- <a href=""> --}}
                        <img id="img-lihat-berita" class="img-lihat-berita" src="{{asset($p -> gambar)}}" alt="">
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                        {{-- </a> --}}
                    </div>
                    <div class="isi-berita">
                        {{ csrf_field() }}
                        <h1>{{$p -> judul}}</h1>
                        <p>{{$p -> tanggal_berita}}</p>
                        <p style="text-align: justify">{!!$p -> isi!!}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("img-lihat-berita");
        var modalImg = document.getElementById("img01");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>
</body>
@stop