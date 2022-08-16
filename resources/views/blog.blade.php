@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Blog')

@section('content')
    <div class="header bg-primary pb-2 pt-8 ">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="titlesect text-white text-center">Our Latest Blog</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <section class="bg-white-2">
        <div class="container">
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

            <div class="d-flex justify-content-center">
                {{$articles->links()}}
                </div>
        
        </div>
    </section>

    @include('layouts.footers.footerwide', [
        'title' => 'Ready to stop talking about diversity recruitment and start doing it?',
        'desc' => 'Turn your DE&I goals into reality with Divrse’s quick, easy and affordable solution',
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
                '920','1.170','1.520','2.020','2.850',
                '3.320','4.210','4.820','5.420','5.920',
                '6.470','7.970','8.420','9.170','10.000'
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


