@extends('layouts.default')
@section('content')
<style>
    .jarak-about {
        margin-top: 66px;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    @media screen and (max-width: 700px) {
        .jarak-about {
            margin-top: 50px;
        }
    }

    .about {
        background-color: #EFEFF1;
        padding: 30px;
        border: 1px solid #B3B3BB;
        border-radius: 10px;
    }

    .about p {
        text-align: justify;
    }

    h2 {
        font-size: 50px;
        font-weight: 900;
        color: #B3B3BB;
    }

    .img-about {
        width: 100%;
        max-width: 500px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .border-bawah {
        border-bottom: solid 1px #B3B3BB;
    }

    .peta {
        border: solid 1px #B3B3BB;
    }


    .hr-about {
        border: 2px solid #B3B3BB;
        width: 10%;
    }

    .background-image {
        background: linear-gradient(rgba(255, 255, 255, 0.90), rgb(255, 255, 255, 0.90)),
            url(../images/texture.jpg) repeat 0 0 / 12.5% auto !important;
    }

    .isi-about {
        font-size: 18px;
    }

    .mapouter {
        position: relative;
        text-align: right;
        height: 500px;
        width: 100%;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 500px;
        width: 100%;
    }

</style>
<section>
    <div class="container-fluid background-image">
        <div class="jarak-about">
            <div class="container about">
                <h2 class="text-center mb-2">KONTAK</h2>
                <hr class="hr-about mb-5">
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">PETA</h3>
                    <div class="container">
                        <div class="mapouter">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=PKM%20Fakultas%20Teknik%20UNNES&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                        href="https://www.enable-javascript.net">enable-javascript.net</a></div>
                            </div>
                            <!-- Special 20% Discount for Elegant Themes Divi Page Builder https://www.embedgooglemap.net/divi-sale/ -->
                        </div>
                    </div>
                </div>
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">ALAMAT</h3>
                    <div class="container">
                        <p>GD. PKM FT-UNIVERSITAS NEGERI SEMARANG, SEKARAN, GUNUNGPATI</p>
                    </div>
                </div>
                <div class="peta text-center">
                    <h3 class="main-page-title border-bawah">KONTAK</h3>
                    <div class="container">
                        <p> <i class="fa fa-envelope"></i> himprotekkimunnes@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
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
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
@stop
