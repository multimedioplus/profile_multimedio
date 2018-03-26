@extends('layouts.template')

@section('title', 'Beranda')

@section('body_class', 'designer')

@section('footer_class', 'page-footer center-on-small-only blue-grey lighten-5 pt-0')

@section('header')
    <header class="">
        @include('includes.header_nav')
    </header>
@endsection

@section('content')
    <div class="container mb-5 pb-5">

        <h2 class="font-up text-center font-bold my-4 pt-5 wow fadeInDown" data-wow-delay="0.2s">Testimoni</h2>
        <hr class="between-sections pb-5">

        <section class="section team-section text-center pb-3">
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

        </section>

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
        header, .full-height {
            height: 100px;
        }
        .content {
            min-height: 100vh;
            height: auto;
        }
    </style>
@endsection

@section('custom_js')
@endsection
