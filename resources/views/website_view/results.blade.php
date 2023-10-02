@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1 class="my-4">{{ __('Result') }}</h1>
                <p class="text-center"><strong>{{ __('School_Name') }}</strong></p>
                <p class="text-center">Class 9 Exam Result 2022</p>
                <img src="{{ url('/public/NewResultBD.Com-Dhaka-Board-SSC-Re-Scrunity-Result-2021.pdf-835x1024.jpg') }}">
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>

@stop
