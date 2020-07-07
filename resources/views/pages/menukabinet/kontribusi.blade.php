@extends('layouts.default')
@section('content')
<style>
    img#img01 {
        max-width: 1000px;
    }
</style>
<section>
    <div class="container-fluid background-image">
        <div class="jarak-about">
            <div class="container about">
                <h2 class="text-center mb-2">KABINET KONTRIBUSI</h2>
                <hr class="hr-about mb-5">
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">LOGO</h3>
                    <div class="container kabinet-logo">
                        <img src="{{ asset('images/kabinet/kontribusi.png') }}" alt="">
                        <p class="mt-5">Gajah merupakan ide utama logo kabinet HMPTK 2019, didiskripsikan sebagai
                            binatang cerdas
                            dan bersahabat. Melambangkan kekuatan, kesetiaan dan harmoni. Dikenal sebagai makhluk
                            sosial, kekeluargaan dan memiliki empati tinggi. <br>
                            Diharapakkan dengan menjadikan gajah sebagai ide utama, “KABINET KONTRIBUSI” mampu
                            meningkatkan suasana kekeluargaan. Sehingga, muncul kontribusi aktiif dan kreatif di lingkup
                            Civitas Akademika Teknik Kimia UNNES.</p>
                        <div>
                            <h3 class="mt-5">OBOR API</h3>
                            <p class="text-center">HMPTK menjunjung tinggi Tri Dharma Perguruan Tinggi sebagai panutan
                                dan tuntunan untuk
                                berkarya</p>
                        </div>
                        <div>
                            <h3 class="mt-5">LIMA PILINAN BERBENTUK LINGKARAN</h3>
                            <p class="text-center">Menunjukan 5 Nilai Pancasila, Nilai Dasar Organisasi, dan Annual Goal
                            </p>
                        </div>
                        <div>
                            <h3 class="mt-5">BELALAI MENJULUR KEATAS DAN KAKI TERANGKAT KEDEPAN</h3>
                            <p class="text-center">HMPTK 2019 dengan semangat dan percaya diri berjalan kedepan untuk
                                maju bersama</p>
                        </div>
                    </div>
                </div>
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">STRUKTUR ORGANISASI</h3>
                    <div class="container kabinet-sto">
                        <img id="img-lihat-berita" src="{{ asset('images/kabinet/sto-kontribusi.jpg') }}" alt="">
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div>
                            <h3 class="mt-5">GENERAL AFFAIR</h3>
                            <p>Ketua : Abdurrahman Kholish Faizi <br>
                                Wakil ketua : Adi Prawisnu <br>
                                Bendahara : Heni Wahyu Widayanti & Melinia Rahmahani Putri <br>
                                Sekretaris : Syifa Karimah & Reni Titis Wijayanti</p>
                        </div>
                        <div>
                            <h3 class="mt-5">Human Recource Development</h3>
                            <p>Ketua Departemen : <br>
                                Anwar Hasan Mujaddid <br><br>

                                Staff : <br>
                                Devina Dwiyuanita Nugraha<br>
                                Sandra Anggita Fadriana <br>
                                Shelgina Soraya Munjida <br>
                                Topaz Rizky Yanuar <br>
                                Anggun Septiamurti <br>
                                Muhammad Arfin Syadi <br>
                                Naufal Alif Ganisha <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Public Relation and Communication</h3>
                            <p>Ketua Departemen : <br>
                                Septian Putra Kusuma Aji <br><br>
                                Staff : <br>
                                Randi Aswar <br>
                                Riska Annisa Tamimi <br>
                                Ungki Bella Athania <br>
                                Azizah Fitria Nugraheni <br>
                                Yuni Dwi Parastuti <br>
                                Khoiriyah Rahmawati <br>
                                Tasya Dinda Salsabila <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Research and Technology</h3>
                            <p>Ketua Departemen : <br>
                                Miftahuddin Azhari <br><br>

                                Staff : <br>
                                Ahmad Lutvi Andri <br>
                                Desy Hikmatul Siami <br>
                                Muhammad Salman Alfarisi <br>
                                Rofi’atun Musfiroh <br>
                                Zulfi Fitriani <br>
                                Surya Gemilang <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Student Education and Development</h3>
                            <p>Ketua Departemen : <br>
                                Nauroh Nadzifah <br><br>

                                Staff : <br>
                                Bayu Adi Wibowo <br>
                                Dewi Meysanti <br>
                                Durroti Zuhriah Wulansari <br>
                                Maya Tasya Salsabilla <br>
                                Pragusti Lintang Adhi Nanggala <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Student Talent Development</h3>
                            <p>Ketua Departemen : <br>
                                Rendy Okta Loveyanto <br><br>

                                Staff : <br>
                                Ady Prasetyo <br>
                                Bachruddin Rifqi Maulana <br>
                                Handri Rama Pradani <br>
                                La NinaVerren <br>
                                Muhammad Rozaq <br>
                                Muthia Tsany <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Social Development</h3>
                            <p>Ketua Departemen : <br>
                                Muhammad Iqbal <br><br>

                                Staff : <br>
                                Anteng Relis Palungki <br>
                                Asri Luviani Devi <br>
                                Bayu Nugroho <br>
                                Didit Rizky Aditya <br>
                                Nadia Fadhilah Rahma <br>
                                Rizkiyah Fatikhatul Jannah <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Technopreneurship</h3>
                            <p>Ketua Departemen : <br>
                                Juliawan Arif Permana <br><br>

                                Staff : <br>
                                Amaliya Fairuz Syakila <br>
                                Dhea Figi Anyelir <br>
                                Faradila Nurzulcha <br>
                                Andika Wicaksana Putranto <br>
                                Priyanto <br>
                        </div>
                    </div>
                </div>
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
@stop