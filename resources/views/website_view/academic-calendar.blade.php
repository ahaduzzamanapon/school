@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1 class="my-4">{{ __('Academic_Calendar') }}</h1>
                <p><b>[School Name] Academic Calendar for the Year [Year-2023-2024]</b></p>
                <p><b>Month: August</b></p>
                <ul class="pl-3">
                    <li class="py-1">
                        August 15: First day of school – Welcome assembly and orientation for new students.</li>
                    <li class="py-1">
                        August 30: Parent-Teacher Meet (PTM) – Discuss student expectations and goals.</li>
                </ul>
                <p><b>Month: September</b></p>
                <ul class="pl-3">
                    <li class="py-1">September 5: Labor Day – School closed.</li>
                    <li class="py-1">September 20-25: Mid-term examinations for Grades 6-12.</li>
                </ul>
                <p><b>Month: October</b></p>
                <ul class="pl-3">
                    <li class="py-1">October 9-13: Fall Break – No classes.</li>
                    <li class="py-1">October 31: Halloween Costume Day – Creative costume contest.</li>
                </ul>
                <p><b>Month: November</b></p>
                <ul class="pl-3">
                    <li class="py-1">November 11: Veterans Day – School closed.</li>
                    <li class="py-1">November 24-25: Thanksgiving Break – School closed.</li>
                </ul>
                <p><b>Month: December</b></p>
                <ul class="pl-3">
                    <li class="py-1">December 16: Winter Concert – Enjoy a festive musical evening.</li>
                    <li class="py-1">December 19 – January 2: Winter Break – School closed.</li>
                </ul>
                <p><b>Month: January</b></p>
                <ul class="pl-3">
                    <li class="py-1">January 3: School resumes after Winter Break.</li>
                    <li class="py-1">January 16: Martin Luther King Jr. Day – School closed.</li>
                </ul>
                <p><b>Month: February</b></p>
                <ul class="pl-3">
                    <li class="py-1">February 14: Valentine’s Day Celebration – Spread love and friendship.</li>
                    <li class="py-1">February 20-24: Presidents’ Day Week – Themed activities and projects.</li>
                </ul>
                <p><b>Month: March</b></p>
                <ul class="pl-3">
                    <li class="py-1">March 13-17: Spring Break – No classes.</li>
                    <li class="py-1">March 30-31: Parent-Teacher Conferences (PTCs) – Discuss student progress.</li>
                </ul>
                <p><b>Month: April</b></p>
                <ul class="pl-3">
                    <li class="py-1">April 14: Good Friday – School closed.</li>
                    <li class="py-1">April 22: Earth Day – Environmental awareness activities.</li>
                </ul>
                <p><b>Month: May</b></p>
                <ul class="pl-3">
                    <li class="py-1">May 1-5: Final examinations for Grades 9-12.</li>
                    <li class="py-1">May 22-26: End-of-year assessments for Grades 1-8.</li>
                </ul>
                <p><b>Month: June</b></p>
                <ul class="pl-3">
                    <li class="py-1">June 3: Graduation Ceremony for Seniors.</li>
                    <li class="py-1">June 10: Last day of school – Awards assembly and year-end celebration.</li>
                </ul>
                <p>Please note that this is a sample academic calendar and can be customized to suit the specific needs and
                    traditions of any school. It’s important to include both academic and non-academic events to ensure a
                    well-rounded educational experience for students. Additionally, dates may vary depending on local
                    holidays and regulations.</p>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
