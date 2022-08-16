@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'About Us')
@section('content')
    <div class="header bg-primary pt-9 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">


                    <div class="col-lg-6 col-md-6">
                        <h1 class="titlesect text-white text-left">About Us</h1>
                        <h2 class="titlesect text-cyan text-left" style="margin-bottom: -7px !important;">Driven by change.</h2>
                        <h2 class="titlesect text-danger text-left">Fueled by passion.</h2>
                        
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="image-box heroimage">
                            <img src="{{ asset('argon') }}/page/about/main.png" class="basehero">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="mivison">

                        <div class="boxsquare bg-cyan">
                            <h3 class="titlesect text-left">Our Mission</h3>
                            <p class="text-dark">To help diverse and underrepresented talent foster connection to meaningful
                                career opportunities by providing access to the resources and community they need to thrive.</p>
                        </div>
                        <div class="boxsquare bg-danger">
                            <h3 class="titlesect text-left">Our Vision</h3>
                            <p class="text-dark">Divrse is improving workplaces across Canada by providing HR teams with
                                qualified talent from diverse backgrounds. Powered by our Artificial Intelligence, Divrse is
                                recreating talent pipelines, disrupting recruiting norms, and eliminating bias in real-time.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="quote1">
                        <h3>"Our ability to reach unity in diversity will be the beauty and the test of our civilization."</h3>
                        <span class="quoteby">- Mahatma Gandhi -</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-white text-left">What We Do</h2>
                    <p class="text-light" style="padding-right: 2%;">
                        Divrse’s technology plugs directly into your ATS, giving you access to qualified talent from diverse and
                        underrepresented backgrounds. Everyone who enters the Divrse talent pool has had their expertise
                        verified by one of our partners or completed our onboarding process.
                        From there, AI-powered skills-based matching recommends applicants by the criteria you provide.
                        By bridging the gap between companies and candidates, Divrse has built a diversity recruitment
                        platform that benefits all parties.</p>
                        <a href="#" class="btn btn-xl btn-secondary mt-2">Get Started</a>
               
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box img100">
                        <img src="{{ asset('argon') }}/page/cand_today.png">
                    </div>
                </div>


            </div>
        </div>
    </section>
    
    <section class="bg-primary pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="deflogo">
                        <li><img src="{{ asset('argon') }}/page/about/a.png"/><span>Connectivity</span></li>
                        <li><img src="{{ asset('argon') }}/page/about/b.png"/><span>Diversity</span></li>
                        <li><img src="{{ asset('argon') }}/page/about/c.png"/><span>Peoples</span></li>
                        <li><img src="{{ asset('argon') }}/page/about/e.png"/><span>Demonstrate</span></li>
                        <li><img src="{{ asset('argon') }}/page/about/f.png"/></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    

    <section class="pt-6 pb-6" style="background: #F2F5FF;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-primary">Our Culture & Values</h2>
                </div>
                <div class="col-lg-12 col-md-12">

                    <div class="wcuslide">
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/home/wcu.png">
                                <h4>Change mindset not behavior</h4>
                                <p>We’re innovating a new way of normal and pushing DEI to the front of the conversation.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/home/wcu.png">
                                <h4>Empowerment</h4>
                                <p>We are committed to providing access to the resources our members need to increase their earning capacity, access better career opportunities,
                                    and become a more valuable asset.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/home/wcu.png">
                                <h4>Empathy</h4>
                                <p>We understand and can relate to the challenges of our members. Therefore, we would continue
                                    to facilitate connections and push for change</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/home/wcu.png">
                                <h4>Believe in all</h4>
                                <p>We love and support everyone, no strings attached. We believe that revolutions
                                    are about power for the people </p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/home/wcu.png">
                                <h4>Honesty</h4>
                                <p>We say what we mean and we mean what we say, there are no guessing games here at Divrse</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-primary">Our Leadership</h2>
                    <div class="team" style="background-image: url('http://localhost:8000/argon/page/about/line.png');background-size: contain;background-position: center;background-repeat: no-repeat;">
                        <div class="itemteam">
                            <div class="wrapteam">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/team.png">
                                <h4>Anthony Davis, BBA</h4>
                                <span>Chief Executive Officer & Co-Founder</span>
                                <ul>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="btx"><a href="">Profile</a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="itemteam">
                            <div class="wrapteam">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/team.png">
                                <h4>Amine Barrak, MSC</h4>
                                <span>Chief Technical Officer & Co-Founder</span>
                                <ul>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="btx"><a href="">Profile</a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="itemteam">
                            <div class="wrapteam">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/team.png">
                                <h4>Janelle Watson, MPA</h4>
                                <span>Chief Financial Officer & Co-Founder</span>
                                <ul>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="btx"><a href="">Profile</a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="itemteam">
                            <div class="wrapteam">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/team.png">
                                <h4>Nicole Calabrigo, BS</h4>
                                <span>Chief Marketing Officer & Co-Founder</span>
                                <ul>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="btx"><a href="">Profile</a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="itemteam">
                            <div class="wrapteam">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/team.png">
                                <h4>Carol Henderson, MHRM</h4>
                                <span>Chief Operating Officer & Co-Founder</span>
                                <ul>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="btx"><a href="">Profile</a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="itemteam">
                            <div class="wrapteam">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/team.png">
                                <h4>Jack Davis, MD</h4>
                                <span>Chief Product Officer & Co-Founder</span>
                                <ul>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="btx"><a href="">Profile</a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footers.footer', [
        'title' => 'Diversity won\'t wait',
        'desc' => 'Turn diversity goals into action today',
        'cta' => 'Get Started'
    ])

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
