<!--Navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar deep-purple lighten-2">
    <div class="container">
        <a class="navbar-brand" href="#"><strong>Arco</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Links-->
            <ul class="navbar-nav mr-auto smooth-scroll">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about" data-offset="100">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layanan" data-offset="100">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#dokumentasi" data-offset="100">Dokumentasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimoni" data-offset="100">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portofolio" data-offset="100">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#modal-contact">Kontak</a>
                </li>
            </ul>

            <!--Social Icons-->
            <ul class="navbar-nav nav-flex-icons">
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link"><i class="fa fa-facebook"></i></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link"><i class="fa fa-twitter"></i></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link"><i class="fa fa-instagram"></i></a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-registered" href="{{ url('/register') }}"></i> Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Intro Section-->
<section class="view intro-2 hm-gradient home">
    <div class="full-bg-img">
        <div class="container flex-center">
            <div class="row flex-center pt-5 mt-3">
                <div class="col-md-12 col-lg-6 text-center text-md-left margins">
                    <div class="white-text">
                        <h1 class="h1-responsive font-bold wow fadeInLeft" data-wow-delay="0.3s"> Welcome to ARCA</h1>
                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                        <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt
                            dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae
                            iste.
                        </h6>
                        <br>
                        {{--<a class="btn btn-white btn-rounded blue-text font-bold ml-lg-0 wow fadeInLeft" data-wow-delay="0.3s">Download</a>--}}
                        <a href="#about" class="btn btn-outline-white btn-rounded font-bold wow fadeInLeft" data-wow-delay="0.3s">Explore Now
                        </a>
                    </div>
                </div>

                {{--<div class="col-md-12 col-lg-6  wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">--}}
                <div class="col-md-12 col-lg-6  wow fadeInRight justify-content-center" data-wow-delay="0.3s">
                    <img src="{{ url('assets/img/landing/admin-new.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>