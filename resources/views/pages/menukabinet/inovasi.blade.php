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
                <h2 class="text-center mb-2">KABINET INOVASI</h2>
                <hr class="hr-about mb-5">
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">LOGO</h3>
                    <div class="container kabinet-logo">
                        <img src="{{ asset('images/kabinet/inovasi.png') }}" alt="">
                        <p>Logo kabinet inovasi terdapat simbol obor yang melambangkan semangat dan tekad untuk
                            berkontribusi terhadap jurusan teknik kimia, fakultas teknik maupun universitas negeri
                            semarang. Di dalam simbol api itu sendiri terdapat 3corak yg melambangkan tri dharma
                            perguruan tinggi dengan tunas di tengahnya yg mengartikan sesuatu yang baru sesuai dengan
                            nama kabinetnya yaitu inovasi.</p>
                    </div>
                </div>
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">STRUKTUR ORGANISASI</h3>
                    <div class="container kabinet-sto">
                        <img id="img-lihat-berita" src="../images/sto.jpg" alt="">
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div>
                            <h3 class="mt-5">GENERAL AFFAIR</h3>
                            <p>Ketua : Dio Bagus Pangestu <br>
                                Wakil ketua : Aditia Dwipawarman <br>
                                Bendahara : Miftakhul Hidayah & Fidyawati <br>
                                Sekretaris : Mira Melina & Ayu Nur Permadhini</p>
                        </div>
                        <div>
                            <h3 class="mt-5">Human Recource Development</h3>
                            <p>Ketua Departemen : <br>
                                Siti Fatimah <br><br>

                                Staff : <br>
                                Muh Fahrul Rahman Alim<br>
                                Miftahul Jannah<br>
                                Mafatikhul Biladudin <br>
                                Novitasari Andriani <br>
                                Adityo Nurcahyo <br>
                                Evin Fajri Irchamsyah <br>
                                Ismail Abdol Aziz <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Public Relation and Communication</h3>
                            <p>Ketua Departemen : <br>
                                Erika Wijayanti <br><br>

                                Staff : <br>
                                Nur Arif Majid <br>
                                Gita Angooro Putri <br>
                                Naufal Mudrik Mezaki <br>
                                Chandra Ikhlas Dewantara <br>
                                Arum Wahyu Febriani <br>
                                Nurul Kumarany Arnan <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Research and Technology</h3>
                            <p>Ketua Departemen : <br>
                                Waliyyudin Sammadikun <br><br>

                                Staff : <br>
                                Akhmad Sutrisno<br>
                                Dwi Nuryana<br>
                                Khoridatus Sulwa <br>
                                Yoshua Wira Putra Budiono <br>
                                Andre Dianata Hogi Kusuma <br>
                                Reissa Anggi Hapsari <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Student Education and Development</h3>
                            <p>Ketua Departemen : <br>
                                Viona Widya Anugrahani <br><br>

                                Staff : <br>
                                Yola Antika<br>
                                Tohiran<br>
                                Chika Agnes Palupi <br>
                                Yulian Candra Purwana <br>
                                Laila Syafitri <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Student Talent Development</h3>
                            <p>Ketua Departemen : <br>
                                Farida Dian Arianti <br><br>

                                Staff : <br>
                                Dian Widyaningsih<br>
                                Bernadetta Sisca Aprilia Purba<br>
                                Ridlo Wildani Alkham <br>
                                Andrew Herstyawan <br>
                                Jovian Triyana Putra <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Social Development</h3>
                            <p>Ketua Departemen : <br>
                                Ragil Budiarto <br><br>

                                Staff : <br>
                                Tias Ardhiani<br>
                                Kuat Noviana<br>
                                Devinda Ramadhani <br>
                                Restu Kusumawardhani <br>
                                Ardi Nugroho <br>
                        </div>
                        <div>
                            <h3 class="mt-5">Technopreneurship</h3>
                            <p>Ketua Departemen : <br>
                                Annisa Witri Sofiarani <br><br>

                                Staff : <br>
                                Annisa Itsnain Nurusyifa<br>
                                Rifan Fauzi<br>
                                Nur Kholifah Chandra Mulyani <br>
                                Pipit Rizky Nurjanah <br>
                                Habib Faisal Yahya <br>
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