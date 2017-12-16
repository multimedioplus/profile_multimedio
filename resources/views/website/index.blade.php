@extends('layouts.template')

@section('title', 'Beranda')

@section('body_class', 'designer')

@section('footer_class', 'page-footer center-on-small-only blue-grey lighten-5 pt-0')

@section('header')
    <header class="">
        @include('includes.header_nav_home')
        @include('includes.header_content')
    </header>
@endsection

@section('content')
    <div class="container mt-3">
        <!-- Section About -->
        <section id="about" class="section mt-1 mb-3">
            <!--Secion heading-->
            <h2 class="font-up text-center font-bold my-4 pt-5 wow fadeInDown" data-wow-delay="0.2s">Tentang Kita</h2>
            <hr class="between-sections">
            <!-- First row -->
            <div class="row pt-5">
                <!--First column-->
                <div class="col-lg-5 col-md-12 wow fadeIn" data-wow-delay="0.4s">
                    <!--Secion heading-->
                    <div class="d-flex justify-content-start">
                        <h4 class="text-center font-up mb-5 wow fadeIn" data-wow-delay="0.2s">Layanan</strong>?</h4>
                    </div>
                    <!--Description-->
                    <p class="grey-text mb-3" align="justify">
                        Multimedio plus merupakan sebuah startup yang kami dirikan untuk menjadi solusi dalam bidang pendidikan dan  dunia kreatif digital dimasyarakat, kami siap membantu untuk menangani  berbagai macam project multimedia seperti website, aplikasi, video, fotografi, dan berbagai macam keperluan lain yang menyangkut bidang multimedia. Perusahaan kami juga menyediakan layanan bimbingan belajar (untuk SD, SMP dan SMA), serta mengadakan kursus dalam bidang multimedia, seperti (editing video, adsense, drone, dan lain sebagainya). kami  siap membantu anda dalam menyelesaikan berbagai keperluan dan kebutuhan anda, segera konsultasikan kebutuhan anda dengan kami
                    </p>
                    <p class="grey-text mb-3" align="right">
                        salam sukses<br>
                        multimedio plus

                    </p>
                </div>
                <!--/First column-->
                <!--Second column-->
                <div class="col-lg-6 offset-lg-1 col-md-12 mb-5 wow fadeIn" data-wow-delay="0.4s">
                    <!--Second headind-->
                    <div class="d-flex justify-content-start">
                        <h4 class="text-center font-up mb-5 wow fadeIn" data-wow-delay="0.2s">Bergerak <strong>di Bidang</strong></h4>
                    </div>
                    <!--Description-->
                    <p class="black-text font-up font-bold" align="justify">Video Editing</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="black-text font-up font-bold pt-3" align="justify">Kursus</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="black-text font-up font-bold pt-3" align="justify">Software Development</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="black-text font-up font-bold pt-3" align="justify">IT Support</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!--/Second column-->
            </div>
            <!--/First row-->
        </section>
        <!-- /.Section About -->
    </div>

    <div id="layanan" class="mt-5 view hm-gradient" style="background: url('{{ url('assets/img/landing/banner2.jpg') }}') fixed; background-size: cover">
        <!--Secion heading-->
        <section class="pb-5">
            <h2 class="font-up text-center font-bold my-5 pt-5 pb-5 wow fadeInDown" data-wow-delay="0.2s">Layanan</h2>
            <!--First row-->
            <div class="row  wow fadeIn pb-5" data-wow-delay="0.2s">
                <div class="col-lg-3 col-md-6 text-center mt-1">
                    <div class="icon-area">
                        <div class="circle-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <br>
                        <strong>KURSUS</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <a class="btn btn-indigo btn-rounded mt-3"> Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mt-1">
                    <div class="icon-area">
                        <div class="circle-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <br>
                        <strong>VIDEO EDITING</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <a class="btn btn-indigo btn-rounded mt-3"> Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mt-1">
                    <div class="icon-area">
                        <div class="circle-icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <br>
                        <strong>SOFTWARE DEVELOPMENT</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <a class="btn btn-indigo btn-rounded mt-3"> Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mt-1">
                    <div class="icon-area">
                        <div class="circle-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <br>
                        <strong>IT SUPPORT</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        <a class="btn btn-indigo btn-rounded mt-3"> Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!--/First row-->
        </section>
    </div>
    <!-- First container -->

    <div class="container">
        <section id="testimoni" class="section team-section text-center pb-3 pt-2">

            <!--Section heading-->
            <h1 class="section-heading h1 pt-5 wow fadeInDown">Testimoni</h1>

            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <div class="col-md-4 mb-r">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
                        </div>

                        <!--Content-->
                        <h4 class="mb-3">Anna Deynah</h4>
                        <h6 class="mb-3 font-bold grey-text">Web Designer</h6>
                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>

                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star-half-full"> </i>
                        </div>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
                        </div>

                        <!--Content-->
                        <h4 class="mb-3">John Doe</h4>
                        <h6 class="mb-3 font-bold grey-text">Web Developer</h6>
                        <p><i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                        </div>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
                        </div>
                        <!--Content-->
                        <h4 class="mb-3">Maria Kate</h4>
                        <h6 class="mb-3 font-bold grey-text">Photographer</h6>
                        <p><i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>

                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star-o"> </i>
                        </div>

                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            <hr class="between-sections py-5 mt-5">

        </section>
    </div>


    <!-- Scrollspy -->
    <div class="dotted-scrollspy clearfix d-none d-sm-block">
        <ul class="nav smooth-scroll flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#about"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#layanan"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#testimoni"><span></span></a></li>
        </ul>
    </div>
@endsection

@section('custom_css')
    <style>
        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 700px;
            }
        }
    </style>
@endsection

@section('custom_js')
@endsection
