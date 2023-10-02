@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1 class="my-4">{{ __('Syllabus') }}</h1>
                <h3>সিলেবাস – ১ম শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 1.pdf') }}">Bangla Version Syllabus</a></li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 1- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ২য় শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 2.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 2- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ৩য় শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 3.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 3- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ৪র্থ শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 4.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 4- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ৫ম শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 5.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 5- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ৬ষ্ঠ শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 6.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 6- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ৭ম শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 7.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 7- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ৮ম শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 8.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 8- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ৯ম শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 9.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 9- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
                <h3>সিলেবাস – ১০ম শ্রেণি</h3>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 10.pdf') }}">Bangla Version Syllabus</a>
                    </li>
                    <li class="py-1"><a href="{{ url('public/pdf/Syllabus Class 10- English.pdf') }}">English Version
                            Syllabus</a></li>
                </ul>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
