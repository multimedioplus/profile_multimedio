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

    <div class="container-fluid" style="background-color: #f4f4fa">
        <div class="container py-4">

            <!--Section: Services-->
            <section id="layanan" class="section mt-3 mb-3 pb-3">

                <!-- Section heading -->
                <h3 class="text-center title my-5 dark-grey-text font-bold wow fadeIn" data-wow-delay="0.2s">
                    <strong>Layanan Kami</strong>
                </h3>

                <!-- First row -->
                <div class="row wow fadeIn" data-wow-delay="0.4s">

                    <!-- First column -->
                    <div class="col-md-6 mb-r text-center">

                        <!--Panel-->
                        <div class="card card-body text-left white hoverable">
                            <p class="feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4">
                                <i class="fa fa-square orange-text mr-2" aria-hidden="true"></i>
                                <strong>Web design</strong>
                            </p>
                            <p class="grey-text font-small mx-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                            <p class="font-small font-bold orange-text mx-4 mb-0">
                                <a>read more</a>
                            </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /First column -->

                    <!-- Second column -->
                    <div class="col-md-6 mb-r text-center">

                        <!--Panel-->
                        <div class="card card-body text-left white hoverable">
                            <p class="feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4">
                                <i class="fa fa-square orange-text mr-2" aria-hidden="true"></i>
                                <strong>Development</strong>
                            </p>
                            <p class="grey-text font-small mx-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                            <p class="font-small font-bold orange-text mx-4 mb-0">
                                <a>read more</a>
                            </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Second column -->

                    <!-- Third column -->
                    <div class="col-md-6 mb-r text-center">

                        <!--Panel-->
                        <div class="card card-body text-left white hoverable">
                            <p class="feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4">
                                <i class="fa fa-square orange-text mr-2" aria-hidden="true"></i>
                                <strong>Branding</strong>
                            </p>
                            <p class="grey-text font-small mx-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                            <p class="font-small font-bold orange-text mx-4 mb-0">
                                <a>read more</a>
                            </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Third column -->

                    <!-- Fourth column -->
                    <div class="col-md-6 mb-r text-center">

                        <!--Panel-->
                        <div class="card card-body text-left white hoverable">
                            <p class="feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4">
                                <i class="fa fa-square orange-text mr-2" aria-hidden="true"></i>
                                <strong>Marketing</strong>
                            </p>
                            <p class="grey-text font-small mx-4">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                            <p class="font-small font-bold orange-text mx-4 mb-0">
                                <a>read more</a>
                            </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Fourth column -->

                </div>
                <!-- /.First row -->

            </section>
            <!--/Section: Services-->

        </div>
    </div>
    <!--Second container-->

        <!--Section: Features v.4-->
    <div class="streak streak-md streak-photo" style="background-image:url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg')">
        <div class="flex-center white-text blue-gradient-mask">
            <div class="container py-3">

                <!--Section: Features v.4-->
                <section class="section feature-box wow fadeIn" data-wow-delay="0.2s">

                    <!--Section heading-->
                    <h1 class="white-text text-center wow fadeIn" data-wow-delay="0.2s"><strong class="font-bold">Lorem ipsum</strong> dolor sit amet</h1>

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

        <section id="testimoni" class="section mb-5">

            <!--Section heading-->
            <h2 class="section-heading my-5 pt-5 pb-4 font-bold wow fadeIn" data-wow-delay="0.2s">Testimoni :</h2>

            <div class="row">

                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <!--Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active light-blue darken-4"></li>
                        <li data-target="#multi-item-example" data-slide-to="1" class="light-blue darken-4"></li>
                        <li data-target="#multi-item-example" data-slide-to="2" class="light-blue darken-4"></li>
                    </ol>
                    <!--Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner text-center" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">
                            <!--Grid column-->
                            <div class="col-md-4">

                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>Anna Deynah</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis
                                        hic tenetur.</p>

                                    <!--Review-->
                                    <div class="grey-text">
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
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>John Doe</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                        laboriosam.
                                    </p>

                                    <!--Review-->
                                    <div class="grey-text">
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
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>Abbey Clark</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                        nihil molestiae.</p>

                                    <!--Review-->
                                    <div class="grey-text mb-3s">
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
                        <!--First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <!--Grid column-->
                            <div class="col-md-4">

                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>Blake Dabney</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis laboriosam.</p>

                                    <!--Review-->
                                    <div class="grey-text">
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
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(6).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>Andrea Clay</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis
                                        hic tenetur quae.</p>

                                    <!--Review-->
                                    <div class="grey-text">
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
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>Cami Gosse</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium.
                                    </p>

                                    <!--Review-->
                                    <div class="grey-text">
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
                        <!--Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">
                            <!--Grid column-->
                            <div class="col-md-4">

                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>Bobby Haley</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis
                                        hic tenetur quae.</p>

                                    <!--Review-->
                                    <div class="grey-text">
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
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>Elisa Janson</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium.
                                    </p>

                                    <!--Review-->
                                    <div class="grey-text">
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
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4>Robert Jacobs</h4>

                                    <p>
                                        <i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis laboriosam.</p>

                                    <!--Review-->
                                    <div class="grey-text">
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
                        <!--Third slide-->

                    </div>
                    <!--Slides-->

                </div>
                <!--Carousel Wrapper-->

            </div>

        </section>

    </div>

    <div class="container">
        <section id="kontak" class="section mb-5">

            <!-- Section heading -->
            <h3 class="text-center title my-5 py-4 dark-grey-text font-bold wow fadeIn" data-wow-delay="0.2s">
                <strong>Contact us</strong>
            </h3>

            <!-- Section sescription -->
            <p class="section-description mb-5 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
                esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

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

        </section>
        <!-- Section: Contact v.2 -->
    </div>
@endsection

@section('custom_js')
@endsection