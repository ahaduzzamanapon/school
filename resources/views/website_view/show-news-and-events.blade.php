@extends('website_view.layouts.default')
@section('content')
    <style>
        .mansoori-effect {
            overflow: hidden;
        }

        .mansoori-effect img {
            width: 100% !important;
            transition: all 10s ease-in-out;
        }

        .mansoori-effect img:hover {
            transform: scale(2);

        }
    </style>
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h3 class="my-4 text-capitalize">{{ $title }}</h3>
                <a style="font-size: 12px" href="#"><i class="fa-solid fa-calendar"></i> 31-Aug 2023</a>
                <div class="mansoori-effect my-3">
                    <img src="{{ url($image) }}">
                </div>
                <p><b>{{ explode('</b>', $content)[0] }}</b>{{ explode('</b>', $content)[1] }}</p>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>

@stop
