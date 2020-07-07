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
                <h2 class="text-center mb-2">KABINET ELABORASI</h2>
                <hr class="hr-about mb-5">
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">LOGO</h3>
                    <div class="container kabinet-logo">
                        <img src="{{ asset('images/kabinet/elaborasi.png') }}" alt="">
                        <p>Kupu-kupu sebagai simbol kehidupan dan harapan, serta perjuangan hidup untuk mencapai sesuatu
                            yang lebih baik. Layaknya sebuah kupu-kupu, harapannya HMPTK 2020 mampu mengalami
                            perkembangan dari waktu ke waktu menjadi lembaga kemahasiswaan yang lebih baik.</p>
                    </div>
                </div>
                <div class="peta text-center mb-3">
                    <h3 class="main-page-title border-bawah">STRUKTUR ORGANISASI</h3>
                    <div class="container kabinet-sto">
                        <img id="img-lihat-berita" src="{{ asset('images/kabinet/sto-elaborasi.png') }}" alt="">
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                        <div>
                            <h3 class="mt-5">GENERAL AFFAIR</h3>
                            <p>Ketua : Topaz Rizky Yanuar <br>
                                Wakil ketua : Pragusti Lintang Adhi Nanggala <br>
                                Bendahara : Melinia Rahmahani Putri & Siti Salwa Azzahra Nurazizah N. <br>
                                Sekretaris : Reni Titis Wijayanti & Nisrina Lutfi Aprilianti</p>
                        </div>
                        <div>
                            <h3 class="mt-5">Human Resource Development</h3>
                            <p>Ketua Departemen : <br>
                                Naufal Alif Ganisha <br><br>

                                Staff : <br>
                                Devina Dwiyuanita Nugraha <br>
                                Shelgina Soraya Munjida <br>
                                Muhammad Arfin Syadi <br>
                                M Ammar Jamil <br>
                                Naga Syamsi Dhuha <br>
                                Dyta Silvia Mayasari <br>
                                Syifa Azzahra Putri S. <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Public Relation and Communication</h3>
                            <p>Ketua Departemen : <br>
                                Randi Aswar <br><br>

                                Staff : <br>
                                Tasya Dinda Salsabila <br>
                                Yuni Dwi Parastuti <br>
                                Ungki Bella Athania <br>
                                Yasinda Verrel Dinara S. D. <br>
                                Kiki Diyah Ayu Utami <br>
                                Muhammad Abdul Aziz N. <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Research and Technology</h3>
                            <p>Ketua Departemen : <br>
                                Ahmad Lutvi Andri <br><br>

                                Staff : <br>
                                Desy Hikmatul Siami <br>
                                Zulfi Fitriani <br>
                                Surya Gemilang <br>
                                Aldo Ferdiansyach <br>
                                Rizky Ichwan <br>
                                Sri Hayati <br>
                                Fika Nur Auaralia <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Social Development</h3>
                            <p>Ketua Departemen : <br>
                                Didit Rizky Aditiya <br><br>

                                Staff : <br>
                                Bayu Nugroho <br>
                                Asri Luviani Devi <br>
                                Nadia Fadhilah Rahma <br>
                                Dinungki Febriani <br>
                                Faiz Taufiq Hidayat <br>
                                Tasya Larasati Dwi Efendi <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Student Education Development</h3>
                            <p>Ketua Departemen : <br>
                                Durroti Zuhriah Wulansari <br><br>

                                Staff : <br>
                                Maya Tasya Salsabilla <br>
                                Dewi Meysanti <br>
                                Asmalda Febriana <br>
                                Faishol Abdurrafi <br>
                                Isifaul Amla’ah <br>
                                Moh. Dafi Najuda <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Student Talent Development</h3>
                            <p>Ketua Departemen : <br>
                                Ady Prasetyo <br><br>

                                Staff : <br>
                                Muthia Tsany <br>
                                Handri Rama Pradani <br>
                                Putri Arum Kinanti <br>
                                Ahmad Febry Ibrahim <br>
                                Naufal Sidqi Mubarok <br>
                                Ridwan Anung Prasetyo <br>

                        </div>
                        <div>
                            <h3 class="mt-5">Technopreneurship</h3>
                            <p>Ketua Departemen : <br>
                                Priyanto <br><br>

                                Staff : <br>
                                Amaliya Fairuz Syakila <br>
                                Faradila Nurzulcha <br>
                                Noviana Dias Pratiwi <br>
                                Falihil Izza Zulfa <br>
                                Ilham Dwi Yulianto <br>

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
