@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">

                <h1 class="my-4">Governing body</h1>
                <img class="mb-3" src="{{url('members-pci-list-1-1.png')}}">
                <p>
                    The governing body of a school is a group of individuals responsible for overseeing the overall management and strategic direction of the school. This body is typically composed of various stakeholders, including representatives from the school administration, parents, teachers, and sometimes members of the local community. The specific composition and roles of the governing body may vary depending on the type of school and its governing structure.
                </p>
                <p>
                    The primary responsibilities of the governing body include:
                </p>
                <ol class="pl-3">
                    <li class="py-3">
                        <strong>Setting Policies and Strategies:</strong> The governing body establishes and approves policies, strategies, and goals that guide the school’s operations. This includes decisions related to curriculum, budgeting, staffing, facilities, and overall educational direction.</li>
                    <li class="py-3">
                        <strong>Financial Oversight:</strong> The governing body oversees the school’s financial management, including budget approval, financial planning, and ensuring the effective and transparent use of resources.</li>
                    <li class="py-3">
                        <strong>Appointing Leadership:</strong> In many cases, the governing body is responsible for appointing the school’s principal or headteacher. They may also play a role in hiring senior staff members.</li>
                    <li class="py-3">
                        <strong>Accountability:</strong> The governing body ensures that the school is accountable to its stakeholders, including parents, students, and the broader community. They monitor the school’s performance and ensure that it is meeting its educational and operational objectives.</li>
                    <li class="py-3">
                        <strong>Compliance and Legal Matters:</strong> The governing body ensures that the school complies with relevant laws and regulations governing education. They also handle legal matters related to the school’s operations.</li>
                    <li class="py-3">
                        <strong>Community Engagement:</strong> The governing body serves as a bridge between the school and the local community. They may gather input, address concerns, and maintain open lines of communication.</li>
                    <li class="py-3">
                        <strong>Strategic Planning:</strong> The governing body develops long-term plans and strategies to ensure the school’s growth and development over time.</li>
                </ol>
                <p>The members of the governing body typically include:</p>
                <ul class="pl-3">
                    <li class="py-3">
                        <strong>Chairperson/Chairman:</strong> The head of the governing body, responsible for leading meetings and representing the group.</li>
                    <li class="py-3">
                        <strong>Parent Representatives:</strong> Parents of students attending the school who represent the interests of the parent community.</li>
                    <li class="py-3">
                        <strong>Teacher Representatives:</strong> Teachers elected by their colleagues to provide input from the faculty’s perspective.</li>
                    <li class="py-3">
                        <strong>Community Representatives:</strong> Individuals from the local community who bring an external perspective to the governing body.</li>
                    <li class="py-3">
                        <strong>Principal/Headteacher:</strong> The school’s principal or headteacher is often an ex-officio member, providing insights into the school’s day-to-day operations.</li>
                    <li class="py-3">
                        <strong>Staff Representative:</strong> A non-teaching staff member who represents the interests of the school’s support staff.
                    </li>
                </ul>
                <p>
                    The governing body plays a vital role in ensuring that the school operates effectively, maintains high educational standards, and meets the needs of its students and community. Their collaborative efforts contribute to the success and growth of the school.
                </p>
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
