@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Candidates')
@section('content')
    <div class="header bg-primary pt-5 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center justify-content-between">

                    <div class="col-lg-5 col-md-6">
                        <div class="image-box heroimage">
                            {{-- <img src="{{ asset('argon') }}/page/candidate/main.png" class="basehero"> --}}
                            <lottie-player src="{{ asset('argon') }}/animation/kedua.json" background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <h1 class="titlesect text-cyan text-left">Where jobs find you</h1>
                        <div class="text-light py-3">Divrse is on a mission: getting great talent, like yourself, matched with awesome opportunities at
                            companies who want to take responsibility and diversify their workforce at all levels.</div>
                        <br />
                        <a href="#" class="btn btn-secondary">Find A Job</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">

                    <h2 class="titlesect text-left mb-4">An empowering community<br />of support, vulnerability,<br />openness, and mutual trust.</h2>
                    <p class="text-dark">We support diverse and underrepresented talent as they navigate their journey through the
                        labor market. Search for career opportunities and get access to job search tools, career
                        development resources and a thriving community of diverse talent.</p>

                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="image-box img100">
                        <img src="{{ asset('argon') }}/page/candidate/cand_emp.png" style="width: 80%;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-primary pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-md-5">
                    <div class="image-box img100">
                        <img src="{{ asset('argon') }}/page/candidate/cand_top.png" style="width: 59%;">
                    </div>
                </div>

                <div class="col-lg-6 offset-md-1 col-md-6">
                    <h2 class="titlesect text-danger text-left mb-4">Today's top<br />companies are hiring.</h2>
                    <p class="text-light">
                        We partner with top Canadian companies from early-stage <br class="d-md-block d-none" />
                        startups to Fortune 500 companies to bring the best jobs <br class="d-md-block d-none" />
                        in tech and finance to you.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-cyan text-left mb-4">Apply in one click.</h2>
                    <p class="text-dark">
                        Fill out your profile once, and it’s your application forever. <br class="d-md-block d-none" />
                        No more cover letters or copying and pasting your work <br class="d-md-block d-none" />
                        experience for the 50th time.
                    </p>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="image-box img100">
                        <img src="{{ asset('argon') }}/page/candidate/cand_apply.png">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-cyan pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-primary">Resources and insights</h2>
                </div>
                <div class="col-lg-12 col-md-12">

                    <div class="wcuslide">
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/candidate/cand_Mentorship.png">
                                <h4>Mentorship</h4>
                                <p>
                                    Mentorship is a powerful tool to help you reach your career goals. Attend our mentorship
                                    sessions to meet industry leaders and get a head start in your career and in life.
                                </p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/candidate/cand_CareerInfo.png">
                                <h4>Career Information Session</h4>
                                <p>
                                    What’s the best way to get your foot in the door? Interacting with companies is crucial to a
                                    successful job search. We connect you with recruiters and hiring managers directly so you can
                                    gain valuable insights into career options.
                                </p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/candidate/cand_Event.png">
                                <h4>Events</h4>
                                <p>
                                    Our events are designed to help you overcome barriers to active participation in Canadian
                                    society and the labor market. Through a series of workshops facilitated by experienced
                                    professionals, you will develop the skills and confidence to achieve your goals.
                                </p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/candidate/cand_Career.png">
                                <h4>Career Accelerator Bootcamp</h4>
                                <p>
                                    It is stressful and nerve-racking to interview for a job or seek advancement at work. Being
                                    turned down for a role you really want is never fun, and it can seriously undermine your
                                    self-esteem. We want to help you land your dream job by teaching you the entire job search
                                    strategy from end to end free of charge.
                                </p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/candidate/cand_Podcast.png">
                                <h4>Podcast</h4>
                                <p>
                                    Explore the Divrse podcast to gain insights into the stories, experiences, and journeys of real
                                    people in order to provide you with strategies for success.
                                </p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/candidate/cand_Blog.png">
                                <h4>Blogs</h4>
                                <p>
                                    The blog contains useful resources for your job search and beyond. We’ve got you covered with
                                    all the guides, how-to’s, tips, and tricks you’ll need to succeed in your career.
                                </p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/candidate/cand_Tools.png">
                                <h4>Tools & Templates</h4>
                                <p>
                                    Check out our tried-and-true job-winning tools. We’ve compiled ATS-friendly resumes, cover
                                    letters, common interview questions, and other resources to help you along your career path.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">

                    <h2 class="titlesect text-cyan text-left mb-4">Jobs that are<br />tailored for you.</h2>
                    <p class="text-light">
                        Connect with the leading employers and give your career a rocket boost. Employers we match
                        you with are engaged and actively seeking candidates with your skills and experience!
                    </p>
                    <p class="text-light">
                        Our technology scans your resume and sends you customized job recommendations based on
                        your skills and experience.
                    </p>

                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="image-box img100">
                        <img src="{{ asset('argon') }}/page/candidate/cand_tailor.png">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white pt-7 pb-7">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-md-5">
                    <div class="image-box img100">
                        <img src="{{ asset('argon') }}/page/candidate/cand_change.png">
                    </div>
                </div>
                <div class="col-lg-6 offset-md-1 col-md-6">
                    <h2 class="titlesect text-cyan text-left mb-4">Change is coming.<br />Be part of it</h2>
                    <p class="text-dark">
                        Our partners are committed to recruiting and hiring diverse talent. If your next job is with a
                        Divrse partner, you’ll be joining a workplace that is committed to hiring and promoting diverse
                        and underrepresented talent.
                    </p>
                    <p class="text-dark">
                        Workplaces should be free of discrimination and offer equitable opportunities to all employees.
                        The more candidates we get hired at great companies, the more inclusive and diverse their
                        workforce becomes.
                    </p>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.footers.ctafoot', [
        'title' => 'Get started today.',
        'desc' => 'Finding the right job is life-changing. Let Divrse help you find your next big opportunity.',
        'link' => route('get'),
        'cta' => 'Sign Up'
    ])
    @include('layouts.footers.footer')

@endsection

@section('script')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.wcuslide').slick({
                dots: true,
                infinite: true,
                arrows: false,
                speed: 500,
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 1000,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

        });
    </script>
@endsection
