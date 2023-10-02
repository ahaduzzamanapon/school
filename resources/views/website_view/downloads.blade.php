@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1>{{ __('Download') }}</h1>
                <embed src="{{ url('public/pdf/NewResultBD.Com-Dhaka-Board-SSC-Re-Scrunity-Result-2021-3.pdf-3.pdf') }}"
                    type="application/pdf" class="w-100 h-75">
                <div class="mt-3">
                    <a
                        href="{{ url('public/pdf/NewResultBD.Com-Dhaka-Board-SSC-Re-Scrunity-Result-2021-3.pdf-3.pdf') }}">NewResultBD.Com-Dhaka-Board-SSC-Re-Scrunity-Result-2021-3.pdf-3</a>
                    <a href="{{ url('public/pdf/NewResultBD.Com-Dhaka-Board-SSC-Re-Scrunity-Result-2021-3.pdf-3.pdff') }}"
                        class="btn btn-dark ml-2" style="border-radius: 25px">Download</a>
                </div>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
