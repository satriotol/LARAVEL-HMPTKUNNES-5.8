@extends('layouts.default')
@section('content')
<style>
    .form-jarak {
        margin-top: 66px;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    @media screen and (max-width: 700px) {
        .form-jarak {
            margin-top: 50px;
        }
    }

    .form-alumni {
        background-color: #EFEFF1;
        padding: 20px;
        border: 1px solid #EFEFF1;
        border-radius: 10px;
    }

    .background-image {
        background: linear-gradient(rgba(255, 255, 255, 0.90), rgb(255, 255, 255, 0.90)),
            url(../images/texture.jpg) repeat 0 0 / 12.5% auto !important;
    }

    .input-group-text {
        width: 200px;
    }

    .text-center h2 {
        font-weight: bold;
    }
</style>
<section>
    <div class="background-image">
        <div class="container">
            <div class="form-jarak">
                <div class="form-alumni">
                    <div class="text-center">
                        <h2>FORMULIR</h2>
                        <h2>ISI DATA ALUMNI</h2>
                        @if (session('status'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('status') }}
                        </div>
                        @endif
                    </div>
                    <br><br>
                    <form action="/alumni/store" method="post">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nama Lengkap</span>
                            </div>
                            <br>
                            <input name="nama_lengkap" type="text" class="form-control" placeholder="Masukkan Nama..."
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">E-mail</span>
                            </div>
                            <input name="email" type="text" class="form-control" placeholder="Masukkan E-mail..."
                                aria-label="Masukkan E-mail..." aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nomor Telepon</span>
                            </div>
                            <input name="nomer_telepon" type="text" class="form-control"
                                placeholder="Masukkan Nomor Telepon..." aria-label="Masukkan Nomor Telepon..."
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Angkatan/Jenjang S1/D3</span>
                            </div>
                            <input name="jenjang" type="text" class="form-control" placeholder="Masukkan Jenjang..."
                                aria-label="Masukkan Jenjang..." aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" placeholder="Masukkan Alamat Rumah"
                                    aria-label="Masukkan Alamat Rumah">Alamat Sekarang</span>
                            </div>
                            <textarea name="alamat_sekarang" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" placeholder="Masukkan Alamat Kantor"
                                    aria-label="Masukkan Alamat Kantor">Alamat Bekerja</span>
                            </div>
                            <textarea name="alamat_perusahaan" class="form-control"
                                aria-label="With textarea"></textarea>
                        </div>
                        <br><br>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary" value="SIMPAN">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@stop