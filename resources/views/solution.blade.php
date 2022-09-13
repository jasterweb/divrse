@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Solutions')
@section('content')
    <div class="header bg-white pt-5 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="image-box heroimage">
                            <lottie-player src="{{ asset('argon') }}/animation/kelima.json" background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-md-0 mt-3">
                        <h1 class="titlesect text-left">Discover & Hire Unrepresented Talent</h1>
                        <span class="desc1">Divrse connects high quality, underrepresented talent, with world-class companies that care about (value) diversity, equity, and inclusion.</span>
                        <br/>
                        <div class="center-small">
                            <a href="{{route('get')}}" class="btn btn-xl btn-secondary mt-4 ">Get Started</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <section class="bg-primary pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-danger mb-5">Sourcing made easy</h2>
                    <p class="text-light text-center w800">Divrse is an automated recruiting layer that allows you to spend less time sourcing random potential candidates and more time building meaningful interactions.
                        Every candidate in Divrse’s pool is qualified, underrepresented, pre-qualified and ready for the job.
                        Divrse increases the number of underrepresented candidates that apply to your jobs while also providing you with applicants best fit for the role.</p>
                    <div class="statsol row">
                        <div class="itemstatsol col-lg col-6">
                            <div class="wrapstatsol">
                                <h4 class="roundnum">1.2<span>x</span></h4>
                                <p class="text-light">Increase in applications from underrepresented candidates in less than 60 days</p>
                            </div>
                        </div>
                        <div class="itemstatsol col-lg col-6">
                            <div class="wrapstatsol">
                                <h4 class="roundnum">5<span>hr</span></h4>
                                <p class="text-light">Reduction in time-to-hire when adding highly qualified candidates to your pipeline</p>
                            </div>
                        </div>
                        <div class="itemstatsol col-lg col-6">
                            <div class="wrapstatsol">
                                <h4 class="roundnum">13<span>%</span></h4>
                                <p class="text-light">Saved weekly on active online sourcing, per recruiter.</p>
                            </div>
                        </div>
                        <div class="itemstatsol col-lg col-6">
                            <div class="wrapstatsol">
                                <h4 class="roundnum">80<span>%</span></h4>
                                <p class="text-light">Of candidates who apply through Divrse make it to the third round of interviews.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
  
    <section class="bg-cyan pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect">Supercharge your ATS</h2>
                    <ul class="atslogo">
                        <li class="itemats"><img src="{{ asset('argon') }}/home/ats1.png"></li>
                        <li class="itemats"><img src="{{ asset('argon') }}/home/ats2.png"></li>
                        <li class="itemats"><img src="{{ asset('argon') }}/home/ats3.png"></li>
                        <li class="itemats"><img src="{{ asset('argon') }}/home/ats5.png"></li>
                        <li class="itemats"><img src="{{ asset('argon') }}/home/ats6.png"></li>
                        <li class="itemats"><img src="{{ asset('argon') }}/home/ats4.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="title3" style="text-align: center;line-height:55px;">Big <b>Benefits.</b> <br />Great <b>Talent.</b></h2>
                </div>
            </div>
            <div class="row align-items-start mt-5">
                <div class="col-lg-4 col-md-4">
                    <div class="mx-auto d-flex justify-content-center" style="width:250px;height:230px;">
                        <img src="{{ asset('argon') }}/home/solution/reduced sourcing time.png">
                    </div>
                    <div class="mt-5 mb-5">
                        <h3 class="text-warning text-center">Reduced Sourcing Time</h3>
                        <p class="text-light text-center">Enrich the top of your recruiting funnel with a constant stream of qualified underrepresented candidates.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mx-auto d-flex justify-content-center" style="width:250px;height:230px;">
                        <img src="{{ asset('argon') }}/home/solution/hidden gems.png">
                    </div>
                    <div class="mt-5 mb-5">
                        <h3 class="text-warning text-center">Hidden Gems</h3>
                        <p class="text-light text-center">Hidden gems are candidates who made it to the late stages of the interview process but ultimately weren’t hired for the role. Hidden gems have been vetted
                            by hiring managers, both for hard and soft skills.
                            Hidden gems are highly intent and already engaged candidates, which provides talent acquisition teams with a fully vetted and qualified candidate.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mx-auto d-flex justify-content-center" style="width:250px;height:230px;">
                        <img src="{{ asset('argon') }}/home/solution/stremalined screening.png">
                    </div>
                    <div class="mt-5 mb-5">
                    <h3 class="text-warning text-center">Streamlined screening process</h3>
                    <p class="text-light text-center">Eliminate spam resumes and reduce time- to-hire by up to 30%, adding highly qualified candidates to your pipeline</p>
                    
                    </div>
                </div>
            </div>

            <div class="center-small text-align-center">
                <center>
                    <a href="{{ route('talent') }}" class="btn btn-xl btn-secondary mt-4">Explore Talent Stream</a>
                </center>
            </div>
        </div>
    </section>

    <section class="bg-blue pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/solution/solution_data.png">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="text-md-right">
                        <h2 class="title3">Data, data <b>and more</b> data</h2>
                        <p class="text-light">Understand the diversity of your whole pipeline and discover how individuals self identify. Measure pipeline health and pass-through rates, reduce bias and share DE&I success.</p>
                        <p class="text-light">It’s all about the data, optimize your recruiting strategy, analyze your progress all while eliminating biases in your hiring process with tailor-made reports, actionable insights and recommendations.</p>
                        <div class="center-small">
                            <a href="{{ route('analytic') }}" class="btn btn-xl btn-secondary mt-4">Explore Analytics</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-6 pb-6 bg-decor" style="background-image: url('{{ asset('argon') }}/home/bgsolution.png');">
        <div class="container">
            <div class="row text-center">
               <h2 class="title4 mx-md-auto mx-3">World-Class diversity recruiting powered by Technology</h2>
            </div>
        </div>
    </section>
    
    
    <section class="bg-blue pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center mt-md-5">
               
                <div class="col-lg-6 col-md-6">
             
                        <h2 class="titlesect text-warning text-left">Enhanced Employer Brand</h2>
                        <p class="text-light">Run impactful engaging virtual events with our end-to-end solution. Connect authentically with potential candidates and keep the
                            conversation going with talent communities. Promote your open roles to drive more inbound applicants.</p>
                        <div class="center-small">                       
                            <a href="{{ route('employer') }}" class="btn btn-xl btn-secondary mt-4">Explore Employer Brand</a>
                        </div>
                
                </div>
                <div class="col-lg-6 col-md-6 mt-md-0 mt-5">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/solution/solution_enhanced.png">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-left">A Modern recruiting platform</h2>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-4 col-md-4">
                    <div class="mx-auto d-flex justify-content-center" style="width:250px;height:230px;">
                        <img src="{{ asset('argon') }}/home/solution/for recruiter.png">
                    </div>
                    
                    <div class="mb-5 mt-5 ">
                        <h3 class="fw800">For Recruiter</h3>
                        <p>Whether it’s building top of the funnel, understanding the diversity of your existing pipeline or
                            managing your existing candidates efficiently, our solution has you covered.</p>
                    </div>
                   
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mx-auto d-flex justify-content-center" style="width:250px;height:230px;">
                        <img src="{{ asset('argon') }}/home/solution/for talent leader.png">
                    </div>
                    <div class="mt-5  mb-5">
                        <h3 class="fw800">For Talent Leader</h3>
                        <p>Take the guesswork out of your diversity hiring goals. Understand your current hiring gaps and use
                            our suite of solutions to run an end to end diversity recruiting strategy.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="mx-auto d-flex justify-content-center" style="width:250px;height:230px;">
                        <img src="{{ asset('argon') }}/home/solution/for DEI leader.png">
                    </div>
                    <div class="mt-5 mb-5">
                        <h3 class="fw800">For DEI Leader</h3>
                        <p>Understand the diversity of your recruiting team’s current pipeline with self-identified data.
                            Build a strong employer brand as a diverse employer of choice.  </p>
                       
                    </div>
                </div>

               
            <div class="center-small text-align-center">
                <center>
                    <a href="{{ route('talent') }}" class="btn btn-xl btn-secondary mt-4">Explore Talent Stream</a>
                </center>
            </div>
            </div>
        </div>
    </section>
    
    <section class="bg-cyan pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-left">Going DE&I all the way</h2>
                    <p>From a candidate's inbox to a company's ATS, Divrse seamlessly integrates with existing tools to provide an easy-to-adopt experience.</p>
                </div>
                
                <div class="col-lg-6 col-md-6 text-md-right text-center mt-md-0 mt-4">
                    <a href="{{route('get')}}" class="btn btn-xl btn-secondary">Get Started</a>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.footers.ctafoot', [
        'title' => 'Diversity won\'t wait',
        'desc' => 'Turn diversity goals into action today.',
        'link' => route('get'),
        'cta' => 'Learn More'
    ])
    @include('layouts.footers.footer')
@endsection

@section('script')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.atslogo').slick({
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


