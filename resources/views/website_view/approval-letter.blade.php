@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1 class="my-4">{{ __('Approval_letter') }}</h1>
                <img class="mb-3" style="width: 100%" src="{{ url('public/advertisement-approval.jpeg') }}">
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
