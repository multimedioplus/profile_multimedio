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
