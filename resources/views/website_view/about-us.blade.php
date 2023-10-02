@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">
                <h1 class="my-4">{{ __('About') }}</h1>
                <p>Our school and College were founded by the Sisters of Notre Dame in 1922. Their charism still serves as
                    the foundation of our College today, as we strive to provide a career-focused, values-based, private
                    Catholic education to a diverse student body.</p>
                <p>Studying at Notre Dame means personal, one-on-one attention from professors, dozens of student groups, a
                    tight-knit student body, and a well-rounded curriculum. A liberal arts education from Notre Dame College
                    equips students with personal and professional skills that help them chase their passions and change the
                    world. </p>
                <img class="mb-3" src="{{ url('public/48053571-2.webp') }}">
                <p>Can you see yourself walking from class to class through our picturesque campus? Rehearsing with friends
                    for your next concert or strategizing positive social change with your favorite student organization? Do
                    you want to play air hockey in the Falcon’s Nest on campus over the weekend, or venture out to explore
                    some of Cleveland’s greatest attractions only 25 minutes away?</p>
                <p>Notre Dame College is a place for students who want to take their education beyond the pages of a book
                    and into the world. Our students succeed because they learn through experiences, engage with their
                    peers, and root their studies in their values and convictions. A Notre Dame student enters their
                    freshman year with an eagerness to learn and grow, an interest in the world around them, and a desire to
                    make a difference. They emerge a graduate with relevant professional skills, a broadened perspective,
                    and tools they’ll use to lead an impactful life.</p>
                <p>Finding your place on campus is natural, with over thirty student groups to choose from and plenty of
                    events and activities to attend. You’ll never know a dull moment. Small class sizes mean you get to know
                    your peers and professors on a personal level, making authentic connections that open doors and last a
                    lifetime.</p>
                <p>Notre Dame College’s history sets it apart from other private and liberal arts colleges in Northeast
                    Ohio. Our long and proven commitment to student-centered, values-based learning continues to benefit
                    students today. Our strong foundation has allowed us to successfully innovate and grow, providing
                    students the real-world experience and well-rounded education they’ll need to thrive in today’s
                    21st-Century society.</p>
                <p>The best way to picture yourself at NDC is to see it firsthand! Tour the campus and residence halls, meet
                    faculty members and athletic coaches, and experience our vibrant student life to feel what it’s like to
                    be a Falcon.</p>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
