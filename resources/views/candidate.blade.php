@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Candidates')
@section('content')
    <div class="header bg-white pt-9 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="image-box heroimage">
                            <img src="{{ asset('argon') }}/home/mainsolution.png" class="basehero">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h1 class="titlesect text-left">Discover & Hire Unrepresented Talent</h1>
                        <span class="desc1">Divrse connects high quality, underrepresented talent, with world-class companies that care about (value) diversity, equity, and inclusion.</span>
                        <br/>
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Get Started</a>
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
                    <div class="statsol">
                        <div class="itemstatsol">
                            <div class="wrapstatsol">
                                <h4 class="roundnum">1.2<span>x</span></h4>
                                <p class="text-light">Increase in applications from underrepresented candidates in less than 60 days</p>
                            </div>
                        </div>
                        <div class="itemstatsol">
                            <div class="wrapstatsol">
                                <h4 class="roundnum">5<span>hr</span></h4>
                                <p class="text-light">Reduction in time-to-hire when adding highly qualified candidates to your pipeline</p>
                            </div>
                        </div>
                        <div class="itemstatsol">
                            <div class="wrapstatsol">
                                <h4 class="roundnum">13<span>%</span></h4>
                                <p class="text-light">Saved weekly on active online sourcing, per recruiter.</p>
                            </div>
                        </div>
                        <div class="itemstatsol">
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
                    <h2 class="title3">Big <b>Benefits.</b> Great <b>Talent.</b></h2>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 col-md-6">
                    <div class="mb-5">
                        <h3 class="text-warning">Hidden Gems</h3>
                        <p class="text-light">Hidden gems are candidates who made it to the late stages of the interview process but ultimately weren’t hired for the role. Hidden gems have been vetted
                            by hiring managers, both for hard and soft skills.
                            Hidden gems are highly intent and already engaged candidates, which provides talent acquisition teams with a fully vetted and qualified candidate.</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="text-warning">Reduced Sourcing Time</h3>
                        <p class="text-light">Enrich the top of your recruiting funnel with a constant stream of qualified underrepresented candidates.</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="text-warning">Streamlined screening process</h3>
                        <p class="text-light">Eliminate spam resumes and reduce time- to-hire by up to 30%, adding highly qualified candidates to your pipeline</p>
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Explore Talent Stream</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/bigsol.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="text-right">
                        <h2 class="title3">Data, data <b>and more</b> data</h2>
                        <p class="text-light">Understand the diversity of your whole pipeline and discover how individuals self identify. Measure pipeline health and pass-through rates, reduce bias and share DE&I success.</p>
                        <p class="text-light">It’s all about the data, optimize your recruiting strategy, analyze your progress all while eliminating biases in your hiring process with tailor-made reports, actionable insights and recommendations.</p>
                        
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Explore Analytics</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-6 pb-6" style="background-image: url('{{ asset('argon') }}/home/bgsolution.png');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row text-center">
               <h2 class="title4">World-Class diversity recruiting powered by Technology</h2>
            </div>
        </div>
    </section>
    
    
    <section class="bg-blue pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center mt-5">
               
                <div class="col-lg-6 col-md-6">
             
                        <h2 class="titlesect text-warning text-left">Echanced Employer Brand</h2>
                        <p class="text-light">Run impactful engaging virtual events with our end-to-end solution. Connect authentically with potential candidates and keep the
                            conversation going with talent communities. Promote your open roles to drive more inbound applicants.</p>
                        
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Explore Employer Brand</a>
                
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
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
                <div class="col-lg-6 col-md-6">
                    <div class="mb-5">
                        <h3 class="fw800">For Recruiter</h3>
                        <p>Whether it’s building top of the funnel, understanding the diversity of your existing pipeline or
                            managing your existing candidates efficiently, our solution has you covered.</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="fw800">For Talent Leader</h3>
                        <p>Take the guesswork out of your diversity hiring goals. Understand your current hiring gaps and use
                            our suite of solutions to run an end to end diversity recruiting strategy.</p>
                    </div>
                    <div class="mb-5">
                        <h3 class="fw800">For DEI Leader</h3>
                        <p>Understand the diversity of your recruiting team’s current pipeline with self-identified data.
                            Build a strong employer brand as a diverse employer of choice.  </p>
                            <a href="#" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                    </div>
                   
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/solution4.png">
                    </div>
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
                <div class="col-lg-6 col-md-6 text-right">
                    <a href="#" class="btn btn-xl btn-secondary">Get Started</a>
                </div>

            </div>
        </div>
    </section>
    <footer class="py-5 footlanding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h2 class="title2 text-white">Diversity won't wait</h2>
                    <span class="text-light desc1">Turn diversity goals into action today.</span>
                    <br/>
                    <a href="#" class="btn btn-xl btn-secondary mt-5">Learn More</a>
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
                slidesToShow: 1,
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


