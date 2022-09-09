@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Home')

@section('content')
    <div class="header bg-primary pb-0 pt-5">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center switchmob">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="title1">Unlock Diversity, <br/>Equity & Inclusion <br/>in the workplace.</h1>
                        <span class="text-light desc1">
                            Divrse connects high quality, underrepresented talent, with word-class companies that share 
                            their commitment to diversity, equity and inclusion. Together, we can help create a more 
                            inclusive future for all.
                        </span>
                        <br/>
                        <a href="{{ route('get') }}" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="image-box my--6">
                            
                            <lottie-player src="{{ asset('argon') }}/animation/home.json" background="transparent" speed="1" loop autoplay></lottie-player>
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

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center mb-3 border-bottom">
                <div class="col-lg-6 col-md-6 pr-5">
                    <h2 class="text-cyan text-2rem font-weight-800">Empowering underrepresented Professionals</h2>
                    <p>
                        Divrse’s talent pool includes women, visible minorities, immigrants and members of the 2SLQBTQ+ 
                        community. These candidates are vetted, qualified and interviewed by our partner companies before 
                        they are invited to join our talent pool. Each applicant is actively seeking new opportunities 
                        and ready to get to work.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
            </div>
            <div class="row align-items-center pb-2 mb-3 border-bottom">
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/recruiting.png" style="width: 47%;margin-top: -12px;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h2 class="text-pink text-2rem font-weight-800">Diversity recruiting.<br/>Powered by Technology.</h2>
                    <p>
                        Divrse’s proven solution to increase workforce diversity and the number of applicants from 
                        underrepresented backgrounds is a tried-and-true approach. Our diversity centered solution 
                        focuses entirely on bringing qualified underrepresented candidates directly into your hiring 
                        funnel, ensuring success.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 pr-5">
                    <h2 class="text-blue text-2rem font-weight-800">Diversity won't wait</h2>
                    <p>From startups to Fortune 500 companies, employers of all sizes use Divrse to find skilled and underrepresented talent for a wide
                        variety of employment opportunities including remote, part-time and full-time, permanent and contract roles. </p> <br/>
                        <a href="{{ route('get') }}" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        
                        <lottie-player class="mx-auto" style="width: 80%;margin-top: 13px;" src="{{ asset('argon') }}/animation/jm.json" background="transparent" speed="1" loop autoplay></lottie-player>
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
                        <li class="itempress"><img src="{{ asset('argon') }}/home/client1.png"></li>
                        <li class="itempress"><img src="{{ asset('argon') }}/home/client2.png"></li>
                        <li class="itempress"><img src="{{ asset('argon') }}/home/client3.png"></li>
                        <li class="itempress"><img src="{{ asset('argon') }}/home/client4.png"></li>
                        <li class="itempress"><img src="{{ asset('argon') }}/home/client5.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h1 class="text-center text-light mb-0 ">Divrse in numbers</h1>
                </div>

                <div class="slider-container" style="width: 100%; text-align:center;">
                    <h2 id="positions" class="title4 text-light mb-5">3,320 open positions</h2>
                    <input type="range" class="slider" min="1" max="25" value="17">
                </div>

                <div class="proofnum2 text-light mx-auto">
                    <div class="itemproof-light">
                        <div class="wrapproof">
                            <h2 class="text-light" id="reduction">475H</h2>
                            <h4 class="text-light">Reduction in TTF</h4>
                        </div>
                    </div>
                    
                    <div class="itemproof-light">
                        <div class="wrapproof">
                            <h2 class="text-light" id="increase">50%</h2>
                            <h4 class="text-light">Increase in Diverse Applications</h4>
                        </div>
                    </div>
                    
                    <div class="itemproof-light">
                        <div class="wrapproof">
                            <h2 class="text-light" id="saved">$18K</h2>
                            <h4 class="text-light">Money Saved / mo</h4>
                        </div>
                    </div>
                    
                    <div class="itemproof-light">
                        <div class="wrapproof">
                            <h2 class="text-light" id="candidates">2X</h2>
                            <h4 class="text-light">Increase Candidate NPS</h4>
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
    </section>

    <section class="bg-primary pt-6 pb-6">
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
                        <img src="{{ asset('argon') }}/home/winwin.png">
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
                    <div class="proofnum">
                        <div class="itemproof">
                            <div class="wrapproof">
                                <h2><span class="counting" data-countto="62" data-duration="4000">0</span>%</h2>
                                <h4>Billingual</h4>
                                <p>Immigrants that speak more than one language, can provide your company with access to new clients and markets.</p>
                            </div>
                        </div>
                        
                        <div class="itemproof">
                            <div class="wrapproof">
                                <h2><span class="counting" data-countto="19" data-duration="4000">0</span>%</h2>
                                <h4>Higher Revenue</h4>
                                <p>Companies with diverse management teams have 19% higher revenues.</p>
                            </div>
                        </div>
                        
                        <div class="itemproof">
                            <div class="wrapproof">
                                <h2><span class="counting" data-countto="38" data-duration="4000">0</span>%</h2>
                                <h4>Immigrants</h4>
                                <p>Immigrants have a Canadian-equivalent bachelor’s degree which means knowledgeable employees delivering efficient results.</p>
                            </div>
                        </div>
                        
                        <div class="itemproof">
                            <div class="wrapproof">
                                <h2><span class="counting" data-countto="76" data-duration="4000">0</span>%</h2>
                                <h4>Jobseekers</h4>
                                <p>When it comes to choosing a company, 76% of job seekers believe diversity is important.</p>
                            </div>
                        </div>
                        
                        <div class="itemproof">
                            <div class="wrapproof">
                                <h2><span class="counting" data-countto="85" data-duration="4000">0</span>%</h2>
                                <h4>CEOs</h4>
                                <p>A diverse workforce, according to 85% of CEOs, improved their bottom lines.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <svg class="waves mt-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
                                <img src="{{ asset('argon') }}/home/qualified_engaged.png">
                                <h3>Qualified and engaged</h3>
                                <p>Every candidate in Divrse’s talent pool is vetted and interviewed by our partner companies before they are invited to join our talent pool. Each applicant is actively seeking new opportunities and ready to get to work.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/streamline.png">
                                <h3>Streamline the screening process</h3>
                                <p>Companies using Divrse boast a 16% reduction in time-to-hire by adding highly qualified candidates into their talent pipeline.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/transparent.png">
                                <h3>Transparent, AI-based technology</h3>
                                <p>Divrse’s unified solution syncs with your preferred ATS and plays an integral part of your daily workflow so you can sit back and watch the applications flow in.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/elevated.png">
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
            <div class="row align-items-center justify-content-between colmob">
                    <h2 class="titlesect text-primary">DE&I Resources</h2>
                    <a href="{{route('blog')}}">View All Posts</a>
                   
            </div>
            <div class="posthome">
               
                    @forelse ($articles as $article)
                    <div class="feeditem">
                        <div class="feedwrap">
                        <img src="{{$article->getFirstMediaUrl('document')}}">
                        <div class="feedcontent">
                            <span>December 11, 2021</span>
                            <h2>{{$article->title}}</h2>
                            <a href="{{route('article.show',$article)}}" class="btn btn-danger">Read More</a>
                        </div>
                        </div>
                    </div>
                    @empty
                
                    @endforelse
                    
            </div>
        </div>
    </section>

    @include('layouts.footers.footerbig', [
        'title' => 'Ready to stop talking about diversity recruitment and start doing it?',
        'desc' => 'Turn your DE&I goals into reality with Divrse’s quick, easy and affordable solution',
        'link' => route('get'),
        'cta' => 'Get Started'
    ])

@endsection

@section('script')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        const sliderValue = {
            'position': [
                '20','70','170','220','370',
                '420','520','620','720','870',
                '920','1,170','1,520','2,020','2,850',
                '3,320','4,210','4,820','5,420','5,920',
                '6,470','7,970','8,420','9,170','10,000'
            ],
            'reduction': [
                '8H','10H','25H','32H','53H',
                '60H','75H','89H','103H','125H',
                '132H','168H','218H','289H','403H',
                '475H','589H','659H','775H','846H',
                '925H','1,139H','1,203H','1,310H','1,429H'
            ],
            'increase': [
                '80%','80%','80%','70%','70%',
                '70%','70%','70%','70%','70%',
                '70%','60%','60%','55%','50%',
                '50%','45%','45%','45%','40%',
                '40%','30%','30%','20%','15%'
            ],
            'saved': [
                '$1K','$1K','$1K','$2K','$2K',
                '$3K','$3K','$4K','$4K','$5K',
                '$5K','$7K','$9K','$11K','$16K',
                '$18K','$23K','$26K','$30K','$32K',
                '$35K','$43K','$46K','$50K','$54K'
            ]
        }

        $('.slider').on('input', function () {
            $('#positions').text(sliderValue.position[$('.slider').val() - 1] + ' open positions');
            $('#reduction').text(sliderValue.reduction[$('.slider').val() - 1]);
            $('#increase').text(sliderValue.increase[$('.slider').val() - 1]);
            $('#saved').text(sliderValue.saved[$('.slider').val() - 1]);
            $('#candidates').text( $('.slider').val() > 15 ? '2X' : '1.5X');
        });

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
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
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

        $('.presslogo').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 500,
            slidesToShow: 4,         
            autoplay: true,
            autoplaySpeed: 1000,
            slidesToScroll: 1,
            responsive: [
                {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
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
                slidesToShow: 2,
                slidesToScroll: 1
            }
            }
        ]
        });

        $('.proofnum').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 500,
            slidesToShow: 4,         
            autoplay: true,
            autoplaySpeed: 1000,
            slidesToScroll: 1,
            responsive: [
                {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".counting").each(function () {
var $this = $(this),
countTo = $this.attr("data-countto");
countDuration = parseInt($this.attr("data-duration"));
$({ counter: $this.text() }).animate(
{
counter: countTo
},
{
duration: countDuration,
easing: "linear",
step: function () {
$this.text(Math.floor(this.counter));
},
complete: function () {
$this.text(this.counter);
}
}
);
});

});
</script>
@endsection


