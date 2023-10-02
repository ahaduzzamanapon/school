@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1>{{ __('Class_Routine') }}</h1>
                <embed src="{{ url('public/pdf/school-routine-2.pdf') }}" type="application/pdf" class="w-100 h-75">
                <div class="mt-3">
                    <a href="{{ url('public/pdf/school-routine-2.pdf') }}">school-routine-2</a>
                    <button href="{{ url('public/pdf/school-routine-2.pdf') }}" class="btn btn-dark ml-2"
                        style="border-radius: 25px">DOwnload</button>
                </div>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
