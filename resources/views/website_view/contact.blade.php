@extends('website_view.layouts.default')
@section('content')
    <style>
        .banner {
            height: 300px;
            background-image: url("public/counter-bg-1920x300.jpg");
            background-size: cover;
            display: flex;
            align-items: center;
            width: 100%;
        }

        .contact-banner {
            /* padding: 0 5px; */
            width: 100%;
        }

        .box {
            height: 80px;
            width: 80px;
            background: #609513;
            font-size: 2rem
        }

        .link-color {
            color: #609513;
            transition: 0.2s;
        }
    </style>
    <div class="body-wrap p-0">
        <div class="contact-banner">
            <div class="banner px-3">
                <h1 class="text-white">{{ __('Get_in_Touch_with_Us') }}</h1>
            </div>
        </div>
        <div class="container">
            <div class="row px-4 py-5">
                <div class="col text-center bg-white p-5 mb-4 mr-2">
                    <div class="box text-white d-flex mx-auto align-items-center justify-content-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <P class="my-2"><b>{{ __('Phone') }}</b></P>
                    <a class="link-color" href="tel:01234567890">01234567890</a>
                </div>
                <div class="col text-center bg-white p-5 mb-4 ml-2">
                    <div class="box text-white d-flex mx-auto align-items-center justify-content-center">
                        <i class="fa-solid fa-location-pin"></i>
                    </div>
                    <P class="my-2"><b>{{ __('Address') }}</b></P>
                    <a class="link-color" href="#map">BTI Premier Plaza (Level # 3), Plot-Cha 90/A- Pragati Sharani,
                        Gulshan, Dhaka</a>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7187.150589902147!2d89.2713495!3d25.751554899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1696208038185!5m2!1sen!2sbd"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

@stop
