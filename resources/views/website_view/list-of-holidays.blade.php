@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1>TList of Holidays</h1>
                <embed src="{{ url('public/pdf/Holiday.pdf') }}" type="application/pdf" class="w-100 h-75">
                <div class="mt-3">
                    <a href="{{ url('public/pdf/Holiday.pdf') }}">Holiday</a>
                    <a href="{{ url('public/pdf/Holiday.pdf') }}" class="btn btn-dark ml-2"
                        style="border-radius: 25px">DOwnload</a>
                </div>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
