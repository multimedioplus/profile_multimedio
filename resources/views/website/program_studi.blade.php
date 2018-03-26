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

        <h2 class="font-up text-center font-bold my-4 pt-5 wow fadeInDown" data-wow-delay="0.2s">Program Studi</h2>
        <hr class="between-sections pb-5">


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
