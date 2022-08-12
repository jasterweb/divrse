@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Candidates')
@section('content')
    <div class="header bg-primary pt-9 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="image-box heroimage">
                            <img src="{{ asset('argon') }}/home/mainsolution.png" class="basehero">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h1 class="titlesect text-white text-left">Where jobs find you</h1>
                        <span class="text-light">Divrse is on a mission: getting great talent, like yourself, matched with awesome opportunities at
                            companies who want to take responsibility and diversify their workforce at all levels.</span>
                        <br/>
                        <a href="#" class="btn btn-secondary mt-4">Find A Job</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



    
    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-6 col-md-6">
             
                        <h2 class="titlesect text-left">An empowering community<br/>of support, vulnerability,<br/>openness, and mutual trust.</h2>
                        <p class="text-dark">We support diverse and underrepresented talent as they navigate their journey through the
                            labor market. Search for career opportunities and get access to job search tools, career
                            development resources and a thriving community of diverse talent.</p>
                    
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
               
                <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-danger text-left">Today's top<br/>companies are hiring.</h2>
                    <p class="text-light">We partner with top Canadian companies from early-stage<br/>startups to Fortune 500 companies
                        to bring the best jobs<br/>in tech and finance to you.</p>
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


