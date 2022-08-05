@extends('layouts.landing', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-primary pb-0 pt-8 ">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="title1">Unlock DE&I<br/>in the<br/>workplace.</h1>
                        <span class="text-light desc1">Divrse connects high quality, underrepresented talent, with world-class companies that care about (value) diversity, equity, and inclusion.</span>
                        <br/>
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="image-box heroimage">
                            <img src="{{ asset('argon') }}/home/hero1.png" class="basehero">
                            <img src="{{ asset('argon') }}/home/gear1.png" class="gear1">
                            <img src="{{ asset('argon') }}/home/gear2.png" class="gear2">
                            <img src="{{ asset('argon') }}/home/rocket.png" class="rocket">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="#A8D0E6" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(247, 147, 145, 0.61)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(168, 208, 230, 0.51)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#EF8383" />
        </g>
        </svg>
    </div>

    <section class="bg-white">
        <div class="container">
            <div class="row align-items-center mb-10">
                <div class="col-lg-6 col-md-6 pr-5">
                    <h2 class="text-cyan text-2rem font-weight-800">Uplifting underrepresented Candidates</h2>
                    <p>Divrse’s talent pool includes women, visible minorities, immigrants and members of the 2SLQBTQ+ community. These candidates are vetted, qualified and interviewed by our partner
                        companies before they are invited to join our talent pool. Each applicant is actively seeking new opportunities and ready to get to work.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-10">
                <div class="col-lg-6 col-md-6 pr-5">
                    <h2 class="text-pink text-2rem font-weight-800">Diversity recruiting.<br/>Powered by Technology.</h2>
                    <p>Divrse’s solution is proven to increase workforce diversity and the number of applicants from underrepresented backgrounds. Our diversity-first
                        recruitment solution focuses entirely on bringing qualified and underrepresented candidates directly to the top of your hiring funnel.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-10">
                <div class="col-lg-6 col-md-6 pr-5">
                    <h2 class="text-blue text-2rem font-weight-800">Diversity won't wait</h2>
                    <p>From startups to Fortune 500 companies, employers of all sizes use Divrse to find skilled and underrepresented talent for a wide
                        variety of employment opportunities including remote, part-time and full-time, permanent and contract roles. </p> <br/>
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-cyan">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect">In The Press</h2>
                    <ul class="presslogo">
                        <li><img src="{{ asset('argon') }}/home/client1.png"></li>
                        <li><img src="{{ asset('argon') }}/home/client2.png"></li>
                        <li><img src="{{ asset('argon') }}/home/client3.png"></li>
                        <li><img src="{{ asset('argon') }}/home/client4.png"></li>
                        <li><img src="{{ asset('argon') }}/home/client5.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-light">Divrse in numbers</h2>
                </div>
            </div>
        </div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="#A8D0E6" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(247, 147, 145, 0.61)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(168, 208, 230, 0.51)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#EF8383" />
            </g>
            </svg>
    </section>

    <section class="bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-light text-left">It’s a win-win situation</h2>
                    <p class="text-light">Divrse was founded on the belief (core value) that in order to enact change to corporate culture, systematic inequalities must be removed, and to do this -
                        it starts with each of us. Our mission is to
                        help underrepresented talent foster meaningful career opportunities while providing real economic value to companies seeking qualified and vetted
                        candidates. </p>
                        <a href="#" class="btn btn-xl btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-cyan pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect">The Proof is in the numbers</h2>
                </div>
            </div>
        </div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(247, 147, 145, 0.61)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(247, 147, 145, 0.61)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(168, 208, 230, 0.51)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(247, 147, 145, 0.61)" />
            </g>
            </svg>
    </section>

    
    <section class="bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-primary">Why companies and<br/>
                        recruiters use Divrse</h2>
                        <p class="text-center w600 m0-auto">Our all-in-one platform helps companies and recruiters source diversified,
                            pre-screened and  qualified candidates with confidence, while reducing time-to-hire and increasing net-promoter-score. </p>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="wcuslide">
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/wcu.png">
                                <h3>Qualified andengaged</h3>
                                <p>Every candidate in Divrse’s talent pool is vetted and interviewed by our partner companies before they are invited to join our talent pool. Each applicant is actively seeking new opportunities and ready to get to work.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/wcu.png">
                                <h3>Streamline the screening process</h3>
                                <p>Companies using Divrse boast a 16% reduction in time-to-hire by adding highly qualified candidates into their talent pipeline.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/wcu.png">
                                <h3>Transparent, AI-based technology</h3>
                                <p>Divrse’s unified solution syncs with your preferred ATS and plays an integral part of your daily workflow so you can sit back and watch the applications flow in.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/wcu.png">
                                <h3>Elevated candidate experience</h3>
                                <p>Divrse empowers companies to deliver empathy throughout the hiring process and assist those who were not a good fit for your team as they seek a new role. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                    <h2 class="titlesect text-primary">DE&I Resources</h2>
                    <a href="">View All Posts</a>
                   
            </div>
            <div class="posthome">
               
                    @forelse ($articles as $article)
                    <div class="feeditem">
                        <div class="feedwrap">
                        <img src="{{$article->getFirstMediaUrl('document')}}">
                        <div class="feedcontent">
                            <span>December 11, 2021</span>
                            <h2>{{$article->title}}</h2>
                            <button class="btn btn-danger">Read More</button>
                        </div>
                        </div>
                    </div>
                    @empty
                
                    @endforelse
                
            </div>
        
        </div>
    </section>
@endsection


