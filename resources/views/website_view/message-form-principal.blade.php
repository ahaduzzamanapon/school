@extends('website_view.layouts.default')
@section('content')
    <div class="body-wrap">
        <div class="row">
            <div class="col-lg-9 col-md-6 order-1 p-4">

                <h1 class="my-4">{{ __('Message_from_Principal') }}</h1>
                <img class="mb-3"
                    src="{{ url('public/young-woman-teacher-wearing-glasses-sitting-school-desk-front-blackboard-classroom-checking-class-register-looking-camera-smiling-cheerfully-1024x683.jpg') }}">
                <p>
                    I am deeply honored and delighted to welcome you all as the principal.
                </p>
                <p>
                    Has a rich history of academic success, innovation, and a strong commitment to nurturing the potential
                    of every student. I want to assure you that our commitment to these principles remains unwavering.
                </p>
                <p>
                    To the esteemed faculty and staff, I express my gratitude for your dedication and tireless efforts in
                    shaping the future of our students. Your expertise, mentorship, and commitment to academic excellence
                    are instrumental in our college’s success.
                </p>
                <p>
                    As we come together, let us foster an environment of mutual respect, inclusivity, and collaboration. I
                    encourage open dialogue and the exchange of ideas, as it is through diversity and varied perspectives
                    that we can achieve greatness.
                </p>
                <p>
                    As the principal, I am here to support your academic journey, and my door is always open to listen to
                    your concerns, suggestions, and ideas. Together, we will work towards creating an environment that
                    encourages innovation, critical thinking, and holistic development.
                </p>
                <p>
                    In closing, I want to emphasize that School is more than just a place of learning; it is a place where
                    dreams take shape, where talents are honed, and where the future is forged.
                </p>
                <p>
                    I look forward to getting to know each one of you and witnessing your growth and achievements throughout
                    your time here at School. Welcome once again to our vibrant academic community!
                </p>
                <p>
                    With warm regards,
                </p>
                <p>
                    [ Name]
                </p>
                <p>
                    Headmaster, [College Name]
                </p>
            </div>
            @include('website_view.includes.sidebar')
        </div>
    </div>
@stop
