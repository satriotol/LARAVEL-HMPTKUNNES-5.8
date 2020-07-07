@extends('layouts.default')
@section('content')

<body>
    <div class="latar-lihat-berita container-fluid">
        <div class="article container-fluid">
            <div class="row">
                <div class="col-md-4 jarak">
                    <a href="chemengfair/semnas">
                        <div class="module text-center" style="background-image: url(&quot;/images/chemengfair/semnas.jpg&quot;);">
                            <p class="module-judul">SEMINAR NASIONAL</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/iso">
                        <div class="module text-center" style="background-image: url(&quot;/images/chemengfair/iso.jpg&quot;);">
                            <p class="module-judul">ISO</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/cesa">
                        <div class="module text-center" style="background-image: url(&quot;/images/chemengfair/cesa.jpg&quot;);">
                            <p class="module-judul">CESA</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/s2c">
                        <div class="module text-center" style="background-image: url(&quot;/images/chemengfair/s2c.jpg&quot;);">
                            <p class="module-judul">S2C</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/ception">
                        <div class="module text-center" style="background-image: url(&quot;/images/chemengfair/ception.jpg&quot;);">
                            <p class="module-judul">CEPTION</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 jarak">
                    <a href="chemengfair/chemengawards">
                        <div class="module text-center" style="background-image: url(&quot;/images/chemengfair/chemengaward.jpg&quot;);">
                            <p class="module-judul">CHEMENG AWARD</p>
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