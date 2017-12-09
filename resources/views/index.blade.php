@extends('layouts.template')

@section('title', 'Beranda')

@section('body_class', 'software-lp')
@section('header_class', '')
@section('footer_class', 'page-footer center-on-small-only blue-grey lighten-5 pt-0')

@section('content')
    <div class="container">
        <!-- Section: About -->
        <section id="about" class="section about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

            <!-- Grid row -->
            <div class="row pt-2 mt-5">

                <!-- Grid column -->
                <div class="col-lg-6 col-md-12 mb-3 wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Image -->
                    <img src="{{ url('assets/img/landing/screen.jpg') }}" class="img-fluid z-depth-1 rounded" alt="My photo">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6 ml-auto col-md-12 wow fadeInDown" data-wow-delay="0.4s">

                    <!-- Secion heading -->
                    <h3 class="mb-5 dark-grey-text title font-bold wow fadeIn" data-wow-delay="0.2s">
                        <strong>Build your brand with us</strong>
                    </h3>

                    <!-- Description -->
                    <p align="justify" class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta
                        ab cupiditate iure eaque? Repellendus voluptatum, magni impedit delectus, beatae maxime temporibus
                        maiores quibusdam.</p>
                    <p align="justify" class="grey-text">Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus
                        in hic molestias repellendus illo ullam odit quia velit. Lorem ipsum dolor sit amet.</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: About -->
        <hr>
    </div>


        <!--Section: Features v.4-->
    <div class="streak streak-md streak-photo" style="background-image:url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg')">
        <div class="flex-center white-text blue-gradient-mask">
            <div class="container py-3">

                <!--Section: Features v.4-->
                <section class="section feature-box wow fadeIn" data-wow-delay="0.2s">

                    <!--Section heading-->
                    <h1 class="py-5 my-5 white-text text-center wow fadeIn" data-wow-delay="0.2s"><strong class="font-bold">Lorem ipsum</strong> dolor sit amet</h1>

                    <!--Grid row-->
                    <div class="row features-small mb-5">

                        <!--Grid column-->
                        <div class="col-md-12 col-lg-4 wow fadeInLeft">

                            <!--Grid row-->
                            <div class="row mb-5">
                                <div class="col-3">
                                    <a type="button" class="btn-floating white btn-lg my-0"><i class="fa fa-tablet blue-text" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-9">
                                    <h5 class="feature-title white-text">Fully responsive</h5>
                                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores.</p>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row mb-5">
                                <div class="col-3">
                                    <a type="button" class="btn-floating white btn-lg my-0"><i class="fa fa-level-up blue-text" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-9">
                                    <h5 class="feature-title white-text">Frequent updates</h5>
                                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores.</p>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row mb-5">
                                <div class="col-3">
                                    <a type="button" class="btn-floating white btn-lg my-0"><i class="fa fa-phone blue-text" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-9">
                                    <h5 class="feature-title white-text">Technical support</h5>
                                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam.</p>
                                </div>
                            </div>
                            <!--Grid row-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-12 col-lg-4 px-5 mb-2 center-on-small-only flex-center">
                            <img src="{{ url('assets/img/landing/admin-new1.png') }}" alt="" class="z-depth-0 img-fluid">
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-12 col-lg-4 wow fadeInRight">

                            <!--Grid row-->
                            <div class="row mb-5">
                                <div class="col-3">
                                    <a type="button" class="btn-floating white btn-lg my-0"><i class="fa fa-object-group blue-text" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-9">
                                    <h5 class="feature-title white-text">Editable layout</h5>
                                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam.</p>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row mb-5">
                                <div class="col-3">
                                    <a type="button" class="btn-floating white btn-lg my-0"><i class="fa fa-rocket blue-text" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-9">
                                    <h5 class="feature-title white-text">Fast and powerful</h5>
                                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam.</p>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row mb-5">
                                <div class="col-3">
                                    <a type="button" class="btn-floating white btn-lg my-0"><i class="fa fa-cloud-upload blue-text" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-9">
                                    <h5 class="feature-title white-text">Cloud storage</h5>
                                    <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam.</p>
                                </div>
                            </div>
                            <!--Grid row-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!--/Section: Features v.4-->
            </div>
        </div>
    </div>
    <!--/Third container-->
    <!--/Section: Features v.4-->

    <div class="container">
        <section id="pricing" class="section pb-5">

            <!--Secion heading-->
            <h2 class="section-heading my-5 py-5 dark-grey-text font-bold wow fadeIn" data-wow-delay="0.2s">Our top offers</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-r">
                    <!--Card-->
                    <div class="pricing-card naked-card wow fadeInLeft">

                        <!--Content-->
                        <div class="card-body dark-grey-text">
                            <h5>Spa & Beauty</h5>
                            <!--Price-->
                            <div class="price blue-text">
                                <h1>199</h1>
                            </div>
                            <!--/.Price-->
                            <ul class="striped dark-grey-text">
                                <li>
                                    <p><strong>3</strong> attraction</p>
                                </li>
                                <li>
                                    <p><strong>10</strong> lorem ipsum</p>
                                </li>
                                <li>
                                    <p><strong>15</strong> lorem ipsum</p>
                                </li>
                                <li>
                                    <p><strong>200</strong> lorem ipsum</p>
                                </li>
                            </ul>
                            <a class="btn btn-red btn-rounded">Buy now</a>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-r wow fadeInUp">

                    <!-- Card -->
                    <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(7).jpg');">

                        <!-- Content -->
                        <div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3">

                            <!--Content-->
                            <div class="card-body">
                                <h5>Relax Day</h5>
                                <!--Price-->
                                <div class="price pt-0">
                                    <h1 class="px-0 mx-0">299</h1>
                                </div>
                                <!--/.Price-->
                                <ul class="striped">
                                    <li>
                                        <p><strong>5</strong> attractions</p>
                                    </li>
                                    <li>
                                        <p><strong>20</strong> lorem ipsum</p>
                                    </li>
                                    <li>
                                        <p><strong>50</strong> lorem ipsum</p>
                                    </li>
                                    <li>
                                        <p><strong>300</strong> lorem ipsum</p>
                                    </li>
                                </ul>
                                <a class="btn btn-outline-white btn-rounded">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-r wow fadeInRight">
                    <!--Card-->
                    <div class="pricing-card naked-card">

                        <!--Content-->
                        <div class="card-body dark-grey-text">
                            <h5>Massage</h5>
                            <!--Price-->
                            <div class="price blue-text">
                                <h1>99</h1>
                            </div>
                            <!--/.Price-->
                            <ul class="striped dark-grey-text">
                                <li>
                                    <p><strong>2</strong> attrations</p>
                                </li>
                                <li>
                                    <p><strong>20</strong> lorem ipsum</p>
                                </li>
                                <li>
                                    <p><strong>35</strong> lorem ipsum</p>
                                </li>
                                <li>
                                    <p><strong>100</strong> lorem ipsum</p>
                                </li>
                            </ul>
                            <a class="btn btn-red btn-rounded"> Buy now</a>
                        </div>

                    </div>
                    <!--Card-->
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--/Section: Pricing v.5-->

        <section id="contact" class="section mb-5">

            <!-- Section heading -->
            <h3 class="text-center title my-5 py-4 dark-grey-text font-bold wow fadeIn" data-wow-delay="0.2s">
                <strong>Contact us</strong>
            </h3>

            <!-- Section sescription -->
            <p class="section-description mb-5 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
                esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

            <div class="col-md-7">
            <div class="row wow fadeIn" data-wow-delay="0.4s">

                <!-- Grid column -->
                <div class="col-md-8 col-lg-9">
                    <form>
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="form41" class="form-control">
                                        <label for="form41" class="">Your name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="form52" class="form-control">
                                        <label for="form52" class="">Your email</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="form51" class="form-control">
                                    <label for="form51" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="form76" class="md-textarea"></textarea>
                                    <label for="form76">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!-- Grid row -->
                    </form>

                    <div class="center-on-small-only mb-5">
                        <a class="btn btn-rounded btn-red font-bold">Send</a>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3">
                    <ul class="contact-icons float-md-right">
                        <li>
                            <i class="fa fa-map-marker fa-2x title"></i>
                            <p>Surabaya, Indonesia</p>
                        </li>

                        <li>
                            <i class="fa fa-phone fa-2x title"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li>
                            <i class="fa fa-envelope fa-2x title"></i>
                            <p>contact@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>

            </div>
        </section>
        <!-- Section: Contact v.2 -->
    </div>
@endsection

@section('custom_js')
@endsection