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

        <h2 class="font-up text-center font-bold my-4 pt-5 wow fadeInDown" data-wow-delay="0.2s">Portofolio</h2>
        <hr class="between-sections pb-5">

        <!--Projects section v.1-->
        <section class="section">

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4"><strong>Our best projects</strong></h2>

            <!--Section description-->
            <p class="section-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-r">

                    <!--Featured image-->
                    <div class="view overlay hm-white-slight z-depth-2">

                        <img src="https://mdbootstrap.com/img/Photos/Others/food.jpg" class="img-fluid" alt="Sample project image">

                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!--Excerpt-->
                    <div class="card-body">
                        <a href="" class="pink-text"><h5><i class="fa fa-coffee"></i> Culinary</h5></a>
                        <h4>Title of the news</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                        <a class="btn btn-indigo btn-sm"><i class="fa fa-clone left"></i> View project</a>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-r">

                    <!--Featured image-->
                    <div class="view overlay hm-white-slight z-depth-2">

                        <img src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" class="img-fluid" alt="Sample project image">

                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!--Excerpt-->
                    <div class="card-body">
                        <a href="" class="blue-text"><h5><i class="fa fa-camera"></i> Business</h5></a>
                        <h4>Title of the news</h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime facere possimus.</p>
                        <a class="btn btn-indigo btn-sm"><i class="fa fa-clone left"></i> View project</a>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-r">

                    <!--Featured image-->
                    <div class="view overlay hm-white-slight z-depth-2">

                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img (73).jpg" class="img-fluid" alt="Sample project image">

                        <a>
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!--Excerpt-->
                    <div class="card-body">
                        <a href="" class="purple-text"><h5><i class="fa fa-plane"></i> Travels</h5></a>
                        <h4>Title of the news</h4>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
                        <a class="btn btn-indigo btn-sm"><i class="fa fa-clone left"></i> View project</a>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--/Projects section v.1-->

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
