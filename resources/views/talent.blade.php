@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Talent Stream')
@section('content')
    <div class="header bg-primary pt-9 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="titlesect text-left text-white">Hire Diverse, Top Talent</h1>
                        <span class="desc2">Ensure Your Diversity, Equity, & Inclusion Goals are met</span>
                        <span class="desc1 text-light">With Divrse’s AI-powered recruiting automation platform, you’ll set your team
                            up for success by hiring diverse, qualified talent year round.</span>
                        <br/>
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="image-box heroimage">
                            <img src="{{ asset('argon') }}/home/herotalent.png" class="basehero">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

  
    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-6 col-md-6">
             
                        <h2 class="title3 text-left">We do the <b>Sourcing</b> for you</h2>
                        <p class="text-dark">Divrse is an automated diversity recruiting layer that allows you to spend less time sourcing random potential candidates and more time building meaningful interactions. Every candidate in Divrse’s pool is qualified, diverse, and ready for the job.
                            Divrse increases the number of underrepresented candidates that apply to your jobs while also providing you with applicants best fit for the role.</p>
                        
            
                
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>

            </div>
        </div>
    </section>
  

  
    
    <section class="bg-primary pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-5 col-md-5">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
             
                        <h2 class="title3 text-left">Build <b>Authentic</b> connections with <b>qualified</b> Talent</h2>
                        <p class="text-light">Increase your outbound recruiting response rates by connecting with our highly engaged talent pool. Manage conversations
                            at scale by leveraging our suite of recruiting tools such as messaging, events, and communities to build authentic connections.</p>
                        
                
                </div>

            </div>
        </div>
    </section>
    

    <section class="bg-cyan pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2 class="titlesect">The Divrse Journey</h2>
                    <div class="stepby">
                        <div class="itemstep">
                            <div class="wrapstep">
                                <img src="{{ asset('argon') }}/home/journey.png">
                                <span>Connect Divrse</span>
                            </div>
                        </div>
                        <div class="itemstep">
                            <div class="wrapstep">
                                <img src="{{ asset('argon') }}/home/journey.png">
                                <span>Share Positions</span>
                            </div>
                        </div>
                        <div class="itemstep">
                            <div class="wrapstep">
                                <img src="{{ asset('argon') }}/home/journey.png">
                                <span>Expose Opportunity</span>
                            </div>
                        </div>
                        <div class="itemstep">
                            <div class="wrapstep">
                                <img src="{{ asset('argon') }}/home/journey.png">
                                <span>Get Talent</span>
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
             
                    <h2 class="titlesect text-danger text-left">Build an equitable top-of-funnel pipeline</h2>
                    <p class="text-light">Instantly discover a new pool of qualified applicants by easily filtering through data points
                        including demographic, experiential, and cognitive diversity.</p>
                    
            
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
                    <h2 class="titlesect">Seamless ATS Integration</h2>
                    <p class="text-dark m800">Divrse easily connects to your ATS provider. Gain new insights about talent already in your pipeline and increase productivity.</p>
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

    <section class="bg-blue pt-6 pb-6" style="background-image: url('{{ asset('argon') }}/home/bgtalent.png');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="o-center">
                    <h2 class="titlesect text-white">Automated, People-driven diversity sourcing</h2>
                    <p class="text-light m800">Divrse combines machine learning with human insights to make sure the pooled candidates reflect real diversity of demographic, backgrounds, and skills.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
             
                    <h2 class="title5 text-cyan mb-3">Join forward-thinking companies and demostrate your commitment to sourcing diverse candidates</h2>
                    <p class="text-dark">Get Intentional with your diversity hiring and sourcing efforts. Startup to Fortune 500 companies are using diversity hiring practices to source
                        historically marginalized talent, rethink job qualifications and enhance employer branding.
                    </p>
                    
                    <a href="#" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                </div>
            </div>
        </div>
    </section>


    <footer class="py-5 footlanding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h2 class="title2 text-white">Ready to stop talking about diversity recruitment and start doing it?</h2>
                    <span class="text-light desc1">Contact us to design a custom diversity hiring solution for your business.</span>
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

