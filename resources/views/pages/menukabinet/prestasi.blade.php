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
                <h2 class="text-center mb-2">KABINET PRESTASI</h2>
                <hr class="hr-about mb-5">
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">LOGO</h3>
                    <div class="container kabinet-logo">
                        <img src="{{ asset('images/kabinet/kabinet prestasi trans.png') }}" alt="">
                        <div>
                            <h3 class="mt-5">LINGKARAN</h3>
                            <p class="text-center"> Lingkaran sebagai simbol “keutuhan”, harapannya HMPTK 2018 dapat
                                selalu utuh dan bekerja profesional sebagai satu kesatuan</p>
                        </div>
                        <div>
                            <h3 class="mt-5">DUA BULAN SABIT</h3>
                            <p class="text-center">Bulan sabit merupakan simbol sebuah “fase yang baru”. Harapannya
                                HMPTK 2018 dapat meberikan pembaharuan-pembaharuan yang progresif dan bermanfaat bagi
                                mahasiswa maupun masyarakat. Dua Bulan Sabit diibaratkan sebagai “Iman dan Taqwa”.
                                Harapannya dalam bekerja HMPTK selalu atas dasar keimanan dan ketaqwaan kepada Allah
                                SWT.
                            </p>
                        </div>
                        <div>
                            <h3 class="mt-5">TUNAS</h3>
                            <p class="text-center">Tunas diibaratkan sebagai simbol pembawa harapan dalam melakukan
                                “pertumbuhan, pengembangan, dan perbaikan”. Terdapat Tiga Tunas sebagai simbol bahwa
                                tumbuh kembang HMPTK 2018 berdasar Tri Dharma Perguruan Tinggi</p>
                        </div>
                        <div>
                            <h3 class="mt-5">LIDAH API</h3>
                            <p class="text-center">Lidah Api sebagai perwujudan sebuah “semangat yang terus berkobar”.
                                Pertanda bahwa HMPTK 2018 akan senantiasa menjaga semangat dalam mengabdi. Terdapat 5
                                Lidah Api yang mana merupakan simbol 5 misi utama pada tahun 2018, yaitu “kekeluargaan,
                                kader unggul, wadah nyata, prestasi, dan relasi”.</p>
                        </div>
                        <div>
                            <h3 class="mt-5">RODA GERIGI</h3>
                            <p class="text-center">Roda Gerigi merupakan simbol bahwa HMPTK 2018 bekerja secara
                                “sinergis dan dinamis”.</p>
                        </div>
                        <div>
                            <h3 class="mt-5">TUNAS</h3>
                            <p class="text-center">Nyala Api merupakan perwujudan dan harapan bahwa HMPTK 2018 dapat
                                selalu “bersinar terang” dalam menciptakan prestasi dan pengabdian yang bermanfaat bagi
                                masyarakat.</p>
                        </div>
                        <div>
                            <h3 class="mt-5">Filosofi Warna</h3>
                            <p class="text-center">Warna Merah : Keberanian, kekuatan, dan semangat untuk maju <br>
                                Warna Orange : Kehangatan dan kenyamanan <br>
                                Warna Hijau : Kesegaran, kedamaian, dan keseimbangan <br>
                                Warna Biru : Kestabilan, kesejukan, profesionalitas, dan kecerdasan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">STRUKTUR ORGANISASI</h3>
                    <div class="container kabinet-sto">
                        <img id="img-lihat-berita" src="{{ asset('images/kabinet/sto-prestasi.jpg') }}" alt="">
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div>
                            <h3 class="mt-5">GENERAL AFFAIR</h3>
                            <p>Ketua : Naufal Mudrik Mezaki <br>
                                Wakil ketua : Ardi Nugroho <br>
                                Bendahara : Fidyawati, Heni Wahyu Widayanti <br>
                                Sekretaris : Ayu Nur Permadhini, Syifa Karimah</p>
                        </div>
                        <div>
                            <h3 class="mt-5">Human Recource Development</h3>
                            <p>Ketua Departemen : <br>
                                Ismail Abdul Aziz. <br><br>
                                Staff : <br>
                                Novitasari Andriani<br>
                                Anggun Septiamurti <br>
                                Anwar Hasan Mujaddid <br>
                                Sandra Anggita Fadriana <br>
                                Miftahul Jannah <br>
                                Abdurrahmman Kholish Faizi <br>
                                Muhammad Iqbal <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Public Relation and Communication</h3>
                            <p>Ketua Departemen : <br>
                                Nurul Kumarany Arnan <br><br>
                                Staff : <br>
                                Arum Wahyu Febriani <br>
                                Adi Prawisnu <br>
                                Albaitsul Hakim Al’adl <br>
                                Septian Putra Kusuma Aji <br>
                                Khoiriyah Rahmawati <br>
                                Riska Annisa Tamimi <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Research and Technology</h3>
                            <p>Ketua Departemen : <br>
                                Yoshua Wira Putra Budiono <br><br>

                                Staff : <br>
                                Andre Dianata Hogi Kusuma <br>
                                Reissa Anggi Hapsari <br>
                                Khoridatus Sulwa <br>
                                Miftahuddin Azhari <br>
                                Rofi’atun Musfiroh <br>
                                Muhammad Salman Alfarisi <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Student Education and Development</h3>
                            <p>Ketua Departemen : <br>
                                Chika Agnes Palupi <br><br>

                                Staff : <br>
                                Tohiran <br>
                                Laila Syafitri <br>
                                Kega Amalaina Salsabiil <br>
                                Bayu Adi Wibowo <br>
                                Nauroh Nadzifah <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Student Talent Development</h3>
                            <p>Ketua Departemen : <br>
                                Jovian Triyana Putra <br><br>

                                Staff : <br>
                                Ridlo Wildani Alkham <br>
                                Bacharuddin Rifqi Maulana <br>
                                La Nina Verren <br>
                                Muhammad Rozaq <br>
                                Siti Pujianti <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Social Development</h3>
                            <p>Ketua Departemen : <br>
                                Kuat Noviana <br><br>

                                Staff : <br>
                                Devinda Ramadhani <br>
                                Restu Kusumawardhani <br>
                                Sainia Umazatun Amsa <br>
                                Alfiansyah Aji Pratama <br>
                                Sarah Ayatillah <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Technopreneurship</h3>
                            <p>Ketua Departemen : <br>
                                Nur Kholifah Chandra Mulyani <br><br>

                                Staff : <br>
                                Dhea Figi Anyelir <br>
                                Juliawan arif Permana <br>
                                Eka Amalia Alvionita <br>
                                Habib Faisal Yahya <br>
                                Andika Wicaksana Putranto <br>

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