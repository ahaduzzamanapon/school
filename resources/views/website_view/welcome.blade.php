@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-3 col-md-6 order-2 order-md-2 order-lg-1">
                <div id="block-13" class="widget side-bar widget_block widget_media_image">
                    <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="241" height="150"
                            src="{{ url('public/suborno-logo.png') }}" alt class="wp-image-899"
                            srcset="{{ url('public/suborno-logo.png') }}" /></figure>
                </div>
                <div class="widget widget_portal_btn">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="widget-title m-b10">{{ __('Online_Portal') }}</h3>
                        </div>
                        <div class="card-body">
                            <a class="portal-btn" href="{{ url('public//admin-dashboard') }}">{{ __('Online_Portal') }}</a>
                        </div>
                    </div>
                </div>
                <div class="widget widget_important_menu">
                    <div class="important-menu-wrap">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="widget-title m-b10">{{ __('Important_Link') }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="side-menu">
                                    <ul id="menu-important-link" class="sidebar-nav">
                                        <li id="menu-item-1159"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1159">
                                            <a href="https://moedu.gov.bd">{{ __('Ministry_of_Education') }}</a>
                                        </li>
                                        <li id="menu-item-1160"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1160">
                                            <a
                                                href="https://www.dhakaeducationboard.gov.bd">{{ __('Dhaka_Education_Board') }}</a>
                                        </li>
                                        <li id="menu-item-1161"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1161">
                                            <a href="https://teachers.gov.bd">{{ __('শিক্ষক_বাতায়ন') }}</a>
                                        </li>
                                        <li id="menu-item-1162"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1162">
                                            <a href="http://konnect.edu.bd">{{ __('কিশোর_বাতায়ন') }}</a>
                                        </li>
                                        <li id="menu-item-1163"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1163">
                                            <a href="https://banbeis.portal.gov.bd">{{ __('Banbeis') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget_portal_btn">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="widget-title m-b10">{{ __('Result') }}</h3>
                        </div>
                        <div class="card-body">
                            <a class="portal-btn" href="#">{{ __('Exam_Result') }}</a>
                        </div>
                    </div>
                </div>
                <div class="widget widget_event">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="widget-title m-b10">{{ __('Social_Link') }}</h3>
                        </div>
                        <div class="card-body">
                            <ul class="social-icon-version-two">
                                <li>
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f"></i>
                                        {{ __('Facebook') }} </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter"></i>
                                        {{ __('Twitter') }} </a>
                                </li>
                                <li>
                                    <a href="http://linkedin.com">
                                        <i class="fab fa-linkedin-in"></i>
                                        {{ __('Linkedin') }} </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widget widget_event">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="widget-title m-b10">{{ __('Emergency_Number') }}</h3>
                        </div>
                        <div class="card-body">
                            <img src="{{ url('public/emergency-number.png') }}" alt="emergency-number-update">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-1 order-md-1 order-lg-2">
                <div class="banner-slider slider" id="section2">
                    <div class="banner-image">
                        <img src="{{ url('public/thumb_801_1662_710_0_0_crop.jpg') }}" alt="thumb_801_1662_710_0_0_crop">
                        <div class="banner-con-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home-banner-content">
                                            <h1 class="banner-title">
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-banner-slider banner-slider slider">
                    <div class="banner-image">
                        <img src="{{ url('public/thumb_801_1662_710_0_0_crop.jpg') }}" alt>
                        <div class="banner-con-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home-banner-content">
                                            <h1 class="banner-title">
                                            </h1>
                                            <a href="#" id="hoverTuneButton">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full p-t40 p-b40 massage-notice-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="massage-wrap mobile-view">
                                    <h2 class="text-uppercase">{{ __('Message_from_Chairman') }}</h2>
                                    <div class="dez-separator bg-primary"></div>
                                    <img src="{{ url('public/manimage.jpg') }}" alt="Name Chairman"
                                        class="img-thumbnail">
                                    <h4>Name Chairman</h4>
                                    <p>Welcome to <strong>AvienTech School &amp; College</strong>, an
                                        educational institute founded and administered by the Congregation of
                                        Holy Cross which has been serving the nation.</p>
                                    <a class="more-button" href="#">{{ __('Read_More') }}</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="massage-wrap">
                                    <h2 class="text-uppercase">{{ __('Message_from_Principal') }}</h2>
                                    <div class="dez-separator bg-primary"></div>
                                    <img src="{{ url('public/manimage.jpg') }}" alt="Name Peincipal"
                                        class="img-thumbnail">
                                    <h4>Name Peincipal</h4>
                                    <p>Welcome to<strong> AvienTech School &amp; College</strong>, an
                                        educational institute founded and administered by the Congregation of
                                        Holy Cross which has been serving the nation.</p>
                                    <a class="more-button" href="#">{{ __('Read_More') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full p-t40 p-b40 welcome-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="welcome-content">
                                    <h2>WELCOME TO my College, Dhaka</h2>
                                    <p>At the present time the College receives no financial aid from the
                                        government of Bangladesh. It is supported entirely by tuition fees
                                        collected from the students.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="gallery-wrap">
                                    <img src="{{ url('public/schoolpic.jpg') }}" alt class="img-thumbnail">
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt-3">
                                <a class="more-button" href="#">{{ __('Read_More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-full p-t40 p-b40 event-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="widget widget_notice">
                                    <div class="notice-wrap">
                                        <div class="card">
                                            <div class="card-header bg-primary">
                                                <h3 class="widget-title m-b10">{{ __('Events') }}</h3> <a
                                                    href="#">{{ __('View_All') }}</a>
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <a href="#">{{ __('School_Events') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">{{ __('Language_Day') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">{{ __('Victory_Day') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">{{ __('Independent_Day') }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="widget widget_notice">
                                    <div class="notice-wrap">
                                        <div class="card">
                                            <div class="card-header bg-primary">
                                                <h3 class="widget-title m-b10">{{ __('News') }}</h3> <a
                                                    href="#">{{ __('View_All') }}</a>
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>
                                                        <a href="#">Lorem
                                                            Ipsum is simply dummy text of the printing and
                                                            typesetting industry.</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Lorem
                                                            Ipsum is simply dummy text of the printing and
                                                            typesetting industry.</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
