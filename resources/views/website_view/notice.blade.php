@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1 class="my-4">Notice</h1>
                <ul class="list-style-none">
                    <li><i class="fa-solid fa-hand-point-right"></i><a class="ml-2"
                            href="{{ url('/notice/Production-Storage-Transfer-Transport-Supply-Distribution-andMarketing') }}">
                            Production,Storage,
                            Transfer,Transport, Supply, Distribution andMarketing</a></li>
                    <li><i class="fa-solid fa-hand-point-right"></i><a class="ml-2"
                            href="{{ url('/notice/Regarding-attendingthe-hearing-withnecessary-documents') }}"> Regarding
                            attendingthe
                            hearing withnecessary documents.</a></li>
                    <li><i class="fa-solid fa-hand-point-right"></i><a class="ml-2"
                            href="{{ url('/notice/Meeting-toreview-the-draft-policyregarding-tuition') }}"> Meeting
                            toreview the draft
                            policyregarding tuition</a></li>
                    <li><i class="fa-solid fa-hand-point-right"></i><a class="ml-2"
                            href="{{ url('/notice/Sent-Up-I(Promotion)-ExamRoutine') }}"> Sent Up
                            I(Promotion)
                            ExamRoutine</a></li>
                    <li><i class="fa-solid fa-hand-point-right"></i><a class="ml-2"
                            href="{{ url('/notice/Tuition-feepayment-method-throughRocket-and-Nexus-Pay') }}"> Tuition
                            feepayment method
                            throughRocket and Nexus Pay</a></li>
                </ul>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>

@stop
