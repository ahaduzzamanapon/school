@extends('website_view.layouts.default')
@section('content')
    <style>
        .hover-color-red:hover {
            color: #f74040;
            transition: 0.2s;
        }

        .hover-color-blue:hover {
            color: #0056b3;
            transition: 0.2s;
        }

        .link-color {
            color: #609513;
            transition: 0.2s;
        }

        .fs-1 {
            font-size: 13px;
        }
    </style>
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5">
                            <p class="position-absolute bg-success ml-4 fs-1 text-center text-white p-1 rounded-bottom">
                                31-AUG<br> 2023</p>
                            <a href="{{ url('news/welcome-to-our-college-dhaka') }}"><img
                                    src="{{ url('public/62a0432a90c05993939702-350x250.png') }}"></a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="card-title hover-color-red"><a
                                        href="{{ url('news/welcome-to-our-college-dhaka') }}">Lorem Ipsum is simply dummy
                                        text of
                                        the printing and typesetting industry.</a></h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <a class="link-color text-uppercase fs-3"
                                    href="{{ url('news/welcome-to-our-college-dhaka') }}"><strong>{{ __('Read_More') }}
                                    </strong><i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5">
                            <p class="position-absolute bg-success ml-4 fs-1 text-center text-white p-1 rounded-bottom">
                                31-AUG<br> 2023</p>
                            <a href="{{ url('/news/welcome-to-notre-dame-college-dhaka') }}"><img
                                    src="{{ url('public/62a0432a90c05993939702-350x250.png') }}"></a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="card-title hover-color-red"><a
                                        href="{{ url('/news/welcome-to-notre-dame-college-dhaka') }}">Lorem Ipsum is simply
                                        dummy text of
                                        the printing and typesetting industry.</a></h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <a class="link-color text-uppercase fs-3"
                                    href="{{ url('/news/welcome-to-notre-dame-college-dhaka') }}"><strong>>{{ __('Read_More') }}
                                    </strong><i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>

@stop
