@extends('website_view.layouts.default')
@section('content')
    <style>
        img {
            width: 100%
        }
    </style>
    <div class="body-wrap">
        <div class="row photos mt-5">
            <div class="col-12 col-md-4 mb-4">
                <a href="{{ url('public/language-day.jpeg') }}"><img src="{{ url('public/language-day.jpeg') }}"
                        alt=""></a>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <a href="{{ url('public/event-six.jpg') }}"><img src="{{ url('public/event-six.jpg') }}" alt=""></a>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <a href="{{ url('public/event-seven.jpg') }}"><img src="{{ url('public/event-seven.jpg') }}"
                        alt=""></a>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <a href="{{ url('public/event-five.jpg') }}"><img src="{{ url('public/event-five.jpg') }}"
                        alt=""></a>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <a href="{{ url('public/event-eight.jpg') }}"><img src="{{ url('public/event-eight.jpg') }}"
                        alt=""></a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.photos').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                }
            })
        })
    </script>
@stop
