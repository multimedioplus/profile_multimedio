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

        <h2 class="font-up text-center font-bold my-4 pt-5 wow fadeInDown" data-wow-delay="0.2s">Dokumentasi</h2>
        <hr class="between-sections pb-5">



        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-2" data-slide-to="1"></li>
                        <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="view hm-black-light">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(105).jpg" alt="First slide">
                                <div class="mask"></div>
                            </div>
                            <div class="carousel-caption">
                                <h3 class="h3-responsive">This is the first title</h3>
                                <p>First text</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view hm-black-light">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(115).jpg" alt="Second slide">
                                <div class="mask"></div>
                            </div>
                            <div class="carousel-caption">
                                <h3 class="h3-responsive">Thir is the second title</h3>
                                <p>Secondary text</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view hm-black-light">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(108).jpg" alt="Third slide">
                                <div class="mask"></div>
                            </div>
                            <div class="carousel-caption">
                                <h3 class="h3-responsive">This is the third title</h3>
                                <p>Third text</p>
                            </div>
                        </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox no-margin">

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(121).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(121).jpg" class="img-fluid">
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(96).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(96).jpg" class="img-fluid" />
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(104).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(104).jpg" class="img-fluid" />
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(45).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg" class="img-fluid" />
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(122).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(122).jpg" class="img-fluid" />
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg" class="img-fluid" />
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(125).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(125).jpg" class="img-fluid" />
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg" class="img-fluid" />
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(119).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(119).jpg" class="img-fluid" />
                            <h3 class="text-center my-3">Photo title</h3>
                        </a>
                    </figure>

                </div>

            </div>
        </div>
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
