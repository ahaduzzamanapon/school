@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1 class="my-4">{{ $noticeTitle }}</h1>
                <p>{{ $notice }}</p>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>

@stop
