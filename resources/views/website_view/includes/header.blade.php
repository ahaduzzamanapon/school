<div class="page-wraper">
    <div id="loading-area"></div>
    <header class="site-header header-style-1 dark mo-left">
        <div class="top-bar">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="tabuk-social list-inline">
                            <li>
                                <a href="https://facebook.com" class="fab fa-facebook-f" target="_blank"></a>
                            </li>
                            <li>
                                <a href="https://twitter.com" class="fab fa-twitter" target="_blank"></a>
                            </li>
                            <li>
                                <a href="http://linkedin.com" class="fab fa-linkedin-in" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="tabuk-contact list-inline">
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span><span class="__cf_email__"
                                            data-cfemail="6c05020a032c0d1a05090218090f04420f0301">test@email.com</span></span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-phone"></i>
                                    <span>+88 0123421414</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo-name-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-6 order-lg-1 order-md-1 order-1">
                        <div class="logo-header mostion">
                            <a href="#">
                                <img id="logoImage" src="{{ url('public/logo.png') }}" class="logo" alt="AOGERy"
                                    style="display: none; width: 90px; height: 90px;">
                                <img id="logoTransparentImage" src="{{ url('public/logo.png') }}" class="logo"
                                    alt="AOGERy" style="width: 90px; height: 90px;">

                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-md-2 order-3">
                        <div class="school-name-wrap">
                            <h1>{{ __('School_Name') }}</h1>
                            <span>{{ __('School_Addres') }}</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2">
                        <div class="logo-header mostion logo-right">
                            <a href="#">
                                <img src="{{ url('public/mujib.png') }}" class="logo" alt="Logo Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="latest-news-section">
            <div class>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-wrap">
                            <div class="news-title">
                                <span> {{ __('Latest_News') }}</span>
                            </div>
                            <marquee behavior="scroll" direction="left" onmouseover="this.stop();"
                                onmouseout="this.start();">
                                <ul>
                                    <li>
                                        <i class="fa fa-forward" aria-hidden="true"></i>
                                        <a href="#">আজ সকালে, আমরা আপনকে একটি আশ্চর্যজনক ঘটনা সম্পর্কে জানাতে
                                            আসছি, যা আমাদের প্রিয় বিদ্যালয়ে ঘটেছে। আমরা গর্বিতভাবে ঘোষণা করতে চাই যে,
                                            এই সময়ের বিদ্যালয় নিউজের জন্য আমাদের স্কুল একটি নতুন মুখোমুখি আবদ্ধ
                                            হয়েছে!.</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-forward" aria-hidden="true"></i>
                                        <a href="#">
                                            এই সপ্তাহের বই মেলায়, আমাদের বিদ্যালয়ের পক্ষ থেকে একটি অদ্বিতীয় ঘটনা
                                            ঘটেছে। যদি তা না হয়, তা নির্ধারণ করতে কিছুটা সময় লাগতে পারে!
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-forward" aria-hidden="true"></i>
                                        <a href="#">
                                            স্কুলের পিকনিক আয়োজন করতে এই বছরের প্রথম দিন, একটি বাসে সমস্ত শিক্ষার্থী
                                            এবং শিক্ষকের জন্য একটি অদ্বিতীয় গন্তব্য নির্ধারণ করা হয়েছিল। শুরুতে এটি
                                            স্বাভাবিক একটি বিস্ময়কর দিনের মধ্যে সম্পন্ন হয়েছিল। তবে, পিকনিকের শেষে,
                                            ছাত্র-ছাত্রীদের পূর্বাবস্থায় একটি নতুন অস্ত্রোপচার ঘটে!
                                        </a>
                                    </li>
                                </ul>
                            </marquee>
                            <div class="news-btn">
                                <a href="#">{{ __('All_News') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                        data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        {{ __('Menu') }} </button>
                    <div class="header-nav navbar-collapse collapse" id="navbarNavDropdown">
                        <ul id="menu-main-menu-english" class="nav navbar-nav">
                            <li id="menu-item-858"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-858"><a
                                    href="{{ url('/') }}">{{ __('Home') }}</a></li>
                            <li id="menu-item-780"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-780">
                                <a>{{ __('About_Us') }}</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-1045"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1045">
                                        <a href="{{ url('/about-us') }}">{{ __('About_Us') }}</a>
                                    </li>
                                    <li id="menu-item-953"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-953">
                                        <a
                                            href="{{ url('/message-form-chairman') }}">{{ __('Message_from_Chairman') }}</a>
                                    </li>
                                    <li id="menu-item-952"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-952">
                                        <a
                                            href="{{ url('/message-form-principal') }}">{{ __('Message_from_Principal') }}</a>
                                    </li>
                                    <li id="menu-item-951"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-951">
                                        <a href="{{ url('/governing-body') }}">{{ __('Governing_body') }}</a>
                                    </li>
                                    <li id="menu-item-950"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-950">
                                        <a href="{{ url('/approval-letter') }}">{{ __('Approval_letter') }}</a>
                                    </li>
                                    <li id="menu-item-949"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-949">
                                        <a href="{{ url('/history') }}">{{ __('History') }}</a>
                                    </li>
                                    <li id="menu-item-948"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-948">
                                        <a
                                            href="{{ url('/vision-and-objectives') }}">{{ __('Vision_and_Objectives') }}</a>
                                    </li>
                                    <li id="menu-item-969"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-969">
                                        <a href="{{ url('/activities') }}">{{ __('Activities') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-954"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-954">
                                <a href="#">{{ __('ACADEMIC') }}</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-966"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-966">
                                        <a href="{{ url('/academic-calendar') }}">{{ __('Academic_Calendar') }}</a>
                                    </li>
                                    <li id="menu-item-965"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-965">
                                        <a href="{{ url('/syllabus') }}">{{ __('Syllabus') }}</a>
                                    </li>
                                    <li id="menu-item-964"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-964">
                                        <a href="{{ url('/class-routine') }}">{{ __('Class_Routine') }}</a>
                                    </li>
                                    <li id="menu-item-972"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-972">
                                        <a href="{{ url('/lesson-plan') }}">{{ __('Lesson_Plan') }}</a>
                                    </li>
                                    <li id="menu-item-963"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-963">
                                        <a
                                            href="{{ url('/co-curricular-activities') }}">{{ __('Co_curricular_Activities') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-989"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-989">
                                <a href="#">{{ __('INFORMATION') }}</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-1038"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1038">
                                        <a href="{{ url('/notice') }}">{{ __('Notice') }}</a>
                                    </li>
                                    <li id="menu-item-1151"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1151">
                                        <a href="{{ url('/results') }}">{{ __('Result') }}</a>
                                    </li>
                                    <li id="menu-item-991"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-991">
                                        <a href="{{ url('/teachers-info') }}">{{ __('Teacher_Info') }}</a>
                                    </li>
                                    <li id="menu-item-990"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-990">
                                        <a href="{{ url('/students-info') }}">{{ __('Student_Info') }}</a>
                                    </li>
                                    <li id="menu-item-992"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-992">
                                        <a href="{{ url('/list-of-holidays') }}">{{ __('List_of_Holidays') }}</a>
                                    </li>
                                    <li id="menu-item-992"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-992">
                                        <a href="{{ url('/downloads') }}">{{ __('Download') }}</a>
                                    </li>
                                    <li id="menu-item-995"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-995">
                                        <a href="{{ url('/facilities') }}">{{ __('Facilities') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-1002"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1002"><a
                                    href="{{ url('/admission') }}">{{ __('Admission') }}</a></li>
                            <li id="menu-item-1004"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1004">
                                <a href="#">{{ __('News_And_Events') }}</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-994"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-994">
                                        <a href="{{ url('/news') }}">{{ __('News') }}</a>
                                    </li>
                                    <li id="menu-item-993"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993">
                                        <a href="{{ url('/events') }}">{{ __('Events') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-999"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-999"><a
                                    href="{{ url('/gallery') }}">{{ __('Gallery') }}</a></li>
                            <li id="menu-item-779"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-779"><a
                                    href="{{ url('/contact') }}">{{ __('Contact') }}</a></li>
                            <li id="menu-item-781"
                                class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-781">
                                <a><span style="margin-left:0.3em;"> {{ __('Current_Language') }}</span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-781-en"
                                        class="lang-item lang-item-78 lang-item-en current-lang lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-781-en">
                                        <a href="{{ url('language/en') }}" hreflang="en-US" lang="en-US"><span
                                                style="margin-left:0.3em;">English</span></a>
                                    </li>
                                    <li id="menu-item-781-bn"
                                        class="lang-item lang-item-108 lang-item-bn menu-item menu-item-type-custom menu-item-object-custom menu-item-781-bn">
                                        <a href="{{ url('language/bn') }}" hreflang="bn-BD" lang="bn-BD"><span
                                                style="margin-left:0.3em;">বাংলা</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="page-content">
        <div id="main">
