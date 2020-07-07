@extends('layouts.default')
@section('content')

<body>
    <div class="latar-lihat-berita container-fluid">
        <div class="article container-fluid">
            <div class="">
                <div class="jarak">
                    <a href="/kabinet/elaborasi">
                        <div class="module text-center">
                            <img src="{{asset('images/kabinet/elaborasi.png')}}" alt="">
                            <p>2020 KABINET ELABORASI</p>
                        </div>
                    </a>
                </div>
                <div class="jarak">
                    <a href="/kabinet/kontribusi">
                        <div class="module text-center">
                            <img src="{{asset('images/kabinet/kontribusi.png')}}" alt="">
                            <p>2019 KABINET KONTRIBUSI</p>
                        </div>
                    </a>
                </div>
                <div class="jarak">
                    <a href="kabinet/prestasi">
                        <div class="module text-center">
                            <img src="{{asset('images/kabinet/kabinet prestasi trans.png')}}" alt="">
                            <p>2018 KABINET PRESTASI</p>
                        </div>
                    </a>
                </div>
                <div class="jarak">
                    <a href="kabinet/inovasi">
                        <div class="module text-center">
                            <img src="{{asset('images/kabinet/inovasi.png')}}" alt="">
                            </i>
                            <p>2017 KABINET INOVASI</p>
                        </div>
                    </a>
                </div>
                <div class="jarak">
                    <a href="kabinet/inovasi">
                        <div class="module text-center">
                            <img src="{{asset('images/kabinet/logo inspirasi.png')}}" alt="">
                            <p>2016 KABINET INSPIRASI</p>
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
