@extends('website_view.layouts.default')
@section('content')
    <style>
        .link-color {
            color: #609513;
            transition: 0.2s;
        }
    </style>
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <div class="section-head text-center">
                    <h1 class="text-center">{{ __('EVENTS') }}</h1>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-secondry style-skew"></div>
                    </div>
                </div>
                <ul class="list-unstyled">
                    <li class="py-2"><i class="fa-solid fa-hand-point-right"></i><a class="ml-2 link-color"
                            href="{{ url('/events/school-events') }}">
                            {{ __('School_Events') }}</a></li>
                    <li class="py-2"><i class="fa-solid fa-hand-point-right"></i><a class="ml-2 link-color"
                            href="{{ url('/events/international-mother-language-day') }}">
                            {{ __('Language_Day') }}</a></li>
                    <li class="py-2"><i class="fa-solid fa-hand-point-right"></i><a class="ml-2 link-color"
                            href="{{ url('/events/victory-day') }}">
                            {{ __('Victory_Day') }}</a></li>
                    <li class="py-2"><i class="fa-solid fa-hand-point-right"></i><a class="ml-2 link-color"
                            href="{{ url('/events/independent-day') }}">
                            {{ __('Independent_Day') }}</a></li>
                </ul>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
