@extends('layouts.default')
@section('content')

<body>
    <div class="latar-lihat-berita container-fluid">
        <div class="article container-fluid">
            <div class="row">
                <div class="col-md-3 jarak">
                    <a href="/">
                        <div class="module text-center" style="background-image: url(&quot;/images/article/press.jpg&quot;);">
                            <p class="module-judul">PRESS RELEASE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="article/event">
                        <div class="module text-center" style="background-image: url(&quot;/images/article/event.jpg&quot;);">
                            <p class="module-judul">EVENT</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="article/chemist">
                        <div class="module text-center" style="background-image: url(&quot;/images/article/chemist.jpg&quot;);">
                            <p class="module-judul">CHEMIST</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="article/advokasi">
                        <div class="module text-center" style="background-image: url(&quot;/images/article/advokasi.jpg&quot;);">
                            <p class="module-judul">ADVOKASI</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="article/oprec">
                        <div class="module text-center" style="background-image: url(&quot;/images/article/oprec.jpg&quot;);">
                            <p class="module-judul">OPREC</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="article/materi">
                        <div class="module text-center" style="background-image: url(&quot;/images/article/materi.jpg&quot;);">
                            <p class="module-judul">MATERI</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="article/cerc">
                        <div class="module text-center" style="background-image: url(&quot;/images/article/cerc.jpg&quot;);">
                            <p class="module-judul">CERC</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 jarak">
                    <a href="article/store">
                        <div class="module text-center" style="background-image: url(&quot;/images/article/store.jpg&quot;);">
                            <p class="module-judul">STORE</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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