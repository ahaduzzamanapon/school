@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">

                <h1 class="my-4">Vision and Objectives</h1>
                <p><b>Vision and Objectives of [School Name]</b></p>
                <p>
                    <strong>Vision:</strong> At [School Name], our vision is to foster a dynamic and inclusive learning community that empowers students to excel academically, develop essential life skills, and become responsible global citizens. We aspire to create an environment where creativity, critical thinking, and ethical values are cultivated, preparing students to embrace challenges and contribute positively to society.
                </p>
                <p><strong>Objectives:</strong></p>
                <ol class="pl-3">
                    <li class="pb-3"><strong>Academic Excellence:</strong> We are committed to providing a rigorous and comprehensive academic curriculum that challenges students to reach their full potential. Through innovative teaching methods, personalized support, and a strong foundation in core subjects, we aim to nurture lifelong learners who are well-prepared for higher education and professional pursuits.</li>
                    <li class="py-3"><strong>Holistic Development:</strong> We believe in a well-rounded education that goes beyond academics. Our objective is to nurture students’ physical, emotional, and social well-being. We encourage participation in sports, arts, cultural activities, and community service, fostering a balanced growth that prepares students for a diverse world.</li>
                </ol>
            </div>
            <div class="col-lg-3 col-md-6 order-2 order-md-3 order-lg-3">
                <div id="block-14" class="widget side-bar widget_block widget_media_image">
                    <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="218"
                                                                  height="150"
                                                                  src="{{url('mujib.png')}}"
                                                                  class="wp-image-900"
                                                                  srcset="{{url('mujib.png')}}"
                        /></figure>
                </div>
                <div class="widget widget_notice">
                    <div class="notice-wrap">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="widget-title m-b10">Notice</h3> <a
                                    href="#">View All</a>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a
                                            href="#">Production,
                                            Storage, Transfer, Transport, Supply, Distribution and Marketing</a>
                                    </li>
                                    <li>
                                        <a
                                            href="#">Regarding
                                            attending the hearing with necessary documents.</a>
                                    </li>
                                    <li>
                                        <a
                                            href="#">Meeting
                                            to review the draft policy regarding tuition</a>
                                    </li>
                                    <li>
                                        <a
                                            href="#">Sent
                                            Up I (Promotion) Exam Routine</a>
                                    </li>
                                    <li>
                                        <a
                                            href="#">Tuition
                                            fee payment method through Rocket and Nexus Pay</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget_calender">
                    <div class="notice-wrap">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="widget-title m-b10">Calendar</h3>
                            </div>
                            <div class="card-body">
                                <div class="calender-wrap">
                                    <div id="calendar" class="calendar">
                                        <!-- Calendar will be added here -->
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            // Add calendar logic here
                                            // You can use any jQuery calendar plugin of your choice

                                            // For example, let's use jQuery UI Datepicker plugin
                                            $('#calendar').datepicker();
                                        });
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget_gallery">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="widget-title m-b10">Gallery</h3> <a
                                href="#">View
                                All</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img width="195" height="110"
                                         src="{{url('schoolpic.jpg')}}"
                                         class="attachment-home_gallery_image size-home_gallery_image wp-post-image"
                                         alt decoding="async" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img width="195" height="110"
                                         src="{{url('schoolpic.jpg')}}"
                                         class="attachment-home_gallery_image size-home_gallery_image wp-post-image"
                                         alt decoding="async" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img width="195" height="110"
                                         src="{{url('schoolpic.jpg')}}"
                                         class="attachment-home_gallery_image size-home_gallery_image wp-post-image"
                                         alt decoding="async" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img width="195" height="110"
                                         src="{{url('schoolpic.jpg')}}"
                                         class="attachment-home_gallery_image size-home_gallery_image wp-post-image"
                                         alt decoding="async" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img width="179" height="110"
                                         src="{{url('schoolpic.jpg')}}"
                                         class="attachment-home_gallery_image size-home_gallery_image wp-post-image"
                                         alt decoding="async"
                                    />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img width="179" height="110"
                                         src="{{url('schoolpic.jpg')}}"
                                         class="attachment-home_gallery_image size-home_gallery_image wp-post-image"
                                         alt decoding="async"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
