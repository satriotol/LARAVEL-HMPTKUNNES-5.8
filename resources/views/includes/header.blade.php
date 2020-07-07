<section class="navbar">
    <nav class="navbar fixed-top navbar-expand-lg" style="background-color: #1295C9">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/images/HIMPRO-logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
            </a>
            <button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item nav-utama">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item nav-utama">
                        <a class="nav-link" href="/article">ARTICLE</a>
                    </li>
                    <li class="nav-item nav-utama">
                        <a class="nav-link" href="/chemengfair">CHEMENGFAIR</a>
                    </li>
                    <li class="nav-item nav-utama">
                        <a class="nav-link" href="/alumni">ALUMNI</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ABOUT
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-utama" href="/aboutus">ABOUT</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item nav-utama" href="/kabinet">KABINET</a>
                            <a class="dropdown-item nav-utama" href="/departemen">DEPARTEMEN</a>
                            <a class="dropdown-item nav-utama" href="http://tekkim.unnes.ac.id"
                                target="_blank">JURUSAN</a>
                            <a class="dropdown-item nav-utama" href="/kontak">KONTAK</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="/cari" method="GET">
                    <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search"
                        value="{{ old('cari') }}" aria-label="Search">
                    <button class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
</section>