<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href=".">
            <img src="{{ url('assets/img/landing/logo1.png') }}" width="150px">
            {{--MultimedioPlus--}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto smooth-scroll">
            </ul>
            <!-- Social Icon  -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link" href=".">
                        <i class="fa fa-home"></i> Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        <i class="fa fa-info"></i> Tentang</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layanan">
                        <i class="fa fa-handshake-o"></i> Layanan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dokumentasi') }}">
                        <i class="fa fa-photo"></i> Dokumentasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/program-studi') }}">
                        <i class="fa fa-paper-plane"></i> Program Studi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/portofolio') }}">
                        <i class="fa fa-edit"></i> Portofolio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/testimoni') }}">
                        <i class="fa fa-edit"></i> Testimoni</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>