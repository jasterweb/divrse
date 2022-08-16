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
                                <img class="mx-auto" src="{{ asset('argon') }}/page/about/About_ChangeMindset.png">
                                <h4>Change mindset not behavior</h4>
                                <p>We’re innovating a new way of normal and pushing DEI to the front of the conversation.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/about/About_Empower.png">
                                <h4>Empowerment</h4>
                                <p>We are committed to providing access to the resources our members need to increase their earning capacity, access better career opportunities,
                                    and become a more valuable asset.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/about/About_Empathy.png">
                                <h4>Empathy</h4>
                                <p>We understand and can relate to the challenges of our members. Therefore, we would continue
                                    to facilitate connections and push for change</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/about/About_Believein.png">
                                <h4>Believe in all</h4>
                                <p>We love and support everyone, no strings attached. We believe that revolutions
                                    are about power for the people </p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img class="mx-auto" src="{{ asset('argon') }}/page/about/Abou_Honesty.png">
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
                                    <li class="btx"><a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter1">
                                        Profile
                                    </a></li>
                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                            <h2>Anthony Davis, BBA</h2>
                                            <span>Chief Executive Officer & Co-Founder</span>
                                              <p class="text-dark">Anthony Davis is a serial entrepreneur with an unquenchable passion for business. He holds a Bachelor's Degree in Business Administration from the University of Windsor, Ont. and attained the CFA designation in 2001.   He has played a key role in the success of various businesses with total revenues of over a half a billion dollars in sectors ranging from finance, retail clothing, medical supply distribution, real estate development, and oil & gas distribution. His life motto is that "It takes all of us to help each of us", which has fuelled his passion to give back and has led to his involvement in a number of charitable organizations both locally and internationally. His quest for knowledge and an unending desire to stay ahead of the curve has led him to become an Angel Investor, Venture Capitalist, and Business Coach & Mentor.</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
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
                                    <li class="btx"><a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter2">
                                        Profile
                                    </a></li>
                                    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                            <h2>Amine Barrak, MSC</h2>
                                            <span>Chief Technical Officer & Co-Founder</span>
                                              <p class="text-dark">Amine has over 4+ years of experience in research and implementation in data analysis, machine learning, data manipulation, statistical methods, including regression, classification, neural network architectures and natural language processing. Amine possesses over 4 years of programming experience with Python, R, Bash and C/C++. Autonomous, yet social and a team player, Amine has an excellent work ethic and problem-solving mindset.
                                                Languages: French and English</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
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
                                    <li class="btx"><a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter3">
                                        Profile
                                    </a></li>
                                    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                            <h2>Janelle Watson, MPA</h2>
                                            <span>Chief Financial Officer</span>
                                              <p class="text-dark">Janelle Watson graduated with a Masters Degree in Professional Accounting from the University of Miami in Miami, Florida, U.S.A., where she was inducted into the University’s honor society for international business, management and administration. Shortly thereafter, she attained a Certified Public Accountant license in the U.S. state of Florida, while employed as a staff accountant at PricewaterhouseCoopers. <br>

                                                After finding her niche in retail accounting, Mrs. Watson then joined the accounting department of a multi-million-dollar retail company, where she served for nine years as Chief Financial Officer and Vice President of Finance. In those capacities, she gained significant experience in all aspects of financial management, including strategic planning, forecasting, budgeting, financial reporting and analysis, as well as overseeing all aspects of the accounting function.
                                                Mrs. Watson, as an accounting consultant serves as a Director and Audit Committee Chairman on several Boards.   She  provides a broad range of accounting, financial and business advisory services to clients in various industries, including retail, manufacturing, distribution, professional services and technology. Her experience working with international and diverse talent in the numerous corporate roles that she has held, and her passion to assist in developing this talent, has led her to Divrse.</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
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
                                    <li class="btx"><a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter4">
                                        Profile
                                    </a></li>
                                    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                            <h2>Nicole Calabrigo, BS</h2>
                                            <span>Chief Marketing Officer  </span>
                                              <p class="text-dark">Nciole has over 4+ years of experience in research and implementation in data analysis, machine learning, data manipulation, statistical methods, including regression, classification, neural network architectures and natural language processing. Amine possesses over 4 years of programming experience with Python, R, Bash and C/C++. Autonomous, yet social and a team player, Amine has an excellent work ethic and problem-solving mindset.
                                                Languages: French and English</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
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
                                    <li class="btx"><a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter5">
                                        Profile
                                    </a></li>
                                    <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                            <h2>Carol Henderson, MHRM</h2>
                                            <span>Chief Operating Officer</span>
                                              <p class="text-dark">Carol has over 4+ years of experience in research and implementation in data analysis, machine learning, data manipulation, statistical methods, including regression, classification, neural network architectures and natural language processing. Amine possesses over 4 years of programming experience with Python, R, Bash and C/C++. Autonomous, yet social and a team player, Amine has an excellent work ethic and problem-solving mindset.
                                                Languages: French and English</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
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
                                    <li class="btx"><a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter6">
                                        Profile
                                    </a></li>
                                    <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                            <h2>Jack Davis, MD</h2>
                                            <span>Chief Product Officer</span>
                                              <p class="text-dark">Jack has over 4+ years of experience in research and implementation in data analysis, machine learning, data manipulation, statistical methods, including regression, classification, neural network architectures and natural language processing. Amine possesses over 4 years of programming experience with Python, R, Bash and C/C++. Autonomous, yet social and a team player, Amine has an excellent work ethic and problem-solving mindset.
                                                Languages: French and English</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="py-5 footlanding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h2 class="title2 text-white">Diversity won't wait</h2>
                    <div class="text-light desc1 ">Turn diversity goals into action today</div>
                    <br />
                    <a href="#" class="btn btn-secondary">Get Started</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box imgcta">
                        <img src="{{ asset('argon') }}/home/footcta.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyr">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-light">Copyright © 2022 Divrse - All Rights Reserved</div>

                </div>
            </div>
        </div>
    </footer>
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
